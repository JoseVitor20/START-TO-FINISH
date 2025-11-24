<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

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