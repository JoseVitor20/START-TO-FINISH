@extends('layouts.app')

@section('title', 'Start To Finish - Registrar-se')

@push('estilosEcodigos')
    @vite(['resources/css/autenticacao/register.css', 'resources/js/autenticacao/register.js'])
@endpush

@section('content')
    <!-- Partículas Background -->
    <div id="particles-js" class="REGISTER__particles"></div>

    <div class="REGISTRO-card">
        <button id="REGISTRO-theme-toggle" class="REGISTRO__theme-toggle">
            <i id="REGISTRO-theme-icon" class="fas fa-moon"></i>
        </button>     

        <div class="REGISTRO-card__header">
            <img src="{{ asset('img/logo-internet.png') }}" class="REGISTRO-card__logo animate__animated animate__fadeIn animate__delay-1s" alt="Start To Finish">    
            <h1 class="REGISTRO-card__title animate__animated animate__fadeIn">Crie sua conta</h1>
            <p class="REGISTRO-card__subtitle animate__animated animate__fadeIn animate__delay-1s">Seja um cliente ainda hoje</p>
        </div>

        @if(session('success'))
            <div class="REGISTRO-card__success-message animate__animated animate__fadeIn">
                <i class="fas fa-check-circle"></i> {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}" class="REGISTRO-card__form">
            @csrf

            <div class="REGISTRO-form__group animate__animated animate__fadeIn animate__delay-2s">
                <div class="REGISTRO-form__input-wrapper">
                    <i class="fas fa-user REGISTRO-form__input-icon"></i>
                    <input id="REGISTRO-name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name">
                    <label for="REGISTRO-name" class="REGISTRO-form__label">Nome completo</label>
                </div>
                @if($errors->has('name'))
                    <span class="REGISTRO-form__error-message"><i class="fas fa-exclamation-circle"></i> {{ $errors->first('name') }}</span>
                @endif
            </div>  

            <div class="REGISTRO-form__group animate__animated animate__fadeIn animate__delay-3s">
                <div class="REGISTRO-form__input-wrapper">
                    <i class="fas fa-envelope REGISTRO-form__input-icon"></i>
                    <input id="REGISTRO-email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">
                    <label for="REGISTRO-email" class="REGISTRO-form__label">Endereço de email</label>
                </div>
                @if($errors->has('email'))
                    <span class="REGISTRO-form__error-message"><i class="fas fa-exclamation-circle"></i> {{ $errors->first('email') }}</span>
                @endif                    
            </div>

            <div class="REGISTRO-form__group animate__animated animate__fadeIn animate__delay-4s">
                <div class="REGISTRO-form__input-wrapper">
                    <i class="fas fa-lock REGISTRO-form__input-icon"></i>
                    <input id="REGISTRO-password" type="password" name="password" required autocomplete="new-password">
                    <label for="REGISTRO-password" class="REGISTRO-form__label">Senha</label>
                    <button type="button" class="REGISTRO-form__password-toggle">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
                @if($errors->has('password'))
                    <span class="REGISTRO-form__error-message"><i class="fas fa-exclamation-circle"></i> {{ $errors->first('password') }}</span>
                @endif
            </div>

            <div class="REGISTRO-form__group animate__animated animate__fadeIn animate__delay-5s">
                <div class="REGISTRO-form__input-wrapper">
                    <i class="fas fa-lock REGISTRO-form__input-icon"></i>
                    <input id="REGISTRO-password-confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
                    <label for="REGISTRO-password-confirmation" class="REGISTRO-form__label">Confirme sua senha</label>
                    <button type="button" class="REGISTRO-form__password-toggle">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
            </div>

            <button type="submit" class="REGISTRO-form__submit-button animate__animated animate__fadeIn animate__delay-6s">
                <i class="fas fa-user-plus"></i>
                <span class="REGISTRO-form__button-text">Me tornar cliente!</span>
            </button>

{{-- 
            <div class="REGISTRO-form__divider animate__animated animate__fadeIn animate__delay-7s">OU</div>

            <div class="REGISTRO-form__social-login animate__animated animate__fadeIn animate__delay-8s">
                <button type="button" class="REGISTRO-form__social-button">
                    <i class="fab fa-google REGISTRO-form__social-icon--google"></i>
                    Continue com o Google
                </button>
                <button type="button" class="REGISTRO-form__social-button">
                    <i class="fab fa-facebook-f REGISTRO-form__social-icon--facebook"></i>
                    Continue com o Facebook
                </button>
            </div> 
--}}

            <div class="REGISTRO-form__links animate__animated animate__fadeIn animate__delay-9s">
                Já tem uma conta? <a href="{{ route('login') }}" class="REGISTRO-form__link">Entrar</a>
            </div>
        </form>
    </div>
@endsection
