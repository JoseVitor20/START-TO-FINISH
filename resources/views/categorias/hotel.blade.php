@extends('layouts.app')

@section('title', 'Hotel Paraíso - Luxo e Conforto')

@push('estilosEcodigos')
    <link rel="stylesheet" href="{{ asset('css/categorias/hotel.css') }}">
    <script type="module" src="{{ asset('js/categorias/hotel.js') }}"></script>                  
@endpush

@section('content')
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">LUXURY HOTELS</a>
            <button class="navbar-toggler border-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="filter: invert(100%);"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#rooms">Quartos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#offers">Ofertas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Galeria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#events">Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials">Depoimentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contato</a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-primary-custom" href="#rooms">Reservar Agora</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Descubra o Luxo Redefinido</h1>
                <p class="hero-subtitle">Bem-vindo ao Luxury Hotels, onde cada detalhe é cuidadosamente elaborado para proporcionar uma experiência de hospedagem excepcional e memorável.</p>
                <a href="#rooms" class="btn btn-primary-custom">Explorar Quartos</a>
            </div>
        </div>
    </section>

    <!-- Main Carousel -->
    <section class="main-carousel-section">
        <div id="mainCarousel" class="carousel slide main-carousel" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="d-block w-100" alt="Hotel Luxury">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Bem-vindo ao Luxury Hotels</h5>
                        <p>Descubra o verdadeiro significado de conforto e elegância em nossas instalações exclusivas.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1564501049412-61c2a3083791?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=80" class="d-block w-100" alt="Restaurante">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Gastronomia Excepcional</h5>
                        <p>Desfrute de pratos premiados em nosso restaurante com estrela Michelin.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1534258936925-c58bed479fcb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1931&q=80" class="d-block w-100" alt="Spa">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Spa de Luxo</h5>
                        <p>Relaxe e rejuvenesça com nossos tratamentos exclusivos de spa.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section" id="about">
        <div class="container">
            <h2 class="text-center section-title">Sobre Nós</h2>
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="about-img">
                        <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Hotel Luxury" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3>Uma Experiência Única em Hospedagem</h3>
                    <p>Fundado em 2005, o Luxury Hotels rapidamente se estabeleceu como um dos destinos mais cobiçados para viajantes exigentes que buscam o equilíbrio perfeito entre conforto, elegância e serviço impecável.</p>
                    <p>Nossa filosofia é simples: oferecer aos nossos hóspedes uma experiência que vai além da simples hospedagem. Cada detalhe, desde a decoração meticulosamente selecionada até o atendimento personalizado, é projetado para criar memórias duradouras.</p>
                    <p>Localizado no coração da cidade, nosso hotel combina a conveniência de uma localização privilegiada com a tranquilidade de um refúgio urbano.</p>
                    <div class="row mt-4">
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-concierge-bell service-icon me-3" style="font-size: 2rem;"></i>
                                <div>
                                    <h5 class="mb-0">Serviço Premium</h5>
                                    <p class="mb-0">Atendimento 24 horas</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-utensils service-icon me-3" style="font-size: 2rem;"></i>
                                <div>
                                    <h5 class="mb-0">Gastronomia</h5>
                                    <p class="mb-0">Restaurante premiado</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Counter Section -->
    <section class="counter-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="counter-item">
                        <div class="counter-number" data-count="150">0</div>
                        <div class="counter-text">Quartos Luxuosos</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="counter-item">
                        <div class="counter-number" data-count="25">0</div>
                        <div class="counter-text">Anos de Experiência</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="counter-item">
                        <div class="counter-number" data-count="1200">0</div>
                        <div class="counter-text">Hóspedes Satisfeitos</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="counter-item">
                        <div class="counter-number" data-count="50">0</div>
                        <div class="counter-text">Prêmios Recebidos</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Rooms Section -->
    <section class="rooms-section bg-light" id="rooms">
        <div class="container">
            <h2 class="text-center section-title">Nossos Quartos</h2>
            <p class="text-center mb-5">Cada um de nossos quartos e suítes foi projetado para oferecer o máximo em conforto e estilo.</p>
            <div class="row">
                <!-- Room 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="room-card">
                        <div class="room-img position-relative">
                            <img src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Quarto Deluxe">
                            <div class="room-price">R$ 890/noite</div>
                        </div>
                        <div class="card-body p-3">
                            <h5 class="card-title">Quarto Deluxe</h5>
                            <p class="card-text">Um espaço generoso com vista para a cidade, equipado com todas as comodidades modernas para uma estadia confortável.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-primary me-2"></i> 30m²</li>
                                <li><i class="fas fa-check text-primary me-2"></i> Cama King Size</li>
                                <li><i class="fas fa-check text-primary me-2"></i> Wi-Fi de alta velocidade</li>
                            </ul>
                            <a href="#" class="btn btn-primary-custom w-100">Reservar Agora</a>
                        </div>
                    </div>
                </div>
                
                <!-- Room 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="room-card">
                        <div class="room-img position-relative">
                            <img src="https://images.pexels.com/photos/237371/pexels-photo-237371.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Suíte Executiva">
                            <div class="room-price">R$ 1.290/noite</div>
                        </div>
                        <div class="card-body p-3">
                            <h5 class="card-title">Suíte Executiva</h5>
                            <p class="card-text">Ampla suíte com área de estar separada, perfeita para quem busca espaço adicional e conforto superior.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-primary me-2"></i> 45m²</li>
                                <li><i class="fas fa-check text-primary me-2"></i> Cama King Size</li>
                                <li><i class="fas fa-check text-primary me-2"></i> Área de trabalho executiva</li>
                            </ul>
                            <a href="#" class="btn btn-primary-custom w-100">Reservar Agora</a>
                        </div>
                    </div>
                </div>
                
                <!-- Room 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="room-card">
                        <div class="room-img position-relative">
                            <img src="https://images.pexels.com/photos/164595/pexels-photo-164595.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Suíte Presidencial">
                            <div class="room-price">R$ 2.490/noite</div>
                        </div>
                        <div class="card-body p-3">
                            <h5 class="card-title">Suíte Presidencial</h5>
                            <p class="card-text">Nosso espaço mais exclusivo, oferecendo o pináculo do luxo com múltiplas áreas de estar e vistas panorâmicas.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-primary me-2"></i> 80m²</li>
                                <li><i class="fas fa-check text-primary me-2"></i> Cama King Size premium</li>
                                <li><i class="fas fa-check text-primary me-2"></i> Banheira de hidromassagem</li>
                            </ul>
                            <a href="#" class="btn btn-primary-custom w-100">Reservar Agora</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="#rooms" class="btn btn-primary-custom">Ver Todos os Quartos</a>
            </div>
        </div>
    </section>

    <!-- Offers Section -->
    <section class="offers-section" id="offers">
        <div class="container">
            <h2 class="text-center section-title">Ofertas Especiais</h2>
            <p class="text-center mb-5">Aproveite nossas promoções exclusivas para uma experiência ainda mais memorável</p>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="offer-card">
                        <div class="offer-badge">-30%</div>
                        <div class="room-img">
                            <img src="https://images.unsplash.com/photo-1596178065887-1198b6148b2b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Pacote Romântico">
                        </div>
                        <div class="card-body p-3">
                            <h5 class="card-title">Pacote Romântico</h5>
                            <p class="card-text">Desfrute de uma escapada romântica com jantar à luz de velas, champanhe e decoração especial.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="text-decoration-line-through text-muted me-2">R$ 1.200</span>
                                    <span class="fw-bold">R$ 840</span>
                                </div>
                                <a href="#" class="btn btn-sm btn-primary-custom">Reservar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="offer-card">
                        <div class="offer-badge">-25%</div>
                        <div class="room-img">
                            <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Fim de Semana Relaxante">
                        </div>
                        <div class="card-body p-3">
                            <h5 class="card-title">Fim de Semana Relaxante</h5>
                            <p class="card-text">2 noites de hospedagem com café da manhã buffet e crédito de R$ 300 para serviços de spa.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="text-decoration-line-through text-muted me-2">R$ 1.800</span>
                                    <span class="fw-bold">R$ 1.350</span>
                                </div>
                                <a href="#" class="btn btn-sm btn-primary-custom">Reservar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mx-auto">
                    <div class="offer-card">
                        <div class="offer-badge">-20%</div>
                        <div class="room-img">
                            <img src="https://images.unsplash.com/photo-1564501049412-61c2a3083791?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=80" alt="Pacote Família">
                        </div>
                        <div class="card-body p-3">
                            <h5 class="card-title">Pacote Família</h5>
                            <p class="card-text">Estadia para 2 adultos e 2 crianças com acesso ilimitado ao clube infantil e atividades recreativas.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="text-decoration-line-through text-muted me-2">R$ 2.500</span>
                                    <span class="fw-bold">R$ 2.000</span>
                                </div>
                                <a href="#" class="btn btn-sm btn-primary-custom">Reservar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section bg-light" id="services">
        <div class="container">
            <h2 class="text-center section-title">Nossos Serviços</h2>
            <p class="text-center mb-5">Descubra os serviços exclusivos que tornam sua estadia verdadeiramente especial</p>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-spa"></i>
                        </div>
                        <h4>Spa & Bem-estar</h4>
                        <p>Tratamentos revitalizantes em nosso spa de classe mundial, com terapias personalizadas para relaxamento e rejuvenescimento.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <h4>Gastronomia</h4>
                        <p>Experiências culinárias excepcionais em nossos restaurantes premiados, com chefs renomados e ingredientes locais selecionados.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-swimming-pool"></i>
                        </div>
                        <h4>Piscina Infinity</h4>
                        <p>Nossa piscina infinity com vista panorâmica é o lugar perfeito para relaxar e desfrutar de momentos inesquecíveis.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-concierge-bell"></i>
                        </div>
                        <h4>Serviço de Concierge</h4>
                        <p>Nosso concierge está disponível 24/7 para atender a todas as suas necessidades e criar experiências personalizadas.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery-section" id="gallery">
        <div class="container">
            <h2 class="text-center section-title">Galeria</h2>
            <p class="text-center mb-5">Explore nossos espaços através destas imagens</p>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" data-lightbox="gallery" data-title="Lobby do Hotel">
                        <div class="gallery-item">
                            <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" alt="Lobby">
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="https://images.unsplash.com/photo-1564501049412-61c2a3083791?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=80" data-lightbox="gallery" data-title="Restaurante Principal">
                        <div class="gallery-item">
                            <img src="https://images.unsplash.com/photo-1564501049412-61c2a3083791?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" alt="Restaurante">
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="https://images.unsplash.com/photo-1534258936925-c58bed479fcb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1931&q=80" data-lightbox="gallery" data-title="Área do Spa">
                        <div class="gallery-item">
                            <img src="https://images.unsplash.com/photo-1534258936925-c58bed479fcb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" alt="Spa">
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" data-lightbox="gallery" data-title="Piscina Infinity">
                        <div class="gallery-item">
                            <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" alt="Piscina">
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" data-lightbox="gallery" data-title="Quarto Deluxe">
                        <div class="gallery-item">
                            <img src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" alt="Quarto">
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="https://images.pexels.com/photos/453201/pexels-photo-453201.jpeg?auto=compress&cs=tinysrgb&w=600" data-lightbox="gallery" data-title="Suíte Executiva">
                        <div class="gallery-item">
                            <img src="https://images.pexels.com/photos/453201/pexels-photo-453201.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Suíte">
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="https://images.pexels.com/photos/261181/pexels-photo-261181.jpeg?auto=compress&cs=tinysrgb&w=600" data-lightbox="gallery" data-title="Suíte Presidencial">
                        <div class="gallery-item">
                            <img src="https://images.pexels.com/photos/261181/pexels-photo-261181.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Suíte Presidencial">
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="https://images.unsplash.com/photo-1596178065887-1198b6148b2b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" data-lightbox="gallery" data-title="Bar do Hotel">
                        <div class="gallery-item">
                            <img src="https://images.unsplash.com/photo-1596178065887-1198b6148b2b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" alt="Bar">
                            <div class="gallery-overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Events Section -->
    <section class="events-section bg-light" id="events">
        <div class="container">
            <h2 class="text-center section-title">Eventos & Festas</h2>
            <p class="text-center mb-5">Organizamos eventos memoráveis em nossos espaços exclusivos</p>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="event-card">
                        <div class="room-img position-relative">
                            <img src="https://images.unsplash.com/photo-1519671482749-fd09be7ccebf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Casamentos">
                            <div class="event-date">
                                <span class="day">25</span>
                                <span class="month">Jun</span>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <h5 class="card-title">Casamentos</h5>
                            <p class="card-text">Realize o casamento dos seus sonhos em nossos salões elegantes, com serviço personalizado para tornar seu dia perfeito.</p>
                            <a href="#" class="btn btn-primary-custom">Saiba Mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="event-card">
                        <div class="room-img position-relative">
                            <img src="https://images.unsplash.com/photo-1530103862676-de8c9debad1d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Conferências">
                            <div class="event-date">
                                <span class="day">12</span>
                                <span class="month">Jul</span>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <h5 class="card-title">Conferências</h5>
                            <p class="card-text">Salas de reunião equipadas com tecnologia de ponta para eventos corporativos e conferências de todos os tamanhos.</p>
                            <a href="#" class="btn btn-primary-custom">Saiba Mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mx-auto">
                    <div class="event-card">
                        <div class="room-img position-relative">
                            <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Festas Temáticas">
                            <div class="event-date">
                                <span class="day">03</span>
                                <span class="month">Ago</span>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <h5 class="card-title">Festas Temáticas</h5>
                            <p class="card-text">Celebre ocasiões especiais com nossas festas temáticas exclusivas, desde aniversários até eventos corporativos.</p>
                            <a href="#" class="btn btn-primary-custom">Saiba Mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section" id="testimonials">
        <div class="container">
            <h2 class="text-center section-title">O Que Nossos Hóspedes Dizem</h2>
            <p class="text-center mb-5">Experiências reais de hóspedes que viveram o luxo em primeira mão</p>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-card text-center">
                        <div class="testimonial-img">
                            <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Maria Silva">
                        </div>
                        <h5>Maria Silva</h5>
                        <p class="text-muted">São Paulo, Brasil</p>
                        <div class="rating mb-3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                        <p class="mb-0">"A suíte presidencial superou todas as minhas expectativas. A atenção aos detalhes e o serviço impecável fizeram da minha estadia uma experiência verdadeiramente memorável."</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-card text-center">
                        <div class="testimonial-img">
                            <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Carlos Mendes">
                        </div>
                        <h5>Carlos Mendes</h5>
                        <p class="text-muted">Rio de Janeiro, Brasil</p>
                        <div class="rating mb-3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                        <p class="mb-0">"O serviço de concierge foi excepcional, organizando todos os meus passeios e reservas com perfeição. O spa é simplesmente divino - voltarei certamente!"</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mx-auto">
                    <div class="testimonial-card text-center">
                        <div class="testimonial-img">
                            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Ana Costa">
                        </div>
                        <h5>Ana Costa</h5>
                        <p class="text-muted">Lisboa, Portugal</p>
                        <div class="rating mb-3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star-half-alt text-warning"></i>
                        </div>
                        <p class="mb-0">"Adoramos a localização do hotel e a decoração elegante. O café da manhã era uma experiência gastronômica por si só. Recomendo sem hesitação!"</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section bg-light" id="contact">
        <div class="container">
            <h2 class="text-center section-title">Entre em Contato</h2>
            <p class="text-center mb-5">Estamos à disposição para tornar sua estadia inesquecível</p>
            <div class="row">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <div class="contact-info">
                        <h3 class="mb-4">Informações de Contato</h3>
                        <div class="d-flex mb-4">
                            <i class="fas fa-map-marker-alt contact-icon"></i>
                            <div>
                                <h5>Endereço</h5>
                                <p>Av. Paulista, 1000<br>São Paulo - SP, 01310-100</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <i class="fas fa-phone-alt contact-icon"></i>
                            <div>
                                <h5>Telefone</h5>
                                <p>+55 (11) 4002-8922</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <i class="fas fa-envelope contact-icon"></i>
                            <div>
                                <h5>Email</h5>
                                <p>reservas@luxuryhotels.com.br</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <i class="fas fa-clock contact-icon"></i>
                            <div>
                                <h5>Horário de Funcionamento</h5>
                                <p>Recepção 24 horas<br>Restaurante: 6h - 23h</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <input type="text" class="form-control" placeholder="Seu Nome" required>
                            </div>
                            <div class="col-md-6 mb-4">
                                <input type="email" class="form-control" placeholder="Seu Email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <input type="tel" class="form-control" placeholder="Seu Telefone">
                            </div>
                            <div class="col-md-6 mb-4">
                                <select class="form-control">
                                    <option value="" disabled selected>Assunto</option>
                                    <option>Reserva</option>
                                    <option>Informações</option>
                                    <option>Eventos</option>
                                    <option>Outros</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-4">
                            <textarea class="form-control" rows="5" placeholder="Sua Mensagem" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary-custom">Enviar Mensagem</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.376415267273!2d-46.65581572469114!3d-23.55508057880704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59c8da0aa315%3A0xd59f9431f2c9776a!2sAv.%20Paulista%2C%201000%20-%20Bela%20Vista%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2001310-100!5e0!3m2!1spt-BR!2sbr!4v1689877890622!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h3 class="mb-4">LUXURY HOTELS</h3>
                    <p>Redefinindo o conceito de luxo na hotelaria desde 2005. Comprometidos em oferecer experiências memoráveis através de serviço excepcional, comodidades de primeira classe e atenção aos detalhes.</p>
                    <div class="social-icons mt-4">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
                    <div class="footer-links">
                        <h5>Links Rápidos</h5>
                        <ul>
                            <li><a href="#home">Home</a></li>
                            <li><a href="#about">Sobre</a></li>
                            <li><a href="#rooms">Quartos</a></li>
                            <li><a href="#services">Serviços</a></li>
                            <li><a href="#testimonials">Depoimentos</a></li>
                            <li><a href="#contact">Contato</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mb-4 mb-md-0">
                    <div class="footer-links">
                        <h5>Serviços</h5>
                        <ul>
                            <li><a href="#">Reservas</a></li>
                            <li><a href="#">Spa & Bem-estar</a></li>
                            <li><a href="#">Restaurante</a></li>
                            <li><a href="#">Eventos</a></li>
                            <li><a href="#">Pacotes Especiais</a></li>
                            <li><a href="#">Transporte</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="footer-links">
                        <h5>Newsletter</h5>
                        <p>Assine nossa newsletter para receber ofertas exclusivas e novidades.</p>
                        <form class="mt-3">
                            <div class="input-group mb-3">
                                <input type="email" class="form-control" placeholder="Seu Email" aria-label="Seu Email">
                                <button class="btn btn-primary-custom" type="button">Assinar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <hr class="mt-5" style="border-color: rgba(255,255,255,0.1);">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; 2023 Luxury Hotels. Todos os direitos reservados.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Desenvolvido com <i class="fas fa-heart text-danger"></i> por sua equipe</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <div class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </div>

@endsection