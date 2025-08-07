<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\PrivateController;
use App\Http\Controllers\WebhookController;
use App\Http\Controllers\ContractController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/stripe/webhook', [WebhookController::class, 'handleWebhook']);

// Rota da página DASHBOARD
    Route::middleware(['auth', 'verified'])->group(function () {
        Route::get('dashboard', [PrivateController::class, 'index'])->name('dashboard');
    });

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

// Rota para trabalhar com contratos
    Route::middleware(['auth'])->group(function () {
        // Mostrar contrato
        Route::view('info-contrato', 'contrato.info-contrato')->name('info-contrato');

        // Mostrar o status do cliente
        Route::get('/contrato/status', [ContractController::class, 'getContractStatus'])->name('contract.status');
        Route::post('/contrato/aceitar', [ContractController::class, 'acceptFromBlade'])->name('contract.accept');

        // Gerenciar usuários
        Route::get('/admin/contratos', [AdminController::class, 'verContratos'])->middleware('auth')->name('admin.contratos');   
        // Download do contrato da rota "welcome"
        Route::get('/contrato/download', [ContractController::class, 'generateContractPdf'])->name('contract.download');   
        // Download do contrato da rota "subscriptions/success"
        Route::get('/download-contrato', [ContractController::class, 'downloadContract'])->name('contrato.download');      
    });

// Rota para enviar E-MAIL DE CONTATO
    Route::post('/contato/enviar', [ContatoController::class, 'enviar'])->name('contato.enviar');

// Rotas de PROJETOS
    Route::view('/restaurante', 'categorias.restaurante');

    Route::view('/mercado', 'categorias.mercado');

    Route::view('/salao-beleza', 'categorias.salao-beleza');

    Route::view('/farmacia', 'categorias.farmacia');

    Route::view('/panificadora', 'categorias.panificadora');

    Route::view('/clinica', 'categorias.clinica');

    Route::view('/hotel', 'categorias.hotel');

    Route::view('/turismo', 'categorias.turismo');

    Route::view('/loja-roupas', 'categorias.loja-roupas');

    Route::view('/odonto', 'categorias.odonto');

    Route::view('/cafeteria', 'categorias.cafeteria');

    Route::view('/pousada', 'categorias.pousada');

    Route::view('/barbearia', 'categorias.barbearia');

    Route::view('/park-aquatico', 'categorias.park-aquatico');

    Route::view('/centro-cultural', 'categorias.centro-cultural');

    Route::view('/lojas-moveis', 'categorias.lojas-moveis');

    Route::view('/loja-materiais', 'categorias.loja-materiais');

    Route::view('/floricultura', 'categorias.floricultura');

    Route::view('/psicologo', 'categorias.psicologo');


// Assinatura
    Route::middleware(['auth', 'verified'])->group(function () {        
        // Rota para armazenar no banco de dados a nova assinatura
        Route::post('/subscription/store', [SubscriptionController::class, 'store'])->name('subscription.store');
        // Rota para exibir o comprovante e mensagem de sucesso
        Route::get('/subscription/success', [SubscriptionController::class, 'success'])->name('subscription.success');
        // Rota para exibir a mensagem de cancelamento de pagamento
        Route::get('/subscription/cancelled', [SubscriptionController::class, 'cancelled'])->name('subscription.cancelled');

        // Cancelamento de assinatura
        Route::post('/subscription/cancel', [SubscriptionController::class, 'cancel'])->name('subscription.cancel');

        // Cancelamento de assinatura imediato
        Route::post('/subscription/cancel-now', [SubscriptionController::class, 'cancelNow'])->name('subscription.cancelNow');
        // Renovar assinatura
        Route::post('/subscription/resume', [SubscriptionController::class, 'resume'])->name('subscription.resume');
        // Atualizar plano
        Route::post('/subscription/update', [SubscriptionController::class, 'updateSubscription'])->name('subscription.update');
    });

require __DIR__.'/auth.php';