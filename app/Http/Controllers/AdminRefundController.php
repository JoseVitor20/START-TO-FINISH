<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Refund;
use App\Models\Order;
use Laravel\Cashier\Cashier;
use App\Notifications\RefundStatusNotification;
use Stripe\StripeClient;
use Stripe\Exception\ApiErrorException;

class AdminRefundController extends Controller
{
    public function index()
    {
        $refunds = Refund::with(['order', 'user'])
            ->orderBy('created_at', 'desc')
            ->get();
            
        return view('refunds.index', compact('refunds'));
    }


    public function update(Request $request, Refund $refund)
    {
        $request->validate([
            'status' => 'required|in:approved,rejected,processed',
        ]);

        // Se não for para processar, apenas atualiza o status
        if ($request->status !== 'processed') {
            $refund->update(['status' => $request->status]);
            return redirect()->back()->with('success', 'Status atualizado');
        }

        try {
            $order = $refund->order;
            
            // Verifica se já foi processado
            if ($refund->status === 'processed') {
                return redirect()->back()->with('warning', 'Este reembolso já foi processado');
            }

            // Inicializa o Stripe
            $stripe = new \Stripe\StripeClient(config('services.stripe.secret'));

            // Obtém o payment_intent de três formas diferentes
            $paymentIntentId = $this->getPaymentIntentId($order, $stripe);
            
            if (!$paymentIntentId) {
                throw new \Exception('Não foi possível identificar o pagamento original no Stripe');
            }

            // DEBUG: Log antes da chamada ao Stripe
            \Log::info('Tentando criar reembolso no Stripe', [
                'payment_intent' => $paymentIntentId,
                'amount' => $order->amount,
                'order_id' => $order->id
            ]);

            // Cria o reembolso no Stripe
            $stripeRefund = $stripe->refunds->create([
                'payment_intent' => $paymentIntentId,
                'amount' => (int)($order->amount * 100), // Valor em centavos
                'metadata' => [
                    'order_id' => $order->id,
                    'refund_id' => $refund->id,
                    'admin_id' => auth()->id()
                ]
            ]);

            // DEBUG: Log da resposta do Stripe
            \Log::info('Resposta do Stripe', (array)$stripeRefund);

            // Atualiza os registros locais
            $refund->update([
                'status' => 'processed',
                'stripe_refund_id' => $stripeRefund->id,
                'processed_at' => now()
            ]);
            
            $order->update(['refunded' => true, 'status' => 'refunded']);

            // Notifica o usuário
            $refund->user->notify(new RefundStatusNotification($refund));

            return redirect()->back()
                ->with('success', 'Reembolso processado com sucesso no Stripe. ID: ' . $stripeRefund->id);

        } catch (\Stripe\Exception\ApiErrorException $e) {
            \Log::error('Erro na API do Stripe', ['error' => $e->getMessage()]);
            return redirect()->back()
                ->with('error', 'Falha no Stripe: ' . $e->getMessage());
                
        } catch (\Exception $e) {
            \Log::error('Erro ao processar reembolso', ['error' => $e->getMessage()]);
            return redirect()->back()
                ->with('error', 'Erro ao processar: ' . $e->getMessage());
        }
    }

    protected function getPaymentIntentId($order, $stripe)
    {
        // 1. Tenta usar o payment_intent_id salvo no pedido
        if (!empty($order->stripe_payment_intent_id)) {
            return $order->stripe_payment_intent_id;
        }

        // 2. Tenta recuperar da sessão de checkout
        if (!empty($order->stripe_session_id)) {
            try {
                $session = $stripe->checkout->sessions->retrieve($order->stripe_session_id);
                if (!empty($session->payment_intent)) {
                    $order->update(['stripe_payment_intent_id' => $session->payment_intent]);
                    return $session->payment_intent;
                }
            } catch (\Exception $e) {
                \Log::warning('Falha ao recuperar sessão', ['error' => $e->getMessage()]);
            }
        }

        // 3. Tenta buscar nas charges do cliente
        if (!empty($order->user->stripe_id)) {
            try {
                $charges = $stripe->charges->all([
                    'customer' => $order->user->stripe_id,
                    'limit' => 1
                ]);
                
                if (!empty($charges->data[0]->payment_intent)) {
                    $order->update(['stripe_payment_intent_id' => $charges->data[0]->payment_intent]);
                    return $charges->data[0]->payment_intent;
                }
            } catch (\Exception $e) {
                \Log::warning('Falha ao recuperar charges', ['error' => $e->getMessage()]);
            }
        }

        return null;
    }

