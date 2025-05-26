<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContatoMail;

class ContatoController extends Controller
{
    public function enviar(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email',
            'mensagem' => 'required|string',
        ]);

        $dados = $request->only(['nome', 'email', 'mensagem']);

        Mail::to(env('MAIL_TO_ADDRESS', env('MAIL_FROM_ADDRESS')))->send(new ContatoMail($dados));

        return view('welcome')->with('success', 'E-mail enviado com sucesso!');
    }
}