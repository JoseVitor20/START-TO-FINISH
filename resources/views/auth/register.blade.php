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
            <img src="{{ asset('img/logo-internet.png') }}" class="REGISTRO-card__logo animate__animated animate__fadeIn" style="animation-delay: 0.2s; animation-duration: 0.6s;" alt="Start To Finish">    
            <h1 class="REGISTRO-card__title animate__animated animate__fadeIn" style="animation-delay: 0.4s; animation-duration: 0.6s;">Crie sua conta</h1>
            <p class="REGISTRO-card__subtitle animate__animated animate__fadeIn" style="animation-delay: 0.6s; animation-duration: 0.6s;">Seja um cliente ainda hoje</p>
        </div>

        @if(session('success'))
            <div class="REGISTRO-card__success-message animate__animated animate__fadeIn" style="animation-delay: 0.8s; animation-duration: 0.6s;">
                <i class="fas fa-check-circle"></i> {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}" class="REGISTRO-card__form">
            @csrf

            <div class="REGISTRO-form__group animate__animated animate__fadeIn" style="animation-delay: 1s; animation-duration: 0.6s;">
                <div class="REGISTRO-form__input-wrapper">
                    <i class="fas fa-user REGISTRO-form__input-icon"></i>
                    <input id="REGISTRO-name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name">
                    <label for="REGISTRO-name" class="REGISTRO-form__label">Nome completo</label>
                </div>
                @if($errors->has('name'))
                    <span class="REGISTRO-form__error-message"><i class="fas fa-exclamation-circle"></i> {{ $errors->first('name') }}</span>
                @endif
            </div>  

            <div class="REGISTRO-form__group animate__animated animate__fadeIn" style="animation-delay: 1.2s; animation-duration: 0.6s;">
                <div class="REGISTRO-form__input-wrapper">
                    <i class="fas fa-envelope REGISTRO-form__input-icon"></i>
                    <input id="REGISTRO-email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">
                    <label for="REGISTRO-email" class="REGISTRO-form__label">Endereço de email</label>
                </div>
                @if($errors->has('email'))
                    <span class="REGISTRO-form__error-message"><i class="fas fa-exclamation-circle"></i> {{ $errors->first('email') }}</span>
                @endif                    
            </div>

            <div class="REGISTRO-form__group animate__animated animate__fadeIn" style="animation-delay: 1.4s; animation-duration: 0.6s;">
                <div class="REGISTRO-form__input-wrapper">
                    <i class="fas fa-id-card REGISTRO-form__input-icon"></i>
                    <input id="REGISTRO-document" type="numeric" name="document" value="{{ old('document') }}" required autocomplete="document">
                    <label for="REGISTRO-document" class="REGISTRO-form__label">CPF ou CNPJ</label>
                </div>
                @if($errors->has('document'))
                    <span class="REGISTRO-form__error-message"><i class="fas fa-exclamation-circle"></i> {{ $errors->first('document') }}</span>
                @endif                    
            </div>

            <div class="REGISTRO-form__group animate__animated animate__fadeIn" style="animation-delay: 1.6s; animation-duration: 0.6s;">
                <div class="REGISTRO-form__input-wrapper">
                    <i class="fas fa-map-marker-alt REGISTRO-form__input-icon"></i>
                    <input id="REGISTRO-address" type="text" name="address" value="{{ old('address') }}" required autocomplete="address">
                    <label for="REGISTRO-address" class="REGISTRO-form__label">Endereço</label>
                </div>
                @if($errors->has('address'))
                    <span class="REGISTRO-form__error-message"><i class="fas fa-exclamation-circle"></i> {{ $errors->first('address') }}</span>
                @endif                    
            </div>           

            <div class="REGISTRO-form__group animate__animated animate__fadeIn" style="animation-delay: 1.8s; animation-duration: 0.6s;">
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

            <div class="REGISTRO-form__group animate__animated animate__fadeIn" style="animation-delay: 2s; animation-duration: 0.6s;">
                <div class="REGISTRO-form__input-wrapper">
                    <i class="fas fa-lock REGISTRO-form__input-icon"></i>
                    <input id="REGISTRO-password-confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
                    <label for="REGISTRO-password-confirmation" class="REGISTRO-form__label">Confirme sua senha</label>
                    <button type="button" class="REGISTRO-form__password-toggle">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
            </div>

            <button type="submit" class="REGISTRO-form__submit-button animate__animated animate__fadeIn" style="animation-delay: 2.2s; animation-duration: 0.6s;">
                <i class="fas fa-user-plus"></i>
                <span class="REGISTRO-form__button-text">Me tornar cliente!</span>
            </button>

            <div class="REGISTRO-form__links animate__animated animate__fadeIn" style="animation-delay: 2.4s; animation-duration: 0.6s;">
                Já tem uma conta? <a href="{{ route('login') }}" class="REGISTRO-form__link">Entrar</a>
            </div>
        </form>
    </div>
@endsection
