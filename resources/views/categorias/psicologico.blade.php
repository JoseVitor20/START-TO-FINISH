<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harmonia Mental | Consultório Psicológico</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #6a5acd;
            --secondary-color: #9370db;
            --light-color: #f8f9fa;
            --dark-color: #343a40;
            --accent-color: #ff8c00;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            color: #333;
            overflow-x: hidden;
        }
        
        .navbar {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 15px 0;
        }
        
        .navbar-brand {
            font-weight: 700;
            color: var(--primary-color);
            font-size: 1.8rem;
        }
        
        .nav-link {
            color: var(--dark-color);
            font-weight: 500;
            margin: 0 10px;
            transition: all 0.3s;
        }
        
        .nav-link:hover, .nav-link.active {
            color: var(--primary-color);
        }
        
        .hero-section {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path d="M0,0 L100,0 L100,100 Q50,80 0,100 Z" fill="white" opacity="0.1"/></svg>');
            background-size: cover;
            opacity: 0.1;
        }
        
        .hero-title {
            font-weight: 700;
            font-size: 3.5rem;
            margin-bottom: 20px;
        }
        
        .hero-subtitle {
            font-size: 1.5rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            padding: 10px 25px;
            font-weight: 500;
            border-radius: 50px;
        }
        
        .btn-primary:hover {
            background-color: #5a4acd;
            border-color: #5a4acd;
        }
        
        .btn-outline-light {
            padding: 10px 25px;
            font-weight: 500;
            border-radius: 50px;
            margin-left: 10px;
        }
        
        .section-title {
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 40px;
            position: relative;
            display: inline-block;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 50%;
            height: 3px;
            background-color: var(--accent-color);
        }
        
        .service-card {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s;
            height: 100%;
            border-top: 3px solid var(--primary-color);
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
        
        .about-section {
            background-color: white;
            padding: 100px 0;
        }
        
        .about-img {
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        .team-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s;
            margin-bottom: 30px;
        }
        
        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .team-img {
            height: 300px;
            object-fit: cover;
        }
        
        .team-social {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center;
        }
        
        .team-social li {
            margin: 0 5px;
        }
        
        .team-social a {
            color: var(--primary-color);
            transition: all 0.3s;
        }
        
        .team-social a:hover {
            color: var(--accent-color);
        }
        
        .testimonial-card {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
            position: relative;
        }
        
        .testimonial-card::before {
            content: '"';
            font-size: 5rem;
            color: rgba(106, 90, 205, 0.1);
            position: absolute;
            top: 10px;
            left: 20px;
            line-height: 1;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
            margin-top: 20px;
        }
        
        .testimonial-author img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 15px;
            object-fit: cover;
        }
        
        .contact-section {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 100px 0;
        }
        
        .contact-form {
            background-color: white;
            border-radius: 10px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        .form-control {
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(106, 90, 205, 0.25);
        }
        
        .contact-info {
            margin-top: 30px;
        }
        
        .contact-info-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
        }
        
        .contact-info-icon {
            font-size: 1.5rem;
            color: var(--accent-color);
            margin-right: 15px;
            margin-top: 5px;
        }
        
        footer {
            background-color: var(--dark-color);
            color: white;
            padding: 50px 0 20px;
        }
        
        .footer-links h5 {
            color: var(--light-color);
            margin-bottom: 20px;
            font-weight: 600;
        }
        
        .footer-links ul {
            list-style: none;
            padding: 0;
        }
        
        .footer-links li {
            margin-bottom: 10px;
        }
        
        .footer-links a {
            color: #adb5bd;
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .footer-links a:hover {
            color: white;
            padding-left: 5px;
        }
        
        .footer-links button{
            height: 56px;
        }

        .social-icons a {
            color: white;
            background-color: rgba(255, 255, 255, 0.1);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
            transition: all 0.3s;
        }
        
        .social-icons a:hover {
            background-color: var(--primary-color);
            transform: translateY(-5px);
        }
        
        .copyright {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 20px;
            margin-top: 30px;
        }
        
        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .fade-in {
            animation: fadeIn 1s ease-out forwards;
        }
        
        .delay-1 { animation-delay: 0.2s; }
        .delay-2 { animation-delay: 0.4s; }
        .delay-3 { animation-delay: 0.6s; }
        
        /* Active section highlight */
        .active-section {
            background-color: rgba(106, 90, 205, 0.1);
            border-radius: 5px;
        }
    </style>
</head>
<body data-bs-spy="scroll" data-bs-target="#navbar">
    <!-- Navbar -->
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#home">Harmonia Mental</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Início</a>
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
                        <a class="nav-link" href="#testimonials">Depoimentos</a>
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
            <div class="row align-items-center">
                <div class="col-lg-6 fade-in">
                    <h1 class="hero-title">Cuidando da sua saúde mental</h1>
                    <p class="hero-subtitle">Oferecemos apoio psicológico especializado para ajudar você a encontrar equilíbrio e bem-estar emocional.</p>
                    <a href="#contact" class="btn btn-primary">Agende uma consulta</a>
                    <a href="#services" class="btn btn-outline-light">Nossos serviços</a>
                </div>
                <div class="col-lg-6 fade-in delay-1">
                    <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80" alt="Psicóloga conversando com paciente" class="img-fluid rounded-3">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-5 my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title fade-in">Nossos Serviços</h2>
                    <p class="lead mb-5 fade-in delay-1">Oferecemos uma variedade de serviços psicológicos para atender às suas necessidades individuais.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4 fade-in">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-user-friends"></i>
                        </div>
                        <h3>Terapia Individual</h3>
                        <p>Sessões personalizadas para ajudar você a lidar com desafios pessoais, emocionais e comportamentais.</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">Saiba mais</a>
                    </div>
                </div>
                <div class="col-md-4 fade-in delay-1">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h3>Terapia de Casal</h3>
                        <p>Ajudamos casais a melhorar a comunicação, resolver conflitos e fortalecer seu relacionamento.</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">Saiba mais</a>
                    </div>
                </div>
                <div class="col-md-4 fade-in delay-2">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <h3>Terapia Familiar</h3>
                        <p>Trabalhamos com famílias para melhorar a dinâmica familiar e resolver conflitos interpessoais.</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">Saiba mais</a>
                    </div>
                </div>
                <div class="col-md-4 fade-in">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-child"></i>
                        </div>
                        <h3>Psicologia Infantil</h3>
                        <p>Avaliação e intervenção especializada para crianças com dificuldades emocionais, comportamentais ou de desenvolvimento.</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">Saiba mais</a>
                    </div>
                </div>
                <div class="col-md-4 fade-in delay-1">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <h3>Orientação Profissional</h3>
                        <p>Ajudamos na escolha profissional, transição de carreira e desenvolvimento de habilidades para o mercado de trabalho.</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">Saiba mais</a>
                    </div>
                </div>
                <div class="col-md-4 fade-in delay-2">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-brain"></i>
                        </div>
                        <h3>Tratamento de Ansiedade</h3>
                        <p>Abordagens eficazes para lidar com transtornos de ansiedade, estresse e ataques de pânico.</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">Saiba mais</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0 fade-in">
                    <img src="https://images.unsplash.com/photo-1573497620053-ea5300f94f21?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80" alt="Consultório psicológico" class="img-fluid about-img">
                </div>
                <div class="col-lg-6 fade-in delay-1">
                    <h2 class="section-title">Sobre Nós</h2>
                    <p class="lead">O Harmonia Mental é um consultório psicológico dedicado a proporcionar bem-estar emocional e qualidade de vida.</p>
                    <p>Fundado em 2010, nosso consultório reúne profissionais altamente qualificados e comprometidos com o cuidado integral de nossos pacientes. Acreditamos que cada indivíduo é único e merece uma abordagem personalizada.</p>
                    <p>Nossa missão é oferecer um espaço acolhedor e seguro, onde você possa explorar seus pensamentos e sentimentos sem julgamentos, desenvolvendo ferramentas para lidar com os desafios da vida.</p>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-check-circle text-primary me-2"></i>
                                <span>Profissionais certificados</span>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-check-circle text-primary me-2"></i>
                                <span>Abordagens científicas</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-check-circle text-primary me-2"></i>
                                <span>Atendimento humanizado</span>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-check-circle text-primary me-2"></i>
                                <span>Sigilo absoluto</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title fade-in">Nossa Equipe</h2>
                    <p class="lead mb-5 fade-in delay-1">Conheça nossos profissionais altamente qualificados e dedicados.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4 fade-in">
                    <div class="team-card">
                        <img src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80" alt="Dra. Ana Silva" class="img-fluid team-img">
                        <div class="p-4">
                            <h4>Dra. Ana Silva</h4>
                            <p class="text-primary">Psicóloga Clínica - CRP 12345</p>
                            <p>Especialista em Terapia Cognitivo-Comportamental e tratamento de ansiedade.</p>
                            <ul class="team-social">
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fas fa-envelope"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 fade-in delay-1">
                    <div class="team-card">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80" alt="Dr. Carlos Mendes" class="img-fluid team-img">
                        <div class="p-4">
                            <h4>Dr. Carlos Mendes</h4>
                            <p class="text-primary">Psicólogo - CRP 54321</p>
                            <p>Especialista em Terapia de Casal e Familiar, com abordagem sistêmica.</p>
                            <ul class="team-social">
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fas fa-envelope"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 fade-in delay-2">
                    <div class="team-card">
                        <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80" alt="Dra. Juliana Oliveira" class="img-fluid team-img">
                        <div class="p-4">
                            <h4>Dra. Juliana Oliveira</h4>
                            <p class="text-primary">Psicóloga Infantil - CRP 67890</p>
                            <p>Especialista em desenvolvimento infantil e intervenções lúdicas.</p>
                            <ul class="team-social">
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fas fa-envelope"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-5 my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title fade-in">Depoimentos</h2>
                    <p class="lead mb-5 fade-in delay-1">O que nossos pacientes dizem sobre nós</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4 fade-in">
                    <div class="testimonial-card">
                        <p>"A terapia com a Dra. Ana mudou minha vida. Depois de anos lutando contra a ansiedade, finalmente encontrei ferramentas para lidar com meus medos e hoje vivo muito mais tranquilo."</p>
                        <div class="testimonial-author">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Marcos">
                            <div>
                                <h5 class="mb-0">Marcos</h5>
                                <small>Paciente desde 2021</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 fade-in delay-1">
                    <div class="testimonial-card">
                        <p>"O Dr. Carlos nos ajudou a salvar nosso casamento. Sua abordagem sensível e profissional nos permitiu reconstruir nossa comunicação e conexão emocional."</p>
                        <div class="testimonial-author">
                            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Fernanda">
                            <div>
                                <h5 class="mb-0">Fernanda e Ricardo</h5>
                                <small>Pacientes desde 2022</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 fade-in delay-2">
                    <div class="testimonial-card">
                        <p>"A Dra. Juliana tem um dom incrível com crianças. Meu filho estava com dificuldades na escola e hoje, depois de 6 meses de terapia, está muito mais confiante e feliz."</p>
                        <div class="testimonial-author">
                            <img src="https://randomuser.me/api/portraits/women/63.jpg" alt="Patrícia">
                            <div>
                                <h5 class="mb-0">Patrícia</h5>
                                <small>Mãe de paciente</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0 fade-in">
                    <h2 class="text-white mb-4">Entre em Contato</h2>
                    <p class="lead mb-5">Estamos aqui para ajudar. Agende sua consulta ou tire suas dúvidas.</p>
                    
                    <div class="contact-info">
                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h5>Endereço</h5>
                                <p>Rua das Flores, 123 - Sala 501<br>Centro, São Paulo - SP</p>
                            </div>
                        </div>
                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div>
                                <h5>Telefone</h5>
                                <p>(11) 1234-5678<br>(11) 98765-4321 (WhatsApp)</p>
                            </div>
                        </div>
                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h5>Email</h5>
                                <p>contato@harmoniamental.com.br<br>agendamento@harmoniamental.com.br</p>
                            </div>
                        </div>
                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div>
                                <h5>Horário de Funcionamento</h5>
                                <p>Segunda a Sexta: 8h às 20h<br>Sábado: 8h às 14h</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 fade-in delay-1">
                    <div class="contact-form">
                        <h3 class="mb-4 text-dark">Agende sua Consulta</h3>
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Seu nome" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" placeholder="Seu email" required>
                                </div>
                            </div>
                            <input type="tel" class="form-control" placeholder="Seu telefone" required>
                            <select class="form-control" required>
                                <option value="" disabled selected>Selecione o serviço</option>
                                <option>Terapia Individual</option>
                                <option>Terapia de Casal</option>
                                <option>Terapia Familiar</option>
                                <option>Psicologia Infantil</option>
                                <option>Orientação Profissional</option>
                                <option>Tratamento de Ansiedade</option>
                            </select>
                            <textarea class="form-control" rows="4" placeholder="Sua mensagem"></textarea>
                            <button type="submit" class="btn btn-primary w-100">Enviar Mensagem</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <h3 class="text-white mb-4">Harmonia Mental</h3>
                    <p>Consultório psicológico especializado em oferecer atendimento humanizado e eficaz para crianças, adolescentes e adultos.</p>
                    <div class="social-icons mt-4">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="footer-links">
                        <h5>Links Rápidos</h5>
                        <ul>
                            <li><a href="#home">Início</a></li>
                            <li><a href="#services">Serviços</a></li>
                            <li><a href="#about">Sobre Nós</a></li>
                            <li><a href="#team">Equipe</a></li>
                            <li><a href="#testimonials">Depoimentos</a></li>
                            <li><a href="#contact">Contato</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-links">
                        <h5>Nossos Serviços</h5>
                        <ul>
                            <li><a href="#">Terapia Individual</a></li>
                            <li><a href="#">Terapia de Casal</a></li>
                            <li><a href="#">Terapia Familiar</a></li>
                            <li><a href="#">Psicologia Infantil</a></li>
                            <li><a href="#">Orientaçao Profissional</a></li>
                            <li><a href="#">Tratamento de Ansiedade</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-links">
                        <h5>Newsletter</h5>
                        <p>Assine nossa newsletter para receber dicas de saúde mental e novidades do consultório.</p>
                        <form class="mt-3">
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Seu email" required>
                                <button class="btn btn-primary" type="submit"><i class="fas fa-paper-plane"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="copyright text-center">
                <p class="mb-0">&copy; 2023 Harmonia Mental. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Atualizar classe ativa na navegação ao rolar
        window.addEventListener('DOMContentLoaded', () => {
            const sections = document.querySelectorAll('section');
            const navItems = document.querySelectorAll('.nav-link');
            
            window.addEventListener('scroll', () => {
                let current = '';
                
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.clientHeight;
                    
                    if (pageYOffset >= (sectionTop - 300)) {
                        current = section.getAttribute('id');
                    }
                });
                
                navItems.forEach(item => {
                    item.classList.remove('active');
                    if (item.getAttribute('href') === `#${current}`) {
                        item.classList.add('active');
                    }
                });
            });
            
            // Suavizar rolagem para links âncora
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);
                    
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 70,
                            behavior: 'smooth'
                        });
                        
                        // Fechar navbar mobile após clicar em um link
                        const navbarCollapse = document.querySelector('.navbar-collapse');
                        if (navbarCollapse.classList.contains('show')) {
                            const bsCollapse = new bootstrap.Collapse(navbarCollapse);
                            bsCollapse.hide();
                        }
                    }
                });
            });
            
            // Adicionar animações quando os elementos entram na viewport
            const animateOnScroll = () => {
                const elements = document.querySelectorAll('.fade-in');
                
                elements.forEach(element => {
                    const elementPosition = element.getBoundingClientRect().top;
                    const windowHeight = window.innerHeight;
                    
                    if (elementPosition < windowHeight - 100) {
                        element.style.opacity = '1';
                        element.style.transform = 'translateY(0)';
                    }
                });
            };
            
            // Executar ao carregar e ao rolar
            window.addEventListener('load', animateOnScroll);
            window.addEventListener('scroll', animateOnScroll);
        });
    </script>
</body>
</html>