    protected function processStripeRefund(Refund $refund)
    {
        $order = $refund->order;
        
        if (!$order) {
            return redirect()->back()->with('error', 'Pedido associado não encontrado.');
        }

        // Verifica se já foi processado
        if ($refund->status === 'processed') {
            return redirect()->back()->with('warning', 'Este reembolso já foi processado anteriormente.');
        }

        try {
            $stripe = new StripeClient(env('STRIPE_SECRET'));

            // Tenta obter o payment_intent_id de três formas diferentes
            $paymentIntentId = $this->resolvePaymentIntentId($order, $stripe);
            
            if (!$paymentIntentId) {
                throw new \Exception('Não foi possível identificar o pagamento original no Stripe.');
            }

            // Cria o reembolso no Stripe
            $refundResponse = $stripe->refunds->create([
                'payment_intent' => $paymentIntentId,
                'amount' => (int)($order->amount * 100), // Valor em centavos
                'metadata' => [
                    'order_id' => $order->id,
                    'refund_id' => $refund->id,
                    'admin_id' => auth()->id()
                ]
            ]);

            // Atualiza os registros locais
            $refund->update([
                'status' => 'processed',
                'stripe_refund_id' => $refundResponse->id,
                'processed_at' => now()
            ]);

            $order->update(['refunded' => true, 'status' => 'refunded']);

            // Notifica o usuário
            $refund->user->notify(new RefundStatusNotification($refund));

            return redirect()->back()->with('success', 'Reembolso processado com sucesso no Stripe.');

        } catch (ApiErrorException $e) {
            \Log::error('Stripe API Error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Erro no Stripe: ' . $e->getMessage());
        } catch (\Exception $e) {
            \Log::error('Refund Processing Error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Erro ao processar reembolso: ' . $e->getMessage());
        }
    }

    protected function resolvePaymentIntentId(Order $order, StripeClient $stripe)
    {
        // 1. Tenta usar o payment_intent_id salvo no pedido
        if (!empty($order->stripe_payment_intent_id)) {
            return $order->stripe_payment_intent_id;
        }

        // 2. Tenta recuperar da sessão de checkout
        if (!empty($order->stripe_session_id)) {
            try {
                $session = $stripe->checkout->sessions->retrieve($order->stripe_session_id);
                if (!empty($session->payment_intent)) {
                    // Atualiza o pedido com o payment_intent encontrado
                    $order->update(['stripe_payment_intent_id' => $session->payment_intent]);
                    return $session->payment_intent;
                }
            } catch (\Exception $e) {
                \Log::warning('Failed to retrieve session: ' . $e->getMessage());
            }
        }

        // 3. Tenta buscar nas charges do cliente (último recurso)
        if (!empty($order->user->stripe_id)) {
            try {
                $charges = $stripe->charges->all([
                    'customer' => $order->user->stripe_id,
                    'limit' => 1
                ]);
                
                if (!empty($charges->data[0]->payment_intent)) {
                    $order->update(['stripe_payment_intent_id' => $charges->data[0]->payment_intent]);
                    return $charges->data[0]->payment_intent;
                }
            } catch (\Exception $e) {
                \Log::warning('Failed to retrieve customer charges: ' . $e->getMessage());
            }
        }

        return null;
    }
}