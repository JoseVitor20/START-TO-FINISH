<header class="dashboard-header">
    <div class="header-left">            
        <div class="logo">
            <a href="/">                    
                <img src="{{asset('img/starttofinish-black.png')}}" alt="Logo Start To Finish">
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
            <i class="fas fa-chevron-down" id="setaDropdown" style="font-size: 0.9rem;"></i>
        </div>
        <button class="mobile-menu-btn" id="mobile-menu-btn">
            {{-- <i class="fas fa-bars"></i> --}}
            <img src="{{ getGravatarUrl(Auth::user()->email) }}" alt="User" class="user-avatar-mobile">
            <i class="fas fa-chevron-down" id="setaDropdown-mobile" style="font-size: 0.9rem;"></i>
        </button>            
    </div>

    <!-- Dropdown Menu (opcional) -->
    <div class="dropdown-menu" id="dropdown-menu">
        @if(request()->is('dashboard'))
            <a href="{{route('profile.edit')}}" class="dropdown-item"><i class="fas fa-cog"></i> Meu Perfil</a>
            <a href="/#precos" class="dropdown-item"><i class="fa-solid fa-boxes-stacked"></i> Opções de Assinatura</a>
            <a href="{{route('subscription.success')}}" class="dropdown-item"><i class="fa-solid fa-file-contract"></i> Status da Assinatura</a>
        @endif   
        

        @if(request()->is('subscription/success'))
            <a href="{{route('profile.edit')}}" class="dropdown-item"><i class="fas fa-cog"></i> Meu Perfil</a>
            <a href="/#precos" class="dropdown-item"><i class="fa-solid fa-boxes-stacked"></i> Opções de Assinatura</a>
            <a href="{{route('dashboard')}}" class="dropdown-item"><i class="fa-solid fa-house"></i> Dashboard</a>
        @endif  

        @if(request()->is('profile'))
            <a href="/#precos" class="dropdown-item"><i class="fa-solid fa-boxes-stacked"></i> Opções de Assinatura</a>
            <a href="{{route('subscription.success')}}" class="dropdown-item"><i class="fa-solid fa-file-contract"></i> Status da Assinatura</a>            
            <a href="{{route('dashboard')}}" class="dropdown-item"><i class="fa-solid fa-house"></i> Dashboard</a>
        @endif                      

        <div class="dropdown-divider"></div>

        <form method="POST" action="{{ route('logout') }}" class="dropdown-item">
            @csrf
            <button type="submit" class="dropdown-item-sair">
                <i class="fas fa-sign-out-alt"></i> Sair
            </button>
        </form>
    </div>
</header>

<!-- Menu Mobile -->
<div class="mobile-menu" id="mobile-menu">
    @if(request()->is('dashboard'))
        <div class="mobile-menu-item">
            <a href="{{route('profile.edit')}}"><i class="fas fa-cog"></i> Meu Perfil</a>
        </div>
        <div class="mobile-menu-item">
            <a href="/#precos"><i class="fa-solid fa-boxes-stacked"></i> Opções de Assinatura</a>
        </div>
        <div class="mobile-menu-item">
            <a href="{{route('subscription.success')}}"><i class="fa-solid fa-file-contract"></i> Status da Assinatura</a>
        </div>
    @endif   
    
    @if(request()->is('subscription/success'))
        <div class="mobile-menu-item">
            <a href="{{route('profile.edit')}}"><i class="fas fa-cog"></i> Meu Perfil</a>
        </div>
        <div class="mobile-menu-item">
            <a href="/#precos"><i class="fa-solid fa-boxes-stacked"></i> Opções de Assinatura</a>
        </div>
        <div class="mobile-menu-item">
            <a href="{{route('dashboard')}}"><i class="fa-solid fa-house"></i> Dashboard</a>
        </div>
    @endif  

    @if(request()->is('profile'))
        <div class="mobile-menu-item">
            <a href="/#precos"><i class="fa-solid fa-boxes-stacked"></i> Opções de Assinatura</a>
        </div>
        <div class="mobile-menu-item">
            <a href="{{route('subscription.success')}}"><i class="fa-solid fa-file-contract"></i> Status da Assinatura</a>
        </div>
        <div class="mobile-menu-item">
            <a href="{{route('dashboard')}}"><i class="fa-solid fa-house"></i> Dashboard</a>
        </div>
    @endif

    <div class="mobile-menu-item">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" style="background: none; border: none; color: inherit; font: inherit; cursor: pointer; padding: 0; text-align: left; width: 100%;">
                <i class="fas fa-sign-out-alt"></i> Sair
            </button>
        </form>
    </div>
</div>
