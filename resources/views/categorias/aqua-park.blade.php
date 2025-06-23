@extends('layout')

@section('title', 'Aqua Park Paradise - O Maior Parque Aquático do Brasil')

@push('estilos')
    <style>
        :root {
            --primary-color: #00a8e8;
            --secondary-color: #0077b6;
            --accent-color: #ff9e00;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
        }
        
        .navbar {
            background-color: var(--primary-color) !important;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .navbar-brand img {
            height: 50px;
        }
        
        .hero-section {
            background: linear-gradient(rgba(0, 168, 232, 0.7), rgba(0, 168, 232, 0.5)), 
                        url('https://images.unsplash.com/photo-1741316041430-4e5362625ff2?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjV8fEFxdWElMjBwYXJrfGVufDB8MHwwfHx8MA%3D%3D');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 120px 0;
            text-align: center;
        }
        
        .btn-primary {
            background-color: var(--accent-color);
            border-color: var(--accent-color);
        }
        
        .btn-primary:hover {
            background-color: #e68a00;
            border-color: #e68a00;
        }
        
        .attraction-card {
            transition: transform 0.3s;
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }
        
        .attraction-card:hover {
            transform: translateY(-10px);
        }
        
        .attraction-img {
            height: 200px;
            object-fit: cover;
        }
        
        .section-title {
            position: relative;
            margin-bottom: 50px;
            color: var(--secondary-color);
        }
        
        .section-title:after {
            content: "";
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background-color: var(--accent-color);
        }
        
        .pricing-card {
            border: none;
            border-radius: 15px;
            transition: all 0.3s;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .pricing-card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        .pricing-header {
            background-color: var(--primary-color);
            color: white;
            padding: 20px;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }
        
        .price {
            font-size: 2.5rem;
            font-weight: bold;
            color: var(--secondary-color);
        }
        
        .highlight {
            background-color: var(--accent-color);
            transform: scale(1.05);
            z-index: 1;
        }
        
        .highlight .pricing-header {
            background-color: var(--secondary-color);
        }
        
        .highlight .price {
            color: white;
        }
        
        .testimonial-card {
            border-left: 5px solid var(--accent-color);
        }
        
        footer {
            background-color: var(--secondary-color);
            color: white;
            padding: 50px 0 20px;
        }
        
        .social-icons a {
            color: white;
            font-size: 1.5rem;
            margin-right: 15px;
            transition: color 0.3s;
        }
        
        .social-icons a:hover {
            color: var(--accent-color);
        }
        
        .water-wave {
            position: relative;
            height: 150px;
            overflow: hidden;
        }
        
        .water-wave:before {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            right: 0;
            background-repeat: repeat;
            height: 10px;
            background-size: 50px 20px;
            background-image: radial-gradient(circle at 10px -5px, transparent 12px, white 13px);
        }
        
        .water-wave:after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            right: 0;
            background-repeat: repeat;
            height: 15px;
            background-size: 40px 20px;
            background-image: radial-gradient(circle at 10px 15px, white 12px, transparent 13px);
        }
    </style>
@endpush

@section('content')
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-white" href="#">
                <i class="bi bi-building"></i> Aqua Park Paradise
            </a>            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="text-white nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-white nav-link" href="#atracoes">Atrações</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-white nav-link" href="#precos">Preços</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-white nav-link" href="#galeria">Galeria</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-white nav-link" href="#contato">Contato</a>
                    </li>
                </ul>
                <a href="#reservas" class="btn btn-primary ms-lg-3">Reservas</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1 class="display-3 fw-bold mb-4">Bem-vindo ao Aqua Park Paradise</h1>
            <p class="lead mb-5">O maior e mais emocionante parque aquático do Brasil</p>
            <a href="#atracoes" class="btn btn-primary btn-lg px-4 me-2">Explorar Atrações</a>
            <a href="#precos" class="btn btn-outline-light btn-lg px-4">Ver Preços</a>
        </div>
    </section>

    <!-- Water Wave Effect -->
    <div class="water-wave"></div>

    <!-- About Section -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="section-title">Diversão para toda a família</h2>
                    <p class="lead">No Aqua Park Paradise, oferecemos diversão para todas as idades em um ambiente seguro e monitorado.</p>
                    <p>Com mais de 20 atrações, áreas gourmet, piscinas de ondas, toboáguas radicais e uma área kids especialmente projetada para os pequenos, garantimos um dia inesquecível para você e sua família.</p>
                    <div class="row mt-4">
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-swimming-pool me-3 text-primary" style="font-size: 2rem;"></i>
                                <div>
                                    <h5 class="mb-0">20+ Atrações</h5>
                                    <p class="mb-0 text-muted">Para todas as idades</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-utensils me-3 text-primary" style="font-size: 2rem;"></i>
                                <div>
                                    <h5 class="mb-0">Área Gourmet</h5>
                                    <p class="mb-0 text-muted">Comidas e bebidas</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-lock me-3 text-primary" style="font-size: 2rem;"></i>
                                <div>
                                    <h5 class="mb-0">Segurança</h5>
                                    <p class="mb-0 text-muted">Salva-vidas 24/7</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-bus me-3 text-primary" style="font-size: 2rem;"></i>
                                <div>
                                    <h5 class="mb-0">Transporte</h5>
                                    <p class="mb-0 text-muted">Fácil acesso</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1629834598512-77a443808b73?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8UGFycXVlJTIwYXF1YXRpY298ZW58MHwxfDB8fHww" alt="Aqua Park" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Attractions Section -->
    <section id="atracoes" class="py-5">
        <div class="container py-5">
            <h2 class="text-center section-title">Nossas Principais Atrações</h2>
            <p class="text-center lead mb-5">Descubra as emoções que preparamos para você</p>
            
            <div class="row">
                <div class="col-md-4">
                    <div class="card attraction-card h-100">
                        <img src="https://images.unsplash.com/photo-1532531565-a7682232341d?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8QXF1YXBhcmt8ZW58MHwxfDB8fHww" alt="Tobogã Radical">
                        <div class="card-body">
                            <h5 class="card-title">Tobogã Radical</h5>
                            <p class="card-text">Desça a mais de 60km/h em um tobogã de 30 metros de altura com loops e curvas fechadas.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-primary">Radical</span>
                                <small class="text-muted">Altura mínima: 1.40m</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card attraction-card h-100">
                        <img src="https://images.unsplash.com/photo-1664374128459-f4592389a14b?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mjh8fEFxdWFwYXJrfGVufDB8MXwwfHx8MA%3D%3D" class="card-img-top attration-img" alt="Rio Lento">
                        <div class="card-body">
                            <h5 class="card-title">Rio Lento</h5>
                            <p class="card-text">Relaxe em nosso rio lento de 500 metros que circula todo o parque com bóias especiais.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-success">Família</span>
                                <small class="text-muted">Todas as idades</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card attraction-card h-100">
                        <img src="https://images.unsplash.com/photo-1691839418131-f59af710e611?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8QXF1YXBhcmt8ZW58MHwxfDB8fHww" class="card-img-top attration-img" alt="Piscina de Ondas">
                        <div class="card-body">
                            <h5 class="card-title">Piscina de Ondas</h5>
                            <p class="card-text">Nossa piscina de ondas gigantes com capacidade para 500 pessoas e sistema de ondas controláveis.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-warning text-dark">Popular</span>
                                <small class="text-muted">Altura mínima: 1.20m</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5">
                <a href="#" class="btn btn-primary btn-lg">Ver Todas as Atrações</a>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="precos" class="py-5 bg-light">
        <div class="container py-5">
            <h2 class="text-center section-title">Nossos Planos</h2>
            <p class="text-center lead mb-5">Escolha o melhor para sua diversão</p>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card pricing-card h-100">
                        <div class="pricing-header text-center">
                            <h4 class="my-0 fw-normal">Básico</h4>
                        </div>
                        <div class="card-body text-center">
                            <h1 class="card-title price">R$99<small class="text-muted fw-light">/dia</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Acesso a todas as atrações</li>
                                <li>Estacionamento gratuito</li>
                                <li>1 refeição inclusa</li>
                                <li>Área de descanso</li>
                                <li class="text-muted">Armário não incluso</li>
                                <li class="text-muted">Toalha não inclusa</li>
                            </ul>
                            <button type="button" class="btn btn-outline-primary btn-lg">Comprar Agora</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card pricing-card h-100 highlight">
                        <div class="pricing-header text-center">
                            <h4 class="my-0 fw-normal">Premium</h4>
                        </div>
                        <div class="card-body text-center">
                            <h1 class="card-title price">R$149<small class="text-light fw-light">/dia</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Acesso a todas as atrações</li>
                                <li>Estacionamento VIP</li>
                                <li>3 refeições inclusas</li>
                                <li>Área Premium de descanso</li>
                                <li>Armário incluso</li>
                                <li>Toalha inclusa</li>
                            </ul>
                            <button type="button" class="btn btn-primary btn-lg">Comprar Agora</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card pricing-card h-100">
                        <div class="pricing-header text-center">
                            <h4 class="my-0 fw-normal">Família</h4>
                        </div>
                        <div class="card-body text-center">
                            <h1 class="card-title price">R$399<small class="text-muted fw-light">/dia</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>4 pessoas (2 adultos + 2 crianças)</li>
                                <li>Acesso a todas as atrações</li>
                                <li>Estacionamento gratuito</li>
                                <li>Refeições inclusas</li>
                                <li>2 armários inclusos</li>
                                <li>Toalhas inclusas</li>
                            </ul>
                            <button type="button" class="btn btn-outline-primary btn-lg">Comprar Agora</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5">
                <p class="text-muted">* Crianças até 5 anos não pagam. Consulte nossos pacotes promocionais para grupos.</p>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-5">
        <div class="container py-5">
            <h2 class="text-center section-title">O Que Dizem Nossos Visitantes</h2>
            <p class="text-center lead mb-5">Experiências reais de quem já se divertiu conosco</p>
            
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 p-3 testiomonial-card">
                        <div class="card-body">
                            <div class="d-flex mb-3">
                                <img src="https://randomuser.me/api/portraits/women/32.jpg" class="rounded-circle me-3" width="60" height="60" alt="Cliente">
                                <div>
                                    <h5 class="mb-1">Ana Carolina</h5>
                                    <div class="text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="card-text">"Levei meus filhos e foi o melhor passeio que fizemos este ano! As atrações são incríveis e a segurança do parque nos deixou muito tranquilos."</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 p-3 testiomonial-card">
                        <div class="card-body">
                            <div class="d-flex mb-3">
                                <img src="https://randomuser.me/api/portraits/men/45.jpg" class="rounded-circle me-3" width="60" height="60" alt="Cliente">
                                <div>
                                    <h5 class="mb-1">Carlos Eduardo</h5>
                                    <div class="text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="card-text">"O tobogã radical é sensacional! Fui com amigos e já estamos planejando voltar. A estrutura do parque é excelente e o atendimento impecável."</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 p-3 testiomonial-card">
                        <div class="card-body">
                            <div class="d-flex mb-3">
                                <img src="https://randomuser.me/api/portraits/women/68.jpg" class="rounded-circle me-3" width="60" height="60" alt="Cliente">
                                <div>
                                    <h5 class="mb-1">Fernanda Silva</h5>
                                    <div class="text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="card-text">"A área kids é perfeita para os pequenos! Meu filho de 4 anos adorou e eu pude relaxar sabendo que ele estava seguro. Recomendo para todas as famílias!"</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="galeria" class="py-5 bg-light">
        <div class="container py-5">
            <h2 class="text-center section-title">Galeria</h2>
            <p class="text-center lead mb-5">Alguns momentos incríveis no Aqua Park Paradise</p>
            
            <div class="row g-3">
                <div class="col-md-4 col-6">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#galleryModal">
                        <img src="https://images.unsplash.com/photo-1691839418131-f59af710e611?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8QXF1YXBhcmt8ZW58MHwxfDB8fHww" class="img-fluid rounded shadow" alt="Galeria">
                    </a>
                </div>
                <div class="col-md-4 col-6">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#galleryModal">
                        <img src="https://images.unsplash.com/photo-1532531565-a7682232341d?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8QXF1YXBhcmt8ZW58MHwxfDB8fHww" class="img-fluid rounded shadow" alt="Galeria">
                    </a>
                </div>
                <div class="col-md-4 col-6">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#galleryModal">
                        <img src="https://plus.unsplash.com/premium_photo-1661378993928-ad6ed4338892?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fEFxdWFwYXJrfGVufDB8MXwwfHx8MA%3D%3D" class="img-fluid rounded shadow" alt="Galeria">
                    </a>
                </div>
                <div class="col-md-4 col-6">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#galleryModal">
                        <img src="https://plus.unsplash.com/premium_photo-1664908349683-c07df0ba5bc9?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mjl8fEFxdWFwYXJrfGVufDB8MXwwfHx8MA%3D%3D" class="img-fluid rounded shadow" alt="Galeria">
                    </a>
                </div>
                <div class="col-md-4 col-6">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#galleryModal">
                        <img src="https://plus.unsplash.com/premium_photo-1661477512915-0831e44a5907?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjV8fEFxdWFwYXJrfGVufDB8MXwwfHx8MA%3D%3D" class="img-fluid rounded shadow" alt="Galeria">
                    </a>
                </div>
                <div class="col-md-4 col-6">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#galleryModal">
                        <img src="https://images.unsplash.com/photo-1707575569721-077b2b16fdb7?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjZ8fEFxdWFwYXJrfGVufDB8MXwwfHx8MA%3D%3D" class="img-fluid rounded shadow" alt="Galeria">
                    </a>
                </div>
            </div>
            
            <div class="text-center mt-5">
                <a href="#" class="btn btn-primary btn-lg">Ver Mais Fotos</a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contato" class="py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h2 class="section-title">Entre em Contato</h2>
                    <p class="lead">Tem alguma dúvida ou quer fazer uma reserva? Entre em contato conosco!</p>
                    
                    <div class="mb-4">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-map-marker-alt me-3 text-primary" style="font-size: 1.5rem;"></i>
                            <div>
                                <h5 class="mb-0">Endereço</h5>
                                <p class="mb-0">Av. das Águas, 1234 - Parque Aquático, SP</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-phone-alt me-3 text-primary" style="font-size: 1.5rem;"></i>
                            <div>
                                <h5 class="mb-0">Telefone</h5>
                                <p class="mb-0">(11) 4002-8922</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-envelope me-3 text-primary" style="font-size: 1.5rem;"></i>
                            <div>
                                <h5 class="mb-0">Email</h5>
                                <p class="mb-0">contato@aquaparkparadise.com.br</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-clock me-3 text-primary" style="font-size: 1.5rem;"></i>
                            <div>
                                <h5 class="mb-0">Horário de Funcionamento</h5>
                                <p class="mb-0">Terça a Domingo: 9h às 18h</p>
                                <p class="mb-0">Segunda: Fechado para manutenção</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="card shadow">
                        <div class="card-body p-4">
                            <h3 class="mb-4">Envie uma Mensagem</h3>
                            <form>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nome</label>
                                    <input type="text" class="form-control" id="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Telefone</label>
                                    <input type="tel" class="form-control" id="phone">
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Mensagem</label>
                                    <textarea class="form-control" id="message" rows="4" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg">Enviar Mensagem</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.0754267452926!2d-46.65342658440729!3d-23.565734367638153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59c8da0aa315%3A0xd59f9431f2c9776a!2sAv.%20Paulista%2C%20S%C3%A3o%20Paulo%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1623860123456!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img src="https://via.placeholder.com/150x50?text=AquaPark+Paradise" alt="Aqua Park Paradise" class="mb-3">
                    <p>O Aqua Park Paradise é o maior e mais completo parque aquático do Brasil, oferecendo diversão e segurança para toda a família desde 2010.</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                    <h5 class="mb-4">Links Rápidos</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Home</a></li>
                        <li class="mb-2"><a href="#atracoes" class="text-white text-decoration-none">Atrações</a></li>
                        <li class="mb-2"><a href="#precos" class="text-white text-decoration-none">Preços</a></li>
                        <li class="mb-2"><a href="#galeria" class="text-white text-decoration-none">Galeria</a></li>
                        <li class="mb-2"><a href="#contato" class="text-white text-decoration-none">Contato</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="mb-4">Horário de Funcionamento</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">Terça a Sexta: 9h - 18h</li>
                        <li class="mb-2">Sábado: 8h - 19h</li>
                        <li class="mb-2">Domingo: 8h - 19h</li>
                        <li class="mb-2">Segunda: Fechado</li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-4">Newsletter</h5>
                    <p>Assine nossa newsletter para receber promoções e novidades.</p>
                    <form>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Seu email" aria-label="Seu email">
                            <button class="btn btn-primary" type="button">Assinar</button>
                        </div>
                    </form>
                </div>
            </div>
            <hr class="my-4 bg-light">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; 2023 Aqua Park Paradise. Todos os direitos reservados.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Desenvolvido com <i class="fas fa-heart text-danger"></i> por Aqua Park Team</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Gallery Modal -->
    <div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Aqua Park Paradise</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="https://images.unsplash.com/photo-1571896349842-33c89424de2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=880&q=80" class="img-fluid" alt="Galeria">
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Fechar</button>
                    <div>
                        <button type="button" class="btn btn-outline-primary me-2"><i class="fas fa-chevron-left"></i></button>
                        <button type="button" class="btn btn-outline-primary"><i class="fas fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        // Ativa o popover
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        })
        
        // Adiciona classe ativa ao nav-item quando a seção estiver visível
        const sections = document.querySelectorAll("section");
        const navItems = document.querySelectorAll(".nav-link");
        
        window.addEventListener("scroll", function() {
            let current = "";
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                
                if (pageYOffset >= sectionTop - 300) {
                    current = section.getAttribute("id");
                }
            });
            
            navItems.forEach(item => {
                item.classList.remove("active");
                if (item.getAttribute("href") === `#${current}`) {
                    item.classList.add("active");
                }
            });
        });
    </script>
@endpush