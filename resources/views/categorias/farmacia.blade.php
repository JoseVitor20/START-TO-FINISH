@extends('layouts.app')

@section('title', 'PharmaCare - Sua Farmácia Digital')

@push('estilosEcodigos')
    <link rel="stylesheet" href="{{ asset('css/categorias/farmacia.css') }}">
    <script type="module" src="{{ asset('js/categorias/farmacia.js') }}"></script>          
@endpush

@section('content')
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-prescription-bottle-alt me-2"></i>PharmaCare
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#products">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contato</a>
                    </li>
                </ul>
                <div class="ms-3 d-flex">
                    <a href="#" class="btn btn-outline-light me-2"><i class="fas fa-user"></i></a>
                    <a href="#" class="btn btn-outline-light position-relative">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            3
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="hero-title">Cuidando da sua saúde com excelência</h1>
                    <p class="hero-subtitle">Produtos farmacêuticos de qualidade e atendimento personalizado</p>
                    <a href="#products" class="btn btn-primary btn-lg">
                        <i class="fas fa-shopping-basket me-2"></i>Compre agora
                    </a>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <img src="https://images.unsplash.com/photo-1587854692152-cbe660dbde88?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80" alt="Farmácia" class="img-fluid rounded-3 shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="container mb-5">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="feature-card text-center">
                    <div class="feature-icon">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <h3>Entrega Rápida</h3>
                    <p>Entregamos em até 2 horas na sua região. Pedidos acima de R$ 50 têm frete grátis.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card text-center">
                    <div class="feature-icon">
                        <i class="fas fa-pills"></i>
                    </div>
                    <h3>Farmácia Popular</h3>
                    <p>Medicamentos com até 90% de desconto. Aceitamos todos os programas de saúde.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card text-center">
                    <div class="feature-icon">
                        <i class="fas fa-user-md"></i>
                    </div>
                    <h3>Atendimento Farmacêutico</h3>
                    <p>Profissionais qualificados para tirar suas dúvidas sobre medicamentos e tratamentos.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="container mb-5 py-5">
        <h2 class="text-center section-title">Nossos Produtos em Destaque</h2>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="card product-card">
                    <span class="badge badge-discount position-absolute top-0 end-0 m-2">20% OFF</span>
                    <img src="https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1130&q=80" class="card-img-top product-img" alt="Medicamento">
                    <div class="card-body">
                        <h5 class="card-title">Paracetamol 750mg</h5>
                        <p class="card-text">Caixa com 20 comprimidos</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <span class="price">R$ 12,90</span>
                                <span class="old-price ms-2">R$ 15,90</span>
                            </div>
                            <button class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-cart-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card product-card">
                    <img src="https://images.unsplash.com/photo-1620892605645-cb53755cdd66?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTh8fHZpdGFtaW5hJTIwYyUyMHJlbSVDMyVBOWRpb3xlbnwwfHwwfHx8MA%3D%3D">
                    <div class="card-body">
                        <h5 class="card-title">Vitamina C 1000mg</h5>
                        <p class="card-text">Frasco com 60 cápsulas</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <span class="price">R$ 45,90</span>
                            </div>
                            <button class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-cart-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card product-card">
                    <span class="badge badge-discount position-absolute top-0 end-0 m-2">15% OFF</span>
                    <img src="https://media.istockphoto.com/id/164850671/pt/foto/plano-aproximado-de-medicamento-verter-para-colher-de-medida.webp?a=1&b=1&s=612x612&w=0&k=20&c=LYQtNMPcl0fqMVGPOwbex4Q7bHzd9AUFUSD6F9brhxk=" class="card-img-top product-img" alt="Xarope">
                    <div class="card-body">
                        <h5 class="card-title">Xarope para Tosse</h5>
                        <p class="card-text">Frasco 120ml</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <span class="price">R$ 18,50</span>
                                <span class="old-price ms-2">R$ 21,50</span>
                            </div>
                            <button class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-cart-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card product-card">
                    <img src="https://images.unsplash.com/photo-1624638760852-8ede1666ab07?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8S2l0JTIwUHJpbWVpcm9zJTIwU29jb3Jyb3N8ZW58MHx8MHx8fDA%3D" class="card-img-top product-img" alt="Curativo">
                    <div class="card-body">
                        <h5 class="card-title">Kit Primeiros Socorros</h5>
                        <p class="card-text">Caixa com 50 itens</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <span class="price">R$ 89,90</span>
                            </div>
                            <button class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-cart-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="#" class="btn btn-outline-primary">Ver todos os produtos</a>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="container mb-5 py-5 bg-light rounded-3">
        <h2 class="text-center section-title">Nossos Serviços</h2>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="feature-card">
                    <div class="d-flex align-items-start">
                        <div class="feature-icon me-3">
                            <i class="fas fa-syringe"></i>
                        </div>
                        <div>
                            <h3>Aplicação de Injetáveis</h3>
                            <p>Realizamos aplicação de medicamentos injetáveis com segurança e conforto, mediante prescrição médica.</p>
                            <a href="#" class="btn btn-sm btn-outline-primary">Saiba mais</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="feature-card">
                    <div class="d-flex align-items-start">
                        <div class="feature-icon me-3">
                            <i class="fas fa-weight"></i>
                        </div>
                        <div>
                            <h3>Controle de Pressão e Glicemia</h3>
                            <p>Verificação gratuita de pressão arterial e glicemia capilar. Acompanhamento personalizado.</p>
                            <a href="#" class="btn btn-sm btn-outline-primary">Saiba mais</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="feature-card">
                    <div class="d-flex align-items-start">
                        <div class="feature-icon me-3">
                            <i class="fas fa-baby"></i>
                        </div>
                        <div>
                            <h3>Farmácia Pediátrica</h3>
                            <p>Medicamentos específicos para crianças, com dosagens adequadas e orientação especializada.</p>
                            <a href="#" class="btn btn-sm btn-outline-primary">Saiba mais</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="feature-card">
                    <div class="d-flex align-items-start">
                        <div class="feature-icon me-3">
                            <i class="fas fa-prescription"></i>
                        </div>
                        <div>
                            <h3>Manipulação de Medicamentos</h3>
                            <p>Preparamos medicamentos personalizados conforme prescrição médica, com dosagens específicas.</p>
                            <a href="#" class="btn btn-sm btn-outline-primary">Saiba mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="container mb-5 py-5">
        <h2 class="text-center section-title">O que nossos clientes dizem</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="testimonial-card">
                    <div class="d-flex align-items-center mb-3">
                        <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="Cliente" class="testimonial-img me-3">
                        <div>
                            <h5 class="mb-0">Maria Silva</h5>
                            <small class="text-muted">Paciente há 3 anos</small>
                        </div>
                    </div>
                    <p class="mb-0">"Sempre encontro os medicamentos que preciso e o atendimento é excelente. Os farmacêuticos são muito atenciosos e me orientam sobre como tomar corretamente."</p>
                    <div class="mt-2 text-warning">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="testimonial-card">
                    <div class="d-flex align-items-center mb-3">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Cliente" class="testimonial-img me-3">
                        <div>
                            <h5 class="mb-0">João Oliveira</h5>
                            <small class="text-muted">Paciente há 1 ano</small>
                        </div>
                    </div>
                    <p class="mb-0">"A entrega é super rápida e os preços são ótimos. Compro meus remédios de uso contínuo aqui e sempre têm disponível. Recomendo!"</p>
                    <div class="mt-2 text-warning">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="testimonial-card">
                    <div class="d-flex align-items-center mb-3">
                        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Cliente" class="testimonial-img me-3">
                        <div>
                            <h5 class="mb-0">Ana Costa</h5>
                            <small class="text-muted">Paciente há 5 anos</small>
                        </div>
                    </div>
                    <p class="mb-0">"Adoro o serviço de manipulação. Eles preparam exatamente o que meu médico receitou, na dosagem correta. Além disso, o atendimento é muito humano e cuidadoso."</p>
                    <div class="mt-2 text-warning">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="container mb-5 py-5 bg-light rounded-3">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="section-title">Sobre a PharmaCare</h2>
                <p>A PharmaCare nasceu em 2010 com o objetivo de oferecer produtos farmacêuticos de qualidade com atendimento humanizado e preços acessíveis.</p>
                <p>Nossa equipe é formada por farmacêuticos altamente qualificados, comprometidos com o bem-estar e saúde de nossos clientes.</p>
                <p>Além da venda de medicamentos, oferecemos diversos serviços de saúde para melhor atender à comunidade.</p>
                <div class="mt-4">
                    <div class="d-flex mb-3">
                        <div class="me-3 text-primary">
                            <i class="fas fa-check-circle fa-2x"></i>
                        </div>
                        <div>
                            <h5 class="mb-0">Missão</h5>
                            <p class="mb-0">Promover saúde e qualidade de vida através de produtos e serviços farmacêuticos de excelência.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="me-3 text-primary">
                            <i class="fas fa-eye fa-2x"></i>
                        </div>
                        <div>
                            <h5 class="mb-0">Visão</h5>
                            <p class="mb-0">Ser referência em farmácia comunitária, reconhecida pelo atendimento diferenciado e compromisso com a saúde.</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="me-3 text-primary">
                            <i class="fas fa-heart fa-2x"></i>
                        </div>
                        <div>
                            <h5 class="mb-0">Valores</h5>
                            <p class="mb-0">Ética, respeito, qualidade, inovação e responsabilidade social.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Farmácia por dentro" class="img-fluid rounded-3 shadow">
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container mb-5 py-5">
        <h2 class="text-center section-title">Entre em Contato</h2>
        <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="feature-card h-100">
                    <h3 class="mb-4">Informações de Contato</h3>
                    <div class="d-flex align-items-start mb-4">
                        <div class="me-3 text-primary">
                            <i class="fas fa-map-marker-alt fa-lg"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Endereço</h5>
                            <p class="mb-0">Av. Saúde, 1234 - Centro<br>São Paulo/SP - CEP 01000-000</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start mb-4">
                        <div class="me-3 text-primary">
                            <i class="fas fa-phone-alt fa-lg"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Telefone</h5>
                            <p class="mb-0">(11) 1234-5678<br>(11) 98765-4321 (WhatsApp)</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start mb-4">
                        <div class="me-3 text-primary">
                            <i class="fas fa-envelope fa-lg"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">E-mail</h5>
                            <p class="mb-0">contato@pharmacare.com.br</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start">
                        <div class="me-3 text-primary">
                            <i class="fas fa-clock fa-lg"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Horário de Funcionamento</h5>
                            <p class="mb-0">Segunda a Sexta: 8h às 20h<br>Sábado: 9h às 18h<br>Domingo: 9h às 13h</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="feature-card h-100">
                    <h3 class="mb-4">Envie uma Mensagem</h3>
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Telefone</label>
                            <input type="tel" class="form-control" id="phone">
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Assunto</label>
                            <select class="form-select" id="subject">
                                <option selected>Selecione um assunto</option>
                                <option>Dúvida sobre medicamento</option>
                                <option>Orçamento para manipulação</option>
                                <option>Reclamação</option>
                                <option>Elogio</option>
                                <option>Outro</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Mensagem</label>
                            <textarea class="form-control" id="message" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h4 class="footer-title">
                        <i class="fas fa-prescription-bottle-alt me-2"></i>PharmaCare
                    </h4>
                    <p>Cuidando da sua saúde com excelência desde 2010. Produtos farmacêuticos de qualidade e atendimento personalizado.</p>
                    <div class="mt-3">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                    <h4 class="footer-title">Links Rápidos</h4>
                    <a href="#home" class="footer-link">Início</a>
                    <a href="#products" class="footer-link">Produtos</a>
                    <a href="#services" class="footer-link">Serviços</a>
                    <a href="#about" class="footer-link">Sobre Nós</a>
                    <a href="#contact" class="footer-link">Contato</a>
                </div>
                <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                    <h4 class="footer-title">Categorias</h4>
                    <a href="#" class="footer-link">Medicamentos</a>
                    <a href="#" class="footer-link">Vitaminas</a>
                    <a href="#" class="footer-link">Dermocosméticos</a>
                    <a href="#" class="footer-link">Higiene</a>
                    <a href="#" class="footer-link">Maternidade</a>
                </div>
                <div class="col-lg-4">
                    <h4 class="footer-title">Newsletter</h4>
                    <p>Assine nossa newsletter e receba promoções e dicas de saúde.</p>
                    <form class="mt-3">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Seu e-mail" aria-label="Seu e-mail">
                            <button class="btn btn-primary" type="button">Assinar</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="copyright text-center mt-4">
                <p class="mb-0">&copy; 2023 PharmaCare. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>
@endsection
