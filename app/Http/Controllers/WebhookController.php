<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscriptionPurchased;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Stripe\Checkout\Session as StripeCheckoutSession;
use Laravel\Cashier\Http\Controllers\WebhookController as CashierWebhookController;
use Carbon\Carbon; // Adicione esta linha para usar datas

class WebhookController extends CashierWebhookController
{
    /**
     * Lida com o evento invoice.paid do Stripe.
     * Garante que a assinatura esteja no DB antes de enviar o email.
     *
     * @param array $payload
     * @return \Symfony\Component\HttpFoundation\Response
     */
    protected function handleInvoicePaid(array $payload)
    {
        Log::info('handleInvoicePaymentSucceeded acionado. Pagamento completo: ' . json_encode($payload));

        if (isset($payload['data']['object']['subscription'])) {
            $stripeSubscriptionId = $payload['data']['object']['subscription'];
            $stripeCustomerId = $payload['data']['object']['customer'];

            $user = User::where('stripe_id', $stripeCustomerId)->first();

            if (!$user) {
                Log::warning("Webhook: Usuário não encontrado para Stripe Customer ID: {$stripeCustomerId}");
                return new \Symfony\Component\HttpFoundation\Response('Webhook Handled - User not found', 200);
            }

            // Tenta encontrar a assinatura imediatamente
            $subscription = $user->subscriptions()->where('stripe_id', $stripeSubscriptionId)->first();

            if (!$subscription) {
                // Se a assinatura não for encontrada imediatamente,
                // pode ser devido a um atraso na sincronização do Cashier.
                // Podemos logar um aviso e talvez tentar novamente mais tarde
                // ou aguardar um webhook mais apropriado (como subscription.created).
                Log::warning("Webhook: Assinatura Cashier não encontrada para Stripe Subscription ID: {$stripeSubscriptionId} (via invoice.paid). O e-mail de compra será enviado por um webhook mais adequado (e.g., customer.subscription.created/updated).");

                // Adicione uma lógica para lidar com o atraso se você realmente precisar enviar o e-mail aqui.
                // Por exemplo, você pode despachar um job que tenta encontrar a assinatura algumas vezes com atraso.
                // Para este cenário, é mais seguro não enviar o e-mail AGORA e deixar para outro webhook.
                // Você também pode verificar se a fatura é de um período de teste (amount_due é 0).
                $amountDue = $payload['data']['object']['amount_due'];
                if ($amountDue == 0) {
                    Log::info("Fatura com valor 0. Assinatura em período de teste. E-mail de compra será tratado pelo evento 'customer.subscription.created' ou 'customer.subscription.updated'.");
                }

                // Se a fatura é paga (amount_paid > 0) e a assinatura não foi encontrada,
                // isso é mais crítico e precisa de investigação.
                if ($payload['data']['object']['paid'] && $payload['data']['object']['amount_paid'] > 0 && !$subscription) {
                    Log::error("ERRO CRÍTICO: Fatura paga com valor, mas assinatura não encontrada no DB! Stripe Subscription ID: {$stripeSubscriptionId}");
                    // Considere notificar a equipe de suporte aqui
                }

                // Não envie o e-mail aqui se a assinatura não foi encontrada.
                // Ele será enviado por `customer.subscription.created` ou `customer.subscription.updated`
                // no `handleCustomerSubscriptionCreated` ou `handleCustomerSubscriptionUpdated` do Cashier.
                return new \Symfony\Component\HttpFoundation\Response('Webhook Handled - Subscription not found yet', 200);
            }

            // Se a assinatura for encontrada, envie o e-mail.
            // Contudo, é geralmente melhor enviar o e-mail de "compra" no evento customer.subscription.created
            // ou quando o status da assinatura realmente se torna 'active' (customer.subscription.updated)
            // para evitar e-mails duplicados ou antes do tempo.
            // Mas se você quer enviar aqui, certifique-se que o SubscriptionPurchased lida com o estado da assinatura.

            // Apenas envie se a fatura não tiver valor (período de teste) ou se for a primeira fatura paga real.
            // Para evitar duplicidade com customer.subscription.created
            // Verifique se o e-mail ainda não foi enviado para esta assinatura/evento
            // Isso pode ser feito adicionando um campo `email_sent` na tabela `subscriptions`
            // ou verificando se o `created_at` da assinatura é muito recente.

            // Exemplo de verificação simples (pode precisar de refinamento):
            $isTrialPeriod = $payload['data']['object']['lines']['data'][0]['period']['end'] > Carbon::now()->timestamp && $payload['data']['object']['amount_due'] == 0;

            if ($isTrialPeriod) {
                Log::info("Assinatura em período de teste (fatura com valor 0). Não enviando e-mail de compra via invoice.paid. Será enviado no `customer.subscription.created` ou `customer.subscription.updated`.");
                return new \Symfony\Component\HttpFoundation\Response('Webhook Handled - Trial period invoice', 200);
            }

            // Se não for período de teste e a assinatura foi encontrada, envie o e-mail.
            Log::info("Enviando e-mail de SubscriptionPurchased para {$user->email} (via invoice.paid).");
            Mail::to($user->email)->queue(new SubscriptionPurchased($user, $subscription));

        } else {
            Log::info("Webhook: invoice.paid recebido, mas não associado a uma assinatura (provavelmente pagamento avulso). Ignorando.");
        }

        return new \Symfony\Component\HttpFoundation\Response('Webhook Handled', 200);
    }

