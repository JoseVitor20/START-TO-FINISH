@php
    function getGravatarUrl($email, $size = 80) {
        $hash = md5(strtolower(trim($email)));
        return "https://www.gravatar.com/avatar/{$hash}?s={$size}";
    }

    $navLinks = [
        [
            'href' => route('dashboard'),
            'text' => 'Dashboard',
            'icon' => 'fa-solid fa-house',
            'shouldShow' => !request()->routeIs('dashboard'),
        ],
        [
            'href' => route('profile.edit'),
            'text' => 'Meu Perfil',
            'icon' => 'fas fa-cog',
            'shouldShow' => !request()->routeIs('profile.edit'),
        ],
        [
            'href' => '/#precos',
            'text' => 'Opções de Assinatura',
            'icon' => 'fa-solid fa-boxes-stacked',
            'shouldShow' => true, // Este link é sempre exibido
        ],
        [
            'href' => route('subscription.success'),
            'text' => 'Status da Assinatura',
            'icon' => 'fa-solid fa-clipboard-list',
            'shouldShow' => Auth::user()->subscriptions()->active()->with('items')->get()->isNotEmpty() && !request()->routeIs('subscription.success'),
        ],
        [
            'href' => route('contract.status'),
            'text' => 'Contrato e cláusulas',
            'icon' => 'fa-solid fa-file-contract',
            'shouldShow' => !request()->routeIs('contract.status'),
        ],
    ];
@endphp

<header class="dashboard-header">
    <div class="header-left">
        <div class="logo">
            <a href="/">
                <img src="{{ asset('img/starttofinish-black.png') }}" alt="Logo Start To Finish">
            </a>
        </div>
    </div>

    <div class="header-right">
        <div class="header-actions">
            <button class="header-action header-action--dark-mode" title="Alternar tema">
                <i class="fas fa-moon"></i>
            </button>
        </div>

        <div class="user-profile" id="user-profile">
            <img src="{{ getGravatarUrl(Auth::user()->email) }}" alt="User" class="user-avatar">
            
            <div class="user-info">
                <span class="user-name resumo">{{ Auth::user()->name }}</span>
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
            <i class="fas fa-chevron-down" id="setaDropdown" style="font-size: 0.9rem;"></i>
        </div>
        <button class="mobile-menu-btn" id="mobile-menu-btn">
            <img src="{{ getGravatarUrl(Auth::user()->email) }}" alt="User" class="user-avatar-mobile">
            <i class="fas fa-chevron-down" id="setaDropdown-mobile" style="font-size: 0.9rem;"></i>
        </button>
    </div>

    <div class="dropdown-menu" id="dropdown-menu">
        @foreach($navLinks as $link)
            @if ($link['shouldShow'])
                <a href="{{ $link['href'] }}" class="dropdown-item">
                    <i class="{{ $link['icon'] }}"></i> {{ $link['text'] }}
                </a>
            @endif
        @endforeach
        
        <div class="dropdown-divider"></div>
        
        <form method="POST" action="{{ route('logout') }}" class="dropdown-item">
            @csrf
            <button type="submit" class="dropdown-item-sair">
                <i class="fas fa-sign-out-alt"></i> Sair
            </button>
        </form>
    </div>
</header>

<div class="mobile-menu" id="mobile-menu">
    @foreach($navLinks as $link)
        @if ($link['shouldShow'])
            <div class="mobile-menu-item">
                <a href="{{ $link['href'] }}">
                    <i class="{{ $link['icon'] }}"></i> {{ $link['text'] }}
                </a>
            </div>
        @endif
    @endforeach

    <div class="mobile-menu-item">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" style="background: none; border: none; color: inherit; font: inherit; cursor: pointer; padding: 0; text-align: left; width: 100%;">
                <i class="fas fa-sign-out-alt"></i> Sair
            </button>
        </form>
    </div>
</div>