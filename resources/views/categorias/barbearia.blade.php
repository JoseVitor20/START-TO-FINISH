@extends('layouts.app')

@section('title', 'Barbearia Vintage - Estilo Clássico para Homens Modernos')

@push('estilosEcodigos')
    @vite(['resources/css/categorias/barbearia.css', 'resources/js/categorias/barbearia.js'])
@endpush

@section('content')
    <!-- Cabeçalho -->
    <header id="header">
        <div class="container header-container">
            <a href="#" class="logo">Barbearia<span>Vintage</span></a>
            
            <button class="nav-toggle" id="navToggle">
                <i class="fas fa-bars"></i>
            </button>
            
            <nav class="nav-menu" id="navMenu">
                <ul>
                    <li class="nav-item"><a href="#home" class="nav-link">Início</a></li>
                    <li class="nav-item"><a href="#about" class="nav-link">Sobre</a></li>
                    <li class="nav-item"><a href="#services" class="nav-link">Serviços</a></li>
                    <li class="nav-item"><a href="#team" class="nav-link">Barbeiros</a></li>
                    <li class="nav-item"><a href="#gallery" class="nav-link">Galeria</a></li>
                    <li class="nav-item"><a href="#contact" class="nav-link">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-content">
            <h1 class="hero-title">A arte da <span>barbearia clássica</span></h1>
            <p class="hero-subtitle">Na Barbearia Vintage, revivemos a tradição com um toque moderno, oferecendo uma experiência premium de cuidados masculinos.</p>
            <div class="hero-btns">
                <a href="#services" class="btn">Nossos Serviços</a>
                <a href="#contact" class="btn btn-secondary">Agendar Horário</a>
            </div>
        </div>
    </section>

    <!-- Sobre -->
    <section class="section about" id="about">
        <div class="container">
            <h2 class="section-title">Nossa História</h2>
            
            <div class="about-container">
                <div class="about-content">
                    <h3>Excelência desde 1985</h3>
                    <p>Fundada por mestre barbeiro Antonio Silva, a Barbearia Vintage mantém viva a tradição do barbeiro de bairro com qualidade premium. Nossa missão é proporcionar mais que um corte de cabelo ou barba - oferecemos uma experiência completa de bem-estar masculino.</p>
                    
                    <div class="about-features">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-award"></i>
                            </div>
                            <p>Mais de 35 anos de experiência no mercado</p>
                        </div>
                        
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <p>Equipe de barbeiros altamente qualificados</p>
                        </div>
                        
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-star"></i>
                            </div>
                            <p>Produtos premium selecionados a dedo</p>
                        </div>
                    </div>
                    
                    <a href="#team" class="btn">Conheça nossa equipe</a>
                </div>
                
                <div class="about-img">
                    <img src="https://images.unsplash.com/photo-1641318175316-795cd2db99f8?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTR8fGJhcmJlaWFyaWF8ZW58MHx8MHx8fDA%3D" alt="Interior da Barbearia Vintage">
                </div>
            </div>
        </div>
    </section>

    <!-- Serviços -->
    <section class="section services" id="services">
        <div class="container">
            <h2 class="section-title">Nossos Serviços</h2>
            
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-img">
                        <img src="https://plus.unsplash.com/premium_photo-1661645788141-8196a45fb483?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NjF8fGJhcmJlaWFyaWF8ZW58MHx8MHx8fDA%3D" alt="Corte de Cabelo">
                    </div>
                    <div class="service-content">
                        <h3 class="service-title">Corte Vintage</h3>
                        <p>Corte preciso com tesoura e máquina, finalizado com acabamento perfeito e estilo personalizado.</p>
                        <p class="service-price">R$ 80,00</p>
                        <a href="#contact" class="btn">Agendar</a>
                    </div>
                </div>
                
                <div class="service-card">
                    <div class="service-img">
                        <img src="https://plus.unsplash.com/premium_photo-1661391413810-80576e05b995?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTA0fHxiYXJiZWlhcmlhfGVufDB8fDB8fHww" alt="Barba">
                    </div>
                    <div class="service-content">
                        <h3 class="service-title">Tratamento de Barba</h3>
                        <p>Modelagem profissional, hidratação com óleos naturais e finalização com produtos premium.</p>
                        <p class="service-price">R$ 60,00</p>
                        <a href="#contact" class="btn">Agendar</a>
                    </div>
                </div>
                
                <div class="service-card">
                    <div class="service-img">
                        <img src="https://images.unsplash.com/photo-1533808232502-bee53575c3af?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGJhcmJlaWFyaWF8ZW58MHx8MHx8fDA%3D" alt="Pacote Completo">
                    </div>
                    <div class="service-content">
                        <h3 class="service-title">Experiência Premium</h3>
                        <p>Corte de cabelo, barba terapêutica, massagem facial e finalização com produtos exclusivos.</p>
                        <p class="service-price">R$ 150,00</p>
                        <a href="#contact" class="btn">Agendar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Destaques -->
    <section class="section highlights">
        <div class="container">
            <div class="highlights-grid">
                <div class="highlight-item">
                    <div class="highlight-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <div class="highlight-number">5.000+</div>
                    <p>Clientes Satisfeitos</p>
                </div>
                
                <div class="highlight-item">
                    <div class="highlight-icon">
                        <i class="fas fa-scissors"></i>
                    </div>
                    <div class="highlight-number">35+</div>
                    <p>Anos de Experiência</p>
                </div>
                
                <div class="highlight-item">
                    <div class="highlight-icon">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <div class="highlight-number">12</div>
                    <p>Prêmios Conquistados</p>
                </div>
                
                <div class="highlight-item">
                    <div class="highlight-icon">
                        <i class="fas fa-smile"></i>
                    </div>
                    <div class="highlight-number">100%</div>
                    <p>Clientes Fiéis</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Equipe -->
    <section class="section team" id="team">
        <div class="container">
            <h2 class="section-title">Nossos Barbeiros</h2>
            
            <div class="team-grid">
                <div class="team-member">
                    <div class="member-img">
                        <img src="https://plus.unsplash.com/premium_photo-1671741519429-c0465c1b5c12?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjF8fGJhcmJlaXJvfGVufDB8fDB8fHww" alt="Barbeiro João">
                        <div class="member-social">
                            <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                    <h3 class="member-name">João Silva</h3>
                    <p class="member-role">Barbeiro Mestre</p>
                    <p>Especialista em cortes clássicos e técnicas tradicionais com 20 anos de experiência.</p>
                </div>
                
                <div class="team-member">
                    <div class="member-img">
                        <img src="https://images.unsplash.com/photo-1593702288056-7927b442d0fa?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzF8fGJhcmJlaXJvfGVufDB8fDB8fHww" alt="Barbeiro Carlos">
                        <div class="member-social">
                            <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                    <h3 class="member-name">Carlos Mendes</h3>
                    <p class="member-role">Especialista em Barba</p>
                    <p>Mestre na arte do cuidado facial e modelagem de barba com produtos naturais.</p>
                </div>
                
                <div class="team-member">
                    <div class="member-img">
                        <img src="https://images.unsplash.com/photo-1582893561942-d61adcb2e534?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDZ8fGJhcmJlaXJvfGVufDB8fDB8fHww" alt="Barbeiro Pedro">
                        <div class="member-social">
                            <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <h3 class="member-name">Pedro Almeida</h3>
                    <p class="member-role">Estilista Capilar</p>
                    <p>Especialista em cortes modernos e tendências atuais do mundo masculino.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Depoimentos -->
    <section class="section testimonials">
        <div class="container">
            <h2 class="section-title">O Que Dizem Nossos Clientes</h2>
            
            <div class="testimonials-slider">
                <div class="testimonial-item active">
                    <div class="client-img">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Cliente Roberto">
                    </div>
                    <div class="client-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="client-text">"A Barbearia Vintage é simplesmente a melhor da cidade. O João entende exatamente o que quero e sempre faz um trabalho impecável. Já sou cliente há mais de 10 anos!"</p>
                    <p class="client-name">Roberto Santos</p>
                </div>
                
                <div class="testimonial-item">
                    <div class="client-img">
                        <img src="https://randomuser.me/api/portraits/men/44.jpg" alt="Cliente Marcelo">
                    </div>
                    <div class="client-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="client-text">"Nunca encontrei um lugar que cuidasse da minha barba como o Carlos faz. Os produtos são excelentes e o ambiente é incrível. Recomendo para todos!"</p>
                    <p class="client-name">Marcelo Oliveira</p>
                </div>
                
                <div class="testimonial-item">
                    <div class="client-img">
                        <img src="https://randomuser.me/api/portraits/men/68.jpg" alt="Cliente Rafael">
                    </div>
                    <div class="client-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p class="client-text">"O Pedro transformou meu visual completamente! Trouxe ideias modernas que combinam perfeitamente com meu estilo de vida. Excelente profissional!"</p>
                    <p class="client-name">Rafael Costa</p>
                </div>
                
                <div class="slider-controls">
                    <div class="slider-dot active" data-slide="0"></div>
                    <div class="slider-dot" data-slide="1"></div>
                    <div class="slider-dot" data-slide="2"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Galeria -->
    <section class="section gallery" id="gallery">
        <div class="container">
            <h2 class="section-title">Nosso Espaço</h2>
            
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1512690459411-b9245aed614b?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzJ8fGJhcmJlaXJvfGVufDB8fDB8fHww" alt="Barbearia Vintage">
                    <div class="gallery-overlay">
                        <a href="#" class="gallery-icon">
                            <i class="fas fa-search-plus"></i>
                        </a>
                    </div>
                </div>
                
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1585747860715-2ba37e788b70?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fGJhcmJlaXJvfGVufDB8fDB8fHww" alt="Cadeira de Barbeiro">
                    <div class="gallery-overlay">
                        <a href="#" class="gallery-icon">
                            <i class="fas fa-search-plus"></i>
                        </a>
                    </div>
                </div>
                
                <div class="gallery-item">
                    <img src="https://plus.unsplash.com/premium_photo-1661380558859-40df8dd91dfd?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8YmFyYmVpcm98ZW58MHx8MHx8fDA%3D" alt="Corte de Cabelo">
                    <div class="gallery-overlay">
                        <a href="#" class="gallery-icon">
                            <i class="fas fa-search-plus"></i>
                        </a>
                    </div>
                </div>
                
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1536520002442-39764a41e987?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8YmFyYmVpcm98ZW58MHx8MHx8fDA%3D" alt="Tratamento de Barba">
                    <div class="gallery-overlay">
                        <a href="#" class="gallery-icon">
                            <i class="fas fa-search-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contato -->
    <section class="section contact" id="contact">
        <div class="container">
            <h2 class="section-title">Agende Seu Horário</h2>
            
            <div class="contact-container">
                <div class="contact-info">
                    <h3>Entre em Contato</h3>
                    
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <p>Rua Vintage, 123 - Centro, São Paulo - SP</p>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <p>(11) 98765-4321</p>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <p>contato@barbeariavintage.com.br</p>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <p>Segunda a Sexta: 9h às 19h<br>Sábado: 9h às 15h<br>Domingo: Fechado</p>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-comment-dots"></i>
                        </div>
                        <p>Siga-nos nas redes sociais para promoções exclusivas!</p>
                    </div>
                </div>
                
                <div class="contact-form">
                    <form id="appointmentForm">
                        <div class="form-group">
                            <label for="name" class="form-label">Nome Completo</label>
                            <input type="text" id="name" class="form-control" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" class="form-control" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone" class="form-label">Telefone</label>
                            <input type="tel" id="phone" class="form-control" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="service" class="form-label">Serviço Desejado</label>
                            <select id="service" class="form-control" required>
                                <option value="">Selecione um serviço</option>
                                <option value="Corte Vintage">Corte Vintage - R$ 80,00</option>
                                <option value="Tratamento de Barba">Tratamento de Barba - R$ 60,00</option>
                                <option value="Experiência Premium">Experiência Premium - R$ 150,00</option>
                                <option value="Outro">Outro</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="date" class="form-label">Data Preferencial</label>
                            <input type="date" id="date" class="form-control" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="message" class="form-label">Mensagem</label>
                            <textarea id="message" class="form-control" rows="4"></textarea>
                        </div>
                        
                        <button type="submit" class="btn">Enviar Agendamento</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Rodapé -->
    <footer>
        <div class="container">
            <div class="footer-container">
                <div class="footer-about">
                    <div class="footer-logo">Barbearia<span>Vintage</span></div>
                    <p>Preservando a tradição da barbearia clássica com excelência e sofisticação desde 1985.</p>
                    <div class="footer-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                
                <div class="footer-links-container">
                    <h3 class="footer-title">Links Rápidos</h3>
                    <ul class="footer-links">
                        <li><a href="#home">Início</a></li>
                        <li><a href="#about">Sobre Nós</a></li>
                        <li><a href="#services">Serviços</a></li>
                        <li><a href="#team">Nossa Equipe</a></li>
                        <li><a href="#gallery">Galeria</a></li>
                        <li><a href="#contact">Contato</a></li>
                    </ul>
                </div>
                
                <div class="footer-services">
                    <h3 class="footer-title">Nossos Serviços</h3>
                    <ul class="footer-links">
                        <li><a href="#">Corte Vintage</a></li>
                        <li><a href="#">Tratamento de Barba</a></li>
                        <li><a href="#">Experiência Premium</a></li>
                        <li><a href="#">Massagem Facial</a></li>
                        <li><a href="#">Hidratação Capilar</a></li>
                        <li><a href="#">Produtos Exclusivos</a></li>
                    </ul>
                </div>
                
                <div class="footer-newsletter">
                    <h3 class="footer-title">Newsletter</h3>
                    <p>Assine nossa newsletter para receber promoções exclusivas e dicas de cuidados masculinos.</p>
                    <form class="newsletter-form">
                        <input type="email" placeholder="Seu email" class="newsletter-input" required>
                        <button type="submit" class="newsletter-btn">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p class="copyright">&copy; 2023 Barbearia Vintage. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>
@endsection