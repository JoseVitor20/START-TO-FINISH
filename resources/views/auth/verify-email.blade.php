@extends('layouts.guest')

@section('title', 'Verificar E-mail - Start To Finish')

@push('estilos')
<style>
    :root {
        --primary-color: #6c63ff;
        --primary-hover: #564fee;
        --success-color: #10b981;
        --text-color: #2d3748;
        --light-bg: #f8fafc;
        --white: #ffffff;
        --rounded-lg: 16px;
        --rounded-full: 9999px;
        --transition-all: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        --shadow-lg: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        --gradient-primary: linear-gradient(135deg, #6c63ff 0%, #8b5cf6 100%);
    }

    body {
        font-family: 'Poppins', sans-serif;
        background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiPjxkZWZzPjxwYXR0ZXJuIGlkPSJwYXR0ZXJuIiB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIHBhdHRlcm5UcmFuc2Zvcm09InJvdGF0ZSg0NSkiPjxyZWN0IHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgZmlsbD0icmdiYSgyNDgsIDI1MCwgMjUyLCAwLjMpIi8+PC9wYXR0ZXJuPjwvZGVmcz48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSJ1cmwoI3BhdHRlcm4pIiBvcGFjaXR5PSIwLjEiLz48L3N2Zz4='),
                    linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        color: var(--text-color);
        line-height: 1.6;
        padding: 1rem;
    }

    .auth-container {
        width: 100%;
        max-width: 480px;
        animation: fadeInUp 0.6s ease-out forwards;
    }

    .auth-card {
        background: var(--white);
        border-radius: var(--rounded-lg);
        box-shadow: var(--shadow-lg);
        padding: 3rem;
        position: relative;
        overflow: hidden;
        transform: translateY(0);
        transition: var(--transition-all);
        z-index: 1;
    }

    .auth-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }

    .auth-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 8px;
        background: var(--gradient-primary);
    }

    .auth-header {
        text-align: center;
        margin-bottom: 2.5rem;
    }

    .auth-header .logo-registro {
        height: 60px;
        margin-bottom: 1.5rem;
        transition: var(--transition-all);
    }

    .auth-header .logo-registro:hover {
        transform: scale(1.05);
    }

    .auth-header h1 {
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 1rem;
        background: var(--gradient-primary);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    .auth-header p {
        color: #64748b;
        font-size: 1rem;
        max-width: 320px;
        margin: 0 auto;
    }

    .verification-message {
        display: flex;
        align-items: flex-start;
        background-color: #f8fafc;
        border-radius: 10px;
        padding: 1.25rem;
        margin-bottom: 1.5rem;
        border-left: 4px solid var(--primary-color);
    }

    .verification-message i {
        font-size: 1.25rem;
        color: var(--primary-color);
        margin-right: 1rem;
        margin-top: 2px;
    }

    .verification-message div {
        flex: 1;
        color: var(--text-color);
    }

    .verification-resend {
        background: none;
        border: none;
        color: var(--primary-color);
        font-weight: 600;
        cursor: pointer;
        padding: 0;
        text-decoration: underline;
        transition: var(--transition-all);
    }

    .verification-resend:hover {
        color: var(--primary-hover);
        text-decoration: none;
    }

    .auth-form {
        margin-top: 2rem;
    }

    .auth-button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        padding: 1rem 1.5rem;
        font-size: 1rem;
        font-weight: 600;
        border-radius: 10px;
        cursor: pointer;
        transition: var(--transition-all);
        border: 2px solid #e2e8f0;
        background-color: var(--white);
        color: var(--text-color);
    }

    .auth-button:hover {
        background-color: #f8fafc;
        border-color: #cbd5e0;
        transform: translateY(-2px);
    }

    .auth-button i {
        margin-right: 0.75rem;
    }

    .button-text {
        transition: var(--transition-all);
    }

    .auth-button:hover .button-text {
        transform: translateX(3px);
    }

    /* Efeitos de animação */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.05); }
        100% { transform: scale(1); }
    }

    .animate__animated.animate__fadeIn {
        animation: fadeInUp 0.6s ease-out;
    }

    /* Elementos decorativos */
    .decorative-circle {
        position: absolute;
        border-radius: var(--rounded-full);
        opacity: 0.1;
        z-index: -1;
    }

    .circle-1 {
        width: 200px;
        height: 200px;
        background: var(--primary-color);
        top: -50px;
        right: -50px;
    }

    .circle-2 {
        width: 150px;
        height: 150px;
        background: var(--success-color);
        bottom: -30px;
        left: -30px;
    }

    @media (max-width: 640px) {
        .auth-card {
            padding: 2rem 1.5rem;
        }
        
        .auth-header h1 {
            font-size: 1.75rem;
        }
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@endpush

@section('content')
<div class="auth-container">
    <div class="auth-card">
        <!-- Elementos decorativos -->
        <div class="decorative-circle circle-1"></div>
        <div class="decorative-circle circle-2"></div>
        
        <div class="auth-header">
            <img src="{{ asset('img/logo-internet.png') }}" class="logo-registro" alt="Start To Finish">    
            <h1>Verifique seu e-mail</h1>
            <p>Antes de continuar, por favor verifique seu e-mail com o link que enviamos.</p>
        </div>

        @if (session('status') === 'verification-link-sent')
            <div class="verification-message animate__animated animate__fadeIn">
                <i class="fas fa-check-circle"></i>
                <div>
                    Um novo link de verificação foi enviado para o endereço de e-mail fornecido durante o registro.
                </div>
            </div>
        @endif

        <div class="verification-message">
            <i class="fas fa-envelope"></i>
            <div>
                Se você não recebeu o e-mail de verificação,
                <form method="POST" action="{{ route('verification.send') }}" class="inline">
                    @csrf
                    <button type="submit" class="verification-resend">
                        clique aqui para solicitar outro
                    </button>.
                </form>
            </div>
        </div>

        <form method="POST" action="{{ route('logout') }}" class="auth-form">
            @csrf
            <button type="submit" class="auth-button">
                <i class="fas fa-sign-out-alt"></i>
                <span class="button-text">Sair</span>
            </button>
        </form>
    </div>
</div>
@endsection