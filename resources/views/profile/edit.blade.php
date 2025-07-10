@extends('layouts.layout-dashboard')

@section('title', 'Perfil do usuário - ' . Auth::user()->name)

@section('content')
    <main class="profile-page">
        <div class="profile-container">

            <!-- Seção de Informações do Perfil -->
            <section class="profile-section">
                <header class="section-header">
                    <h2 class="section-title">
                        {{ __('Informações do Perfil') }}
                    </h2>
                </header>

                <form method="post" action="{{ route('profile.update') }}" class="profile-form">
                    @csrf
                    @method('patch')

                    <div class="form-field">
                        <label for="name" class="input-label">Nome</label>
                        <input id="name" name="name" type="text" class="text-input"
                            value="{{ old('name', auth()->user()->name) }}" required autofocus>
                    </div>

                    <div class="form-field">
                        <label for="email" class="input-label">E-mail</label>
                        <input id="email" name="email" type="email" class="text-input"
                            value="{{ old('email', auth()->user()->email) }}" required>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="save-button">
                            Salvar
                        </button>

                        @if (session('status') === 'profile-updated')
                            <p class="success-message">Salvo com sucesso.</p>
                        @endif
                    </div>
                </form>
            </section>            
            
            <!-- Seção de Atualização de Senha -->
            <section class="password-section">
                <header class="section-header">
                    <h2 class="section-title">
                        {{ __('Atualizar Senha') }}
                    </h2>
                    <p class="section-description">
                        Certifique-se de que sua nova senha seja forte e diferente da anterior.
                    </p>
                </header>

                <form method="post" action="{{ route('password.update') }}" class="password-form">
                    @csrf
                    @method('put')

                    <div class="form-field">
                        <label for="current_password" class="input-label">Senha atual</label>
                        <input id="current_password" name="current_password" type="password" class="text-input" autocomplete="current-password" required>
                        @error('current_password')
                            <p class="error-message">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-field">
                        <label for="password" class="input-label">Nova senha</label>
                        <input id="password" name="password" type="password" class="text-input" autocomplete="new-password" required>
                        @error('password')
                            <p class="error-message">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-field">
                        <label for="password_confirmation" class="input-label">Confirmar nova senha</label>
                        <input id="password_confirmation" name="password_confirmation" type="password" class="text-input" autocomplete="new-password" required>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="update-button">
                            Atualizar senha
                        </button>

                        @if (session('status') === 'password-updated')
                            <p class="success-message">Senha atualizada com sucesso.</p>
                        @endif
                    </div>
                </form>
            </section>
            
            <!-- Seção de Exclusão de Conta -->
            <section class="delete-section">
                <header class="section-header">
                    <h2 class="section-title">
                        {{ __('Excluir Conta') }}
                    </h2>
                    <p class="section-description">
                        Uma vez excluída sua conta, todos os dados serão permanentemente removidos. Esta ação não pode ser desfeita.
                    </p>
                </header>

                <form method="post" action="{{ route('profile.destroy') }}" class="delete-form">
                    @csrf
                    @method('delete')

                    <div class="form-field">
                        <label for="password" class="input-label">Senha</label>
                        <input id="password" name="password" type="password" class="text-input" placeholder="Confirme sua senha" required>
                        @error('password')
                            <p class="error-message">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="delete-button">
                            Excluir Conta
                        </button>

                        @if (session('status') === 'account-deleted')
                            <p class="success-message">Conta excluída com sucesso.</p>
                        @endif
                    </div>
                </form>
            </section>

        </div>
    </main>
@endsection

@push('estilos')
<style>
    /* Estilos base */
    .profile-page {
        padding: 2.5rem 0;
        background-color: var(--bg-pri-color);
        color: var(--text-pri-color);
        min-height: 100vh;
    }

    .profile-container {
        max-width: 80rem;
        margin: 0 auto;
        padding: 0 1rem;
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }

    /* Seções */
    .profile-section,
    .password-section,
    .delete-section {
        background-color: var(--card-bg);
        padding: 1.5rem;
        border-radius: 0.5rem;
        box-shadow: var(--box-shadow);
        border: 1px solid var(--border-color);
        transition: all 0.3s ease;
    }

    .profile-section:hover,
    .password-section:hover,
    .delete-section:hover {
        box-shadow: 0 0 15px rgba(0, 255, 253, 0.1);
    }

    /* Cabeçalhos */
    .section-header {
        margin-bottom: 1.5rem;
    }

    .section-title {
        font-size: 1.125rem;
        font-weight: 600;
        color: var(--text-pri-color);
        margin-bottom: 0.5rem;
    }

    .section-description {
        font-size: 0.875rem;
        color: var(--text-sec-color);
        line-height: 1.5;
    }

    /* Formulários */
    .profile-form,
    .password-form,
    .delete-form {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }

    /* Campos do formulário */
    .form-field {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }

    .input-label {
        font-size: 0.875rem;
        font-weight: 500;
        color: var(--text-pri-color);
    }

    .text-input {
        padding: 0.75rem;
        border: 1px solid var(--border-color);
        border-radius: 0.375rem;
        background-color: var(--bg-sec-color);
        color: var(--text-pri-color);
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
        font-size: 0.875rem;
    }

    .text-input:focus {
        outline: none;
        border-color: var(--neon);
        box-shadow: 0 0 0 2px rgba(0, 255, 253, 0.2);
    }

    .text-input::placeholder {
        color: var(--text-sec-color);
        opacity: 0.7;
    }

    /* Mensagens */
    .error-message {
        font-size: 0.75rem;
        color: #ef4444;
        margin-top: 0.25rem;
    }

    .success-message {
        font-size: 0.875rem;
        color: var(--gradiente-sec-color);
        font-weight: 500;
    }

    /* Botões */
    .form-actions {
        display: flex;
        align-items: center;
        gap: 1rem;
        flex-wrap: wrap;
    }

    .save-button,
    .update-button {
        background-color: var(--primary-color);
        color: var(--text-pri-color);
        padding: 0.75rem 1.5rem;
        border-radius: 0.375rem;
        font-weight: 500;
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .save-button:hover,
    .update-button:hover {
        background-color: var(--secondary-color);
        box-shadow: 0 0 10px rgba(0, 255, 253, 0.3);
    }

    .delete-button {
        background-color: #dc2626;
        color: white;
        padding: 0.75rem 1.5rem;
        border-radius: 0.375rem;
        font-weight: 500;
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .delete-button:hover {
        background-color: #b91c1c;
        box-shadow: 0 0 10px rgba(220, 38, 38, 0.5);
    }

    .delete-button::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: linear-gradient(
            to bottom right,
            rgba(255, 255, 255, 0) 0%,
            rgba(255, 255, 255, 0.1) 50%,
            rgba(255, 255, 255, 0) 100%
        );
        transform: rotate(30deg);
        transition: all 0.5s ease;
    }

    .delete-button:hover::before {
        left: 100%;
    }

    /* Efeitos específicos para light mode */
    .light-mode .text-input {
        background-color: white;
    }

    .light-mode .save-button,
    .light-mode .update-button {
        background-color: var(--secondary-color);
        color: white;
    }

    .light-mode .save-button:hover,
    .light-mode .update-button:hover {
        background-color: var(--primary-color);
    }

    /* Responsividade */
    @media (min-width: 768px) {
        .profile-container {
            padding: 0 2rem;
            gap: 2rem;
        }
        
        .profile-section,
        .password-section,
        .delete-section {
            padding: 2rem;
        }
    }
</style>
@endpush