<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\SubscriptionPurchased; // Presumo que você tenha estas classes de Mail
use App\Mail\SubscriptionCanceled;
use App\Mail\SubscriptionCanceledNow;
use App\Mail\SubscriptionResumed;
use App\Mail\SubscriptionUpdated;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http; // Importar a fachada Http


class SubscriptionController extends Controller
{
    public function index()
    {
        return view('subscription.serviços');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        return $request->user()->newSubscription(request('plan'), request('price_id'))
            ->trialDays(31)
            ->checkout([
                'success_url' => route('subscription.success') . '?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => route('subscription.cancelled'),
                'metadata' => [
                 'price_id' => request('price_id'),
                 'user_id' => auth()->id(),
                 'type' => 'subscription', // Adicionar um tipo para diferenciar
                ],
                // Adicione esta linha para especificar os tipos de métodos de pagamento
                'payment_method_types' => ['card', 'boleto']
            ]);
    }

    public function success(Request $request)
    {
        $user = $request->user();
        $subscription = $user->subscriptions()->latest()->first();
        $stripe = new \Stripe\StripeClient(config('services.stripe.secret'));

        try {
            // Obter detalhes completos da assinatura no Stripe
            $stripeSubscription = $stripe->subscriptions->retrieve($subscription->stripe_id);

            // CONSERTO AQUI: Converter timestamp Unix para ISO 8601 UTC
            $nextBillingDate = Carbon::createFromTimestamp($stripeSubscription->current_period_end)->toISOString();

            // Obter detalhes do preço e produto
            $price = $stripe->prices->retrieve($stripeSubscription->plan->id);
            $product = $stripe->products->retrieve($price->product);

            // Recuperar informações do método de pagamento
            $paymentMethodDetails = [];
            if ($stripeSubscription->default_payment_method) {
                $paymentMethod = $stripe->paymentMethods->retrieve($stripeSubscription->default_payment_method);

                $paymentMethodDetails = [
                    'type' => $paymentMethod->type,
                    'brand' => $paymentMethod->card->brand ?? null,
                    'last4' => $paymentMethod->card->last4 ?? null,
                    'exp_month' => $paymentMethod->card->exp_month ?? null,
                    'exp_year' => $paymentMethod->card->exp_year ?? null
                ];
            }

            return view('status.success', [
                'subscription' => $subscription,
                'stripeSubscription' => $stripeSubscription,
                'price' => $price,
                'product' => $product,
                'nextBillingDate' => $nextBillingDate,
                'paymentMethod' => $paymentMethodDetails,
                'user' => $user
            ]);

        } catch (\Exception $e) {
            \Log::error('Erro ao buscar detalhes do Stripe: ' . $e->getMessage());

            return view('status.success', [
                'subscription' => $subscription,
                'user' => $user,
                'error' => 'Não foi possível carregar todos os detalhes da assinatura. Por favor, entre em contato com o suporte se precisar de mais informações.'
            ]);
        }
    }

    public function cancelled()
    {
        // Lógica para quando a assinatura é cancelada
        // Você pode redirecionar para uma página de erro ou exibir uma mensagem específica.
        return view('status.cancelled')->with('message', 'Sua tentativa de assinatura foi cancelada.');
    }

    public function cancel(Request $request)
    {
        $user = $request->user();
        // Assume 'main_subscription' se nenhum ID for fornecido.
        // Se você tiver múltiplos tipos de assinatura e o ID estiver ausente,
        // pode precisar de uma lógica para determinar qual assinar.
        $subscription = $user->subscriptions()->find($request->input('subscription_id', $user->subscription('main_subscription')->id));

        if ($subscription) {
            $subscription->cancel();

            // Disparar e-mail de cancelamento (no final do período)
            Mail::to($user->email)->queue(new SubscriptionCanceled($user, $subscription));

            return redirect()->route('dashboard')
                ->with('status', 'Assinatura cancelada! Ela permanecerá ativa até o final do período.');
        }

        return redirect()->route('dashboard')->with('error', 'Assinatura não encontrada ou não ativa para cancelamento.');
    }

    public function cancelNow(Request $request)
    {
        $user = $request->user();
        $subscription = $user->subscriptions()->find($request->input('subscription_id', $user->subscription('main_subscription')->id));

        if ($subscription) {
            $subscription->cancelNow();

            // Disparar e-mail de cancelamento imediato
            Mail::to($user->email)->queue(new SubscriptionCanceledNow($user, $subscription, true)); // Pode passar um flag para diferenciar o e-mail

            return redirect()->route('dashboard')
                ->with('status', 'Assinatura cancelada imediatamente!');
        }

        return redirect()->route('dashboard')->with('error', 'Assinatura não encontrada ou não ativa para cancelamento imediato.');
    }

    public function resume(Request $request)
    {
        $user = $request->user();
        $subscription = $user->subscriptions()->find($request->input('subscription_id', $user->subscription('main_subscription')->id));

        if ($subscription && $subscription->onGracePeriod()) {
            $subscription->resume();

            // Disparar e-mail de reativação
            Mail::to($user->email)->queue(new SubscriptionResumed($user, $subscription));

            return redirect()->route('dashboard')->with('status', 'Assinatura reativada com sucesso!');
        }

        return redirect()->route('dashboard')->with('error', 'Não foi possível reativar a assinatura. Ela pode não estar em período de carência.');
    }

    public function updateSubscription(Request $request)
    {
        $user = $request->user();
        $newPriceId = $request->input('new_price_id');

        if ($user->subscribed('main_subscription')) {
            $subscription = $user->subscription('main_subscription');
            $oldPriceId = $subscription->stripe_price; // Guarda o preço antigo para o e-mail

            $subscription->swap($newPriceId);

            // Disparar e-mail de atualização de plano
            Mail::to($user->email)->queue(new SubscriptionUpdated($user, $subscription, $oldPriceId));

            return redirect()->route('dashboard')->with('status', 'Seu plano foi atualizado com sucesso!');
        }

        return redirect()->back()->with('error', 'Você não tem uma assinatura ativa para atualizar.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}


