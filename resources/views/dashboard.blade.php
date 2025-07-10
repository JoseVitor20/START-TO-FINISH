@extends('layouts.layout-dashboard')

@section('title', 'Start To Finish - Administrativo')

@section('content')
    <div class="dashboard-container">
        @can('access-owner')
            <div class="card-grid">
                <div class="report-card">
                        <div class="card-header">
                            <div class="icon-wrapper">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="var(--text-pri-color)">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                </svg>
                            </div>
                            <h2 class="card-title">Clientes cadastrados</h2>
                            <p class="card-subtitle">Informações gerais sobre os clientes</p>
                        </div>
                        
                        <div class="user-list-container">
                            <h3 class="user-list-title">Usuários Recentes</h3>
                            <ul class="user-list" id="userList">
                                @foreach($usuarios->where('role', '!=', 'owner')->take(5) as $usuario)
                                    <li class="user-list-item">
                                        <img src="{{ $usuario->gravatar }}" alt="{{ $usuario->name }}" class="user-avatar">
                                        <div class="user-info">
                                            <div class="user-name">{{ $usuario->name }}</div>
                                            <div class="user-email">{{ $usuario->email }}</div>
                                        </div>
                                        <div class="user-status-indicator"></div>
                                    </li>
                                @endforeach
                                
                                @foreach($usuarios->where('role', '!=', 'owner')->skip(5) as $usuario)
                                    <li class="user-list-item hidden-user">
                                        <img src="{{ $usuario->gravatar }}" alt="{{ $usuario->name }}" class="user-avatar">
                                        <div class="user-info">
                                            <div class="user-name">{{ $usuario->name }}</div>
                                            <div class="user-email">{{ $usuario->email }}</div>
                                        </div>
                                        <div class="user-status-indicator"></div>
                                    </li>
                                @endforeach
                            </ul>
                            @if($usuarios->where('role', '!=', 'owner')->count() > 5)
                            <button class="view-all-btn" id="viewAllBtn">
                                Ver Todos
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="var(--neon)" class="dropdown-icon">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            @endif
                        </div>
                </div>
            </div>
        @endcan
    </div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Toggle para mostrar/ocultar usuários
        const viewAllBtn = document.getElementById('viewAllBtn');
        if (viewAllBtn) {
            let isExpanded = false;
            const hiddenUsers = document.querySelectorAll('.hidden-user');
            const dropdownIcon = viewAllBtn.querySelector('.dropdown-icon');
            
            viewAllBtn.addEventListener('click', function() {
                isExpanded = !isExpanded;
                
                hiddenUsers.forEach(user => {
                    user.style.display = isExpanded ? 'flex' : 'none';
                });
                
                dropdownIcon.setAttribute('d', isExpanded ? 'M5 15l7-7 7 7' : 'M19 9l-7 7-7-7');
                
                viewAllBtn.innerHTML = isExpanded ? 
                    'Mostrar Menos <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="var(--neon)" class="dropdown-icon"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" /></svg>' : 
                    'Ver Todos <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="var(--neon)" class="dropdown-icon"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>';
            });
        }

        // Se você quiser adicionar um toggle para light/dark mode
        const toggleMode = document.getElementById('modeToggle');
        if (toggleMode) {
            toggleMode.addEventListener('click', function() {
                document.body.classList.toggle('light-mode');
                // Salvar preferência no localStorage
                const isLight = document.body.classList.contains('light-mode');
                localStorage.setItem('lightMode', isLight);
            });
            
            // Verificar preferência salva
            if (localStorage.getItem('lightMode') === 'true') {
                document.body.classList.add('light-mode');
            }
        }
    });
</script>
@endpush

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
        background-color: var(--bg-pri-color);
        color: var(--text-pri-color);
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    /* Estilos base */
    .dashboard-container {
        padding: 1.5rem 1rem;
        max-width: 1400px;
        margin: 0 auto;
        font-family: 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;
    }

    /* Grid de cards */
    .card-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 2rem;
    }

    @media (min-width: 768px) {
        .card-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    /* Card de relatórios */
    .report-card {
        background: var(--card-bg);
        border-radius: 16px;
        box-shadow: var(--box-shadow);
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: 1px solid var(--border-color);
    }

    .report-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 255, 253, 0.2);
    }

    /* Cabeçalho do card */
    .card-header {
        padding: 1.5rem;
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
        color: var(--text-pri-color);
        position: relative;
    }

    .icon-wrapper {
        width: 48px;
        height: 48px;
        background-color: rgba(255, 255, 255, 0.2);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1rem;
    }

    .icon-wrapper svg {
        width: 24px;
        height: 24px;
        stroke-width: 2;
    }

    .card-title {
        font-size: 1.5rem;
        font-weight: 600;
        margin: 0 0 0.5rem 0;
        color: var(--text-pri-color);
    }

    .card-subtitle {
        font-size: 0.875rem;
        opacity: 0.9;
        margin: 0;
        color: var(--text-sec-color);
    }

    /* Lista de usuários */
    .user-list-container {
        padding: 1.5rem;
    }

    .user-list-title {
        font-size: 1rem;
        font-weight: 600;
        color: var(--neon);
        margin: 0 0 1rem 0;
    }

    .user-list {
        list-style: none;
        padding: 0;
        margin: 0 0 1.5rem 0;
    }

    .user-list-item {
        display: flex;
        align-items: center;
        padding: 0.75rem 0;
        border-bottom: 1px solid var(--border-color);
        position: relative;
    }

    .user-list-item:last-child {
        border-bottom: none;
    }

    .hidden-user {
        display: none;
    }

    .user-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        object-fit: cover;
        margin-right: 1rem;
        border: 2px solid var(--border-color);
    }

    .user-info {
        flex: 1;
    }

    .user-name {
        font-weight: 500;
        color: var(--text-pri-color);
        margin-bottom: 0.125rem;
    }

    .user-email {
        font-size: 0.75rem;
        color: var(--text-sec-color);
    }

    .user-status-indicator {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background-color: var(--gradiente-sec-color);
        position: absolute;
        right: 0;
    }

    /* Botão Ver Todos */
    .view-all-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        padding: 0.75rem;
        background-color: var(--primary-color);
        color: var(--neon);
        border: 1px solid var(--neon);
        border-radius: 8px;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .view-all-btn:hover {
        background-color: var(--btn-bg-hover);
        box-shadow: 0 0 10px var(--neon);
        color: var(--neon);
    }

    .view-all-btn svg {
        width: 16px;
        height: 16px;
        margin-left: 0.5rem;
        transition: transform 0.2s ease;
    }

    .view-all-btn:hover svg {
        transform: translateX(2px);
    }

    /* Botão de alternar modo claro/escuro (opcional) */
    .mode-toggle {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background: var(--primary-color);
        color: var(--neon);
        border: 1px solid var(--neon);
        border-radius: 50%;
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        box-shadow: 0 0 10px rgba(0, 255, 253, 0.5);
        z-index: 1000;
    }

    .mode-toggle:hover {
        box-shadow: 0 0 15px var(--neon);
    }
</style>
@endpush

@push('footer')
    <button id="modeToggle" class="mode-toggle" title="Alternar modo claro/escuro">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--sol-lua)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="5"></circle>
            <path d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"></path>
        </svg>
    </button>
@endpush