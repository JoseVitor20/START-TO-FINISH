<header class="header">
    <div class="header__logo--hidden">
        <a href="#" class="header__logo--hidden-link"><img src="{{asset('img/starttofinish-black.png')}}" alt="Start To Finish" title="Descomplicando sonhos"></a>
    </div>

  <div class="header__menu-hamburguer" id="menuBtn">
    <span></span>
    <span></span>
    <span></span>
  </div>

    <div class="header__container">
{{--         <div class="header__logo">
            <a href="#" class="header__logo-link"><img src="{{asset('img/starttofinish-black.png')}}" alt="Start To Finish" title="Descomplicando sonhos"></a>
        </div> --}}
        <nav class="header__nav">
            <ul class="header__nav-list">
                <li class="logo-nav"><a href="#" class="header__logo-link"><img src="{{asset('img/starttofinish-black.png')}}" alt="Start To Finish" title="Descomplicando sonhos"></a></li>
                <li class="header__nav-item"><a href="#inicio" class="header__nav-link" id="item1">Início</a></li>
                <li class="header__nav-item"><a href="#sobre" class="header__nav-link" id="item2">Sobre</a></li>
                <li class="header__nav-item"><a href="#projetos" class="header__nav-link" id="item3">Projetos</a></li>
                <li class="header__nav-item"><a href="#depoimentos" class="header__nav-link" id="item4">Depoimentos</a></li>
                <li class="header__nav-item"><a href="#contato" class="header__nav-link" id="item5">Contato</a></li>
                <li class="header__nav-item"><a href="#precos" class="header__nav-link" id="item6">Preços</a></li>
            </ul>
        </nav>
        <div class="header__actions" id="hidden">
            @auth
                <div class="user-menu">
                    <a class="user-profile" href="{{ route('dashboard') }}">
                        <i class="fas fa-user-circle"></i>
                        <span>{{Auth::user()->name}}</span>                        
                    </a>
                    
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="logout-btn">
                            <i class="fas fa-sign-out-alt"></i>
                            Sair
                        </button>
                    </form>
                </div>
            @endauth
            @guest
                <a class="navbar-brand" href="register ">
                    <i class="fas fa-user-plus icon"></i> <!-- Ícone de usuário com + -->
                    <span>Ser cliente</span>
                </a>
                <a class="client-btn" href="login">
                    <i class="fas fa-user-check icon"></i> <!-- Ícone de usuário com check -->
                    <span>Sou cliente</span>
                </a>                
            @endguest
            <button class="header__action header__action--dark-mode" aria-label="Alternar modo escuro">
              <i class="fa-solid fa-moon"></i>
            </button>                
        </div>
    </div>
  <div class="header__opacidade"></div>

</header>