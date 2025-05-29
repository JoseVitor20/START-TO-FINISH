@extends('layout')

@section('title', 'DentalCare - Clínica Odontológica')

@push('estilos')
    <style>
        :root {
            --primary-color: #17a2b8;
            --secondary-color: #343a40;
            --light-color: #f8f9fa;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .navbar {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .navbar-brand {
            font-weight: 700;
        }
        
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?ixlib=rb-4.0.3');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 120px 0;
        }
        
        .service-card {
            transition: transform 0.3s;
            border: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
        }
        
        .service-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }
        
        .team-card {
            border: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s;
        }
        
        .team-card:hover {
            transform: translateY(-5px);
        }
        
        .testimonial-card {
            border-left: 4px solid var(--primary-color);
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .btn-outline-primary {
            color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .btn-outline-primary:hover {
            background-color: var(--primary-color);
            color: white;
        }
        
        footer {
            background-color: var(--secondary-color);
            color: white;
        }
        
        .social-icons a {
            color: white;
            font-size: 1.5rem;
            margin-right: 15px;
            transition: color 0.3s;
        }
        
        .social-icons a:hover {
            color: var(--primary-color);
        }
        
        .appointment-form {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }
    </style>
@endpush

@section('content')
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-tooth me-2"></i>DentalCare
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
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
                <a href="#appointment" class="btn btn-primary ms-lg-3">Agendar Consulta</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section text-center">
        <div class="container">
            <h1 class="display-3 fw-bold mb-4">Seu Sorriso Saudável é Nossa Prioridade</h1>
            <p class="lead mb-5">Cuidados odontológicos personalizados com tecnologia de ponta e profissionais experientes.</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="#appointment" class="btn btn-primary btn-lg px-4">Agendar Consulta</a>
                <a href="#services" class="btn btn-outline-light btn-lg px-4">Nossos Serviços</a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Nossos Serviços</h2>
                <p class="lead text-white">Oferecemos uma gama completa de tratamentos odontológicos</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="service-card card h-100">
                        <div class="card-body text-center p-4">
                            <div class="service-icon">
                                <i class="fas fa-tooth"></i>
                            </div>
                            <h4 class="card-title">Clínico Geral</h4>
                            <p class="card-text">Consultas de rotina, limpezas profissionais, tratamentos de cáries e restaurações para manter sua saúde bucal em dia.</p>
                            <a href="#" class="btn btn-outline-primary">Saiba mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card card h-100">
                        <div class="card-body text-center p-4">
                            <div class="service-icon">
                                <i class="fas fa-teeth"></i>
                            </div>
                            <h4 class="card-title">Ortodontia</h4>
                            <p class="card-text">Tratamentos com aparelhos fixos e móveis para correção de alinhamento dental e problemas de oclusão.</p>
                            <a href="#" class="btn btn-outline-primary">Saiba mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card card h-100">
                        <div class="card-body text-center p-4">
                            <div class="service-icon">
                                <i class="fas fa-teeth-open"></i>
                            </div>
                            <h4 class="card-title">Implantes Dentários</h4>
                            <p class="card-text">Soluções permanentes para substituição de dentes perdidos, com tecnologia avançada e materiais de alta qualidade.</p>
                            <a href="#" class="btn btn-outline-primary">Saiba mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card card h-100">
                        <div class="card-body text-center p-4">
                            <div class="service-icon">
                                <i class="fas fa-smile"></i>
                            </div>
                            <h4 class="card-title">Clareamento Dental</h4>
                            <p class="card-text">Tratamentos eficazes para clarear os dentes e remover manchas, realizados no consultório ou em casa.</p>
                            <a href="#" class="btn btn-outline-primary">Saiba mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card card h-100">
                        <div class="card-body text-center p-4">
                            <div class="service-icon">
                                <i class="fas fa-tooth"></i>
                            </div>
                            <h4 class="card-title">Endodontia</h4>
                            <p class="card-text">Tratamento de canal especializado para salvar dentes comprometidos por cáries profundas ou traumas.</p>
                            <a href="#" class="btn btn-outline-primary">Saiba mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card card h-100">
                        <div class="card-body text-center p-4">
                            <div class="service-icon">
                                <i class="fas fa-child"></i>
                            </div>
                            <h4 class="card-title">Odontopediatria</h4>
                            <p class="card-text">Cuidados especiais para crianças, com abordagem lúdica e ambiente acolhedor para criar bons hábitos desde cedo.</p>
                            <a href="#" class="btn btn-outline-primary">Saiba mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="https://plus.unsplash.com/premium_photo-1682097288491-7e926a30cd0b?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8b2RvbnRvfGVufDB8fDB8fHww" alt="Clínica DentalCare" class="img-fluid rounded shadow">
                </div>
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-4">Sobre a DentalCare</h2>
                    <p class="lead">Mais de 15 anos cuidando de sorrisos com excelência e dedicação.</p>
                    <p>A DentalCare nasceu da paixão por odontologia e do desejo de oferecer tratamentos de qualidade em um ambiente acolhedor e humanizado. Nossa equipe é formada por especialistas comprometidos com a constante atualização profissional.</p>
                    <p>Investimos em tecnologia de ponta e seguimos rigorosos protocolos de biossegurança para garantir o melhor atendimento com total segurança para nossos pacientes.</p>
                    <div class="row mt-4">
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle text-primary me-2"></i>
                                <span>Equipe especializada</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle text-primary me-2"></i>
                                <span>Tecnologia avançada</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle text-primary me-2"></i>
                                <span>Ambiente acolhedor</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle text-primary me-2"></i>
                                <span>Atendimento personalizado</span>
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
            <div class="text-center mb-5">
                <h2 class="fw-bold">Nossa Equipe</h2>
                <p class="lead text-muted">Profissionais qualificados e comprometidos com seu sorriso</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="team-card card">
                        <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?ixlib=rb-4.0.3" class="card-img-top" alt="Dra. Ana Silva">
                        <div class="card-body text-center">
                            <h5 class="card-title">Dra. Ana Silva</h5>
                            <p class="card-text text-muted">Cirurgiã Dentista - CRO/SP 12345</p>
                            <p class="card-text">Especialista em Ortodontia e Implantodontia com mais de 12 anos de experiência.</p>
                            <div class="d-flex justify-content-center gap-2">
                                <a href="#" class="text-primary"><i class="fab fa-linkedin"></i></a>
                                <a href="#" class="text-primary"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-card card">
                        <img src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?ixlib=rb-4.0.3" class="card-img-top" alt="Dr. Carlos Mendes">
                        <div class="card-body text-center">
                            <h5 class="card-title">Dr. Carlos Mendes</h5>
                            <p class="card-text text-muted">Cirurgião Dentista - CRO/SP 54321</p>
                            <p class="card-text">Especialista em Periodontia e Implantes, com formação internacional na Suíça.</p>
                            <div class="d-flex justify-content-center gap-2">
                                <a href="#" class="text-primary"><i class="fab fa-linkedin"></i></a>
                                <a href="#" class="text-primary"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-card card">
                        <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?ixlib=rb-4.0.3" class="card-img-top" alt="Dra. Juliana Oliveira">
                        <div class="card-body text-center">
                            <h5 class="card-title">Dra. Juliana Oliveira</h5>
                            <p class="card-text text-muted">Odontopediatra - CRO/SP 98765</p>
                            <p class="card-text">Especialista em atendimento infantil, tornando a ida ao dentista uma experiência positiva.</p>
                            <div class="d-flex justify-content-center gap-2">
                                <a href="#" class="text-primary"><i class="fab fa-linkedin"></i></a>
                                <a href="#" class="text-primary"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Depoimentos</h2>
                <p class="lead text-muted">O que nossos pacientes dizem</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="testimonial-card card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="mb-3">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                            <p class="card-text">"Tratamento excelente! Fiz implantes na DentalCare e o resultado foi perfeito. A equipe é muito atenciosa e profissional."</p>
                            <div class="d-flex align-items-center mt-3">
                                <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Maria Santos" class="rounded-circle me-3" width="50">
                                <div>
                                    <h6 class="mb-0">Maria Santos</h6>
                                    <small class="text-muted">Paciente desde 2018</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="mb-3">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                            <p class="card-text">"Meus filhos adoram ir ao dentista graças à Dra. Juliana. O ambiente é super acolhedor e ela tem uma abordagem incrível com crianças."</p>
                            <div class="d-flex align-items-center mt-3">
                                <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Roberto Almeida" class="rounded-circle me-3" width="50">
                                <div>
                                    <h6 class="mb-0">Roberto Almeida</h6>
                                    <small class="text-muted">Pai de pacientes</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="mb-3">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                            <p class="card-text">"Tinha muito medo de dentista, mas na DentalCare me senti segura e confortável. Finalmente consegui fazer todos os tratamentos que precisava."</p>
                            <div class="d-flex align-items-center mt-3">
                                <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Fernanda Costa" class="rounded-circle me-3" width="50">
                                <div>
                                    <h6 class="mb-0">Fernanda Costa</h6>
                                    <small class="text-muted">Paciente desde 2020</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Appointment Section -->
    <section id="appointment" class="py-5 bg-primary text-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="appointment-form">
                        <h3 class="text-center mb-4 text-dark">Agende sua Consulta</h3>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label text-dark">Nome Completo</label>
                                    <input type="text" class="form-control" id="name" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label text-dark">Telefone</label>
                                    <input type="tel" class="form-control" id="phone" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label text-dark">Email</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="date" class="form-label text-dark">Data Preferencial</label>
                                    <input type="date" class="form-control" id="date" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="service" class="form-label text-dark">Serviço Desejado</label>
                                    <select class="form-select" id="service" required>
                                        <option value="" selected disabled>Selecione um serviço</option>
                                        <option value="consulta">Consulta de Rotina</option>
                                        <option value="limpeza">Limpeza Profissional</option>
                                        <option value="ortodontia">Ortodontia</option>
                                        <option value="implante">Implante Dentário</option>
                                        <option value="clareamento">Clareamento Dental</option>
                                        <option value="outro">Outro</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="doctor" class="form-label text-dark">Preferência de Profissional</label>
                                    <select class="form-select" id="doctor">
                                        <option value="" selected disabled>Qualquer profissional</option>
                                        <option value="ana">Dra. Ana Silva</option>
                                        <option value="carlos">Dr. Carlos Mendes</option>
                                        <option value="juliana">Dra. Juliana Oliveira</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="message" class="form-label text-dark">Mensagem</label>
                                    <textarea class="form-control" id="message" rows="3"></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary w-100">Agendar Consulta</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="fw-bold mb-4">Entre em Contato</h2>
                    <p class="lead">Estamos aqui para responder suas dúvidas e agendar seu atendimento.</p>
                    <div class="mb-4">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-map-marker-alt text-primary me-3"></i>
                            <div>
                                <h5 class="mb-0">Endereço</h5>
                                <p class="mb-0">Rua das Flores, 123 - Centro, São Paulo/SP</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-phone-alt text-primary me-3"></i>
                            <div>
                                <h5 class="mb-0">Telefone</h5>
                                <p class="mb-0">(11) 1234-5678</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-envelope text-primary me-3"></i>
                            <div>
                                <h5 class="mb-0">Email</h5>
                                <p class="mb-0">contato@dentalcare.com.br</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-clock text-primary me-3"></i>
                            <div>
                                <h5 class="mb-0">Horário de Funcionamento</h5>
                                <p class="mb-0">Segunda a Sexta: 8h às 19h<br>Sábado: 8h às 13h</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.0754267452926!2d-46.65342658440769!3d-23.565734367638827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59c8da0aa315%3A0xd59f9431f2c9776a!2sAv.%20Paulista%2C%20S%C3%A3o%20Paulo%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1623860410786!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
                    <h5 class="text-white mb-4"><i class="fas fa-tooth me-2"></i>DentalCare</h5>
                    <p class="text-white">Cuidando do seu sorriso com excelência e tecnologia desde 2008. Nossa missão é proporcionar saúde bucal com conforto e resultados duradouros.</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-white mb-4">Links Rápidos</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white">Home</a></li>
                        <li class="mb-2"><a href="#services" class="text-white">Serviços</a></li>
                        <li class="mb-2"><a href="#about" class="text-white">Sobre Nós</a></li>
                        <li class="mb-2"><a href="#team" class="text-white">Equipe</a></li>
                        <li class="mb-2"><a href="#contact" class="text-white">Contato</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-white mb-4">Nossos Serviços</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white">Clínico Geral</a></li>
                        <li class="mb-2"><a href="#" class="text-white">Ortodontia</a></li>
                        <li class="mb-2"><a href="#" class="text-white">Implantes</a></li>
                        <li class="mb-2"><a href="#" class="text-white">Clareamento</a></li>
                        <li class="mb-2"><a href="#" class="text-white">Odontopediatria</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Newsletter</h5>
                    <p class="text-white">Assine nossa newsletter para receber dicas de saúde bucal e promoções.</p>
                    <form class="mb-3">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Seu email">
                            <button class="btn btn-primary" type="button">Assinar</button>
                        </div>
                    </form>
                    <p class="small text-white mb-0">Não compartilhamos seus dados com terceiros.</p>
                </div>
            </div>
            <hr class="my-4 bg-secondary">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="small text-white mb-0">&copy; 2023 DentalCare. Todos os direitos reservados.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="small text-white mb-0">Desenvolvido com <i class="fas fa-heart text-danger"></i> por <a href="#" class="text-primary">DentalCare</a></p>
                </div>
            </div>
        </div>
    </footer>
@endsection