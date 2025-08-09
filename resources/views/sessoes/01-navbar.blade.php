<header class="navbar">
    <div class="navbar__logo--hidden">
        <a href="#" class="navbar__logo-link--hidden"><img src="{{asset('img/starttofinish-black.png')}}" alt="Start To Finish" title="Descomplicando sonhos"></a>
    </div>

  <div class="navbar__menu-hamburguer" id="navbarMenuBtn">
    <span class="navbar__menu-line"></span>
    <span class="navbar__menu-line"></span>
    <span class="navbar__menu-line"></span>
  </div>

    <div class="navbar__container">
        <nav class="navbar__nav">
            <ul class="navbar__list">
                <li class="navbar__item navbar__item--logo"><a href="/" class="navbar__logo-link"><img src="{{asset('img/starttofinish-black.png')}}" alt="Start To Finish" title="Descomplicando sonhos"></a></li>
                <li class="navbar__item"><a href="#inicio" class="navbar__link" id="navbarItem1">Início</a></li>
                <li class="navbar__item"><a href="#sobre" class="navbar__link" id="navbarItem2">Sobre</a></li>
                <li class="navbar__item"><a href="#projetos" class="navbar__link" id="navbarItem3">Projetos</a></li>
                <li class="navbar__item"><a href="#depoimentos" class="navbar__link" id="navbarItem4">Depoimentos</a></li>
                <li class="navbar__item"><a href="#contato" class="navbar__link" id="navbarItem5">Contato</a></li>
                <li class="navbar__item"><a href="#precos" class="navbar__link" id="navbarItem6">Preços</a></li>
            </ul>
        </nav>
        <div class="navbar__actions" id="navbarHidden">
            @auth
                <div class="navbar__user-menu">
                    <a class="navbar__user-profile" href="{{ route('dashboard') }}">
                        @php
                            function getGravatarUrl($email, $size = 80)
                            {
                                $hash = md5(strtolower(trim($email)));
                                return "https://www.gravatar.com/avatar/{$hash}?s={$size}";
                            }
                        @endphp

                        <img src="{{ getGravatarUrl(Auth::user()->email) }}" alt="User" class="navbar__user-avatar">

                        <span class="navbar__user-name resumo">{{Auth::user()->name}}</span>                        
                    </a>
                    
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="navbar__logout-btn">
                            <i class="fas fa-sign-out-alt navbar__logout-icon"></i>
                            Sair
                        </button>
                    </form>
                </div>
            @endauth
            @guest
                <a class="navbar__register-btn" href="register ">
                    <span class="navbar__btn-text"> Ser cliente</span>
                </a>
                <a class="navbar__login-btn" href="login">
                    <i class="fas fa-user-check navbar__icon"></i>
                    <span class="navbar__btn-text"> Sou cliente</span>
                </a>                
            @endguest
            <button class="navbar__dark-mode" aria-label="Alternar modo escuro">
              <i class="fa-solid fa-moon navbar__dark-icon"></i>
            </button>                
        </div>
    </div>
  <div class="navbar__overlay"></div>
</header>   
