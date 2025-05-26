<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/contato/enviar', [ContatoController::class, 'enviar'])->name('contato.enviar');

Route::view('restaurantes', 'categorias.restaurantes');

Route::view('mercados', 'categorias.mercados');

Route::view('panificadoras', 'categorias.panificadoras');

Route::view('salao-beleza', 'categorias.salao');

Route::view('farmacias', 'categorias.farmacia');

Route::view('lojas-roupas', 'categorias.lojas-roupas');

Route::view('psicologico', 'categorias.psicologico');

Route::view('lojas-moveis', 'categorias.lojas-moveis');
