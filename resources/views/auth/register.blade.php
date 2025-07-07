@extends('layouts.guest')

@section('title', 'Start To Finish - Registrar-se')

@push('estilos')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <style>
        :root {
            /* Dark Mode (Padrão) */
            --bg-pri-color: #0f0f13;
            --bg-sec-color: #1a1a24;
            --text-pri-color: #ffffff;
            --text-sec-color: #a0a0c0;
            --primary-color: #1a1a2e;
            --secondary-color: #21325e;
            --neon: #00f5d0;
            --gradiente-pri-color: #00f5d0;
            --gradiente-sec-color: #9b5de5;
            --box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            --card-bg: #1e1e2a;
            --border-color: #2d2d42;
            --btn-shodow: #00f5d0;
            --btn-bg-hover: #000;
            --sol-lua: #00f5d0;
            --error-color: #ff5e7d;
            --success-color: #00e0a0;
            --transition: all 0.4s cubic-bezier(0.68, -0.55, 0.27, 1.55);
            --img-invert: invert(100%);
        }

        .light-mode {
            /* Light Mode */
            --bg-pri-color: #f8f9ff;
            --bg-sec-color: #ffffff;
            --text-pri-color: #1a1a2e;
            --text-sec-color: #6c6c8a;
            --neon: #00a8e8;
            --gradiente-pri-color: #00a8e8;
            --gradiente-sec-color: #9b5de5;
            --box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            --card-bg: #ffffff;
            --border-color: #e0e0f0;
            --btn-shodow: #9f9f9f;
            --btn-bg-hover: #fff;
            --sol-lua: #ff9e00;
            --error-color: #ff5e7d;
            --success-color: #00c897;
            --img-invert: invert(0%);
        }

        *{
            margin: 0;
            padding: 0;
            box-shadow: border-box;
        }

        /* Estilo do botão de tema */
        .theme-toggle {
            position: absolute;
            top: 1.5rem;
            right: 1.5rem;
            background: var(--bg-pri-color);
            border: 1px solid var(--border-color);
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition);
            z-index: 10;
            padding: 0;
            margin: 0;
            overflow: hidden;
        }

        .theme-toggle:hover {
            transform: rotate(30deg) scale(1.1);
            box-shadow: 0 0 10px var(--sol-lua);
        }

        .theme-toggle img {
            transition: var(--transition);
            object-fit: contain;
            filter: var(--img-invert);
        }

        #theme-toggle:hover #theme-icon {
            transform: scale(1.2);
            border-radius: 100%;
        }

        body.auth-page {
            font-family: 'Josefin Sans', sans-serif;
            background: var(--bg-pri-color);
            color: var(--text-pri-color);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: max-content;
            background-image: 
                radial-gradient(circle at 10% 20%, rgba(0, 255, 253, 0.05) 0%, transparent 20%),
                radial-gradient(circle at 90% 80%, rgba(25, 191, 0, 0.05) 0%, transparent 20%);
            user-select: none;
            overflow-x: hidden !important;
        }

        body.auth-page::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                45deg,
                transparent 0%,
                rgba(0, 255, 253, 0.03) 50%,
                transparent 100%
            );
            animation: rotateGradient 20s linear infinite;
            z-index: -1;
        }

        @keyframes rotateGradient {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .logo-registro {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 1rem;
            border: 2px solid var(--neon);
            box-shadow: 0 0 15px var(--neon);
            transition: var(--transition);
        }

        .logo-registro:hover {
            transform: scale(1.1) rotate(10deg);
            box-shadow: 0 0 25px var(--neon);
        }

        .auth-container {
            width: 100%;
            max-width: 420px;
            padding: 1.5rem;
            animation: fadeInUp 0.6s;
        }

        .auth-card {
            background: var(--card-bg);
            border-radius: 16px;
            box-shadow: var(--box-shadow);
            padding: 2.5rem;
            position: relative;
            overflow: hidden;
            border: 1px solid var(--border-color);
            backdrop-filter: blur(10px);
            transition: var(--transition);
        }

        .auth-card:hover {
            box-shadow: 0 8px 32px rgba(0, 255, 253, 0.2);
            transform: translateY(-5px);
        }

        .auth-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--gradiente-pri-color), var(--gradiente-sec-color));
            animation: gradientBG 3s ease infinite;
            background-size: 200% 200%;
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .auth-header {
            margin-bottom: 2.5rem;
            text-align: center;
        }

        .auth-header h1 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            background: linear-gradient(90deg, var(--gradiente-pri-color), var(--gradiente-sec-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 0 10px rgba(0, 255, 253, 0.3);
            letter-spacing: 1px;
        }

        .auth-header p {
            color: var(--text-sec-color);
            font-size: 0.9375rem;
            margin-top: 0.5rem;
        }

        .auth-form {
            display: flex;
            flex-direction: column;
            gap: 1.75rem;
        }

        .input-group {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            position: relative;
        }

        .input-group label {
            font-size: 0.875rem;
            font-weight: 500;
            color: var(--text-sec-color);
            transition: var(--transition);
            margin-left: 0.5rem;
            position: absolute;
            top: 1rem;
            left: 3rem;
            background: var(--card-bg);
            padding: 0 0.5rem;
            z-index: 2;
        }

        .input-wrapper {
            position: relative;
        }

        .input-group input {
            width: 100%;
            padding: 1.25rem 3rem 1.25rem 3.5rem;
            border: 1px solid var(--border-color);
            border-radius: 12px;
            font-size: 0.9375rem;
            background-color: var(--bg-sec-color);
            transition: var(--transition);
            color: var(--text-pri-color);
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.2);
        }

        .input-group input:focus {
            outline: none;
            border-color: var(--neon);
            box-shadow: 0 0 0 2px rgba(0, 255, 253, 0.3), inset 0 1px 3px rgba(0, 0, 0, 0.2);
            background-color: var(--bg-sec-color);
        }

        .input-group input:focus + label,
        .input-group input:not(:placeholder-shown) + label {
            top: -0.6rem;
            left: 1rem;
            font-size: 0.75rem;
            color: var(--neon);
        }

        .input-icon {
            position: absolute;
            left: 32px;
            top: 30px;
            transform: translateY(-50%);
            color: var(--text-sec-color);
            transition: var(--transition);
            z-index: 2;
            font-size: 1rem;
        }

        .input-group input:focus ~ .input-icon {
            color: var(--neon);
            text-shadow: 0 0 8px var(--neon);
        }

        .password-toggle {
            position: absolute;
            right: 10px;
            top: 32px;
            transform: translateY(-50%);
            color: var(--text-sec-color);
            cursor: pointer;
            transition: var(--transition);
            z-index: 2;
            background: none;
            border: none;
            padding: 0;
            font-size: 1.1rem;
        }

        .password-toggle:hover {
            color: var(--neon);
            transform: translateY(-50%) scale(1.1);
        }

        .error-message {
            color: var(--error-color);
            font-size: 0.75rem;
            margin-top: 0.25rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding-left: 1rem;
            animation: shake 0.5s;
        }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            20%, 60% { transform: translateX(-5px); }
            40%, 80% { transform: translateX(5px); }
        }

        .error-message i {
            font-size: 0.875rem;
        }

        .auth-button {
            background: linear-gradient(135deg, var(--gradiente-pri-color), var(--gradiente-sec-color));
            color: var(--btn-bg-hover);
            padding: 1.25rem;
            border: none;
            border-radius: 12px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            margin-top: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
            font-size: 1rem;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 255, 253, 0.3);
        }

        .auth-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: 0.5s;
        }

        .auth-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0, 255, 253, 0.4);
        }

        .auth-button:hover::before {
            left: 100%;
        }

        .auth-button:active {
            transform: translateY(0);
        }

        .auth-links {
            display: flex;
            justify-content: center;
            font-size: 0.875rem;
            margin-top: 1.5rem;
            color: var(--text-sec-color);
        }

        .auth-links a {
            color: var(--neon);
            text-decoration: none;
            font-weight: 500;
            transition: var(--transition);
            margin-left: 0.5rem;
            position: relative;
        }

        .auth-links a::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 1px;
            background: var(--neon);
            transition: var(--transition);
        }

        .auth-links a:hover {
            text-shadow: 0 0 8px var(--neon);
        }

        .auth-links a:hover::after {
            width: 100%;
        }

        .password-strength {
            margin-top: 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .strength-meter {
            flex-grow: 1;
            height: 6px;
            background-color: var(--bg-sec-color);
            border-radius: 3px;
            overflow: hidden;
            position: relative;
        }
        
        .strength-meter-fill {
            height: 100%;
            width: 0;
            transition: width 0.4s ease, background-color 0.4s ease;
            border-radius: 3px;
        }
        
        .strength-text {
            font-size: 0.75rem;
            font-weight: 600;
            min-width: 70px;
            text-align: right;
            transition: color 0.3s ease;
        }
        
        /* Níveis de força da senha */
        .strength-0 { 
            width: 20%; 
            background-color: var(--error-color); 
        }
        .strength-1 { 
            width: 40%; 
            background-color: #ff6b6b; 
        }
        .strength-2 { 
            width: 60%; 
            background-color: #feca57; 
        }
        .strength-3 { 
            width: 80%; 
            background-color: #48dbfb; 
        }
        .strength-4 { 
            width: 100%; 
            background-color: var(--success-color); 
        }
        
        .strength-label-0 { color: var(--error-color); }
        .strength-label-1 { color: #ff6b6b; }
        .strength-label-2 { color: #feca57; }
        .strength-label-3 { color: #48dbfb; }
        .strength-label-4 { color: var(--success-color); }
        
        /* Requisitos da senha */
        .password-requirements {
            margin-top: 0.5rem;
            padding-left: 1.5rem;
            font-size: 0.75rem;
            color: var(--text-sec-color);
        }
        
        .password-requirements li {
            margin-bottom: 0.25rem;
            position: relative;
            list-style-type: none;
        }
        
        .password-requirements li::before {
            content: '○';
            position: absolute;
            left: -1.25rem;
            font-size: 0.6rem;
        }
        
        .password-requirements li.requirement-met::before {
            content: '✓';
            color: var(--success-color);
        }
        
        .light-mode .password-requirements li.requirement-met::before {
            color: var(--gradiente-sec-color);
        }

        .strength-meter {
            margin-top: 0.5rem;
            height: 4px;
            background-color: var(--bg-sec-color);
            border-radius: 2px;
            overflow: hidden;
        }

        .strength-meter-fill {
            height: 100%;
            width: 0;
            transition: width 0.4s ease, background-color 0.4s ease;
            border-radius: 2px;
        }

        /* Password strength colors */
        .strength-0 { width: 20%; background-color: var(--error-color); }
        .strength-1 { width: 40%; background-color: #ff6b6b; }
        .strength-2 { width: 60%; background-color: #feca57; }
        .strength-3 { width: 80%; background-color: #48dbfb; }
        .strength-4 { width: 100%; background-color: var(--gradiente-sec-color); }

        {{-- Esqueceu a senha --}}
        .forgot-pass{
            color: var(--text-sec-color);
            font-size: 0.9375rem;
            position: relative;
            top: 10px;
            left: 5px;
            text-decoration: none;            
        }

        .forgot-pass:hover {
            color: var(--neon);
            text-shadow: 0 0 8px var(--neon);
        }

        /* Social login */
        .social-login {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .divider {
            display: flex;
            align-items: center;
            color: var(--text-sec-color);
            font-size: 0.875rem;
        }

        .divider::before, .divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background-color: var(--border-color);
            margin: 0 1rem;
        }

        .social-button {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
            padding: 0.9rem;
            border: 1px solid var(--border-color);
            border-radius: 12px;
            font-weight: 500;
            cursor: pointer;
            transition: var(--transition);
            background-color: var(--bg-sec-color);
            color: var(--text-pri-color);
            font-size: 0.9rem;
        }

        .social-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            border-color: var(--neon);
        }

        .social-button i {
            font-size: 1.25rem;
            transition: var(--transition);
        }

        .social-button:hover i {
            transform: scale(1.1);
        }

        .google { color: #db4437; }
        .facebook { color: #4267B2; }

        /* Success message */
        .success-message {
            display: none;
            background-color: var(--success-color);
            color: white;
            padding: 1rem;
            border-radius: 0.5rem;
            margin-bottom: 1.5rem;
            text-align: center;
            animation: fadeIn 0.5s;
            box-shadow: 0 4px 12px rgba(0, 200, 83, 0.3);
        }

        /* Theme toggle */
        .theme-toggle {
            position: absolute;
            top: 1.5rem;
            right: 1.5rem;
            background: var(--bg-sec-color);
            border: 1px solid var(--border-color);
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition);
            z-index: 10;
        }

        .theme-toggle:hover {
            transform: rotate(30deg) scale(1.1);
            box-shadow: 0 0 10px var(--sol-lua);
        }

        .theme-toggle i {
            color: var(--sol-lua);
            font-size: 1.2rem;
            transition: var(--transition);
        }

        /* Floating particles */
        .particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        }

        .particle {
            position: absolute;
            background: linear-gradient(135deg, var(--gradiente-pri-color), var(--gradiente-sec-color));
            border-radius: 50%;
            opacity: 0.3;
            animation: float 15s infinite linear;
        }

        @keyframes float {
            0% { transform: translateY(0) rotate(0deg); }
            100% { transform: translateY(-1000px) rotate(720deg); }
        }

        /* Responsive adjustments */
        @media (max-width: 640px) {
            .auth-container {
                padding: 2em;
            }
            
            .auth-card {
                padding: 2em;
                border-radius: 12px;
            }
            
            .auth-header h1 {
                font-size: 1.75rem;
            }
        }
    </style>
@endpush

@section('content')
    <div class="auth-card">
        <button id="theme-toggle" class="theme-toggle">
            <img src="{{ asset('img/icons/moon.png') }}" alt="Toggle theme" id="theme-icon" width="20" height="20">
        </button>

        <div class="auth-header">
            <img src="{{asset('img/logo-internet.png')}}" class="logo-registro animate__animated animate__fadeIn animate__delay-1s" alt="Start To Finish">    
            <h1 class="animate__animated animate__fadeIn">Crie sua conta</h1>
            <p class="animate__animated animate__fadeIn animate__delay-1s">Seja um cliente ainda hoje</p>
        </div>

        @if(session('success'))
            <div class="success-message animate__animated animate__fadeIn">
                <i class="fas fa-check-circle"></i> {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}" class="auth-form">
            @csrf

            <div class="input-group animate__animated animate__fadeIn animate__delay-2s">
                <div class="input-wrapper">
                    <i class="fas fa-user input-icon"></i>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" required>
                    <label for="name">Nome completo</label>
                </div>
                @if($errors->has('name'))
                    <span class="error-message"><i class="fas fa-exclamation-circle"></i> {{ $errors->first('name') }}</span>
                @endif
            </div>  

            <div class="input-group animate__animated animate__fadeIn animate__delay-3s">
                <div class="input-wrapper">
                    <i class="fas fa-envelope input-icon"></i>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required>
                    <label for="email">Endereço de email</label>
                </div>
                @if($errors->has('email'))
                    <span class="error-message"><i class="fas fa-exclamation-circle"></i> {{ $errors->first('email') }}</span>
                @endif                    
            </div>

            <div class="input-group animate__animated animate__fadeIn animate__delay-4s">
                <div class="input-wrapper">
                    <i class="fas fa-lock input-icon"></i>
                    <input id="password" type="password" name="password" required>
                    <label for="password">Senha</label>
                    <button type="button" class="password-toggle">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
                <!-- O verificador de força será inserido automaticamente aqui via JavaScript -->
                @if($errors->has('password'))
                    <span class="error-message"><i class="fas fa-exclamation-circle"></i> {{ $errors->first('password') }}</span>
                @endif
            </div>

            <div class="input-group animate__animated animate__fadeIn animate__delay-5s">
                <div class="input-wrapper">
                    <i class="fas fa-lock input-icon"></i>
                    <input id="password_confirmation" type="password" name="password_confirmation" required>
                    <label for="password_confirmation">Confirme sua senha</label>
                    <button type="button" class="password-toggle">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
            </div>

            <button type="submit" class="auth-button animate__animated animate__fadeIn animate__delay-6s">
                <i class="fas fa-user-plus"></i>
                <span class="button-text">Me tornar cliente!</span>
            </button>

            <div class="divider animate__animated animate__fadeIn animate__delay-7s">OU</div>

            <div class="social-login animate__animated animate__fadeIn animate__delay-8s">
                <button type="button" class="social-button">
                    <i class="fab fa-google google"></i>
                    Continue com o Google
                </button>
                <button type="button" class="social-button">
                    <i class="fab fa-facebook-f facebook"></i>
                    Continue com o Facebook
                </button>
            </div>

            <div class="auth-links animate__animated animate__fadeIn animate__delay-9s">
                Já tem uma conta? <a href="{{ route('login') }}">Entrar</a>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <script difer>
        // Configurações globais
        const AppConfig = {
            debugMode: true,
            particleDensity: 30
        };

        // Classe principal para gerenciamento do tema
        document.addEventListener('DOMContentLoaded', function() {
            const themeToggle = document.getElementById('theme-toggle');
            const themeIcon = document.getElementById('theme-icon');
            const body = document.body;

            // Verificar tema salvo
            const savedTheme = localStorage.getItem('theme') || 'dark';
            
            // Aplicar tema inicial
            if (savedTheme === 'light') {
                enableLightMode();
            } else {
                enableDarkMode();
            }

            // Alternar tema
            themeToggle.addEventListener('click', function() {
                if (body.classList.contains('light-mode')) {
                    enableDarkMode();
                } else {
                    enableLightMode();
                }
            });

            function enableLightMode() {
                body.classList.add('light-mode');
                themeIcon.src = "{{ asset('img/icons/sun.png') }}";
                localStorage.setItem('theme', 'light');
            }

            function enableDarkMode() {
                body.classList.remove('light-mode');
                themeIcon.src = "{{ asset('img/icons/moon.png') }}";
                localStorage.setItem('theme', 'dark');
            }
        });

        // Classe para gerenciamento de senhas
        class PasswordManager {
            constructor() {
                this.passwordToggles = document.querySelectorAll('.password-toggle');
                this.init();
            }

            init() {
                if (!this.passwordToggles.length) {
                    this.logError('Nenhum toggle de senha encontrado');
                    return;
                }

                this.setupToggles();
            }

            setupToggles() {
                this.passwordToggles.forEach(toggle => {
                    const icon = toggle.querySelector('i') || this.createIcon(toggle);
                    toggle.addEventListener('click', () => this.togglePassword(toggle, icon));
                });
            }

            createIcon(toggle) {
                const icon = document.createElement('i');
                icon.className = 'fas fa-eye';
                toggle.appendChild(icon);
                this.logDebug('Ícone criado para toggle de senha');
                return icon;
            }

            togglePassword(toggle, icon) {
                try {
                    const inputWrapper = toggle.closest('.input-wrapper');
                    if (!inputWrapper) throw new Error('Input wrapper não encontrado');
                    
                    const input = inputWrapper.querySelector('input');
                    if (!input) throw new Error('Input não encontrado');
                    
                    if (input.type === 'password') {
                        input.type = 'text';
                        icon.classList.replace('fa-eye', 'fa-eye-slash');
                    } else {
                        input.type = 'password';
                        icon.classList.replace('fa-eye-slash', 'fa-eye');
                    }
                } catch (error) {
                    this.logError(error.message);
                }
            }

            logError(message) {
                console.error(`[PasswordManager] ${message}`);
            }

            logDebug(message) {
                if (AppConfig.debugMode) {
                    console.debug(`[PasswordManager] ${message}`);
                }
            }
        }

        // Verificador de força de senha
        document.addEventListener('DOMContentLoaded', function() {
            const passwordInput = document.getElementById('password');
            if (passwordInput) {
                // Criar elementos do medidor de força
                const strengthContainer = document.createElement('div');
                strengthContainer.className = 'password-strength';
                
                const strengthMeter = document.createElement('div');
                strengthMeter.className = 'strength-meter';
                
                const strengthMeterFill = document.createElement('div');
                strengthMeterFill.className = 'strength-meter-fill';
                strengthMeter.appendChild(strengthMeterFill);
                
                const strengthText = document.createElement('span');
                strengthText.className = 'strength-text';
                strengthText.textContent = 'Fraca';
                
                strengthContainer.appendChild(strengthMeter);
                strengthContainer.appendChild(strengthText);
                
                // Criar lista de requisitos
                const requirementsList = document.createElement('ul');
                requirementsList.className = 'password-requirements';
                requirementsList.innerHTML = `
                    <li data-requirement="length">Mínimo de 8 caracteres</li>
                    <li data-requirement="uppercase">Pelo menos 1 letra maiúscula</li>
                    <li data-requirement="number">Pelo menos 1 número</li>
                    <li data-requirement="special">Pelo menos 1 caractere especial</li>
                `;
                
                // Inserir após o input de senha
                passwordInput.parentNode.parentNode.appendChild(strengthContainer);
                passwordInput.parentNode.parentNode.appendChild(requirementsList);
                
                // Verificar força da senha em tempo real
                passwordInput.addEventListener('input', function() {
                    const password = this.value;
                    const strength = calculatePasswordStrength(password);
                    updateStrengthMeter(strength, strengthMeterFill, strengthText);
                    updateRequirementsList(password, requirementsList);
                });
            }
            
            function calculatePasswordStrength(password) {
                let strength = 0;
                
                // Comprimento
                if (password.length >= 8) strength++;
                if (password.length >= 12) strength++;
                
                // Variedade de caracteres
                if (/[A-Z]/.test(password)) strength++;
                if (/[0-9]/.test(password)) strength++;
                if (/[^A-Za-z0-9]/.test(password)) strength++;
                
                // Limitar a 4 para nosso medidor
                return Math.min(strength, 4);
            }
            
            function updateStrengthMeter(strength, meter, text) {
                // Reset classes
                meter.className = 'strength-meter-fill strength-' + strength;
                text.className = 'strength-text strength-label-' + strength;
                
                // Atualizar texto
                const strengthLabels = ['Muito fraca', 'Fraca', 'Média', 'Forte', 'Muito forte'];
                text.textContent = strengthLabels[strength];
            }
            
            function updateRequirementsList(password, list) {
                const requirements = {
                    length: password.length >= 8,
                    uppercase: /[A-Z]/.test(password),
                    number: /[0-9]/.test(password),
                    special: /[^A-Za-z0-9]/.test(password)
                };
                
                Array.from(list.children).forEach(item => {
                    const requirement = item.getAttribute('data-requirement');
                    if (requirements[requirement]) {
                        item.classList.add('requirement-met');
                    } else {
                        item.classList.remove('requirement-met');
                    }
                });
            }
        });

        // Classe para efeitos visuais
        class VisualEffects {
            static initParticles() {
                try {
                    const container = document.querySelector('.particles') || this.createParticlesContainer();
                    const count = window.innerWidth < 768 ? AppConfig.particleDensity / 2 : AppConfig.particleDensity;
                    
                    for (let i = 0; i < count; i++) {
                        container.appendChild(this.createParticle());
                    }
                } catch (error) {
                    console.error('[VisualEffects] Erro ao criar partículas:', error);
                }
            }

            static createParticlesContainer() {
                const container = document.createElement('div');
                container.className = 'particles';
                document.body.appendChild(container);
                return container;
            }

            static createParticle() {
                const particle = document.createElement('div');
                particle.className = 'particle';
                
                particle.style.cssText = `
                    width: ${Math.random() * 10 + 5}px;
                    height: ${Math.random() * 10 + 5}px;
                    left: ${Math.random() * window.innerWidth}px;
                    top: ${Math.random() * window.innerHeight}px;
                    animation-delay: ${Math.random() * 15}s;
                    animation-duration: ${Math.random() * 15 + 10}s;
                    opacity: ${Math.random() * 0.3 + 0.1};
                `;
                
                return particle;
            }
        }

        // Inicialização da aplicação
        new PasswordManager();
        VisualEffects.initParticles();

    </script>
@endpush
