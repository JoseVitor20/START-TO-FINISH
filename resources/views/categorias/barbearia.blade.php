@extends('layout')

@section('title', 'Barbearia Vintage - Estilo Clássico para Homens Modernos')

@push('estilos')
    <style>
        :root {
            --primary-color: #d4af37;
            --dark-color: #1a1a1a;
            --light-color: #f8f9fa;
        }
        
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f5f5f5;
        }
        
        .navbar {
            background-color: var(--dark-color) !important;
            border-bottom: 2px solid var(--primary-color);
        }
        
        .navbar-brand {
            font-weight: 700;
            color: var(--primary-color) !important;
            font-size: 1.8rem;
        }
        
        .nav-link {
            color: white !important;
            font-weight: 500;
            margin: 0 10px;
            transition: all 0.3s;
        }
        
        .nav-link:hover {
            color: var(--primary-color) !important;
        }
        
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://media.istockphoto.com/id/1328305995/pt/foto/young-bearded-man-standing-in-barber-shop-and-holding-scissors.webp?a=1&b=1&s=612x612&w=0&k=20&c=dnZ0qV23H9It1MCAhLyTj4k7AMryLc41wqoIUIRT1uw=');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 150px 0;
            text-align: center;
        }
        
        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
        }
        
        .hero-subtitle {
            font-size: 1.5rem;
            margin-bottom: 30px;
        }
        
        .btn-gold {
            background-color: var(--primary-color);
            color: var(--dark-color);
            font-weight: 600;
            padding: 10px 25px;
            border-radius: 0;
            border: none;
            transition: all 0.3s;
        }
        
        .btn-gold:hover {
            background-color: #c9a227;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }
        
        .section-title {
            position: relative;
            display: inline-block;
            margin-bottom: 50px;
            font-weight: 700;
            color: var(--dark-color);
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            width: 50%;
            height: 3px;
            background-color: var(--primary-color);
            bottom: -10px;
            left: 25%;
        }
        
        .service-card {
            border: none;
            border-radius: 0;
            transition: all 0.3s;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }
        
        .service-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 20px;
        }
        
        .barber-card {
            position: relative;
            overflow: hidden;
            margin-bottom: 30px;
            border-radius: 0;
            border: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .barber-overlay {
            position: absolute;
            bottom: -100%;
            left: 0;
            width: 100%;
            background-color: rgba(26, 26, 26, 0.9);
            color: white;
            padding: 20px;
            transition: all 0.3s;
        }
        
        .barber-card:hover .barber-overlay {
            bottom: 0;
        }
        
        .testimonial-card {
            border-left: 3px solid var(--primary-color);
            border-radius: 0;
            margin-bottom: 30px;
        }
        
        .testimonial-card .card-body {
            padding: 30px;
        }
        
        .testimonial-author {
            color: var(--primary-color);
            font-weight: 600;
        }
        
        .contact-info {
            margin-bottom: 30px;
        }
        
        .contact-icon {
            font-size: 1.5rem;
            color: var(--primary-color);
            margin-right: 10px;
        }
        
        footer {
            background-color: var(--dark-color);
            color: white;
            padding: 50px 0 20px;
        }
        
        .footer-title {
            color: var(--primary-color);
            margin-bottom: 20px;
            font-weight: 700;
        }
        
        .social-icons a {
            color: white;
            font-size: 1.5rem;
            margin-right: 15px;
            transition: all 0.3s;
        }
        
        .social-icons a:hover {
            color: var(--primary-color);
            transform: translateY(-5px);
        }
        
        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 20px;
            margin-top: 30px;
        }
    </style>
@endpush

