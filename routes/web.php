<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

Route::get('/sitemap.xml', function () {
    $sitemap = Sitemap::create()
        ->add(Url::create('/'))
        ->add(Url::create('/restaurante'))
        ->add(Url::create('/mercado'))
        ->add(Url::create('/panificadora'))
        ->add(Url::create('/salao-beleza'))
        ->add(Url::create('/farmacia'))
        ->add(Url::create('/loja-roupas'))
        ->add(Url::create('/psicologia'))
        ->add(Url::create('/imoveis'))
        ->add(Url::create('/hotel'))
        ->add(Url::create('/clinica'))
        ->add(Url::create('/turismo'))
        ->add(Url::create('/dentista'))
        ->add(Url::create('/pousada'))
        ->add(Url::create('/barbearia'))
        ->add(Url::create('/aqua-park'))
        ->add(Url::create('/cafeteria'))
        ->add(Url::create('/centro-cultural'));

    $sitemap->writeToFile(public_path('sitemap.xml'));

    return response()->file(public_path('sitemap.xml'));
});

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