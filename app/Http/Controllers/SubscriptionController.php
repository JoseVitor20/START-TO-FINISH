<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('subscription.serviços');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // request('plan') e request('price_id') estão obtendo os valores do campo name="plan" e name="price_id" do formulário do diretório 'resources/views/subscription/serviços.blade.php'
        return $request->user()
        ->newSubscription(request('plan'), request('price_id'))
        ->trialDays(30) // Periodo grátuito de teste
        ->allowPromotionCodes() // Código promocional
        ->checkout([
            'success_url'=>route('subscription.seccess'),
            'cancel_url'=>route('subscription.cancelled')
        ]);
    }

    public function seccess()
    {
        dd('Inscrição concluída!');
    }

    public function cancel()
    {
        dd('Inscrição cancelada!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
