@extends('layouts.app')

@section('title', 'Start To Finish - Entrar na conta')

@push('estilosEcodigos')
    @vite(['resources/css/autenticacao/login.css', 'resources/js/autenticacao/login.js'])
@endpush

@section('content')
    <!-- Partículas Background -->
    <div id="particles-js" class="particles"></div>
    <div class="LOGIN-card">
        <button id="theme-toggle" class="LOGIN__theme-toggle">
            <i id="theme-icon" class="fas fa-moon"></i>
        </button>

        <div class="LOGIN__header">
            <img src="{{asset('img/logo-internet.png')}}" class="LOGIN__logo animate__animated animate__fadeIn animate__delay-1s" alt="Start To Finish">    
            <h1 class="LOGIN__title animate__animated animate__fadeIn">Acesse sua conta</h1>
            <p class="LOGIN__subtitle animate__animated animate__fadeIn animate__delay-1s">Quem bom que você voltou🤗</p>
        </div>

        @if(session('success'))
            <div class="LOGIN__success-message animate__animated animate__fadeIn">
                <i class="fas fa-check-circle"></i> {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="LOGIN__form">
            @csrf  

            <div class="LOGIN__input-group animate__animated animate__fadeIn animate__delay-2s">
                <div class="LOGIN__input-wrapper">
                    <i class="fas fa-envelope LOGIN__input-icon"></i>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required tabindex="-1">
                    <label for="email" class="LOGIN__input-label">Endereço de email</label>
                </div>
                @if($errors->has('email'))
                    <span class="LOGIN__error-message"><i class="fas fa-exclamation-circle"></i> {{ $errors->first('email') }}</span>
                @endif                    
            </div>

            <div class="LOGIN__input-group animate__animated animate__fadeIn animate__delay-3s">
                <div class="LOGIN__input-wrapper">
                    <i class="fas fa-lock LOGIN__input-icon"></i>
                    <input id="password" type="password" name="password" required tabindex="-1">
                    <label for="password" class="LOGIN__input-label">Senha</label>
                    <button type="button" class="LOGIN__password-toggle">
                        <i class="fas fa-eye"></i>
                    </button>
                    <a class="LOGIN__forgot-pass animate__animated animate__fadeIn animate__delay-3s" href="{{ route('password.request') }}">Esqueceu sua senha?</a>                      
                </div>
            </div>

            <button type="submit" class="LOGIN__button LOGIN__button--primary">
                <i class="fas fa-user-plus"></i>
                <span class="LOGIN__button-text">Entrar na conta</span>
            </button>

{{--             <div class="LOGIN__divider">OU</div>

            <div class="LOGIN__social">
                <button type="button" class="LOGIN__social-button">
                    <i class="fab fa-google LOGIN__social-icon LOGIN__social-icon--google"></i>
                    Continue com o Google
                </button>
                <button type="button" class="LOGIN__social-button">
                    <i class="fab fa-facebook-f LOGIN__social-icon LOGIN__social-icon--facebook"></i>
                    Continue com o Facebook
                </button>
            </div> --}}

            <div class="LOGIN__footer animate__animated animate__fadeIn animate__delay-6s">
                Não possui uma conta? <a href="{{ route('register') }}" class="LOGIN__footer-link">Crie uma agora</a>
            </div>
        </form>
    </div>
@endsection
