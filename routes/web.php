<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\PrivateController;
use App\Http\Controllers\WebhookController;
use App\Http\Controllers\ContractController; // Certifique-se de que AdminController também está importado se for usar 'admin.contratos'

Route::get('/', function () {
    return view('welcome');
});

// Rota para o webhook do Stripe (deve estar fora do middleware CSRF)
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

    // Gerenciar usuários (Assumindo que AdminController existe e está importado)
    // Se AdminController não estiver importado, adicione: use App\Http\Controllers\AdminController;
    Route::get('/admin/contratos', [\App\Http\Controllers\AdminController::class, 'verContratos'])->middleware('auth')->name('admin.contratos');
    
    // Download do contrato da rota "welcome"
    Route::get('/contrato/download', [ContractController::class, 'generateContractPdf'])->name('contract.download');
    // Download do contrato da rota "subscriptions/success"
    Route::get('/download-contrato', [ContractController::class, 'downloadContract'])->name('contrato.download');
});

// Rota para enviar E-MAIL DE CONTATO
Route::post('/contato/enviar', [ContatoController::class, 'enviar'])->name('contato.enviar');

// Rotas de PROJETOS (views estáticas)
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


// Rotas de Assinatura
Route::middleware(['auth', 'verified'])->group(function () {
    // Rota para exibir os planos de assinatura
    Route::get('/subscription', [SubscriptionController::class, 'index'])->name('subscription.index');
    // Rota para armazenar no banco de dados a nova assinatura
    Route::post('/subscription/store', [SubscriptionController::class, 'store'])->name('subscription.store');
    
    // Rota original de sucesso (mantida caso Mod_Security seja resolvido)
    Route::get('/subscription/success', [SubscriptionController::class, 'success'])->name('subscription.success');
    
    // NOVA ROTA DE REDIRECIONAMENTO DE SUCESSO (chamada pelo Stripe)
    // Esta rota simplesmente redireciona, evitando conflitos de Mod_Security na URL original de sucesso.
    // Ela assume que o webhook do Stripe já atualizou o status da assinatura no banco de dados.
    Route::get('/subscription/redirect-after-checkout', function () {
        // Log para depuração, se necessário
        \Log::info('Redirecionado via /subscription/redirect-after-checkout');
        // Redireciona o usuário para o painel ou outra página de "minhas assinaturas"
        return redirect()->route('dashboard')->with('status', 'Sua assinatura foi processada com sucesso!');
    })->name('subscription.redirectAfterCheckout');

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
require __DIR__.'/ecommerce.php';

