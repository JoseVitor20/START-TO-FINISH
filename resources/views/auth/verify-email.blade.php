@extends('layouts.guest')

@section('title', 'Start To Finish - Verificar E-mail')

@push('estilos')
<style>
    :root {
        --bg-pri-color: #101010;
        --bg-sec-color: #262626;
        --text-pri-color: #fff;
        --text-sec-color: #cfcfcf;
        --text-ter-color: #dfdfdf;
        --inver-img: invert(100%);
        --primary-color: #1a1a2e;
        --secondary-color: #21325e;
        --neon: #00fffd;
        --gradiente-pri-color: #00fffd;
        --gradiente-sec-color: #19bf00;
        --box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        --card-bg: #1e1e1e;
        --border-color: #444;
        --btn-shodow: #fff;
        --btn-bg-hover: #000;
        --sol-lua: white;
        --rounded-lg: 16px;
        --rounded-full: 9999px;
        --transition-all: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    body {
        font-family: 'Josefin Sans', sans-serif;
        background-color: var(--bg-pri-color);
        color: var(--text-ter-color);
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 1rem;
        line-height: 1.6;
        background-image: 
            radial-gradient(circle at 25% 25%, rgba(0, 255, 253, 0.05) 0%, transparent 50%),
            radial-gradient(circle at 75% 75%, rgba(25, 191, 0, 0.05) 0%, transparent 50%);
    }

    .auth-container {
        width: 100%;
        max-width: 480px;
        animation: fadeInUp 0.6s ease-out forwards;
    }

    .auth-card {
        background: var(--card-bg);
        border-radius: var(--rounded-lg);
        box-shadow: var(--box-shadow);
        padding: 3rem;
        position: relative;
        overflow: hidden;
        transform: translateY(0);
        transition: var(--transition-all);
        z-index: 1;
        border: 1px solid var(--border-color);
    }

    .auth-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.4);
    }

    .auth-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 6px;
        background: linear-gradient(90deg, var(--gradiente-pri-color), var(--gradiente-sec-color));
    }

    .auth-header {
        text-align: center;
        margin-bottom: 2.5rem;
    }

    .auth-header .logo-registro {
        height: 60px;
        margin-bottom: 1.5rem;
        transition: var(--transition-all);
        filter: var(--inver-img);
    }

    .auth-header .logo-registro:hover {
        transform: scale(1.05);
    }

    .auth-header h1 {
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 1rem;
        color: var(--neon);
        position: relative;
        display: inline-block;
    }

    .auth-header h1::after {
        content: '';
        position: absolute;
        bottom: -8px;
        left: 0;
        width: 50px;
        height: 3px;
        background: linear-gradient(90deg, var(--gradiente-pri-color), var(--gradiente-sec-color));
        border-radius: 3px;
    }

    .auth-header p {
        color: var(--text-sec-color);
        font-size: 1rem;
        max-width: 320px;
        margin: 0 auto;
    }

    .verification-message {
        display: flex;
        align-items: flex-start;
        background-color: rgba(38, 38, 38, 0.7);
        border-radius: 10px;
        padding: 1.25rem;
        margin-bottom: 1.5rem;
        border-left: 4px solid var(--neon);
    }

    .verification-message i {
        font-size: 1.25rem;
        color: var(--neon);
        margin-right: 1rem;
        margin-top: 2px;
    }

    .verification-message div {
        flex: 1;
        color: var(--text-sec-color);
    }

    .verification-resend {
        background: none;
        border: none;
        color: var(--neon);
        font-weight: 600;
        cursor: pointer;
        padding: 0;
        text-decoration: underline;
        transition: var(--transition-all);
    }

    .verification-resend:hover {
        color: var(--gradiente-sec-color);
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
        border: 2px solid var(--border-color);
        background-color: var(--bg-sec-color);
        color: var(--text-pri-color);
    }

    .auth-button:hover {
        background-color: var(--primary-color);
        border-color: var(--neon);
        transform: translateY(-2px);
    }

    .auth-button i {
        margin-right: 0.75rem;
        transition: var(--transition-all);
    }

    .button-text {
        transition: var(--transition-all);
    }

    .auth-button:hover .button-text {
        transform: translateX(3px);
    }

    .auth-button:hover i {
        color: var(--neon);
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
        background: var(--gradiente-pri-color);
        top: -50px;
        right: -50px;
    }

    .circle-2 {
        width: 150px;
        height: 150px;
        background: var(--gradiente-sec-color);
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
            <img src="{{ asset('img/starttofinish-black.png') }}" style="filter: invert(100%);" class="logo-registro" alt="Start To Finish">    
            <h1>Verifique seu e-mail</h1>
            <p>Antes de continuar, por favor verifique seu e-mail com o link que enviamos.</p>
        </div>

        @if (session('status') === 'verification-link-sent')
            <div class="verification-message animate__animated animate__fadeIn">
                <i class="fas fa-check-circle" style="margin-right: 10px; margin-top: 5px;"></i>
                <div>
                    Um novo link de verificação foi enviado para o endereço de e-mail fornecido durante o registro.
                </div>
            </div>
        @endif

        <div class="verification-message">
            <i class="fas fa-envelope" style="margin-right: 10px; margin-top: 5px;"></i>
            <div>
                Se você não recebeu o e-mail de verificação,
                <form method="POST" action="{{ route('verification.send') }}" class="inline">
                    @csrf
                    <button type="submit" class="verification-resend" style="font-size: 15px; margin-top: 10px;">
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