@section('content')
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">Barbearia Vintage</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#servicos">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#barbeiros">Barbeiros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#depoimentos">Depoimentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contato">Contato</a>
                    </li>
                </ul>
                <a href="#agendamento" class="btn btn-gold ms-lg-3">Agendar</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <h1 class="hero-title">ESTILO CLÁSSICO PARA HOMENS MODERNOS</h1>
            <p class="hero-subtitle">A tradição da barbearia com um toque contemporâneo</p>
            <a href="#servicos" class="btn btn-gold me-2">Nossos Serviços</a>
            <a href="#agendamento" class="btn btn-outline-light">Agendar Horário</a>
        </div>
    </section>

    <!-- Serviços -->
    <section id="servicos" class="py-5 bg-white">
        <div class="container">
            <h2 class="text-center section-title">NOSSOS SERVIÇOS</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card service-card h-100">
                        <div class="card-body text-center">
                            <div class="service-icon">
                                <i class="fas fa-cut"></i>
                            </div>
                            <h3 class="card-title">Corte de Cabelo</h3>
                            <p class="card-text">Corte profissional com técnicas modernas e tradicionais, utilizando os melhores produtos do mercado.</p>
                            <p class="h5 text-gold">R$ 50,00</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card service-card h-100">
                        <div class="card-body text-center">
                            <div class="service-icon">
                                <i class="fas fa-male"></i>
                            </div>
                            <h3 class="card-title">Barba Completa</h3>
                            <p class="card-text">Aparo, desenho e acabamento perfeito para sua barba, com toalha quente e produtos premium.</p>
                            <p class="h5 text-gold">R$ 40,00</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card service-card h-100">
                        <div class="card-body text-center">
                            <div class="service-icon">
                                <i class="fas fa-spa"></i>
                            </div>
                            <h3 class="card-title">Pacote Completo</h3>
                            <p class="card-text">Corte de cabelo + barba completa + tratamento facial. A experiência completa de cuidados masculinos.</p>
                            <p class="h5 text-gold">R$ 80,00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Barbeiros -->
    <section id="barbeiros" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center section-title">NOSSOS BARBEIROS</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card barber-card">
                        <img src="https://images.unsplash.com/photo-1583864697784-a0efc8379f70?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=688&q=80" class="card-img-top" alt="Barbeiro 1">
                        <div class="barber-overlay">
                            <h3>Carlos Silva</h3>
                            <p>Especialista em cortes clássicos e barbas perfeitas. 15 anos de experiência.</p>
                            <div class="social-icons">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card barber-card">
                        <img src="https://plus.unsplash.com/premium_photo-1671741519429-c0465c1b5c12?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8YmFyYmVpcm98ZW58MHwxfDB8fHww" class="card-img-top" alt="Barbeiro 2">
                        <div class="barber-overlay">
                            <h3>Marcos Oliveira</h3>
                            <p>Mestre em cortes modernos e desenhos de barba criativos. Artista da lâmina.</p>
                            <div class="social-icons">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card barber-card">
                        <img src="https://images.unsplash.com/photo-1582893561942-d61adcb2e534?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjR8fGJhcmJlaXJvfGVufDB8MXwwfHx8MA%3D%3D" class="card-img-top" alt="Barbeiro 3">
                        <div class="barber-overlay">
                            <h3>Ricardo Santos</h3>
                            <p>Especialista em tratamentos capilares e terapias para barba. Cuidados premium.</p>
                            <div class="social-icons">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Depoimentos -->
    <section id="depoimentos" class="py-5 bg-white">
        <div class="container">
            <h2 class="text-center section-title">DEPOIMENTOS</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card testimonial-card">
                        <div class="card-body">
                            <p class="card-text">"Melhor barbearia da cidade! O Carlos faz milagres com minha barba. Ambiente incrível e atendimento impecável."</p>
                            <div class="d-flex align-items-center mt-3">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" class="rounded-circle me-3" width="50" alt="Cliente 1">
                                <div>
                                    <h5 class="testimonial-author mb-0">João Pedro</h5>
                                    <small class="text-muted">Cliente há 5 anos</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card testimonial-card">
                        <div class="card-body">
                            <p class="card-text">"Sempre saio satisfeito! O Marcos entende exatamente o que quero e faz um trabalho impecável. Recomendo!"</p>
                            <div class="d-flex align-items-center mt-3">
                                <img src="https://randomuser.me/api/portraits/men/22.jpg" class="rounded-circle me-3" width="50" alt="Cliente 2">
                                <div>
                                    <h5 class="testimonial-author mb-0">Antônio Carlos</h5>
                                    <small class="text-muted">Cliente há 3 anos</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card testimonial-card">
                        <div class="card-body">
                            <p class="card-text">"Atendimento excelente e profissionais qualificados. Minha barba nunca esteve tão bem cuidada. Vale cada centavo!"</p>
                            <div class="d-flex align-items-center mt-3">
                                <img src="https://randomuser.me/api/portraits/men/45.jpg" class="rounded-circle me-3" width="50" alt="Cliente 3">
                                <div>
                                    <h5 class="testimonial-author mb-0">Roberto Almeida</h5>
                                    <small class="text-muted">Cliente há 1 ano</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contato e Agendamento -->
    <section id="contato" class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="section-title">CONTATO</h2>
                    <div class="contact-info">
                        <p><i class="fas fa-map-marker-alt contact-icon"></i> Rua da Barbearia, 123 - Centro, Cidade/SP</p>
                        <p><i class="fas fa-phone contact-icon"></i> (11) 98765-4321</p>
                        <p><i class="fas fa-envelope contact-icon"></i> contato@barbeariavintage.com.br</p>
                        <p><i class="fas fa-clock contact-icon"></i> Seg-Sex: 9h-19h | Sáb: 9h-15h | Dom: Fechado</p>
                    </div>
                    <div class="map-container mb-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.075426745291!2d-46.6534269242314!3d-23.56573436179838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59c8da0aa315%3A0xd59f9431f2c9776a!2sAv.%20Paulista%2C%20S%C3%A3o%20Paulo%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1684866210185!5m2!1spt-BR!2sbr" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="col-lg-6" id="agendamento">
                    <h2 class="section-title">AGENDAMENTO</h2>
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Seu Nome" required>
                        </div>
                        <div class="mb-3">
                            <input type="tel" class="form-control" placeholder="Telefone" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="E-mail" required>
                        </div>
                        <div class="mb-3">
                            <select class="form-select" required>
                                <option value="" selected disabled>Selecione o Serviço</option>
                                <option value="corte">Corte de Cabelo</option>
                                <option value="barba">Barba Completa</option>
                                <option value="completo">Pacote Completo</option>
                                <option value="outro">Outro Serviço</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <select class="form-select" required>
                                <option value="" selected disabled>Selecione o Barbeiro</option>
                                <option value="carlos">Carlos Silva</option>
                                <option value="marcos">Marcos Oliveira</option>
                                <option value="ricardo">Ricardo Santos</option>
                                <option value="qualquer">Qualquer Barbeiro</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <input type="datetime-local" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="3" placeholder="Mensagem adicional (opcional)"></textarea>
                        </div>
                        <button type="submit" class="btn btn-gold w-100">Agendar Horário</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center text-lg-start">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h3 class="footer-title">Barbearia Vintage</h3>
                    <p>Tradição e qualidade em serviços de barbearia. Oferecemos cortes de cabelo, cuidados com barba e tratamentos exclusivos para homens que valorizam estilo e bem-estar.</p>
                    <div class="social-icons mt-4">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h3 class="footer-title">Horário de Funcionamento</h3>
                    <ul class="list-unstyled">
                        <li class="mb-2">Segunda a Sexta: 9h - 19h</li>
                        <li class="mb-2">Sábado: 9h - 15h</li>
                        <li class="mb-2">Domingo: Fechado</li>
                    </ul>
                    <h3 class="footer-title mt-4">Newsletter</h3>
                    <form>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Seu e-mail" aria-label="Seu e-mail">
                            <button class="btn btn-gold" type="button">Assinar</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 col-md-12">
                    <h3 class="footer-title">Localização</h3>
                    <p>Rua da Barbearia, 123 - Centro<br>Cidade/SP - CEP: 01234-567</p>
                    <p><i class="fas fa-phone me-2"></i> (11) 98765-4321</p>
                    <p><i class="fas fa-envelope me-2"></i> contato@barbeariavintage.com.br</p>
                </div>
            </div>
        </div>
        <div class="footer-bottom text-center">
            <div class="container">
                <p class="mb-0">&copy; 2023 Barbearia Vintage. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

@endsection