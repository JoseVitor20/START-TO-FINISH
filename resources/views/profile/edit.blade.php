@extends('layouts.layout-dashboard')

@section('title', 'Perfil do usuário - ' . Auth::user()->name)

@push('estilosEcodigosDash')
    @vite(['resources/css/dashboard/dashboard.css', 'resources/js/dashboard/dashboard.js'])
@endpush

@section('content')
    <main class="profile-page" role="main">
        <div class="profile-container">
            <!-- Profile Information Section -->
            <section class="profile-section" aria-labelledby="profile-info-heading">
                <header class="section-header">
                    <div class="header-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="var(--neon)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="var(--neon)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h2 id="profile-info-heading" class="section-title">Informações do Perfil</h2>
                    <p class="section-subtitle">Gerencie suas informações pessoais</p>
                </header>

                <form method="post" action="{{ route('profile.update') }}" class="profile-form">
                    @csrf
                    @method('patch')

                    <!-- Username Field -->
                    <div class="form-field">
                        <div class="input-group">
                            <label for="name" class="input-label">
                                <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 12C14.2091 12 16 10.2091 16 8C16 5.79086 14.2091 4 12 4C9.79086 4 8 5.79086 8 8C8 10.2091 9.79086 12 12 12Z" stroke="var(--text-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M6 20C6 17.7909 7.79086 16 10 16H14C16.2091 16 18 17.7909 18 20" stroke="var(--text-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Nome
                            </label>
                            <input id="name" name="name" type="text" class="text-input"
                                value="{{ old('name', auth()->user()->name) }}" required autofocus autocomplete="name">
                        </div>
                    </div>

                    <!-- Email Field -->
                    <div class="form-field">
                        <div class="input-group">
                            <label for="email" class="input-label">
                                <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z" stroke="var(--text-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M22 6L12 13L2 6" stroke="var(--text-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                E-mail
                            </label>
                            <input id="email" name="email" type="email" class="text-input"
                                value="{{ old('email', auth()->user()->email) }}" required autocomplete="email">
                        </div>
                    </div>

                    <!-- Document Field -->
                    <div class="form-field">
                        <div class="input-group">
                            <label for="document" class="input-label">
                                <i class="fa-regular fa-address-card" style="color: var(--text-sec-color);"></i>
                                CPF/CNPJ
                            </label>
                            <input id="document" name="document" type="text" inputmode="numeric" class="text-input"
                                value="{{ old('document', auth()->user()->document) }}" required autocomplete="document">
                        </div>
                    </div>                    

                    <!-- Address Field -->
                    <div class="form-field">
                        <div class="input-group">
                            <label for="address" class="input-label">
                                <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" stroke="var(--text-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Endereço
                            </label>
                            <input id="address" name="address" type="text" class="text-input"
                                value="{{ old('address', auth()->user()->address) }}" required autocomplete="address">
                        </div>
                    </div>        

                    <div class="form-actions">
                        <button type="submit" class="save-button">
                            <span>Salvar Alterações</span>
                            <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 21H5C3.89543 21 3 20.1046 3 19V5C3 3.89543 3.89543 3 5 3H16.1716C16.702 3 17.2107 3.21071 17.5858 3.58579L20.4142 6.41421C20.7893 6.78929 21 7.29799 21 7.82843V19C21 20.1046 20.1046 21 19 21Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M17 21V13H7V21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M7 3V8H15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>

                        @if (session('status') === 'profile-updated')
                            <div class="success-message" role="alert">
                                <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22 11.08V12C21.9988 14.1564 21.3005 16.2547 20.0093 17.9818C18.7182 19.709 16.9033 20.9725 14.8354 21.5839C12.7674 22.1953 10.5573 22.1219 8.53447 21.3746C6.51168 20.6273 4.78465 19.2461 3.61096 17.4371C2.43727 15.628 1.87979 13.4881 2.02168 11.3363C2.16356 9.18455 2.99721 7.13631 4.39828 5.49706C5.79935 3.85781 7.69279 2.71537 9.79619 2.24013C11.8996 1.7649 14.1003 1.98232 16.07 2.85999" stroke="var(--gradiente-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M22 4L12 14.01L9 11.01" stroke="var(--gradiente-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span>Salvo com sucesso</span>
                            </div>
                        @endif
                    </div>
                </form>
            </section>            
            
            <!-- Password Update Section -->
            <section class="password-section" aria-labelledby="password-update-heading">
                <header class="section-header">
                    <div class="header-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 15V17M6 21H18C19.1046 21 20 20.1046 20 19V13C20 11.8954 19.1046 11 18 11H6C4.89543 11 4 11.8954 4 13V19C4 20.1046 4.89543 21 6 21ZM16 11V7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7V11H16Z" stroke="var(--neon)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h2 id="password-update-heading" class="section-title">Atualizar Senha</h2>
                    <p class="section-subtitle">Certifique-se de usar uma senha forte e única</p>
                </header>

                <form method="post" action="{{ route('password.update') }}" class="password-form">
                    @csrf
                    @method('put')

                    <!-- Current Password Field -->
                    <div class="form-field">
                        <div class="input-group">
                            <label for="current_password" class="input-label">
                                <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 15V17M6 21H18C19.1046 21 20 20.1046 20 19V13C20 11.8954 19.1046 11 18 11H6C4.89543 11 4 11.8954 4 13V19C4 20.1046 4.89543 21 6 21ZM16 11V7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7V11H16Z" stroke="var(--text-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Senha atual
                            </label>
                            <div class="password-input-wrapper">
                                <input id="current_password" name="current_password" type="password" class="text-input" autocomplete="current-password" required>
                                <button type="button" class="toggle-password" aria-label="Mostrar senha" aria-controls="current_password">
                                    <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 12C1 12 5 4 12 4C19 4 23 12 23 12C23 12 19 20 12 20C5 20 1 12 1 12Z" stroke="var(--text-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="var(--text-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div>
                            @error('current_password')
                                <p class="error-message" role="alert">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- New Password Field -->
                    <div class="form-field">
                        <div class="input-group">
                            <label for="password" class="input-label">
                                <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19 11H5C3.89543 11 3 11.8954 3 13V19C3 20.1046 3.89543 21 5 21H19C20.1046 21 21 20.1046 21 19V13C21 11.8954 20.1046 11 19 11Z" stroke="var(--text-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M7 11V7C7 5.67392 7.52678 4.40215 8.46447 3.46447C9.40215 2.52678 10.6739 2 12 2C13.3261 2 14.5979 2.52678 15.5355 3.46447C16.4732 4.40215 17 5.67392 17 7V11" stroke="var(--text-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Nova senha
                            </label>
                            <div class="password-input-wrapper">
                                <input id="password" name="password" type="password" class="text-input" autocomplete="new-password" required>
                                <button type="button" class="toggle-password" aria-label="Mostrar senha" aria-controls="password">
                                    <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 12C1 12 5 4 12 4C19 4 23 12 23 12C23 12 19 20 12 20C5 20 1 12 1 12Z" stroke="var(--text-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="var(--text-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div>
                            @error('password')
                                <p class="error-message" role="alert">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Confirm Password Field -->
                    <div class="form-field">
                        <div class="input-group">
                            <label for="password_confirmation" class="input-label">
                                <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19 11H5C3.89543 11 3 11.8954 3 13V19C3 20.1046 3.89543 21 5 21H19C20.1046 21 21 20.1046 21 19V13C21 11.8954 20.1046 11 19 11Z" stroke="var(--text-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M7 11V7C7 5.67392 7.52678 4.40215 8.46447 3.46447C9.40215 2.52678 10.6739 2 12 2C13.3261 2 14.5979 2.52678 15.5355 3.46447C16.4732 4.40215 17 5.67392 17 7V11" stroke="var(--text-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Confirmar nova senha
                            </label>
                            <div class="password-input-wrapper">
                                <input id="password_confirmation" name="password_confirmation" type="password" class="text-input" autocomplete="new-password" required>
                                <button type="button" class="toggle-password" aria-label="Mostrar senha" aria-controls="password_confirmation">
                                    <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 12C1 12 5 4 12 4C19 4 23 12 23 12C23 12 19 20 12 20C5 20 1 12 1 12Z" stroke="var(--text-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="var(--text-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="update-button">
                            <span>Atualizar Senha</span>
                            <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 15V17M6 21H18C19.1046 21 20 20.1046 20 19V13C20 11.8954 19.1046 11 18 11H6C4.89543 11 4 11.8954 4 13V19C4 20.1046 4.89543 21 6 21ZM16 11V7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7V11H16Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>

                        @if (session('status') === 'password-updated')
                            <div class="success-message" role="alert">
                                <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22 11.08V12C21.9988 14.1564 21.3005 16.2547 20.0093 17.9818C18.7182 19.709 16.9033 20.9725 14.8354 21.5839C12.7674 22.1953 10.5573 22.1219 8.53447 21.3746C6.51168 20.6273 4.78465 19.2461 3.61096 17.4371C2.43727 15.628 1.87979 13.4881 2.02168 11.3363C2.16356 9.18455 2.99721 7.13631 4.39828 5.49706C5.79935 3.85781 7.69279 2.71537 9.79619 2.24013C11.8996 1.7649 14.1003 1.98232 16.07 2.85999" stroke="var(--gradiente-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M22 4L12 14.01L9 11.01" stroke="var(--gradiente-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span>Senha atualizada com sucesso</span>
                            </div>
                        @endif
                    </div>
                </form>
            </section>
            
            <!-- Account Deletion Section -->
            <section class="delete-section" aria-labelledby="account-deletion-heading">
                <header class="section-header">
                    <div class="header-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19 7L18.1327 19.1425C18.0579 20.1891 17.187 21 16.1378 21H7.86224C6.81296 21 5.94208 20.1891 5.86732 19.1425L5 7M10 11V17M14 11V17M15 7V4C15 3.44772 14.5523 3 14 3H10C9.44772 3 9 3.44772 9 4V7M4 7H20" stroke="#ef4444" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h2 id="account-deletion-heading" class="section-title">Excluir Conta</h2>
                    <p class="section-subtitle">Esta ação não pode ser desfeita</p>
                </header>

                <form method="post" action="{{ route('profile.destroy') }}" class="delete-form">
                    @csrf
                    @method('delete')

                    <!-- Password Confirmation for Deletion -->
                    <div class="form-field">
                        <div class="input-group">
                            <label for="delete_password" class="input-label">
                                <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 15V17M6 21H18C19.1046 21 20 20.1046 20 19V13C20 11.8954 19.1046 11 18 11H6C4.89543 11 4 11.8954 4 13V19C4 20.1046 4.89543 21 6 21ZM16 11V7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7V11H16Z" stroke="var(--text-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Confirme sua senha
                            </label>
                            <div class="password-input-wrapper">
                                <input id="delete_password" name="password" type="password" class="text-input" required>
                                <button type="button" class="toggle-password" aria-label="Mostrar senha" aria-controls="delete_password">
                                    <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 12C1 12 5 4 12 4C19 4 23 12 23 12C23 12 19 20 12 20C5 20 1 12 1 12Z" stroke="var(--text-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="var(--text-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div>
                            @error('password')
                                <p class="error-message" role="alert">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="button" class="delete-button" id="delete-account-btn" aria-expanded="false" aria-controls="delete-confirmation-modal">
                            <span>Excluir Minha Conta</span>
                            <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 7L18.1327 19.1425C18.0579 20.1891 17.187 21 16.1378 21H7.86224C6.81296 21 5.94208 20.1891 5.86732 19.1425L5 7M10 11V17M14 11V17M15 7V4C15 3.44772 14.5523 3 14 3H10C9.44772 3 9 3.44772 9 4V7M4 7H20" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>

                        @if (session('status') === 'account-deleted')
                            <div class="success-message" role="alert">
                                <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22 11.08V12C21.9988 14.1564 21.3005 16.2547 20.0093 17.9818C18.7182 19.709 16.9033 20.9725 14.8354 21.5839C12.7674 22.1953 10.5573 22.1219 8.53447 21.3746C6.51168 20.6273 4.78465 19.2461 3.61096 17.4371C2.43727 15.628 1.87979 13.4881 2.02168 11.3363C2.16356 9.18455 2.99721 7.13631 4.39828 5.49706C5.79935 3.85781 7.69279 2.71537 9.79619 2.24013C11.8996 1.7649 14.1003 1.98232 16.07 2.85999" stroke="var(--gradiente-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M22 4L12 14.01L9 11.01" stroke="var(--gradiente-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span>Conta excluída com sucesso</span>
                            </div>
                        @endif
                    </div>
                </form>
            </section>
        </div>
    </main>
@endsection