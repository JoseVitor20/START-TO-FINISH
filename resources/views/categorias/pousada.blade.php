@extends('layouts.app')

@section('title', 'Pousada Charmosa - Seu Refúgio na Natureza')

@push('estilosEcodigos')
    @vite(['resources/css/categorias/pousada.css'])
@endpush

@section('content')
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">Pousada Charmosa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#accommodation">Acomodações</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#amenities">Comodidades</a>
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
    <section class="hero-section text-center" id="home">
        <div class="container">
            <h1 class="display-3 fw-bold mb-4">Bem-vindo à Pousada Charmosa</h1>
            <p class="lead mb-5">Seu refúgio perfeito para relaxar e recarregar as energias</p>
            <a href="#accommodation" class="btn btn-primary btn-lg px-4 me-2">Nossas Acomodações</a>
            <a href="#contact" class="btn btn-outline-light btn-lg px-4">Reservas</a>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                         alt="Pousada Charmosa" class="img-fluid rounded">
                </div>
                <div class="col-lg-6">
                    <h2 class="section-title text-center text-lg-start">Sobre Nossa Pousada</h2>
                    <p>Localizada em meio à natureza exuberante, a Pousada Charmosa oferece o equilíbrio perfeito entre conforto moderno e charme rústico. Nossa pousada é o destino ideal para quem busca tranquilidade, belas paisagens e atendimento personalizado.</p>
                    <p>Fundada em 2010, temos orgulho de oferecer aos nossos hóspedes uma experiência memorável, com atenção aos detalhes que fazem toda a diferença. Nossa equipe está sempre pronta para tornar sua estadia especial.</p>
                    <div class="text-center text-lg-start">
                        <a href="#amenities" class="btn btn-primary mt-3">Nossas Comodidades</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Accommodation Section -->
    <section class="py-5 bg-light" id="accommodation">
        <div class="container">
            <h2 class="section-title text-center">Nossas Acomodações</h2>
            <p class="text-center mb-5">Conheça nossos espaços cuidadosamente projetados para seu conforto</p>
            
            <div class="row">
                <!-- Room 1 -->
                <div class="col-md-4">
                    <div class="room-card card">
                        <img src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                             class="card-img-top" alt="Suíte Romântica">
                        <div class="card-body">
                            <h5 class="card-title">Suíte Romântica</h5>
                            <p class="card-text">Perfeita para casais, com cama king-size, varanda privativa e banheira de hidromassagem.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-wifi"></i> Wi-Fi gratuito</li>
                                <li><i class="fas fa-tv"></i> TV a cabo</li>
                                <li><i class="fas fa-wine-glass-alt"></i> Frigorífico</li>
                            </ul>
                            <a href="#contact" class="btn btn-primary">Reservar</a>
                        </div>
                    </div>
                </div>
                
                <!-- Room 2 -->
                <div class="col-md-4">
                    <div class="room-card card">
                        <img src="https://plus.unsplash.com/premium_photo-1687996107450-1cb812e04e2e?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8Y2hhbCVDMyVBQXxlbnwwfHwwfHx8MA%3D%3D" 
                             class="card-img-top" alt="Chalé Familiar">
                        <div class="card-body">
                            <h5 class="card-title">Chalé Familiar</h5>
                            <p class="card-text">Amplo espaço para até 5 pessoas, com cozinha equipada e área de lazer privativa.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-wifi"></i> Wi-Fi gratuito</li>
                                <li><i class="fas fa-utensils"></i> Cozinha completa</li>
                                <li><i class="fas fa-snowflake"></i> Ar-condicionado</li>
                            </ul>
                            <a href="#contact" class="btn btn-primary">Reservar</a>
                        </div>
                    </div>
                </div>
                
                <!-- Room 3 -->
                <div class="col-md-4">
                    <div class="room-card card">
                        <img src="https://images.unsplash.com/photo-1596178065887-1198b6148b2b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                             class="card-img-top" alt="Bangalô Premium">
                        <div class="card-body">
                            <h5 class="card-title">Bangalô Premium</h5>
                            <p class="card-text">Experiência exclusiva com piscina privativa, deck com vista panorâmica e serviço de mordomo.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-swimming-pool"></i> Piscina privativa</li>
                                <li><i class="fas fa-concierge-bell"></i> Serviço de mordomo</li>
                                <li><i class="fas fa-parking"></i> Estacionamento coberto</li>
                            </ul>
                            <a href="#contact" class="btn btn-primary">Reservar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Amenities Section -->
    <section class="py-5" id="amenities">
        <div class="container">
            <h2 class="section-title text-center">Nossas Comodidades</h2>
            <p class="text-center mb-5">Tudo para tornar sua estadia ainda mais especial</p>
            
            <div class="row text-center">
                <div class="col-md-3 mb-4">
                    <div class="amenities-icon">
                        <i class="fas fa-umbrella-beach"></i>
                    </div>
                    <h4>Área de Lazer</h4>
                    <p>Piscina adulto e infantil, jardins exuberantes e área de churrasco.</p>
                </div>
                
                <div class="col-md-3 mb-4">
                    <div class="amenities-icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h4>Café da Manhã</h4>
                    <p>Delicioso café colonial com produtos frescos e caseiros.</p>
                </div>
                
                <div class="col-md-3 mb-4">
                    <div class="amenities-icon">
                        <i class="fas fa-spa"></i>
                    </div>
                    <h4>Spa & Bem-estar</h4>
                    <p>Massagens relaxantes e tratamentos estéticos em nosso spa.</p>
                </div>
                
                <div class="col-md-3 mb-4">
                    <div class="amenities-icon">
                        <i class="fas fa-biking"></i>
                    </div>
                    <h4>Atividades</h4>
                    <p>Trilhas guiadas, passeios a cavalo e bicicletas disponíveis.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title text-center">O que dizem nossos hóspedes</h2>
            <p class="text-center mb-5">Depoimentos de quem já viveu a experiência Pousada Charmosa</p>
            
            <div class="row">
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://randomuser.me/api/portraits/women/32.jpg" class="testimonial-img me-3" alt="Cliente">
                            <div>
                                <h5 class="mb-0">Ana Silva</h5>
                                <div class="text-warning">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <p>"A Pousada Charmosa superou todas as expectativas! O atendimento foi impecável e a suíte romântica era perfeita para nosso aniversário de casamento."</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://randomuser.me/api/portraits/men/45.jpg" class="testimonial-img me-3" alt="Cliente">
                            <div>
                                <h5 class="mb-0">Carlos Mendes</h5>
                                <div class="text-warning">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <p>"Levei a família toda e ficamos no chalé familiar. As crianças adoraram a piscina e nós apreciamos a tranquilidade do local. Voltaremos com certeza!"</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://randomuser.me/api/portraits/women/68.jpg" class="testimonial-img me-3" alt="Cliente">
                            <div>
                                <h5 class="mb-0">Mariana Oliveira</h5>
                                <div class="text-warning">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                        <p>"O bangalô premium é uma experiência única! Acordar com aquela vista panorâmica e tomar café na varanda foi inesquecível. Recomendo a todos!"</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="py-5" id="gallery">
        <div class="container">
            <h2 class="section-title text-center">Nossa Galeria</h2>
            <p class="text-center mb-5">Alguns momentos especiais na Pousada Charmosa</p>
            
            <div class="row">
                <div class="col-md-4 col-6">
                    <img src="https://images.unsplash.com/photo-1571896349842-33c89424de2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=880&q=80" 
                         class="img-fluid gallery-img" alt="Piscina">
                </div>
                <div class="col-md-4 col-6">
                    <img src="https://images.unsplash.com/photo-1596178065887-1198b6148b2b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                         class="img-fluid gallery-img" alt="Quarto">
                </div>
                <div class="col-md-4 col-6">
                    <img src="https://images.unsplash.com/photo-1584132967334-10e028bd69f7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                         class="img-fluid gallery-img" alt="Jardim">
                </div>
                <div class="col-md-4 col-6">
                    <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                         class="img-fluid gallery-img" alt="Varanda">
                </div>
                <div class="col-md-4 col-6">
                    <img src="https://images.unsplash.com/photo-1564501049412-61c2a3083791?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1632&q=80" 
                         class="img-fluid gallery-img" alt="Café da manhã">
                </div>
                <div class="col-md-4 col-6">
                    <img src="https://images.unsplash.com/photo-1539667468225-eebb663053e6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1511&q=80" 
                         class="img-fluid gallery-img" alt="Spa">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-5 bg-light" id="contact">
        <div class="container">
            <h2 class="section-title text-center">Entre em Contato</h2>
            <p class="text-center mb-5">Faça sua reserva ou tire suas dúvidas</p>
            
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" placeholder="Seu nome" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="email" class="form-control" placeholder="Seu e-mail" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="tel" class="form-control" placeholder="Telefone">
                        </div>
                        <div class="mb-3">
                            <select class="form-select">
                                <option selected disabled>Tipo de Acomodação</option>
                                <option>Suíte Romântica</option>
                                <option>Chalé Familiar</option>
                                <option>Bangalô Premium</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input type="date" class="form-control" placeholder="Data de Entrada">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="date" class="form-control" placeholder="Data de Saída">
                            </div>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="4" placeholder="Mensagem"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
                    </form>
                </div>
                
                <div class="col-lg-6">
                    <div class="contact-info">
                        <h4 class="mb-4">Informações de Contato</h4>
                        <p><i class="fas fa-map-marker-alt"></i> Rua das Flores, 123 - Centro, Cidade Encantada - SP</p>
                        <p><i class="fas fa-phone"></i> (11) 1234-5678</p>
                        <p><i class="fas fa-envelope"></i> contato@pousadacharmosa.com.br</p>
                        <p><i class="fas fa-clock"></i> Check-in: 14h | Check-out: 12h</p>
                        
                        <h4 class="mt-5 mb-4">Nos siga nas redes sociais</h4>
                        <div>
                            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-tripadvisor"></i></a>
                        </div>
                        
                        <div class="mt-4">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.0754267452926!2d-46.65342658440639!3d-23.565734367638952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59c8da0aa315%3A0xd59f9431f2c9776a!2sAv.%20Paulista%2C%20S%C3%A3o%20Paulo%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1623860183963!5m2!1spt-BR!2sbr" 
                                    width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5>Pousada Charmosa</h5>
                    <p>Seu refúgio perfeito para momentos inesquecíveis.</p>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5>Links Rápidos</h5>
                    <ul class="list-unstyled">
                        <li><a href="#home" class="text-white">Home</a></li>
                        <li><a href="#accommodation" class="text-white">Acomodações</a></li>
                        <li><a href="#amenities" class="text-white">Comodidades</a></li>
                        <li><a href="#contact" class="text-white">Contato</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Newsletter</h5>
                    <p>Assine para receber ofertas exclusivas.</p>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Seu e-mail">
                        <button class="btn btn-outline-light" type="button">Assinar</button>
                    </div>
                </div>
            </div>
            <hr class="my-4 bg-light">
            <p class="mb-0">&copy; 2023 Pousada Charmosa. Todos os direitos reservados.</p>
        </div>
    </footer>

@endsection