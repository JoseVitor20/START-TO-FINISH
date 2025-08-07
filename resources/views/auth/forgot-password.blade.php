@extends('layouts.guest')
@section('title', 'Start To Finish - Esqueci a Senha')

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
            background: var(--card-bg);
            border-radius: var(--rounded-lg);
            box-shadow: var(--box-shadow);
            width: 100%;
            max-width: 480px;
            padding: 3rem;
            position: relative;
            overflow: hidden;
            transform: translateY(0);
            transition: var(--transition-all);
            z-index: 1;
            border: 1px solid var(--border-color);
            animation: fadeInUp 0.6s ease-out forwards;
        }

        .auth-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.4);
        }

        .auth-container::before {
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

        .auth-logo {
            transition: var(--transition-all);
        }

        .auth-logo:hover {
            transform: scale(1.05);
        }

        .auth-logo svg {
            height: 56px;
            width: auto;
            filter: var(--inver-img) drop-shadow(0 4px 6px rgba(0, 255, 253, 0.2));
        }

        .auth-header h2 {
            font-size: 2rem;
            font-weight: bold;
            color: var(--neon);
            margin-bottom: 0.75rem;
            position: relative;
            display: inline-block;
        }

        .auth-header h2::after {
            content: '';
            position: absolute;
            bottom: 5px;
            left: 50%;
            transform: translateX(-50%);
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

        .form-group {
            width: 100%;
            margin-bottom: 2rem;
            position: relative;
        }

        .form-label {
            display: block;
            font-size: 0.9375rem;
            font-weight: 500;
            color: var(--text-sec-color);
            margin-bottom: 0.75rem;
            transition: var(--transition-all);
        }

        .form-input {
            width: calc(100% - 17px);
            padding: 1rem 0px;
            padding-left: 15px;
            border: 2px solid var(--border-color);
            border-radius: 10px;
            font-size: 1rem;
            transition: var(--transition-all);
            background-color: var(--bg-sec-color);
            color: var(--text-pri-color);
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
        }

        .form-input:focus {
            outline: none;
            border-color: var(--neon);
            box-shadow: 0 0 0 4px rgba(0, 255, 253, 0.2);
            background-color: var(--bg-pri-color);
        }

        .form-input::placeholder {
            color: #64748b;
            opacity: 1;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            padding: 1.125rem 1.5rem;
            font-size: 1.0625rem;
            font-weight: 600;
            border-radius: 10px;
            cursor: pointer;
            transition: var(--transition-all);
            border: none;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--gradiente-pri-color), var(--gradiente-sec-color));
            color: var(--btn-bg-hover);
            box-shadow: 0 4px 6px rgba(0, 255, 253, 0.3);
            font-family: 'Josefin Sans', sans-serif;            
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 15px rgba(0, 255, 253, 0.4);
        }

        .btn-primary:active {
            transform: translateY(0);
        }

        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, var(--gradiente-sec-color), var(--gradiente-pri-color));
            opacity: 0;
            transition: var(--transition-all);
            z-index: -1;
        }

        .btn-primary:hover::before {
            opacity: 1;
        }

        .alert {
            padding: 1rem 1.25rem;
            border-radius: 10px;
            margin-bottom: 2rem;
            font-size: 0.9375rem;
            display: flex;
            align-items: center;
        }

        .alert svg {
            margin-right: 0.75rem;
            flex-shrink: 0;
        }

        .alert-success {
            background-color: rgba(16, 185, 129, 0.1);
            color: var(--gradiente-sec-color);
            border: 2px solid rgba(16, 185, 129, 0.3);
        }

        .alert-error {
            background-color: rgba(239, 68, 68, 0.1);
            color: var(--error-color);
            border: 2px solid rgba(239, 68, 68, 0.3);
        }

        .alert-error ul {
            margin: 0;
            padding-left: 1.5rem;
        }

        .back-to-login {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 2rem;
            color: var(--text-sec-color);
            font-size: 0.9375rem;
        }

        .back-to-login a {
            display: inline-flex;
            align-items: center;
            color: var(--neon);
            text-decoration: none;
            font-weight: 600;
            margin-left: 0.5rem;
            transition: var(--transition-all);
        }

        .back-to-login a:hover {
            color: var(--gradiente-sec-color);
            text-decoration: underline;
            transform: translateX(-3px);
        }

        .back-to-login svg {
            width: 18px;
            height: 18px;
            margin-right: 0.5rem;
            transition: var(--transition-all);
        }

        .back-to-login a:hover svg {
            transform: translateX(-3px);
        }

        /* Efeitos decorativos */
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
            .auth-container {
                padding: 2rem 1.5rem;
            }
            
            .auth-header h2 {
                font-size: 1.75rem;
            }
            
            .btn {
                padding: 1rem 1.25rem;
            }
        }

        /* Animação sutil ao carregar */
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
    </style>
@endpush

@section('content')
    <!-- Elementos decorativos -->
    <div class="decorative-circle circle-1"></div>
    <div class="decorative-circle circle-2"></div>
    
    <div class="auth-header">
        <div class="auth-logo">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="url(#gradient)" width="56" height="56">
                <defs>
                    <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" stop-color="var(--gradiente-pri-color)" />
                        <stop offset="100%" stop-color="var(--gradiente-sec-color)" />
                    </linearGradient>
                </defs>
                <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11V11.99z"/>
            </svg>
        </div>
        <h2>Redefinir Senha</h2>
        <p>Digite o e-mail associado à sua conta e enviaremos um link para redefinir sua senha</p>
    </div>

    @if (session('status'))
        <div class="alert alert-success">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--gradiente-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                <polyline points="22 4 12 14.01 9 11.01"></polyline>
            </svg>
            <div>{{ session('status') }}</div>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-error">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--error-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="12" y1="8" x2="12" y2="12"></line>
                <line x1="12" y1="16" x2="12.01" y2="16"></line>
            </svg>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        
        <div class="form-group">
            <label for="email" class="form-label">Endereço de e-mail</label>
            <input 
                type="email" 
                name="email" 
                id="email" 
                class="form-input" 
                placeholder="seu@email.com" 
                required
                autofocus
                autocomplete="email"
            >
        </div>

        <button type="submit" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 8px;">
                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                <polyline points="22,6 12,13 2,6"></polyline>
            </svg>
            Enviar link de redefinição
        </button>
    </form>

    <div class="back-to-login">
        <span>Lembrou sua senha?</span>
        <a href="{{ route('login') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M15 18l-6-6 6-6"/>
            </svg>
            Voltar para o login
        </a>
    </div>
@endsection