    /**
     * O Cashier já tem um handleCustomerSubscriptionCreated.
     * É o local ideal para enviar o email de boas-vindas/compra, pois a assinatura já estará no DB.
     * Você pode estender este método ou criar um novo.
     *
     * @param array $payload
     * @return \Symfony\Component\HttpFoundation\Response
     */
    protected function handleCustomerSubscriptionCreated(array $payload)
    {
        parent::handleCustomerSubscriptionCreated($payload); // Chama o método pai para garantir a sincronização do Cashier

        $stripeSubscriptionId = $payload['data']['object']['id'];
        $stripeCustomerId = $payload['data']['object']['customer'];

        $user = User::where('stripe_id', $stripeCustomerId)->first();

        if ($user) {
            // Certifique-se de que a assinatura já foi sincronizada pelo método pai do Cashier.
            // Pode ser necessário um pequeno atraso ou retry aqui se o Cashier não tiver finalizado ainda.
            // Geralmente, o `parent::handleCustomerSubscriptionCreated` garante que a assinatura esteja no DB.
            $subscription = $user->subscriptions()->where('stripe_id', $stripeSubscriptionId)->first();

            if ($subscription) {
                // Verifique se o e-mail já foi enviado para evitar duplicidade.
                // Isso é importante se você tiver outros webhooks que também podem acionar o e-mail.
                // Uma maneira é adicionar um campo 'purchase_email_sent_at' na tabela 'subscriptions'.
                if (empty($subscription->purchase_email_sent_at)) {
                    Log::info("Enviando e-mail de SubscriptionPurchased para {$user->email} (via customer.subscription.created).");
                    Mail::to($user->email)->queue(new SubscriptionPurchased($user, $subscription));
                    // Atualize o campo para evitar reenvios.
                    // $subscription->update(['purchase_email_sent_at' => now()]);
                } else {
                    Log::info("E-mail de compra já enviado para a assinatura {$stripeSubscriptionId}.");
                }
            } else {
                Log::warning("Webhook: Assinatura Cashier não encontrada para Stripe Subscription ID: {$stripeSubscriptionId} (via customer.subscription.created) após execução do método pai.");
            }
        } else {
            Log::warning("Webhook: Usuário não encontrado para Stripe Customer ID: {$stripeCustomerId} (via customer.subscription.created).");
        }

        return new \Symfony\Component\HttpFoundation\Response('Webhook Handled', 200);
    }
}