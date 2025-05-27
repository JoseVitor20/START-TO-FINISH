<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/contato/enviar', [ContatoController::class, 'enviar'])->name('contato.enviar');

Route::view('restaurante', 'categorias.restaurantes');

Route::view('mercado', 'categorias.mercados');

Route::view('panificadora', 'categorias.panificadoras');

Route::view('salao-beleza', 'categorias.salao');

Route::view('farmacia', 'categorias.farmacia');

Route::view('lojas-roupa', 'categorias.lojas-roupas');

Route::view('psicologico', 'categorias.psicologico');

Route::view('loja-imoveis', 'categorias.lojas-moveis');

Route::view('hotel', 'categorias.hotel');
