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

        .light-mode {
            --bg-pri-color: #fff;
            --bg-sec-color: #efefef;
            --text-pri-color: #101010;
            --text-sec-color: #303030;
            --text-ter-color: #404040;
            --inver-img: invert(0%);
            --primary-color: #3620df;
            --secondary-color: #8c20ff;
            --neon: #1ddf00;
            --gradiente-pri-color: #21ff00;
            --gradiente-sec-color: #00fffd;
            --box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            --card-bg: #ffffff;
            --border-color: #e0e0e0;
            --btn-shodow: #bfbfbf;
            --btn-bg-hover: #fff;
            --sol-lua: orange; 
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
            font-weight: bold;
            font-size: 2rem;
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
            width: 100%;
            position: relative;
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

        .input-wrapper {
            position: relative;
        }

        input {
            width: calc(100% - 17px);
            padding: 0.875rem 0px;
            padding-left: 15px;
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

        .toggle-password {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: var(--text-sec-color);
            cursor: pointer;
            padding: 5px;
            transition: var(--transition-all);
        }

        .toggle-password:hover {
            color: var(--neon);
        }

        button[type="submit"] {
            width: 100%;
            background: linear-gradient(135deg, var(--gradiente-pri-color), var(--gradiente-sec-color));
            color: black;
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
    <h2>Alterar Senha</h2>

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
            <div class="input-wrapper">
                <input id="password" type="password" name="password" required autocomplete="new-password">
                <button type="button" class="toggle-password" aria-label="Mostrar senha">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                    </svg>
                </button>
            </div>
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirmar Nova Senha</label>
            <div class="input-wrapper">
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
                <button type="button" class="toggle-password" aria-label="Mostrar senha">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                    </svg>
                </button>
            </div>
        </div>

        <button type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 512 512" style="position: relative; top: 3px; right: 3px;">
              <path d="M463.5 224H472c13.3 0 24-10.7 24-24V72c0-9.7-5.8-18.5-14.8-22.2s-19.3-1.7-26.2 5.2L413.4 96.6c-87.6-86.5-228.7-86.2-315.8 1-87.5 87.5-87.5 229.3 0 316.8s229.3 87.5 316.8 0c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0c-62.5 62.5-163.8 62.5-226.3 0s-62.5-163.8 0-226.3c62.2-62.2 162.7-62.5 225.3-1L327 183c-6.9 6.9-8.9 17.2-5.2 26.2s12.5 14.8 22.2 14.8H463.5z"/>
            </svg>            
            Redefinir Senha
        </button>
    </form>

    @push('scripts')
    <script>
        document.querySelectorAll('.toggle-password').forEach(function(button) {
            button.addEventListener('click', function() {
                const input = this.parentElement.querySelector('input');
                const icon = this.querySelector('svg');
                
                if (input.type === 'password') {
                    input.type = 'text';
                    icon.innerHTML = '<path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 0 0-2.79.588l.77.771A5.944 5.944 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z"/><path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829l.822.822zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829z"/><path d="M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12-.708.708z"/>';
                } else {
                    input.type = 'password';
                    icon.innerHTML = '<path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/><path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>';
                }
            });
        });
    </script>
    @endpush
@endsection