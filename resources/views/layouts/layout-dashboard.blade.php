<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="icon" href="{{asset('img/icone.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* === PALETA DE CORES === */
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

        /* === ESTILOS GERAIS === */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            transition: background-color 0.3s, color 0.3s;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--bg-pri-color);
            color: var(--text-pri-color);
        }

        /* === HEADER STYLES === */
        .dashboard-header {
            background-color: var(--bg-sec-color);
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: var(--box-shadow);
            position: relative;
            z-index: 100;
            border-bottom: 1px solid var(--border-color);
        }

        .header-left {
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .logo img{
            height: 55px;
            filter: var(--inver-img);
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }

        .header-actions {
            display: flex;
            gap: 1rem;
        }

        .header-action {
            background: none;
            border: none;
            cursor: pointer;
            width: 2.5rem;
            height: 2.5rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-sec-color);
            position: relative;
        }

        .header-action:hover {
            background-color: rgba(255, 255, 255, 0.1);
            color: var(--text-pri-color);
        }

        .header-action i {
            font-size: 1.2rem;
        }

        .header-action--dark-mode i {
            color: var(--sol-lua);
        }

        .notification-badge {
            position: absolute;
            top: 0;
            right: 0;
            background-color: var(--neon);
            color: var(--bg-pri-color);
            border-radius: 50%;
            width: 1rem;
            height: 1rem;
            font-size: 0.6rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            cursor: pointer;
        }

        .user-avatar {
            width: 2.5rem;
            height: 2.5rem;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid var(--neon);
        }

        .user-name {
            font-weight: 600;
            color: var(--text-pri-color);
        }

        .user-role {
            font-size: 0.8rem;
            color: var(--text-sec-color);
        }

        .user-info {
            display: flex;
            flex-direction: column;
        }

        /* Menu dropdown (opcional) */
        .dropdown-menu {
            position: absolute;
            right: 0;
            top: 92%;
            margin-top: 8px;
            min-width: 200px;
            background-color: var(--bg-sec-color);
            border-top-left-radius: 0px;
            border-top-right-radius: 0px;
            border-bottom-left-radius: 8px;
            border-bottom-right-radius: 8px;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            border-bottom: 1px solid var(--border-color);
            border-left: 1px solid var(--border-color);
            border-right: 1px solid var(--border-color);
            z-index: 50;
            overflow: hidden;
            opacity: 0;
            transform: translateY(-10px);
            visibility: hidden;
            transition: all 0.2s ease;
        }

        .dropdown-menu.show {
            opacity: 1;
            transform: translateY(0);
            visibility: visible;
        }

        .dropdown-item {
            display: block;
            padding: 10px 16px;
            color: var(--text-pri-color);
            text-decoration: none;
            transition: all 0.2s;
            font-size: 14px;
        }

        .dropdown-item:hover {
            background-color: #f7fafc;
            color: #2d3748;
        }

        .dropdown-item i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
            color: #718096;
        }

        .dropdown-divider {
            height: 1px;
            background-color: #e2e8f0;
        }

        .dropdown-item button {
            background: none;
            border: none;
            color: inherit;
            font: inherit;
            cursor: pointer;
            padding: 0;
            width: 100%;
            text-align: left;
        }

        .dropdown-item button:hover {
            color: #2d3748;
        }

        .dropdown-item button i {
            color: inherit;
        }
    </style>
    @stack('estilos')

</head>
<body>
    <header class="dashboard-header">
        <div class="header-left">
            <div class="logo">
                <a href="{{route('dashboard')}}">                    
                    <img src="{{asset('img/starttofinish-black.png')}}" alt="Logo Start To Finish">
                </a>
            </div>
        </div>

        <div class="header-right">
            <a href="{{route('subscription.index')}}">Nossos planos de assinatura</a>

            <div class="header-actions">
                <button class="header-action header-action--dark-mode" title="Alternar tema">
                    <i class="fas fa-moon"></i>
                </button>
            </div>

            <div class="user-profile" id="user-profile">
                @php
                    function getGravatarUrl($email, $size = 80)
                    {
                        $hash = md5(strtolower(trim($email)));
                        return "https://www.gravatar.com/avatar/{$hash}?s={$size}";
                    }
                @endphp

                <img src="{{ getGravatarUrl(Auth::user()->email) }}" alt="User" class="user-avatar">
                
                <div class="user-info">
                    <span class="user-name">{{Auth::user()->name}}</span>
                    @switch(Auth::user()->role)
                        @case('admin')
                            <span class="user-role">Administrador</span>
                        @break

                        @case('owner')
                            <span class="user-role">Proprietário</span>
                        @break

                        @case('user')
                            <span class="user-role">Cliente</span>
                        @break
                    @endswitch
                </div>
                <i class="fas fa-chevron-down" style="font-size: 0.9rem;"></i>
            </div>
        </div>

        <!-- Dropdown Menu (opcional) -->
        <div class="dropdown-menu" id="dropdown-menu">
            @if(request()->is('dashboard'))
                <a href="{{route('profile.edit')}}" class="dropdown-item">
                    <i class="fas fa-cog"></i> Meu Perfil
                </a>
            @endif   

            @if(request()->is('profile'))
                <a href="{{route('dashboard')}}" class="dropdown-item">
                    <i class="fa-solid fa-house"></i> Dashboard
                </a>
            @endif            

            <div class="dropdown-divider"></div>

            <form method="POST" action="{{ route('logout') }}" class="dropdown-item">
                @csrf
                <button type="submit">
                    <i class="fas fa-sign-out-alt"></i> Sair
                </button>
            </form>
        </div>
    </header>

    @yield('content')

    <script>
        // === TEMA DARK E LIGHT ===
        const toggleButton = document.querySelector('.header-action--dark-mode');
        const icon = toggleButton.querySelector('i');
        const body = document.body;

        function enableDarkMode() {
            body.classList.add('light-mode');
            icon.classList.replace('fa-moon', 'fa-sun');
            localStorage.setItem('light-mode', 'enabled');
        }

        function disableDarkMode() {
            body.classList.remove('light-mode');
            icon.classList.replace('fa-sun', 'fa-moon');
            localStorage.setItem('light-mode', 'disabled');
        }

        // Estado inicial baseado no localStorage
        if (localStorage.getItem('light-mode') === 'enabled') {
            enableDarkMode();
        }

        toggleButton.addEventListener('click', () => {
            if (body.classList.contains('light-mode')) {
                disableDarkMode();
            } else {
                enableDarkMode();
            }
        });

        // Dropdown menu (opcional)
        const userProfile = document.getElementById('user-profile');
        const dropdownMenu = document.getElementById('dropdown-menu');

        userProfile.addEventListener('click', () => {
            dropdownMenu.classList.toggle('show');
        });

        // Fechar dropdown ao clicar fora
        window.addEventListener('click', (e) => {
            if (!userProfile.contains(e.target) && !dropdownMenu.contains(e.target)) {
                dropdownMenu.classList.remove('show');
            }
        });
    </script>

    @stack('scripts')
</body>
</html>