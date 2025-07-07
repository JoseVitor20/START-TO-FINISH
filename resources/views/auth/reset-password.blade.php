@extends('layouts.guest')

@section('title', 'Start To Finish - Redefinir Senha')

@push('estilos')
    <style>
        :root {
            --bg-pri-color: #101010;
            --bg-sec-color: #262626;
            --text-pri-color: #fff;
            --text-sec-color: #cfcfcf;
            --text-ter-color: #dfdfdf;
            --primary-color: #1a1a2e;
            --secondary-color: #21325e;
            --neon: #00fffd;
            --gradiente-pri-color: #00fffd;
            --gradiente-sec-color: #19bf00;
            --box-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
            --card-bg: #1e1e1e;
            --border-color: #444;
            --error-bg: #2a1a1a;
            --error-text: #ff6b6b;
            --input-bg: #262626;
            --rounded-lg: 16px;
            --rounded-md: 10px;
            --transition-all: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Josefin Sans', sans-serif;
            background-color: var(--bg-pri-color);
            color: var(--text-ter-color);
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-image: 
                radial-gradient(circle at 25% 25%, rgba(0, 255, 253, 0.05) 0%, transparent 50%),
                radial-gradient(circle at 75% 75%, rgba(25, 191, 0, 0.05) 0%, transparent 50%);
        }

        .auth-container {
            background-color: var(--card-bg);
            padding: 2.5rem;
            border-radius: var(--rounded-lg);
            box-shadow: var(--box-shadow);
            max-width: 450px;
            width: 100%;
            border: 1px solid var(--border-color);
            position: relative;
            overflow: hidden;
            transform: translateY(0);
            transition: var(--transition-all);
            animation: fadeInUp 0.6s ease-out forwards;
        }

        .auth-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
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

        .auth-logo {
            margin-bottom: 2rem;
            transition: var(--transition-all);
        }

        .auth-logo:hover {
            transform: scale(1.05);
        }

        .auth-logo svg {
            height: 56px;
            width: auto;
            filter: var(--inver-img) drop-shadow(0 4px 6px rgba(0, 255, 253, 0.2));
            position: relative;
            left: 50%;
            transform: translateX(-50%);
        }

        h2 {
            margin-bottom: 1.75rem;
            font-weight: 600;
            font-size: 1.75rem;
            color: var(--neon);
            text-align: center;
            position: relative;
            padding-bottom: 10px;
        }

        h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, var(--gradiente-pri-color), var(--gradiente-sec-color));
            border-radius: 3px;
        }

        .error-container {
            background-color: var(--error-bg);
            padding: 1rem;
            border-radius: var(--rounded-md);
            margin-bottom: 1.5rem;
            color: var(--error-text);
            font-size: 0.95rem;
            border-left: 4px solid var(--error-text);
        }

        .error-container ul {
            margin: 0;
            padding-left: 1.25rem;
        }

        .error-container li {
            margin-bottom: 0.5rem;
        }

        form {
            margin-top: 1.5rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
            position: relative;
        }

        label {
            display: block;
            font-size: 0.95rem;
            color: var(--text-sec-color);
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        input {
            width: 100%;
            padding: 0.875rem 1rem;
            background-color: var(--input-bg);
            border: 1px solid var(--border-color);
            border-radius: var(--rounded-md);
            font-size: 1rem;
            color: var(--text-pri-color);
            transition: var(--transition-all);
        }

        input:focus {
            outline: none;
            border-color: var(--neon);
            box-shadow: 0 0 0 3px rgba(0, 255, 253, 0.2);
        }

        button[type="submit"] {
            width: 100%;
            background: linear-gradient(135deg, var(--gradiente-pri-color), var(--gradiente-sec-color));
            color: var(--btn-bg-hover);
            padding: 1rem;
            border: none;
            border-radius: var(--rounded-md);
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: var(--transition-all);
            margin-top: 0.5rem;
            box-shadow: 0 0 15px rgba(0, 255, 253, 0.3);
            position: relative;
            overflow: hidden;
        }

        button[type="submit"]:hover {
            transform: translateY(-3px);
            box-shadow: 0 0 25px rgba(0, 255, 253, 0.5);
            color: var(--bg-sec-color);
        }

        button[type="submit"]:active {
            transform: translateY(0);
        }

        button[type="submit"]::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, var(--gradiente-sec-color), var(--gradiente-pri-color));
            opacity: 0;
            transition: opacity 0.3s ease;
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

        /* Elementos decorativos */
        .decorative-circle {
            position: absolute;
            border-radius: 50%;
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

        @media (max-width: 480px) {
            .auth-container {
                padding: 2rem 1.5rem;
                margin: 1rem;
            }

            h2 {
                font-size: 1.5rem;
            }
        }
    </style>
@endpush

@section('content')
    <div class="decorative-circle circle-1"></div>
    <div class="decorative-circle circle-2"></div>
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

    @if ($errors->any())
        <div class="error-container">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        @method('PUT')

        <input type="hidden" name="token" value="{{ $token }}">
        <input type="hidden" name="email" value="{{ request()->email }}">

        <div class="form-group">
            <label for="password">Nova Senha</label>
            <input id="password" type="password" name="password" required autocomplete="new-password">
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirmar Nova Senha</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
        </div>

        <button type="submit">
            Redefinir Senha
        </button>
    </form>
@endsection