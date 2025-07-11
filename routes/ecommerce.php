<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Laravel\Cashier\Cashier;

// PAGAMENTO
    Route::get('checkout', function (Request $request) {
        $productId = $request->query('session_id');

        return $request->user()->checkout([$productId => 1], [
            'mode' => 'subscription',
            'success_url' => route('checkout-success') . '?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('checkout-cancel'),
            'metadata' => [
                'product_id' => $productId,
                'user_id' => auth()->id()
            ],
        ]);


    })->middleware(['auth', 'verified'])->name('checkout');

// COMPRA CONCLUÍDA E COMPRA CANCELADA
    Route::get('checkout/success', function (Request $request) {
        $sessionId = $request->get('session_id');
        $metadata = Cashier::stripe()->checkout->sessions->retrieve($sessionId);

        return view('status/checkout-success', ['info'=> $metadata]);
    })->middleware(['auth', 'verified'])->name('checkout-success');

    Route::get('checkout/cancel', function (Request $request) {
        return view('status/checkout-cancel');
    })->middleware(['auth', 'verified'])->name('checkout-cancel');