<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Refund;
use Illuminate\Support\Facades\Auth;
use Laravel\Cashier\Cashier;

class OrderController extends Controller
{
    public function checkoutSuccess(Request $request)
    {
        $sessionId = $request->get('session_id');
        $session = Cashier::stripe()->checkout->sessions->retrieve($sessionId);
        
        // Extraindo dados do metadata e outros detalhes da sessão do Stripe
        $productId = $session->metadata->product_id ?? null;
        $userId = $session->metadata->user_id ?? auth()->id();
        $amount = $session->amount_total / 100; // Convertendo de centavos para reais
        $paymentIntentId = $session->payment_intent; // Captura o Payment Intent ID

        // Salve ou atualize os dados na tabela orders
        Order::updateOrCreate(
            ['stripe_session_id' => $sessionId],
            [
                'user_id' => $userId,
                'product_id' => $productId,
                'amount' => $amount,
                'status' => 'paid',
                'stripe_payment_intent_id' => $paymentIntentId,
            ]
        );
        
        return view('status.checkout-success', ['info' => $session]);
    }

    public function showReceipts()
    {
        // Recupera todos os pedidos e reembolsos do usuário autenticado
        $orders = Order::where('user_id', auth()->id())->orderBy('created_at', 'desc')->get();
        $refunds = Refund::where('user_id', auth()->id())->orderBy('created_at', 'desc')->get();

        return view('receipts.index', ['orders' => $orders, 'refunds' => $refunds]);
    }
}