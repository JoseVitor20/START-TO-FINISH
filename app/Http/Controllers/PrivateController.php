<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\StripeClient; // Importe a classe StripeClient
use Carbon\Carbon; // Importe Carbon para manipulação de datas

class PrivateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();

        $activeSubscriptions = $user->subscriptions()->active()->get();
        $canceledSubscriptions = $user->subscriptions()->canceled()->get();

        // Para cada assinatura ativa, vamos buscar a próxima data de cobrança no Stripe
        foreach ($activeSubscriptions as $subscription) {
            try {
                // Instancie o cliente Stripe com sua chave secreta
                $stripe = new StripeClient(config('services.stripe.secret'));

                // Recupere a assinatura do Stripe usando o stripe_id
                $stripeSubscription = $stripe->subscriptions->retrieve(
                    $subscription->stripe_id,
                    ['expand' => ['latest_invoice.payment_intent']] // Expande informações se precisar de mais detalhes
                );

                // A data do próximo ciclo de cobrança é current_period_end
                // Converta o timestamp Unix para um objeto Carbon
                $subscription->next_billing_date = Carbon::createFromTimestamp($stripeSubscription->current_period_end);

            } catch (\Exception $e) {
                // Em caso de erro (ex: assinatura não encontrada no Stripe), defina como null ou uma mensagem
                $subscription->next_billing_date = null;
                // Opcional: logar o erro para depuração
                // \Log::error("Erro ao buscar próxima data de cobrança para sub: {$subscription->id} - " . $e->getMessage());
            }
        }

        return view('private.index', compact('user', 'activeSubscriptions', 'canceledSubscriptions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
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
