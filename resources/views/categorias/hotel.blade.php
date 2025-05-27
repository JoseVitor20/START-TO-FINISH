@extends('layout')

@section('title', 'Hotel Paraíso - Luxo e Conforto')

@push('estilos')
    <style>
        :root {
            --primary-color: #3a5a78;
            --secondary-color: #e9c46a;
            --light-color: #f8f9fa;
            --dark-color: #343a40;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
        }
        
        .bg-primary-custom {
            background-color: var(--primary-color) !important;
        }
        
        .text-primary-custom {
            color: var(--primary-color) !important;
        }
        
        .btn-primary-custom {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            color: white;
        }
        
        .btn-primary-custom:hover {
            background-color: #2c4761;
            border-color: #2c4761;
        }
        
        .btn-secondary-custom {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
            color: var(--dark-color);
        }
        
        .btn-secondary-custom:hover {
            background-color: #d9b24a;
            border-color: #d9b24a;
        }
        
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');
            background-size: cover;
            background-position: center;
            min-height: 80vh;
            color: white;
        }
        
        .room-card {
            transition: transform 0.3s;
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        .room-card:hover {
            transform: translateY(-10px);
        }
        
        .amenity-icon {
            font-size: 2rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }
        
        .testimonial-card {
            border-left: 4px solid var(--secondary-color);
        }
        
        .footer {
            background-color: var(--dark-color);
            color: white;
        }
        
        .footer a {
            color: var(--light-color);
            text-decoration: none;
        }
        
        .footer a:hover {
            color: var(--secondary-color);
        }
        
        .social-icon {
            font-size: 1.5rem;
            margin-right: 15px;
            color: white;
        }
        
        .social-icon:hover {
            color: var(--secondary-color);
        }
    </style>
@endpush

@section('content')
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary-custom fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <i class="bi bi-building"></i> Hotel Paraíso
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#quartos">Quartos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#servicos">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#galeria">Galeria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contato">Contato</a>
                    </li>
                </ul>
                <a href="#reservas" class="btn btn-secondary-custom ms-lg-3">Reservar Agora</a>
            </div>
        </div>
    </nav>

    <!-- Seção Hero -->
    <header class="hero-section d-flex align-items-center">
        <div class="container text-center">
            <h1 class="display-3 fw-bold mb-4">Bem-vindo ao Hotel Paraíso</h1>
            <p class="lead mb-5">Experiência única de luxo e conforto em um dos destinos mais desejados do mundo</p>
            <a href="#quartos" class="btn btn-primary-custom btn-lg me-2">Nossos Quartos</a>
            <a href="#reservas" class="btn btn-outline-light btn-lg">Reservar Agora</a>
        </div>
    </header>

    <!-- Seção Sobre -->
    <section class="py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Hotel Paraíso" class="img-fluid rounded shadow">
                </div>
                <div class="col-lg-6">
                    <h2 class="text-primary-custom mb-4">Sobre Nosso Hotel</h2>
                    <p class="lead">O Hotel Paraíso oferece uma experiência única de hospedagem, combinando conforto moderno com um toque de elegância clássica.</p>
                    <p>Localizado em uma das áreas mais belas da cidade, nosso hotel é o destino perfeito para viajantes que buscam relaxamento e sofisticação. Com mais de 20 anos de excelência em hospitalidade, nos orgulhamos de oferecer serviços personalizados que atendem às necessidades de cada hóspede.</p>
                    <div class="d-flex align-items-center mt-4">
                        <i class="bi bi-award-fill text-primary-custom fs-1 me-4"></i>
                        <div>
                            <h5 class="mb-1">Certificado de Excelência</h5>
                            <p class="mb-0">Premiado como melhor hotel de luxo por 5 anos consecutivos</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção Quartos -->
    <section id="quartos" class="py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="text-primary-custom">Nossos Quartos</h2>
                <p class="lead">Escolha o ambiente perfeito para sua estadia</p>
            </div>
            <div class="row g-4">
                <!-- Quarto 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card room-card h-100">
                        <img src="https://images.unsplash.com/photo-1596394516093-501ba68a0ba6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" class="card-img-top" alt="Quarto Standard">
                        <div class="card-body">
                            <h5 class="card-title">Quarto Standard</h5>
                            <p class="card-text">Conforto e praticidade em um espaço bem planejado, perfeito para estadias curtas.</p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle-fill text-primary-custom me-2"></i> 20m²</li>
                                <li><i class="bi bi-check-circle-fill text-primary-custom me-2"></i> 1 cama de casal</li>
                                <li><i class="bi bi-check-circle-fill text-primary-custom me-2"></i> Wi-Fi gratuito</li>
                            </ul>
                        </div>
                        <div class="card-footer bg-white border-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="mb-0 text-primary-custom">R$ 350<small>/noite</small></h5>
                                <a href="#reservas" class="btn btn-primary-custom">Reservar</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Quarto 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card room-card h-100">
                        <img src="https://images.unsplash.com/photo-1729605411476-defbdab14c54?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8cXVhcnRvJTIwZGVsdXhlfGVufDB8fDB8fHww" class="card-img-top" alt="Quarto Deluxe">
                        <div class="card-body">
                            <h5 class="card-title">Quarto Deluxe</h5>
                            <p class="card-text">Amplo e sofisticado, com vista privilegiada e amenities exclusivas.</p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle-fill text-primary-custom me-2"></i> 35m²</li>
                                <li><i class="bi bi-check-circle-fill text-primary-custom me-2"></i> 1 cama king size</li>
                                <li><i class="bi bi-check-circle-fill text-primary-custom me-2"></i> Varanda privativa</li>
                                <li><i class="bi bi-check-circle-fill text-primary-custom me-2"></i> Banheira de hidromassagem</li>
                            </ul>
                        </div>
                        <div class="card-footer bg-white border-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="mb-0 text-primary-custom">R$ 650<small>/noite</small></h5>
                                <a href="#reservas" class="btn btn-primary-custom">Reservar</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Quarto 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card room-card h-100">
                        <img src="https://images.unsplash.com/photo-1578683010236-d716f9a3f461?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" class="card-img-top" alt="Suíte Presidencial">
                        <div class="card-body">
                            <h5 class="card-title">Suíte Presidencial</h5>
                            <p class="card-text">O máximo em luxo e conforto, com serviço de mordomo 24 horas e área privativa.</p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle-fill text-primary-custom me-2"></i> 80m²</li>
                                <li><i class="bi bi-check-circle-fill text-primary-custom me-2"></i> 2 quartos separados</li>
                                <li><i class="bi bi-check-circle-fill text-primary-custom me-2"></i> Sala de estar</li>
                                <li><i class="bi bi-check-circle-fill text-primary-custom me-2"></i> Serviço de mordomo</li>
                                <li><i class="bi bi-check-circle-fill text-primary-custom me-2"></i> Vista panorâmica</li>
                            </ul>
                        </div>
                        <div class="card-footer bg-white border-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="mb-0 text-primary-custom">R$ 1.200<small>/noite</small></h5>
                                <a href="#reservas" class="btn btn-primary-custom">Reservar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção Serviços -->
    <section id="servicos" class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="text-primary-custom">Nossos Serviços</h2>
                <p class="lead">Tudo que você precisa para uma estadia perfeita</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="amenity-icon">
                        <i class="bi bi-cup-hot-fill"></i>
                    </div>
                    <h5>Café da Manhã</h5>
                    <p>Buffet completo com opções saudáveis e regionais, servido diariamente das 6h às 11h.</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="amenity-icon">
                        <i class="bi bi-wifi"></i>
                    </div>
                    <h5>Wi-Fi Rápido</h5>
                    <p>Internet de alta velocidade em todo o hotel, sem custo adicional.</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="amenity-icon">
                        <i class="bi bi-bicycle"></i>
                    </div>
                    <h5>Academia</h5>
                    <p>Equipamentos modernos e espaço para atividades físicas, aberto 24 horas.</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="amenity-icon">
                        <i class="bi bi-car-front-fill"></i>
                    </div>
                    <h5>Estacionamento</h5>
                    <p>Área coberta e monitorada para seu veículo, com valet service disponível.</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="amenity-icon">
                        <i class="bi bi-water"></i>
                    </div>
                    <h5>Piscina</h5>
                    <p>Área de lazer com piscina aquecida e serviço de bar à beira da piscina.</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="amenity-icon">
                        <i class="bi bi-shop"></i>
                    </div>
                    <h5>Spa</h5>
                    <p>Tratamentos relaxantes e terapêuticos com profissionais qualificados.</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="amenity-icon">
                        <i class="bi bi-bag-check-fill"></i>
                    </div>
                    <h5>Serviço de Concierge</h5>
                    <p>Assistência personalizada para passeios, reservas e recomendações locais.</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="amenity-icon">
                        <i class="bi bi-egg-fried"></i>
                    </div>
                    <h5>Room Service</h5>
                    <p>Cardápio diversificado disponível 24 horas para seu conforto.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção Galeria -->
    <section id="galeria" class="py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="text-primary-custom">Galeria</h2>
                <p class="lead">Conheça nossos espaços e instalações</p>
            </div>
            <div class="row g-3">
                <div class="col-md-4 col-6">
                    <img src="https://images.unsplash.com/photo-1564501049412-61c2a3083791?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1632&q=80" class="img-fluid rounded shadow" alt="Piscina do hotel">
                </div>
                <div class="col-md-4 col-6">
                    <img src="https://images.unsplash.com/photo-1537047902294-62a40c20a6ae?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" class="img-fluid rounded shadow" alt="Restaurante do hotel">
                </div>
                <div class="col-md-4 col-6">
                    <img src="https://images.unsplash.com/photo-1584132967334-10e028bd69f7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" class="img-fluid rounded shadow" alt="Spa do hotel">
                </div>
                <div class="col-md-4 col-6">
                    <img src="https://images.unsplash.com/photo-1571896349842-33c89424de2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1480&q=80" class="img-fluid rounded shadow" alt="Bar do hotel">
                </div>
                <div class="col-md-4 col-6">
                    <img src="https://images.unsplash.com/photo-1496417263034-38ec4f0b665a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1471&q=80" class="img-fluid rounded shadow" alt="Quarto do hotel">
                </div>
                <div class="col-md-4 col-6">
                    <img src="https://images.unsplash.com/photo-1571003123894-1f0594d2b5d9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1494&q=80" class="img-fluid rounded shadow" alt="Academia do hotel">
                </div>
            </div>
        </div>
    </section>

    <!-- Seção Depoimentos -->
    <section class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="text-primary-custom">O que nossos hóspedes dizem</h2>
                <p class="lead">Experiências reais de quem já se hospedou conosco</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 p-3 testimonial-card">
                        <div class="card-body">
                            <div class="mb-3 text-warning">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p class="card-text">"Excelente hotel! Atendimento impecável, quartos limpos e confortáveis, café da manhã delicioso. Sem dúvidas voltarei em minhas próximas viagens."</p>
                        </div>
                        <div class="card-footer bg-white border-0">
                            <div class="d-flex align-items-center">
                                <img src="https://randomuser.me/api/portraits/women/32.jpg" class="rounded-circle me-3" width="50" alt="Cliente">
                                <div>
                                    <h6 class="mb-0">Ana Carolina</h6>
                                    <small class="text-muted">São Paulo, SP</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 p-3 testimonial-card">
                        <div class="card-body">
                            <div class="mb-3 text-warning">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p class="card-text">"Fiquei impressionado com a qualidade do serviço. A suíte presidencial é espetacular, e o spa do hotel é um dos melhores que já visitei. Recomendo!"</p>
                        </div>
                        <div class="card-footer bg-white border-0">
                            <div class="d-flex align-items-center">
                                <img src="https://randomuser.me/api/portraits/men/45.jpg" class="rounded-circle me-3" width="50" alt="Cliente">
                                <div>
                                    <h6 class="mb-0">Ricardo Almeida</h6>
                                    <small class="text-muted">Rio de Janeiro, RJ</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 p-3 testimonial-card">
                        <div class="card-body">
                            <div class="mb-3 text-warning">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </div>
                            <p class="card-text">"Hotel maravilhoso para uma escapada romântica. Adoramos o jantar à beira da piscina e o atendimento personalizado. Voltaremos no nosso próximo aniversário!"</p>
                        </div>
                        <div class="card-footer bg-white border-0">
                            <div class="d-flex align-items-center">
                                <img src="https://randomuser.me/api/portraits/women/68.jpg" class="rounded-circle me-3" width="50" alt="Cliente">
                                <div>
                                    <h6 class="mb-0">Fernanda e Pedro</h6>
                                    <small class="text-muted">Belo Horizonte, MG</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção Reservas -->
    <section id="reservas" class="py-5 bg-primary-custom text-white">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="display-5 fw-bold mb-4">Reserve sua estadia</h2>
                    <p class="lead mb-4">Garanta já sua experiência inesquecível no Hotel Paraíso.</p>
                    <div class="d-flex align-items-center mb-3">
                        <i class="bi bi-telephone-fill fs-4 me-3"></i>
                        <div>
                            <h5 class="mb-0">Ligue para nós</h5>
                            <p class="mb-0">(11) 1234-5678</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="bi bi-envelope-fill fs-4 me-3"></i>
                        <div>
                            <h5 class="mb-0">Envie um e-mail</h5>
                            <p class="mb-0">reservas@hotelparaiso.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card shadow">
                        <div class="card-body p-4">
                            <h4 class="text-primary-custom mb-4">Formulário de Reserva</h4>
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="nome" class="form-label">Nome completo</label>
                                        <input type="text" class="form-control" id="nome" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">E-mail</label>
                                        <input type="email" class="form-control" id="email" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="telefone" class="form-label">Telefone</label>
                                        <input type="tel" class="form-control" id="telefone" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="quarto" class="form-label">Tipo de Quarto</label>
                                        <select class="form-select" id="quarto" required>
                                            <option value="" selected disabled>Selecione</option>
                                            <option value="standard">Quarto Standard</option>
                                            <option value="deluxe">Quarto Deluxe</option>
                                            <option value="presidencial">Suíte Presidencial</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="checkin" class="form-label">Check-in</label>
                                        <input type="date" class="form-control" id="checkin" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="checkout" class="form-label">Check-out</label>
                                        <input type="date" class="form-control" id="checkout" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="mensagem" class="form-label">Mensagem adicional</label>
                                        <textarea class="form-control" id="mensagem" rows="3"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary-custom w-100">Enviar Reserva</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção Contato -->
    <section id="contato" class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="text-primary-custom">Entre em Contato</h2>
                <p class="lead">Estamos à disposição para qualquer dúvida ou informação</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center p-4">
                            <div class="amenity-icon mb-3">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <h5>Endereço</h5>
                            <p class="mb-0">Av. Beira Mar, 1234<br>Praia do Paraíso<br>Florianópolis - SC, 88000-000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center p-4">
                            <div class="amenity-icon mb-3">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <h5>Telefone</h5>
                            <p class="mb-2"><strong>Reservas:</strong> (11) 1234-5678</p>
                            <p class="mb-0"><strong>Recepção:</strong> (11) 9876-5432</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center p-4">
                            <div class="amenity-icon mb-3">
                                <i class="bi bi-envelope-fill"></i>
                            </div>
                            <h5>E-mail</h5>
                            <p class="mb-2"><strong>Reservas:</strong> reservas@hotelparaiso.com</p>
                            <p class="mb-0"><strong>Contato geral:</strong> contato@hotelparaiso.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mapa -->
    <div class="container-fluid p-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3535.992901777459!2d-48.55158892453703!3d-27.59449047628093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x952738248efc5a6b%3A0x9c1e5e1e2a6e0f1d!2sPraia%20do%20Para%C3%ADso%2C%20Florian%C3%B3polis%20-%20SC!5e0!3m2!1spt-BR!2sbr!4v1689876543210!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <!-- Rodapé -->
    <footer class="footer py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h5 class="mb-4"><i class="bi bi-building"></i> Hotel Paraíso</h5>
                    <p>Oferecendo experiências memoráveis desde 2003. Nosso compromisso é com o conforto, luxo e atendimento personalizado.</p>
                    <div class="mt-4">
                        <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                    <h5 class="mb-4">Links Rápidos</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#">Início</a></li>
                        <li class="mb-2"><a href="#quartos">Quartos</a></li>
                        <li class="mb-2"><a href="#servicos">Serviços</a></li>
                        <li class="mb-2"><a href="#galeria">Galeria</a></li>
                        <li class="mb-2"><a href="#contato">Contato</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="mb-4">Newsletter</h5>
                    <p>Assine nossa newsletter para receber ofertas exclusivas.</p>
                    <form>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Seu e-mail">
                            <button class="btn btn-secondary-custom" type="submit">Assinar</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-4">Horário de Funcionamento</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><strong>Recepção:</strong> 24 horas</li>
                        <li class="mb-2"><strong>Restaurante:</strong> 6h-23h</li>
                        <li class="mb-2"><strong>Spa:</strong> 8h-20h</li>
                        <li class="mb-2"><strong>Academia:</strong> 5h-23h</li>
                    </ul>
                </div>
            </div>
            <hr class="my-4 bg-secondary">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; 2023 Hotel Paraíso. Todos os direitos reservados.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Desenvolvido com <i class="bi bi-heart-fill text-danger"></i> por Equipe Hotel Paraíso</p>
                </div>
            </div>
        </div>
    </footer>

@endsection