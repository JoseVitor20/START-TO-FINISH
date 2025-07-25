@extends('layouts.layout-dashboard')

@section('title', 'Perfil do usuário - ' . Auth::user()->name)

@section('content')
<main class="profile-page">
    <div class="profile-container">
        <!-- Seção de Informações do Perfil -->
        <section class="profile-section">
            <div class="section-header">
                <div class="header-icon">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="var(--neon)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="var(--neon)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h2 class="section-title">Informações do Perfil</h2>
                <p class="section-subtitle">Gerencie suas informações pessoais</p>
            </div>

            <form method="post" action="{{ route('profile.update') }}" class="profile-form">
                @csrf
                @method('patch')

                <div class="form-field">
                    <div class="input-group">
                        <label for="name" class="input-label">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 12C14.2091 12 16 10.2091 16 8C16 5.79086 14.2091 4 12 4C9.79086 4 8 5.79086 8 8C8 10.2091 9.79086 12 12 12Z" stroke="var(--text-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M6 20C6 17.7909 7.79086 16 10 16H14C16.2091 16 18 17.7909 18 20" stroke="var(--text-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Nome
                        </label>
                        <input id="name" name="name" type="text" class="text-input"
                            value="{{ old('name', auth()->user()->name) }}" required autofocus>
                    </div>
                </div>

                <div class="form-field">
                    <div class="input-group">
                        <label for="email" class="input-label">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z" stroke="var(--text-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M22 6L12 13L2 6" stroke="var(--text-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            E-mail
                        </label>
                        <input id="email" name="email" type="email" class="text-input"
                            value="{{ old('email', auth()->user()->email) }}" required>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="submit" class="save-button">
                        <span>Salvar Alterações</span>
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19 21H5C3.89543 21 3 20.1046 3 19V5C3 3.89543 3.89543 3 5 3H16.1716C16.702 3 17.2107 3.21071 17.5858 3.58579L20.4142 6.41421C20.7893 6.78929 21 7.29799 21 7.82843V19C21 20.1046 20.1046 21 19 21Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M17 21V13H7V21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M7 3V8H15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>

                    @if (session('status') === 'profile-updated')
                        <div class="success-message">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22 11.08V12C21.9988 14.1564 21.3005 16.2547 20.0093 17.9818C18.7182 19.709 16.9033 20.9725 14.8354 21.5839C12.7674 22.1953 10.5573 22.1219 8.53447 21.3746C6.51168 20.6273 4.78465 19.2461 3.61096 17.4371C2.43727 15.628 1.87979 13.4881 2.02168 11.3363C2.16356 9.18455 2.99721 7.13631 4.39828 5.49706C5.79935 3.85781 7.69279 2.71537 9.79619 2.24013C11.8996 1.7649 14.1003 1.98232 16.07 2.85999" stroke="var(--gradiente-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M22 4L12 14.01L9 11.01" stroke="var(--gradiente-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span>Salvo com sucesso</span>
                        </div>
                    @endif
                </div>
            </form>
        </section>            
        
        <!-- Seção de Atualização de Senha -->
        <section class="password-section">
            <div class="section-header">
                <div class="header-icon">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 15V17M6 21H18C19.1046 21 20 20.1046 20 19V13C20 11.8954 19.1046 11 18 11H6C4.89543 11 4 11.8954 4 13V19C4 20.1046 4.89543 21 6 21ZM16 11V7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7V11H16Z" stroke="var(--neon)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h2 class="section-title">Atualizar Senha</h2>
                <p class="section-subtitle">Certifique-se de usar uma senha forte e única</p>
            </div>

            <form method="post" action="{{ route('password.update') }}" class="password-form">
                @csrf
                @method('put')

                <div class="form-field">
                    <div class="input-group">
                        <label for="current_password" class="input-label">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 15V17M6 21H18C19.1046 21 20 20.1046 20 19V13C20 11.8954 19.1046 11 18 11H6C4.89543 11 4 11.8954 4 13V19C4 20.1046 4.89543 21 6 21ZM16 11V7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7V11H16Z" stroke="var(--text-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Senha atual
                        </label>
                        <div class="password-input-wrapper">
                            <input id="current_password" name="current_password" type="password" class="text-input" autocomplete="current-password" required>
                            <button type="button" class="toggle-password" aria-label="Mostrar senha">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 12C1 12 5 4 12 4C19 4 23 12 23 12C23 12 19 20 12 20C5 20 1 12 1 12Z" stroke="var(--text-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="var(--text-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                        @error('current_password')
                            <p class="error-message">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-field">
                    <div class="input-group">
                        <label for="password" class="input-label">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 11H5C3.89543 11 3 11.8954 3 13V19C3 20.1046 3.89543 21 5 21H19C20.1046 21 21 20.1046 21 19V13C21 11.8954 20.1046 11 19 11Z" stroke="var(--text-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M7 11V7C7 5.67392 7.52678 4.40215 8.46447 3.46447C9.40215 2.52678 10.6739 2 12 2C13.3261 2 14.5979 2.52678 15.5355 3.46447C16.4732 4.40215 17 5.67392 17 7V11" stroke="var(--text-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Nova senha
                        </label>
                        <div class="password-input-wrapper">
                            <input id="password" name="password" type="password" class="text-input" autocomplete="new-password" required>
                            <button type="button" class="toggle-password" aria-label="Mostrar senha">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 12C1 12 5 4 12 4C19 4 23 12 23 12C23 12 19 20 12 20C5 20 1 12 1 12Z" stroke="var(--text-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="var(--text-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                        @error('password')
                            <p class="error-message">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-field">
                    <div class="input-group">
                        <label for="password_confirmation" class="input-label">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 11H5C3.89543 11 3 11.8954 3 13V19C3 20.1046 3.89543 21 5 21H19C20.1046 21 21 20.1046 21 19V13C21 11.8954 20.1046 11 19 11Z" stroke="var(--text-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M7 11V7C7 5.67392 7.52678 4.40215 8.46447 3.46447C9.40215 2.52678 10.6739 2 12 2C13.3261 2 14.5979 2.52678 15.5355 3.46447C16.4732 4.40215 17 5.67392 17 7V11" stroke="var(--text-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Confirmar nova senha
                        </label>
                        <div class="password-input-wrapper">
                            <input id="password_confirmation" name="password_confirmation" type="password" class="text-input" autocomplete="new-password" required>
                            <button type="button" class="toggle-password" aria-label="Mostrar senha">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 15V17M6 21H18C19.1046 21 20 20.1046 20 19V13C20 11.8954 19.1046 11 18 11H6C4.89543 11 4 11.8954 4 13V19C4 20.1046 4.89543 21 6 21ZM16 11V7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7V11H16Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>

                    @if (session('status') === 'password-updated')
                        <div class="success-message">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22 11.08V12C21.9988 14.1564 21.3005 16.2547 20.0093 17.9818C18.7182 19.709 16.9033 20.9725 14.8354 21.5839C12.7674 22.1953 10.5573 22.1219 8.53447 21.3746C6.51168 20.6273 4.78465 19.2461 3.61096 17.4371C2.43727 15.628 1.87979 13.4881 2.02168 11.3363C2.16356 9.18455 2.99721 7.13631 4.39828 5.49706C5.79935 3.85781 7.69279 2.71537 9.79619 2.24013C11.8996 1.7649 14.1003 1.98232 16.07 2.85999" stroke="var(--gradiente-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M22 4L12 14.01L9 11.01" stroke="var(--gradiente-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span>Senha atualizada com sucesso</span>
                        </div>
                    @endif
                </div>
            </form>
        </section>
        
        <!-- Seção de Exclusão de Conta -->
        <section class="delete-section">
            <div class="section-header">
                <div class="header-icon">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 7L18.1327 19.1425C18.0579 20.1891 17.187 21 16.1378 21H7.86224C6.81296 21 5.94208 20.1891 5.86732 19.1425L5 7M10 11V17M14 11V17M15 7V4C15 3.44772 14.5523 3 14 3H10C9.44772 3 9 3.44772 9 4V7M4 7H20" stroke="#ef4444" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h2 class="section-title">Excluir Conta</h2>
                <p class="section-subtitle">Esta ação não pode ser desfeita</p>
            </div>

            <form method="post" action="{{ route('profile.destroy') }}" class="delete-form">
                @csrf
                @method('delete')

                <div class="form-field">
                    <div class="input-group">
                        <label for="password" class="input-label">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 15V17M6 21H18C19.1046 21 20 20.1046 20 19V13C20 11.8954 19.1046 11 18 11H6C4.89543 11 4 11.8954 4 13V19C4 20.1046 4.89543 21 6 21ZM16 11V7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7V11H16Z" stroke="var(--text-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Confirme sua senha
                        </label>
                        <div class="password-input-wrapper">
                            <input id="password" name="password" type="password" class="text-input" required>
                            <button type="button" class="toggle-password" aria-label="Mostrar senha">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 12C1 12 5 4 12 4C19 4 23 12 23 12C23 12 19 20 12 20C5 20 1 12 1 12Z" stroke="var(--text-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="var(--text-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                        @error('password')
                            <p class="error-message">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-actions">
                    <button type="button" class="delete-button" id="delete-account-btn">
                        <span>Excluir Minha Conta</span>
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19 7L18.1327 19.1425C18.0579 20.1891 17.187 21 16.1378 21H7.86224C6.81296 21 5.94208 20.1891 5.86732 19.1425L5 7M10 11V17M14 11V17M15 7V4C15 3.44772 14.5523 3 14 3H10C9.44772 3 9 3.44772 9 4V7M4 7H20" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>

                    @if (session('status') === 'account-deleted')
                        <div class="success-message">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
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

<style>
    /* Estilos base */
    .profile-page {
        padding: 2rem 0;
        background-color: var(--bg-pri-color);
        color: var(--text-pri-color);
        min-height: 100vh;
    }

    .profile-container {
        max-width: 800px;
        margin: 0 auto;
        padding: 0 1.5rem;
        display: flex;
        flex-direction: column;
        gap: 2rem;
    }

    /* Seções */
    .profile-section,
    .password-section,
    .delete-section {
        background-color: var(--card-bg);
        padding: 2rem;
        border-radius: 12px;
        box-shadow: var(--box-shadow);
        border: 1px solid var(--border-color);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .profile-section:hover,
    .password-section:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }

    .delete-section:hover {
        box-shadow: 0 10px 25px rgba(239, 68, 68, 0.1);
    }

    /* Cabeçalhos */
    .section-header {
        margin-bottom: 2rem;
        position: relative;
        padding-bottom: 1rem;
    }

    .section-header::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 50px;
        height: 3px;
        background: linear-gradient(90deg, var(--gradiente-pri-color), var(--gradiente-sec-color));
    }

    .delete-section .section-header::after {
        background: #ef4444;
    }

    .header-icon {
        width: 48px;
        height: 48px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(0, 255, 253, 0.1);
        border-radius: 50%;
        margin-bottom: 1rem;
    }

    .delete-section .header-icon {
        background: rgba(239, 68, 68, 0.1);
    }

    .section-title {
        font-size: 1.5rem;
        font-weight: 600;
        color: var(--text-pri-color);
        margin: 0 0 0.5rem 0;
    }

    .section-subtitle {
        font-size: 0.95rem;
        color: var(--text-sec-color);
        line-height: 1.6;
        margin: 0;
    }

    /* Formulários */
    .profile-form,
    .password-form,
    .delete-form {
        display: flex;
        flex-direction: column;
        gap: 1.75rem;
    }

    /* Campos do formulário */
    .form-field {
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
    }

    .input-group {
        position: relative;
    }

    .input-label {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.95rem;
        font-weight: 500;
        color: var(--text-pri-color);
    }

    .input-label svg {
        width: 18px;
        height: 18px;
    }

    .text-input {
        width: 100%;
        padding: 0.85rem 1rem;
        border: 1px solid var(--border-color);
        border-radius: 8px;
        background-color: var(--bg-sec-color);
        color: var(--text-pri-color);
        font-size: 0.95rem;
        transition: all 0.3s ease;
    }

    .text-input:focus {
        outline: none;
        border-color: var(--neon);
        box-shadow: 0 0 0 3px rgba(0, 255, 253, 0.1);
    }

    .password-input-wrapper {
        position: relative;
    }

    .toggle-password {
        position: absolute;
        right: 12px;
        top: 50%;
        transform: translateY(-50%);
        background: transparent;
        border: none;
        cursor: pointer;
        padding: 0.25rem;
    }

    .toggle-password svg {
        width: 20px;
        height: 20px;
    }

    /* Mensagens */
    .error-message {
        font-size: 0.85rem;
        color: #ef4444;
        margin-top: 0.25rem;
        display: flex;
        align-items: center;
        gap: 0.25rem;
    }

    .success-message {
        font-size: 0.95rem;
        color: var(--gradiente-sec-color);
        font-weight: 500;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        margin-left: 1rem;
    }

    .success-message svg {
        width: 18px;
        height: 18px;
    }

    /* Botões */
    .form-actions {
        display: flex;
        align-items: center;
        gap: 1rem;
        flex-wrap: wrap;
        margin-top: 1rem;
    }

    .save-button,
    .update-button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        background: linear-gradient(135deg, var(--gradiente-pri-color), var(--gradiente-sec-color));
        color: var(--primary-color);
        padding: 0.85rem 1.75rem;
        border-radius: 8px;
        font-weight: 600;
        font-size: 0.95rem;
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .save-button:hover,
    .update-button:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 255, 253, 0.3);
    }

    .save-button svg,
    .update-button svg {
        width: 18px;
        height: 18px;
    }

    .delete-button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        background-color: rgba(239, 68, 68, 0.1);
        color: #ef4444;
        padding: 0.85rem 1.75rem;
        border-radius: 8px;
        font-weight: 600;
        font-size: 0.95rem;
        border: 1px solid rgba(239, 68, 68, 0.3);
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .delete-button:hover {
        background-color: rgba(239, 68, 68, 0.2);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(239, 68, 68, 0.1);
    }

    .delete-button svg {
        width: 18px;
        height: 18px;
    }

    /* Modal de confirmação */
    .modal-overlay {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.7);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 1000;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
    }

    .modal-overlay.active {
        opacity: 1;
        visibility: visible;
    }

    .modal-content {
        background-color: var(--card-bg);
        border-radius: 12px;
        padding: 2rem;
        max-width: 500px;
        width: 90%;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
        transform: translateY(20px);
        transition: transform 0.3s ease;
    }

    .modal-overlay.active .modal-content {
        transform: translateY(0);
    }

    .modal-title {
        font-size: 1.5rem;
        color: var(--text-pri-color);
        margin-bottom: 1rem;
    }

    .modal-message {
        color: var(--text-sec-color);
        margin-bottom: 2rem;
        line-height: 1.6;
    }

    .modal-actions {
        display: flex;
        gap: 1rem;
        justify-content: flex-end;
    }

    .modal-cancel {
        background-color: var(--bg-sec-color);
        color: var(--text-pri-color);
        border: none;
        padding: 0.75rem 1.5rem;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .modal-cancel:hover {
        background-color: var(--border-color);
    }

    .modal-confirm {
        background-color: #ef4444;
        color: white;
        border: none;
        padding: 0.75rem 1.5rem;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .modal-confirm:hover {
        background-color: #dc2626;
    }

    /* Responsividade */
    @media (max-width: 768px) {
        .profile-container {
            padding: 0 1rem;
            gap: 1.5rem;
        }
        
        .profile-section,
        .password-section,
        .delete-section {
            padding: 1.5rem;
        }
        
        .section-title {
            font-size: 1.3rem;
        }
        
        .form-actions {
            flex-direction: column;
            align-items: flex-start;
            gap: 1rem;
        }
        
        .success-message {
            margin-left: 0;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Toggle password visibility
        document.querySelectorAll('.toggle-password').forEach(button => {
            button.addEventListener('click', function() {
                const input = this.parentElement.querySelector('input');
                const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
                input.setAttribute('type', type);
                
                // Change icon
                const icon = this.querySelector('svg');
                if (type === 'text') {
                    icon.innerHTML = '<path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24M1 1l22 22" stroke="var(--text-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>';
                } else {
                    icon.innerHTML = '<path d="M1 12C1 12 5 4 12 4C19 4 23 12 23 12C23 12 19 20 12 20C5 20 1 12 1 12Z" stroke="var(--text-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="var(--text-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>';
                }
            });
        });

        // Delete account confirmation
        const deleteBtn = document.getElementById('delete-account-btn');
        if (deleteBtn) {
            deleteBtn.addEventListener('click', function(e) {
                e.preventDefault();
                
                const modal = document.createElement('div');
                modal.className = 'modal-overlay active';
                modal.innerHTML = `
                    <div class="modal-content">
                        <h3 class="modal-title">Confirmar Exclusão</h3>
                        <p class="modal-message">Tem certeza que deseja excluir sua conta permanentemente? Todos os seus dados serão removidos e esta ação não pode ser desfeita.</p>
                        <div class="modal-actions">
                            <button class="modal-cancel">Cancelar</button>
                            <button class="modal-confirm">Confirmar Exclusão</button>
                        </div>
                    </div>
                `;
                
                document.body.appendChild(modal);
                
                modal.querySelector('.modal-cancel').addEventListener('click', function() {
                    modal.classList.remove('active');
                    setTimeout(() => {
                        modal.remove();
                    }, 300);
                });
                
                modal.querySelector('.modal-confirm').addEventListener('click', function() {
                    modal.querySelector('.modal-actions').innerHTML = '<p>Excluindo conta...</p>';
                    document.querySelector('.delete-form').submit();
                });
            });
        }
    });
</script>
@endsection