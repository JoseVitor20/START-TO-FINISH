<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// Rota da página DASHBOARD
    Route::middleware(['auth', 'verified'])->group(function () {
        Route::get('dashboard', [UserController::class, 'index'])->name('dashboard');
    });

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
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


require __DIR__.'/auth.php';