@extends('layouts.app')

@section('title', 'Café Aroma - A melhor cafeteria da cidade')

@push('estilosEcodigos')
    @vite(['resources/css/categorias/cafeteria.css'])
@endpush

@section('content')
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="bi bi-cup-hot-fill me-2"></i>Café Aroma
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#menu">Cardápio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Sobre</a>
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
    <section class="hero" id="home">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="display-3 fw-bold">A melhor experiência em café</h1>
                    <p class="lead my-4">Descubra sabores únicos e momentos especiais em nossa cafeteria artesanal.</p>
                    <a href="#menu" class="btn btn-primary btn-lg px-4 me-2">Ver Cardápio</a>
                    <a href="#contact" class="btn btn-outline-light btn-lg px-4">Reservar Mesa</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu Section -->
    <section class="container mb-5" id="menu">
        <h2 class="text-center mb-5">Nosso Cardápio</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1517701550927-30cf4ba1dba5?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="card-img-top" alt="Café Expresso">
                    <div class="card-body">
                        <h5 class="card-title">Expresso Clássico</h5>
                        <p class="card-text">O verdadeiro café espresso, intenso e encorpado, servido na medida perfeita.</p>
                        <p class="fw-bold text-primary">R$ 8,90</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1512568400610-62da28bc8a13?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="card-img-top" alt="Cappuccino">
                    <div class="card-body">
                        <h5 class="card-title">Cappuccino Cremoso</h5>
                        <p class="card-text">A combinação perfeita de espresso, leite vaporizado e uma generosa camada de espuma.</p>
                        <p class="fw-bold text-primary">R$ 12,90</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1568649929103-28ffbefaca1e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="card-img-top" alt="Latte Art">
                    <div class="card-body">
                        <h5 class="card-title">Latte Macchiato</h5>
                        <p class="card-text">Leite vaporizado com um toque de espresso e arte latte para impressionar.</p>
                        <p class="fw-bold text-primary">R$ 14,90</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="#" class="btn btn-outline-primary">Ver Cardápio Completo</a>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1463797221720-6b07e6426c24?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="img-fluid rounded" alt="Nossa Cafeteria">
                </div>
                <div class="col-lg-6 ps-lg-5 mt-4 mt-lg-0">
                    <h2>Nossa História</h2>
                    <p class="lead">Desde 2010 servindo os melhores cafés com amor e dedicação.</p>
                    <p>O Café Aroma nasceu da paixão por café de qualidade e da vontade de criar um espaço acolhedor onde as pessoas pudessem desfrutar de momentos especiais. Nossos grãos são selecionados cuidadosamente de produtores sustentáveis e torrados artesanalmente para garantir o melhor sabor em cada xícara.</p>
                    <p>Nossa equipe de baristas é treinada para preparar cada bebida com perfeição e carinho, transformando seu café em uma experiência memorável.</p>
                    <div class="d-flex align-items-center mt-4">
                        <i class="bi bi-award-fill coffee-icon me-3"></i>
                        <div>
                            <h5 class="mb-0">Melhor Cafeteria 2023</h5>
                            <p class="mb-0 text-muted">Prêmio Gastronomia Nacional</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="container my-5" id="testimonials">
        <h2 class="text-center mb-5">O que dizem nossos clientes</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="testimonial-card text-center">
                    <img src="https://randomuser.me/api/portraits/women/32.jpg" class="testimonial-img" alt="Cliente 1">
                    <h5>Mariana Silva</h5>
                    <div class="mb-3">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <p class="mb-0">"O melhor café da cidade! Ambiente aconchegante e atendimento impecável. Meu lugar favorito para trabalhar e relaxar."</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-card text-center">
                    <img src="https://randomuser.me/api/portraits/men/45.jpg" class="testimonial-img" alt="Cliente 2">
                    <h5>Carlos Mendes</h5>
                    <div class="mb-3">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <p class="mb-0">"Sou cliente há anos e nunca me decepcionei. O cappuccino com canela é divino! Recomendo a todos os amantes de café."</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-card text-center">
                    <img src="https://randomuser.me/api/portraits/women/68.jpg" class="testimonial-img" alt="Cliente 3">
                    <h5>Ana Paula Oliveira</h5>
                    <div class="mb-3">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-half text-warning"></i>
                    </div>
                    <p class="mb-0">"Adoro vir aqui nos fins de semana. Os doces caseiros combinam perfeitamente com os cafés especiais. Um verdadeiro refúgio!"</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="container my-5" id="contact">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="mb-4">Entre em Contato</h2>
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
                        <label for="message" class="form-label">Mensagem</label>
                        <textarea class="form-control" id="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
                </form>
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0">
                <h2 class="mb-4">Horário de Funcionamento</h2>
                <ul class="list-group mb-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Segunda a Sexta
                        <span class="badge bg-primary rounded-pill">7:00 - 20:00</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Sábado
                        <span class="badge bg-primary rounded-pill">8:00 - 22:00</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Domingo
                        <span class="badge bg-primary rounded-pill">9:00 - 18:00</span>
                    </li>
                </ul>
                <h2 class="mb-3">Localização</h2>
                <div class="ratio ratio-16x9 mb-3">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.0754267452926!2d-46.65342658440771!3d-23.565734367638957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59c8da0aa315%3A0xd59f9431f2c9776a!2sAv.%20Paulista%2C%20S%C3%A3o%20Paulo%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1617726877698!5m2!1spt-BR!2sbr" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <p><i class="bi bi-geo-alt-fill me-2"></i> Av. Paulista, 1000 - São Paulo, SP</p>
                <p><i class="bi bi-telephone-fill me-2"></i> (11) 1234-5678</p>
                <p><i class="bi bi-envelope-fill me-2"></i> contato@cafearoma.com.br</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5><i class="bi bi-cup-hot-fill me-2"></i>Café Aroma</h5>
                    <p>Levando qualidade e sabor para sua vida desde 2010. Venha nos visitar e experimente a diferença de um café especial.</p>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5>Links Rápidos</h5>
                    <ul class="list-unstyled">
                        <li><a href="#home" class="text-light">Início</a></li>
                        <li><a href="#menu" class="text-light">Cardápio</a></li>
                        <li><a href="#about" class="text-light">Sobre Nós</a></li>
                        <li><a href="#contact" class="text-light">Contato</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Redes Sociais</h5>
                    <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="social-icon"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="social-icon"><i class="bi bi-whatsapp"></i></a>
                    <div class="mt-3">
                        <p>Assine nossa newsletter:</p>
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Seu email">
                            <button class="btn btn-primary" type="button">Assinar</button>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="mt-4 mb-3" style="border-color: rgba(255,255,255,0.1);">
            <div class="text-center">
                <p class="mb-0">&copy; 2023 Café Aroma. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

@endsection