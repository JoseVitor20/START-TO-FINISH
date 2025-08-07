@extends('layouts.app')

@section('title', 'Centro Cultural ArteViva')

@push('estilosEcodigos')
    @vite(['resources/css/categorias/centro-cultural.css', 'resources/js/categorias/centro-cultural.js'])
@endpush

@section('content')
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">ArteViva</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#eventos">Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#cursos">Cursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#galeria">Galeria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contato">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section text-center">
        <div class="container">
            <h1 class="display-3 fw-bold mb-4">Centro Cultural ArteViva</h1>
            <p class="lead mb-5">Promovendo arte, cultura e educação desde 1995</p>
            <a href="#eventos" class="btn btn-primary btn-lg px-4 me-2">Próximos Eventos</a>
            <a href="#cursos" class="btn btn-outline-light btn-lg px-4">Nossos Cursos</a>
        </div>
    </section>

    <!-- Sobre Nós -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center section-title">Sobre Nós</h2>
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="https://plus.unsplash.com/premium_photo-1694475143306-aafbdaefa042?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDF8fGNlbnRybyUyMGN1bHR1cmFsfGVufDB8MHwwfHx8MA%3D%3D" 
                         alt="Centro Cultural" class="img-fluid rounded shadow">
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-4">Um espaço para todas as formas de arte</h3>
                    <p class="lead">O Centro Cultural ArteViva é um espaço dedicado à promoção e difusão da cultura em suas mais diversas manifestações.</p>
                    <p>Fundado em 1995, nosso centro já recebeu mais de 500 eventos artísticos e formou milhares de alunos em nossos cursos e oficinas. Nosso objetivo é democratizar o acesso à cultura e proporcionar experiências transformadoras através da arte.</p>
                    <p>Contamos com uma equipe de profissionais qualificados e espaços modernos para atender todas as necessidades artísticas e culturais da comunidade.</p>
                    <a href="#" class="btn btn-outline-primary mt-3">Conheça nossa história</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Eventos -->
    <section id="eventos" class="py-5 bg-light-alt">
        <div class="container">
            <h2 class="text-center section-title">Próximos Eventos</h2>
            <div class="row g-4">
                <!-- Evento 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card-event h-100">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                                 class="card-img-top" alt="Show de Jazz">
                            <div class="event-date">15 OUT</div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Noite de Jazz</h5>
                            <p class="card-text text-muted"><i class="bi bi-calendar-event me-2"></i>15 de Outubro, 2023 - 20h</p>
                            <p class="card-text">Uma noite especial com a Orquestra de Jazz Moderno, apresentando clássicos e novas composições.</p>
                            <a href="#" class="btn btn-primary">Saiba mais</a>
                        </div>
                    </div>
                </div>
                
                <!-- Evento 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card-event h-100">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                                 class="card-img-top" alt="Exposição de Arte">
                            <div class="event-date">22 OUT</div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Exposição: Arte Contemporânea</h5>
                            <p class="card-text text-muted"><i class="bi bi-calendar-event me-2"></i>22 de Outubro a 15 de Novembro</p>
                            <p class="card-text">Mostra coletiva com obras de artistas emergentes da cena contemporânea nacional.</p>
                            <a href="#" class="btn btn-primary">Saiba mais</a>
                        </div>
                    </div>
                </div>
                
                <!-- Evento 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card card-event h-100">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1507924538820-ede94a04019d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                                 class="card-img-top" alt="Oficina de Teatro">
                            <div class="event-date">05 NOV</div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Oficina de Teatro para Iniciantes</h5>
                            <p class="card-text text-muted"><i class="bi bi-calendar-event me-2"></i>Todas as terças, a partir de 5 de Novembro</p>
                            <p class="card-text">Workshop prático para quem deseja dar os primeiros passos na arte teatral.</p>
                            <a href="#" class="btn btn-primary">Saiba mais</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="#" class="btn btn-outline-primary btn-lg">Ver todos os eventos</a>
            </div>
        </div>
    </section>

    <!-- Cursos -->
    <section id="cursos" class="py-5">
        <div class="container">
            <h2 class="text-center section-title">Nossos Cursos</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 d-inline-block mb-3">
                                <i class="bi bi-music-note-beamed fs-1"></i>
                            </div>
                            <h4>Música</h4>
                            <p class="text-muted">Violão, piano, canto, teoria musical e muito mais para todas as idades.</p>
                            <a href="#" class="btn btn-outline-primary">Ver cursos</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 d-inline-block mb-3">
                                <i class="bi bi-palette fs-1"></i>
                            </div>
                            <h4>Artes Visuais</h4>
                            <p class="text-muted">Desenho, pintura, escultura, fotografia e técnicas contemporâneas.</p>
                            <a href="#" class="btn btn-outline-primary">Ver cursos</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 d-inline-block mb-3">
                                <i class="bi bi-camera-reels fs-1"></i>
                            </div>
                            <h4>Teatro e Dança</h4>
                            <p class="text-muted">Balé, dança contemporânea, teatro adulto e infantil, improvisação.</p>
                            <a href="#" class="btn btn-outline-primary">Ver cursos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Galeria -->
    <section id="galeria" class="py-5 bg-light-alt">
        <div class="container">
            <h2 class="text-center section-title">Galeria</h2>
            <div class="row g-3">
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal">
                        <img src="https://images.unsplash.com/photo-1470229722913-7c0e2dbbafd3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                             class="img-fluid rounded shadow-sm" alt="Show musical">
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal">
                        <img src="https://images.unsplash.com/photo-1547153760-18fc86324498?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1471&q=80" 
                             class="img-fluid rounded shadow-sm" alt="Aula de dança">
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal">
                        <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                             class="img-fluid rounded shadow-sm" alt="Show ao vivo">
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal">
                        <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                             class="img-fluid rounded shadow-sm" alt="Obra de arte">
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal">
                        <img src="https://images.unsplash.com/photo-1547036967-23d11aacaee0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1473&q=80" 
                             class="img-fluid rounded shadow-sm" alt="Exposição">
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal">
                        <img src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                             class="img-fluid rounded shadow-sm" alt="Palestra">
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal">
                        <img src="https://images.unsplash.com/photo-1574267432553-4b4628081c31?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1631&q=80" 
                             class="img-fluid rounded shadow-sm" alt="Workshop">
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal">
                        <img src="https://images.unsplash.com/photo-1501281668745-f7f57925c3b4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                             class="img-fluid rounded shadow-sm" alt="Aula de pintura">
                    </a>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="#" class="btn btn-primary">Ver mais fotos</a>
            </div>
        </div>
    </section>

    <!-- Contato -->
    <section id="contato" class="py-5">
        <div class="container">
            <h2 class="text-center section-title">Contato</h2>
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h3 class="mb-4">Entre em contato conosco</h3>
                    <p>Tem dúvidas sobre nossos cursos, eventos ou quer agendar uma visita? Preencha o formulário ou utilize nossos outros canais de contato.</p>
                    
                    <div class="d-flex align-items-start mb-3">
                        <div class="me-3 text-primary">
                            <i class="bi bi-geo-alt-fill fs-4"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Endereço</h5>
                            <p class="mb-0">Rua das Artes, 123 - Centro<br>São Paulo/SP - CEP 01001-000</p>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-start mb-3">
                        <div class="me-3 text-primary">
                            <i class="bi bi-telephone-fill fs-4"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Telefone</h5>
                            <p class="mb-0">(11) 1234-5678<br>(11) 98765-4321 (WhatsApp)</p>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-start mb-3">
                        <div class="me-3 text-primary">
                            <i class="bi bi-envelope-fill fs-4"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Email</h5>
                            <p class="mb-0">contato@arteviva.com.br</p>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-start">
                        <div class="me-3 text-primary">
                            <i class="bi bi-clock-fill fs-4"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Horário de Funcionamento</h5>
                            <p class="mb-0">Segunda a sexta: 9h às 21h<br>Sábado: 10h às 18h<br>Domingo: Fechado</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <form>
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="tel" class="form-control" id="telefone">
                        </div>
                        <div class="mb-3">
                            <label for="assunto" class="form-label">Assunto</label>
                            <select class="form-select" id="assunto">
                                <option selected>Selecione...</option>
                                <option>Informações sobre cursos</option>
                                <option>Agendamento de visitas</option>
                                <option>Proposta de eventos</option>
                                <option>Outros</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="mensagem" class="form-label">Mensagem</label>
                            <textarea class="form-control" id="mensagem" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Mapa -->
    <div class="container-fluid p-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.0754267452926!2d-46.65342658440718!3d-23.565734367638054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59c8da0aa315%3A0xd59f9431f2c9776a!2sAv.%20Paulista%2C%20S%C3%A3o%20Paulo%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1622672436788!5m2!1spt-BR!2sbr" 
                width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h3 class="mb-4">ArteViva</h3>
                    <p>Promovendo arte, cultura e educação para transformar vidas e comunidades desde 1995.</p>
                    <div class="mt-4">
                        <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                    <h5 class="mb-4">Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Início</a></li>
                        <li class="mb-2"><a href="#eventos" class="text-white text-decoration-none">Eventos</a></li>
                        <li class="mb-2"><a href="#cursos" class="text-white text-decoration-none">Cursos</a></li>
                        <li class="mb-2"><a href="#galeria" class="text-white text-decoration-none">Galeria</a></li>
                        <li class="mb-2"><a href="#contato" class="text-white text-decoration-none">Contato</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="mb-4">Newsletter</h5>
                    <p>Assine nossa newsletter e receba informações sobre nossos eventos e cursos.</p>
                    <form class="mt-3">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Seu email" aria-label="Seu email">
                            <button class="btn btn-primary" type="button">Assinar</button>
                        </div>
                    </form>
                </div>
                            </div>
            
            <hr class="mt-5 mb-4" style="border-color: rgba(255,255,255,0.1);">
            
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; 2023 Centro Cultural ArteViva. Todos os direitos reservados.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Desenvolvido com <i class="bi bi-heart-fill text-danger"></i> por <a href="#" class="text-white text-decoration-none">Equipe ArteViva</a></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Modal para imagens da galeria -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Título da Imagem</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="" class="img-fluid" id="modalImage" alt="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

@endsection