<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glamour - Salão de Beleza Premium</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #d4af37;
            --secondary-color: #f8f1e5;
            --dark-color: #1a1a1a;
            --light-color: #ffffff;
            --accent-color: #e8c8a0;
        }
        
        body {
            font-family: 'Montserrat', sans-serif;
            color: var(--dark-color);
            background-color: var(--secondary-color);
            scroll-behavior: smooth;
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
        }
        
        .navbar {
            background-color: var(--light-color);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .navbar.scrolled {
            background-color: rgba(255, 255, 255, 0.95);
            padding: 5px 0;
        }
        
        .navbar-brand {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            color: var(--primary-color) !important;
            font-size: 1.8rem;
        }
        
        .nav-link {
            color: var(--dark-color);
            font-weight: 600;
            margin: 0 10px;
            position: relative;
        }
        
        .nav-link:before {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: var(--primary-color);
            visibility: hidden;
            transition: all 0.3s ease-in-out;
        }
        
        .nav-link:hover:before {
            visibility: visible;
            width: 100%;
        }
        
        .nav-link.active {
            color: var(--primary-color) !important;
        }
        
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1887&q=80');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            color: var(--light-color);
        }
        
        .hero-content {
            max-width: 600px;
        }
        
        .hero-title {
            font-size: 4rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        
        .hero-subtitle {
            font-size: 1.5rem;
            margin-bottom: 30px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }
        
        .btn-gold {
            background-color: var(--primary-color);
            color: var(--dark-color);
            font-weight: 600;
            padding: 12px 30px;
            border-radius: 30px;
            transition: all 0.3s ease;
        }
        
        .btn-gold:hover {
            background-color: var(--light-color);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .section-title {
            position: relative;
            display: inline-block;
            margin-bottom: 50px;
            color: var(--dark-color);
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            width: 50%;
            height: 3px;
            background-color: var(--primary-color);
            bottom: -10px;
            left: 0;
        }
        
        .service-card {
            background-color: var(--light-color);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            margin-bottom: 30px;
            height: 100%;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .service-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 20px;
        }
        
        .team-member {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .team-img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 50%;
            border: 5px solid var(--primary-color);
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }
        
        .team-member:hover .team-img {
            transform: scale(1.05);
        }
        
        .testimonial-card {
            background-color: var(--light-color);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
        }
        
        .testimonial-text {
            font-style: italic;
            margin-bottom: 20px;
        }
        
        .testimonial-author {
            font-weight: 600;
            color: var(--primary-color);
        }
        
        .gallery-item {
            margin-bottom: 30px;
            overflow: hidden;
            border-radius: 10px;
            position: relative;
        }
        
        .gallery-item img {
            transition: all 0.5s ease;
            width: 100%;
            height: 250px;
            object-fit: cover;
        }
        
        .gallery-item:hover img {
            transform: scale(1.1);
        }
        
        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(212, 175, 55, 0.7);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: all 0.3s ease;
        }
        
        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }
        
        .contact-info {
            margin-bottom: 30px;
        }
        
        .contact-icon {
            font-size: 1.5rem;
            color: var(--primary-color);
            margin-right: 10px;
        }
        
        .form-control {
            border-radius: 0;
            border: 1px solid #ddd;
            padding: 12px;
            margin-bottom: 20px;
        }
        
        .form-control:focus {
            box-shadow: none;
            border-color: var(--primary-color);
        }
        
        .botao-assinar{
            background-color: var(--primary-color);
            height: 50px;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
            outline: none;
            border: none;
            font-size: 20px;
        }

        .botao-assinar:hover{
            opacity: .850;
        }

        footer {
            background-color: var(--dark-color);
            color: var(--light-color);
            padding: 50px 0 20px;
        }
        
        .footer-logo {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            color: var(--primary-color);
            font-size: 2rem;
            margin-bottom: 20px;
            display: inline-block;
        }
        
        .social-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            color: var(--light-color);
            border-radius: 50%;
            margin-right: 10px;
            transition: all 0.3s ease;
        }
        
        .social-icon:hover {
            background-color: var(--primary-color);
            color: var(--dark-color);
            transform: translateY(-3px);
        }
        
        .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 50px;
            height: 50px;
            background-color: var(--primary-color);
            color: var(--dark-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 999;
        }
        
        .back-to-top.active {
            opacity: 1;
            visibility: visible;
        }
        
        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .fade-in {
            animation: fadeIn 1s ease forwards;
        }
        
        .delay-1 { animation-delay: 0.2s; }
        .delay-2 { animation-delay: 0.4s; }
        .delay-3 { animation-delay: 0.6s; }
        .delay-4 { animation-delay: 0.8s; }
    </style>
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Glamour</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">Equipe</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Galeria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="hero-content fade-in">
                <h1 class="hero-title">Descubra Sua Beleza Interior</h1>
                <p class="hero-subtitle">No Salão Glamour, transformamos sua aparência e elevamos sua autoestima com nossos serviços exclusivos.</p>
                <a href="#contact" class="btn btn-gold btn-lg">Agende Agora</a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-5">
        <div class="container">
            <div class="text-center mb-5 fade-in">
                <h2 class="section-title">Nossos Serviços</h2>
                <p class="lead">Oferecemos os melhores tratamentos de beleza com profissionais qualificados</p>
            </div>
            <div class="row">
                <div class="col-md-4 fade-in delay-1">
                    <div class="service-card p-4 text-center">
                        <div class="service-icon">
                            <i class="fas fa-cut"></i>
                        </div>
                        <h3>Cortes Modernos</h3>
                        <p>Cortes de cabelo personalizados que realçam seus traços faciais e refletem sua personalidade.</p>
                    </div>
                </div>
                <div class="col-md-4 fade-in delay-2">
                    <div class="service-card p-4 text-center">
                        <div class="service-icon">
                            <i class="fas fa-paint-brush"></i>
                        </div>
                        <h3>Coloração Profissional</h3>
                        <p>Técnicas avançadas de coloração que protegem seus fios enquanto entregam resultados vibrantes.</p>
                    </div>
                </div>
                <div class="col-md-4 fade-in delay-3">
                    <div class="service-card p-4 text-center">
                        <div class="service-icon">
                            <i class="fas fa-spa"></i>
                        </div>
                        <h3>Tratamentos Capilares</h3>
                        <p>Terapias intensivas para recuperação de fios danificados, deixando-os saudáveis e brilhantes.</p>
                    </div>
                </div>
                <div class="col-md-4 fade-in delay-1">
                    <div class="service-card p-4 text-center">
                        <div class="service-icon">
                            <i class="fas fa-hand-sparkles"></i>
                        </div>
                        <h3>Manicure & Pedicure</h3>
                        <p>Cuidados especializados para mãos e pés, incluindo esmaltação duradoura e tratamentos.</p>
                    </div>
                </div>
                <div class="col-md-4 fade-in delay-2">
                    <div class="service-card p-4 text-center">
                        <div class="service-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h3>Design de Sobrancelhas</h3>
                        <p>Modelagem perfeita que harmoniza seu rosto, realçando sua expressão natural.</p>
                    </div>
                </div>
                <div class="col-md-4 fade-in delay-3">
                    <div class="service-card p-4 text-center">
                        <div class="service-icon">
                            <i class="fas fa-magic"></i>
                        </div>
                        <h3>Maquiagem Profissional</h3>
                        <p>Maquiagem para ocasiões especiais ou para o dia a dia, com produtos de alta qualidade.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0 fade-in">
                    <img src="https://images.unsplash.com/photo-1595476108010-b4d1f102b1b1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1888&q=80" alt="Sobre o Salão" class="img-fluid rounded">
                </div>
                <div class="col-lg-6 fade-in delay-1">
                    <h2 class="section-title">Sobre Nós</h2>
                    <p class="lead">O Salão Glamour nasceu da paixão por beleza e autoestima.</p>
                    <p>Fundado em 2010, nosso salão se tornou referência em tratamentos capilares e serviços de beleza na região. Nossa missão é proporcionar experiências transformadoras, onde cada cliente se sinta especial e único.</p>
                    <p>Utilizamos apenas produtos de alta qualidade e técnicas atualizadas, garantindo resultados excepcionais que superam expectativas. Nossa equipe está em constante treinamento para oferecer o que há de mais moderno no mundo da beleza.</p>
                    <div class="row mt-4">
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-check-circle me-2 text-primary"></i>
                                <span>Profissionais Certificados</span>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-check-circle me-2 text-primary"></i>
                                <span>Produtos Premium</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-check-circle me-2 text-primary"></i>
                                <span>Ambiente Luxuoso</span>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-check-circle me-2 text-primary"></i>
                                <span>Atendimento Personalizado</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="py-5">
        <div class="container">
            <div class="text-center mb-5 fade-in">
                <h2 class="section-title">Nossa Equipe</h2>
                <p class="lead">Profissionais apaixonados por transformar sua beleza</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 fade-in delay-1">
                    <div class="team-member">
                        <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Equipe" class="team-img">
                        <h4>Ana Carolina</h4>
                        <p class="text-primary">Hair Stylist</p>
                        <div class="social-links">
                            <a href="#" class="text-decoration-none me-2"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="text-decoration-none"><i class="fab fa-facebook"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 fade-in delay-2">
                    <div class="team-member">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Equipe" class="team-img">
                        <h4>Juliana Santos</h4>
                        <p class="text-primary">Color Specialist</p>
                        <div class="social-links">
                            <a href="#" class="text-decoration-none me-2"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="text-decoration-none"><i class="fab fa-facebook"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 fade-in delay-3">
                    <div class="team-member">
                        <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Equipe" class="team-img">
                        <h4>Marcos Vinícius</h4>
                        <p class="text-primary">Barbeiro</p>
                        <div class="social-links">
                            <a href="#" class="text-decoration-none me-2"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="text-decoration-none"><i class="fab fa-facebook"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 fade-in delay-4">
                    <div class="team-member">
                        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Equipe" class="team-img">
                        <h4>Fernanda Lima</h4>
                        <p class="text-primary">Esteticista</p>
                        <div class="social-links">
                            <a href="#" class="text-decoration-none me-2"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="text-decoration-none"><i class="fab fa-facebook"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5 fade-in">
                <h2 class="section-title">O Que Nossos Clientes Dizem</h2>
                <p class="lead">Depoimentos de quem já experimentou nossos serviços</p>
            </div>
            <div class="row">
                <div class="col-md-4 fade-in delay-1">
                    <div class="testimonial-card">
                        <p class="testimonial-text">"O melhor salão que já frequentei! A Ana fez um trabalho incrível no meu cabelo, recuperou totalmente os fios danificados. Super recomendo!"</p>
                        <div class="d-flex align-items-center">
                            <img src="https://randomuser.me/api/portraits/women/63.jpg" alt="Cliente" class="rounded-circle me-3" width="50">
                            <div>
                                <h6 class="mb-0 testimonial-author">Camila Oliveira</h6>
                                <small>Cliente há 3 anos</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 fade-in delay-2">
                    <div class="testimonial-card">
                        <p class="testimonial-text">"Sou cliente do Glamour desde a inauguração. O atendimento é impecável e sempre saio me sentindo mais bonita e confiante. Vale cada centavo!"</p>
                        <div class="d-flex align-items-center">
                            <img src="https://randomuser.me/api/portraits/women/25.jpg" alt="Cliente" class="rounded-circle me-3" width="50">
                            <div>
                                <h6 class="mb-0 testimonial-author">Patrícia Mendes</h6>
                                <small>Cliente há 10 anos</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 fade-in delay-3">
                    <div class="testimonial-card">
                        <p class="testimonial-text">"O Marcos é excepcional! Depois que comecei a fazer minha barba com ele, nunca mais quis saber de outro barbeiro. Atencioso e extremamente profissional."</p>
                        <div class="d-flex align-items-center">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Cliente" class="rounded-circle me-3" width="50">
                            <div>
                                <h6 class="mb-0 testimonial-author">Ricardo Almeida</h6>
                                <small>Cliente há 2 anos</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="py-5">
        <div class="container">
            <div class="text-center mb-5 fade-in">
                <h2 class="section-title">Nossos Trabalhos</h2>
                <p class="lead">Alguns momentos especiais capturados em nosso salão</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 fade-in delay-1">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1595476108010-b4d1f102b1b1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1888&q=80" alt="Galeria" class="img-fluid">
                        <div class="gallery-overlay">
                            <i class="fas fa-search-plus text-white fa-2x"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 fade-in delay-2">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1886&q=80" alt="Galeria" class="img-fluid">
                        <div class="gallery-overlay">
                            <i class="fas fa-search-plus text-white fa-2x"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 fade-in delay-3">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1600334129128-685c5582fd35?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1888&q=80" alt="Galeria" class="img-fluid">
                        <div class="gallery-overlay">
                            <i class="fas fa-search-plus text-white fa-2x"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 fade-in delay-1">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1605497788044-5a32c7078486?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1887&q=80" alt="Galeria" class="img-fluid">
                        <div class="gallery-overlay">
                            <i class="fas fa-search-plus text-white fa-2x"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 fade-in delay-2">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1616394584738-fc6e612e71b9?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8c2FsJUMzJUEzbyUyMGRlJTIwYmVsZXphfGVufDB8fDB8fHww" alt="Galeria" class="img-fluid">
                        <div class="gallery-overlay">
                            <i class="fas fa-search-plus text-white fa-2x"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 fade-in delay-3">
                    <div class="gallery-item">
                        <img src="https://plus.unsplash.com/premium_photo-1661290231745-15f1ed6fea88?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8c2FsJUMzJUEzbyUyMGRlJTIwYmVsZXphfGVufDB8fDB8fHww" alt="Galeria" class="img-fluid">
                        <div class="gallery-overlay">
                            <i class="fas fa-search-plus text-white fa-2x"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 fade-in">
                    <h2 class="section-title mb-4">Entre em Contato</h2>
                    <p class="mb-5">Estamos ansiosos para atendê-lo e proporcionar a melhor experiência em beleza.</p>
                    
                    <div class="contact-info">
                        <div class="d-flex mb-4">
                            <i class="fas fa-map-marker-alt contact-icon"></i>
                            <div>
                                <h5>Endereço</h5>
                                <p>Av. Beleza, 123 - Centro, São Paulo - SP</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <i class="fas fa-phone-alt contact-icon"></i>
                            <div>
                                <h5>Telefone</h5>
                                <p>(11) 1234-5678</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <i class="fas fa-envelope contact-icon"></i>
                            <div>
                                <h5>Email</h5>
                                <p>contato@salaoglamour.com.br</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <i class="fas fa-clock contact-icon"></i>
                            <div>
                                <h5>Horário de Funcionamento</h5>
                                <p>Segunda a Sábado: 9h às 20h</p>
                                <p>Domingo: 10h às 16h</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 fade-in delay-1">
                    <div class="card border-0 shadow">
                        <div class="card-body p-5">
                            <h3 class="mb-4">Agende Seu Horário</h3>
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Seu Nome" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control" placeholder="Seu Email" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="tel" class="form-control" placeholder="Seu Telefone" required>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-control" required>
                                            <option value="" disabled selected>Serviço Desejado</option>
                                            <option>Corte de Cabelo</option>
                                            <option>Coloração</option>
                                            <option>Tratamento Capilar</option>
                                            <option>Manicure/Pedicure</option>
                                            <option>Design de Sobrancelhas</option>
                                            <option>Maquiagem</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="date" class="form-control" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="time" class="form-control" required>
                                    </div>
                                </div>
                                <textarea class="form-control" rows="4" placeholder="Mensagem (Opcional)"></textarea>
                                <button type="submit" class="btn btn-gold mt-3 w-100">Enviar Agendamento</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <a href="#" class="footer-logo">Glamour</a>
                    <p class="text-white-50">Transformando sua beleza e elevando sua autoestima desde 2010. Venha viver a experiência Glamour.</p>
                    <div class="social-links mt-4">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-pinterest"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h5 class="text-white mb-4">Links Úteis</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#home" class="text-white-50 text-decoration-none">Home</a></li>
                        <li class="mb-2"><a href="#services" class="text-white-50 text-decoration-none">Serviços</a></li>
                        <li class="mb-2"><a href="#about" class="text-white-50 text-decoration-none">Sobre Nós</a></li>
                        <li class="mb-2"><a href="#team" class="text-white-50 text-decoration-none">Nossa Equipe</a></li>
                        <li class="mb-2"><a href="#gallery" class="text-white-50 text-decoration-none">Galeria</a></li>
                        <li class="mb-2"><a href="#contact" class="text-white-50 text-decoration-none">Contato</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5 class="text-white mb-4">Newsletter</h5>
                    <p class="text-white-50">Assine nossa newsletter para receber promoções e novidades.</p>
                    <form class="mt-4">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Seu Email" required>
                            <button class="botao-assinar" type="submit">Assinar</button>
                        </div>
                    </form>
                </div>
            </div>
            <hr class="my-5 bg-white-10">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="text-white-50 mb-0">&copy; 2023 Glamour. Todos os direitos reservados.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="text-white-50 mb-0">Desenvolvido com <i class="fas fa-heart text-danger"></i> por Glamour</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i></a>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^=""]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 70,
                        behavior: 'smooth'
                    });
                    
                    // Update active nav link
                    document.querySelectorAll('.nav-link').forEach(link => {
                        link.classList.remove('active');
                    });
                    this.classList.add('active');
                }
            });
        });

        // Back to top button
        window.addEventListener('scroll', function() {
            const backToTopButton = document.querySelector('.back-to-top');
            if (window.scrollY > 300) {
                backToTopButton.classList.add('active');
            } else {
                backToTopButton.classList.remove('active');
            }
        });

        // Activate current section in navbar
        window.addEventListener('scroll', function() {
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('.nav-link');
            
            let current = '';
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                
                if (pageYOffset >= (sectionTop - 100)) {
                    current = section.getAttribute('id');
                }
            });
            
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === '#' + current) {
                    link.classList.add('active');
                }
            });
        });

        // Animation on scroll
        function animateOnScroll() {
            const elements = document.querySelectorAll('.fade-in');
            
            elements.forEach(element => {
                const elementPosition = element.getBoundingClientRect().top;
                const screenPosition = window.innerHeight / 1.3;
                
                if (elementPosition < screenPosition) {
                    element.style.opacity = '1';
                }
            });
        }

        window.addEventListener('scroll', animateOnScroll);
        // Run once on page load
        animateOnScroll();
    </script>
</body>
</html>