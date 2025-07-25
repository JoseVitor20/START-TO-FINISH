<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\StripeClient;
use Carbon\Carbon;
use App\Models\User;

class PrivateController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $stripe = new StripeClient(config('services.stripe.secret'));

        $activeSubscriptions = $user->subscriptions()->active()->with('items')->get();
        $canceledSubscriptions = $user->subscriptions()->canceled()->with('items')->get();

        $attachStripeDetails = function ($subscriptions) use ($stripe) {
            foreach ($subscriptions as $subscription) {
                try {
                    // Busca informações da assinatura Stripe para next_billing_date e outras infos
                    $stripeSubscription = $stripe->subscriptions->retrieve(
                        $subscription->stripe_id,
                        ['expand' => ['latest_invoice.payment_intent']] // Expande para pegar detalhes do último pagamento
                    );
                    $subscription->next_billing_date = Carbon::createFromTimestamp($stripeSubscription->current_period_end);

                    // Adicionar informações do último pagamento, se disponíveis
                    $paymentIntent = $stripeSubscription->latest_invoice->payment_intent ?? null;
                    if ($paymentIntent) {
                        $subscription->last_payment_date = Carbon::createFromTimestamp($paymentIntent->created);
                        // Você pode tentar obter mais detalhes do método de pagamento, se precisar
                        $subscription->payment_method = $paymentIntent->payment_method_types[0] ?? 'N/A'; // Ex: "card"
                        // Se precisar do tipo de cartão, etc., precisaria de mais expansões ou outra chamada API
                    }

                } catch (\Exception $e) {
                    $subscription->next_billing_date = null;
                    $subscription->last_payment_date = null;
                    $subscription->payment_method = 'N/A';
                    // Logar o erro aqui para depuração: \Log::error("Erro Stripe Sub: " . $e->getMessage());
                }

                $firstItem = $subscription->items->first();

                if ($firstItem && $firstItem->stripe_price) {
                    try {
                        $stripePrice = $stripe->prices->retrieve($firstItem->stripe_price);
                        $subscription->stripe_price_details = $stripePrice; // Armazena o objeto Price completo

                        if ($stripePrice->product) {
                            $stripeProduct = $stripe->products->retrieve($stripePrice->product);
                            $subscription->stripe_product_details = $stripeProduct; // Armazena o objeto Product completo

                            // Anexando propriedades do Produto
                            $subscription->product_name = $stripeProduct->name;
                            $subscription->product_description = $stripeProduct->description;
                            $subscription->product_image = $stripeProduct->images[0] ?? null; // Primeira imagem
                            $subscription->product_url = $stripeProduct->url; // URL do produto
                            $subscription->product_metadata = $stripeProduct->metadata; // Metadados do produto

                        } else {
                            $subscription->product_name = 'Nome do Produto Indisponível';
                            // Define como nulo se o produto não for encontrado
                            $subscription->product_description = null;
                            $subscription->product_image = null;
                            $subscription->product_url = null;
                            $subscription->product_metadata = null;
                        }

                        // Anexando propriedades do Preço
                        $subscription->plan_name = $stripePrice->nickname ?? $stripePrice->id; // Use o nickname, senão o ID do preço
                        $subscription->price = $stripePrice->unit_amount / 100;
                        $subscription->currency = strtoupper($stripePrice->currency);
                        // Verifica se é recorrente antes de tentar acessar 'interval'
                        $subscription->billing_period = ($stripePrice->type === 'recurring' && isset($stripePrice->recurring->interval))
                                                        ? $stripePrice->recurring->interval
                                                        : 'N/A';
                        $subscription->price_metadata = $stripePrice->metadata; // Metadados do preço

                    } catch (\Exception $e) {
                        // Tratar erros ao buscar Price/Product
                        $subscription->stripe_price_details = null;
                        $subscription->stripe_product_details = null;
                        $subscription->product_name = 'Nome do Produto Indisponível';
                        $subscription->product_description = null;
                        $subscription->product_image = null;
                        $subscription->product_url = null;
                        $subscription->product_metadata = null;
                        $subscription->plan_name = 'N/A';
                        $subscription->price = null;
                        $subscription->currency = null;
                        $subscription->billing_period = 'N/A';
                        $subscription->price_metadata = null;
                        // Logar o erro aqui para depuração: \Log::error("Erro Stripe Price/Product: " . $e->getMessage());
                    }
                } else {
                    // Caso não haja item ou stripe_price
                    $subscription->product_name = 'Nome do Produto Indisponível';
                    $subscription->product_description = null;
                    $subscription->product_image = null;
                    $subscription->product_url = null;
                    $subscription->product_metadata = null;
                    $subscription->plan_name = 'N/A';
                    $subscription->price = null;
                    $subscription->currency = null;
                    $subscription->billing_period = 'N/A';
                    $subscription->price_metadata = null;
                }
            }
            return $subscriptions;
        };

        $activeSubscriptions = $attachStripeDetails($activeSubscriptions);
        $canceledSubscriptions = $attachStripeDetails($canceledSubscriptions);

        $usuarios = [];
        if ($user->can('access-owner')) {
            $usuarios = User::all();
        }

        return view('dashboard', compact('user', 'activeSubscriptions', 'canceledSubscriptions', 'usuarios'));
    }
}