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

Route::view('loja-roupas', 'categorias.lojas-roupas');

Route::view('psicologia', 'categorias.psicologico');

Route::view('imoveis', 'categorias.lojas-moveis');

Route::view('hotel', 'categorias.hotel');

Route::view('clinica', 'categorias.clinica');

Route::view('turismo', 'categorias.turismo');

Route::view('dentista', 'categorias.odonto');

Route::view('pousada', 'categorias.pousada');

Route::view('barbearia', 'categorias.barbearia');

Route::view('aqua-park', 'categorias.aqua-park');

Route::view('cafeteria', 'categorias.cafeteria');

Route::view('centro-cultural', 'categorias.centro-cultural');