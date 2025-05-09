<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/contato/enviar', [ContatoController::class, 'enviar'])->name('contato.enviar');