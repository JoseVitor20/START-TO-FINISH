<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscriptionPurchased;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Stripe\Checkout\Session as StripeCheckoutSession; // Manter, caso mude o fluxo
use Laravel\Cashier\Http\Controllers\WebhookController as CashierWebhookController;

class WebhookController extends CashierWebhookController
{
    protected function handleInvoicePaid(array $payload)
    {
        Log::info('handleInvoicePaid acionado. Payload completo: ' . json_encode($payload));

        // Verifique se esta fatura está associada a uma assinatura
        // A propriedade 'subscription' estará presente no objeto de fatura se for de uma assinatura.
        if (isset($payload['data']['object']['subscription'])) {
            $stripeSubscriptionId = $payload['data']['object']['subscription'];
            $stripeCustomerId = $payload['data']['object']['customer'];

            $user = User::where('stripe_id', $stripeCustomerId)->first();

            if ($user) {
                // Busque a assinatura do Cashier no seu banco de dados
                $subscription = $user->subscriptions()->where('stripe_id', $stripeSubscriptionId)->first();

                if ($subscription) {
                    Log::info("Disparando e-mail de compra/renovação para o usuário: " . $user->email . " (via invoice.paid)");
                    Mail::to($user->email)->queue(new SubscriptionPurchased($user, $subscription));
                } else {
                    Log::warning("Webhook: Assinatura Cashier não encontrada para Stripe Subscription ID: " . $stripeSubscriptionId . " (via invoice.paid)");
                }
            } else {
                Log::warning("Webhook: Usuário não encontrado para Stripe Customer ID: " . $stripeCustomerId . " (via invoice.paid)");
            }
        } else {
            Log::info("Webhook: invoice.paid recebido, mas não associado a uma assinatura (provavelmente pagamento avulso). Ignorando.");
        }

        return new \Symfony\Component\HttpFoundation\Response('Webhook Handled', 200);
    }
}