<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // 1. Adicione as regras de validação para 'document' e 'address'
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'document' => ['required', 'string', 'max:255'], // Regra de validação para CPF/CNPJ
            'address' => ['required', 'string', 'max:255'],    // Regra de validação para Endereço
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // 2. Passe os novos dados para o método User::create()
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'document' => $request->document, // Salva o campo 'document'
            'address' => $request->address,   // Salva o campo 'address'
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}