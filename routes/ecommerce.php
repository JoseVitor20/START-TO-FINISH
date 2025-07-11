<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Laravel\Cashier\Cashier;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RefundController;
use App\Http\Controllers\AdminRefundController;

// Rota de Checkout
Route::get('checkout', function (Request $request) {
    $productId = $request->query('session_id'); // O Price ID do produto Stripe

    return $request->user()->checkout([$productId => 1], [
        'mode' => 'subscription', // Essencial para pagamentos por assinatura
        'success_url' => route('checkout-success') . '?session_id={CHECKOUT_SESSION_ID}',
        'cancel_url' => route('checkout-cancel'),
        'metadata' => [
            'product_id' => $productId,
            'user_id' => auth()->id()
        ],
    ]);
})->middleware(['auth', 'verified'])->name('checkout');

// Rotas de Sucesso e Cancelamento
Route::get('checkout/success', function (Request $request) {
    $sessionId = $request->get('session_id');
    // Você pode recuperar mais detalhes da sessão do Stripe aqui, se necessário
    $session = Cashier::stripe()->checkout->sessions->retrieve($sessionId);

    return view('status.checkout-success', ['info' => $session]);
})->middleware(['auth', 'verified'])->name('checkout-success');

Route::get('checkout/success', [OrderController::class, 'checkoutSuccess'])->middleware(['auth', 'verified'])->name('checkout-success');

Route::get('checkout/cancel', function (Request $request) {
    return view('status.checkout-cancel');
})->middleware(['auth', 'verified'])->name('checkout-cancel');


// Rota para Comprovantes
Route::get('meus-comprovantes', [OrderController::class, 'showReceipts'])->middleware(['auth', 'verified'])->name('receipts');


// Rota para solicitar reembolso
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('reembolso/solicitar/{id}', [RefundController::class, 'create'])->name('refund.create');
    Route::post('reembolso/solicitar', [RefundController::class, 'store'])->name('refund.store');
});

// Rota para a política de reembolso
Route::get('politica-de-reembolso', function () {
    return view('refund-policy');
})->name('refund.policy');

// Rota para gerenciar pedidos de reembolsos.
Route::middleware(['auth', 'verified', 'can:access-owner'])->group(function () {
    Route::get('admin/reembolsos', [AdminRefundController::class, 'index'])->name('admin.refunds.index');
    Route::post('admin/reembolsos/{refund}', [AdminRefundController::class, 'update'])->name('admin.refunds.update');
});