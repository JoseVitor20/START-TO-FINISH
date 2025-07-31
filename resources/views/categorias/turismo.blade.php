@extends('layouts.app')

@section('title', 'Dream Travel - Sua Agência de Turismo')

@push('estilosEcodigos')
    @vite(['resources/css/categorias/turismo.css'])
@endpush

@section('content')
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="bi bi-airplane-engines"></i> Dream Travel
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
                        <a class="nav-link" href="#destinos">Destinos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pacotes">Pacotes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sobre">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contato">Contato</a>
                    </li>
                </ul>
                <button class="btn btn-outline-light ms-3">
                    <i class="bi bi-person"></i> Login
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section d-flex align-items-center">
        <div class="container text-center">
            <h1 class="display-3 fw-bold mb-4">Viva experiências inesquecíveis</h1>
            <p class="lead mb-5">Descubra os melhores destinos com os melhores preços</p>
            <a href="#destinos" class="btn btn-primary btn-lg px-4 me-2">
                <i class="bi bi-search"></i> Explorar
            </a>
            <a href="#contato" class="btn btn-outline-light btn-lg px-4">
                <i class="bi bi-chat-dots"></i> Fale Conosco
            </a>
        </div>
    </section>

    <!-- Destaques -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="d-flex align-items-center p-3 bg-white rounded shadow-sm">
                        <i class="bi bi-globe fs-1 text-primary me-3"></i>
                        <div>
                            <h5 class="mb-0">+100 Destinos</h5>
                            <p class="mb-0 text-muted">Em todo o mundo</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex align-items-center p-3 bg-white rounded shadow-sm">
                        <i class="bi bi-currency-dollar fs-1 text-success me-3"></i>
                        <div>
                            <h5 class="mb-0">Melhor Preço</h5>
                            <p class="mb-0 text-muted">Garantido</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex align-items-center p-3 bg-white rounded shadow-sm">
                        <i class="bi bi-headset fs-1 text-warning me-3"></i>
                        <div>
                            <h5 class="mb-0">Suporte 24h</h5>
                            <p class="mb-0 text-muted">Durante sua viagem</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Destinos Populares -->
    <section id="destinos" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Destinos Populares</h2>
                <p class="lead text-muted">Explore nossos destinos mais procurados</p>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="card destination-card h-100">
                        <img src="https://images.unsplash.com/photo-1518391846015-55a9cc003b25" class="card-img-top" alt="Paris">
                        <div class="card-body">
                            <h5 class="card-title">Paris, França</h5>
                            <p class="card-text text-muted">A cidade do amor e da luz, com sua Torre Eiffel e deliciosa culinária.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-primary">Promoção</span>
                                <a href="#" class="btn btn-sm btn-outline-primary">Ver pacotes</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="card destination-card h-100">
                        <img src="https://media.istockphoto.com/id/2178020702/pt/foto/new-york-cityscape-aerial.webp?a=1&b=1&s=612x612&w=0&k=20&c=aO492ILtrRe2W2lgHNx-zb4CWE0Ry0emFHH0qdOVZjM=" class="card-img-top" alt="Nova York">
                        <div class="card-body">
                            <h5 class="card-title">Nova York, EUA</h5>
                            <p class="card-text text-muted">A cidade que nunca dorme, com seus arranha-céus e Broadway.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-success">Mais procurado</span>
                                <a href="#" class="btn btn-sm btn-outline-primary">Ver pacotes</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="card destination-card h-100">
                        <img src="https://plus.unsplash.com/premium_photo-1661902398022-762e88ff3f82?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8dG9reW98ZW58MHx8MHx8fDA%3D" class="card-img-top" alt="Tóquio">
                        <div class="card-body">
                            <h5 class="card-title">Tóquio, Japão</h5>
                            <p class="card-text text-muted">Uma mistura fascinante de tradição e tecnologia futurista.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-info">Novidade</span>
                                <a href="#" class="btn btn-sm btn-outline-primary">Ver pacotes</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="card destination-card h-100">
                        <img src="https://images.unsplash.com/photo-1544551763-46a013bb70d5" class="card-img-top" alt="Rio de Janeiro">
                        <div class="card-body">
                            <h5 class="card-title">Rio de Janeiro, Brasil</h5>
                            <p class="card-text text-muted">Cristo Redentor, praias deslumbrantes e carnaval.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-warning text-dark">Oferta</span>
                                <a href="#" class="btn btn-sm btn-outline-primary">Ver pacotes</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-4">
                <a href="#" class="btn btn-primary">Ver todos os destinos</a>
            </div>
        </div>
    </section>

    <!-- Pacotes em Destaque -->
    <section id="pacotes" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Pacotes em Destaque</h2>
                <p class="lead text-muted">As melhores ofertas para sua próxima viagem</p>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1682308999971-208126ba75ec?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8aWxoYXMlMjBtYWxkaXZhc3xlbnwwfHwwfHx8MA%3D%3D" class="card-img-top" alt="Maldivas">
                            <div class="position-absolute top-0 end-0 bg-danger text-white px-2 py-1 m-2 rounded">
                                -20%
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Lua de Mel nas Maldivas</h5>
                            <p class="card-text text-muted">7 noites em bangalô sobre o mar com café da manhã.</p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle text-success"></i> Voo internacional incluído</li>
                                <li><i class="bi bi-check-circle text-success"></i> Transfer aeroporto-hotel</li>
                                <li><i class="bi bi-check-circle text-success"></i> Passeio de barco</li>
                            </ul>
                        </div>
                        <div class="card-footer bg-white border-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="text-decoration-line-through text-muted">R$ 12.999</span>
                                    <h4 class="mb-0 text-primary">R$ 10.399</h4>
                                    <small class="text-muted">por pessoa</small>
                                </div>
                                <a href="#" class="btn btn-primary">Reservar</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1503917988258-f87a78e3c995" class="card-img-top" alt="Disney">
                            <div class="position-absolute top-0 end-0 bg-danger text-white px-2 py-1 m-2 rounded">
                                -15%
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Disney World + Orlando</h5>
                            <p class="card-text text-muted">10 dias com ingressos para 4 parques e hospedagem.</p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle text-success"></i> Voo internacional incluído</li>
                                <li><i class="bi bi-check-circle text-success"></i> Aluguel de carro</li>
                                <li><i class="bi bi-check-circle text-success"></i> Café da manhã diário</li>
                            </ul>
                        </div>
                        <div class="card-footer bg-white border-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="text-decoration-line-through text-muted">R$ 8.499</span>
                                    <h4 class="mb-0 text-primary">R$ 7.224</h4>
                                    <small class="text-muted">por pessoa</small>
                                </div>
                                <a href="#" class="btn btn-primary">Reservar</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1527631746610-bca00a040d60" class="card-img-top" alt="Egito">
                            <div class="position-absolute top-0 end-0 bg-danger text-white px-2 py-1 m-2 rounded">
                                -10%
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Egito Clássico</h5>
                            <p class="card-text text-muted">8 dias visitando pirâmides, Cairo e cruzeiro no Nilo.</p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle text-success"></i> Guia em português</li>
                                <li><i class="bi bi-check-circle text-success"></i> Pensão completa</li>
                                <li><i class="bi bi-check-circle text-success"></i> Entradas para atrações</li>
                            </ul>
                        </div>
                        <div class="card-footer bg-white border-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="text-decoration-line-through text-muted">R$ 6.799</span>
                                    <h4 class="mb-0 text-primary">R$ 6.119</h4>
                                    <small class="text-muted">por pessoa</small>
                                </div>
                                <a href="#" class="btn btn-primary">Reservar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Depoimentos -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">O que nossos clientes dizem</h2>
                <p class="lead text-muted">Experiências reais de quem já viajou conosco</p>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="testimonial-card h-100">
                        <div class="d-flex mb-3">
                            <img src="https://randomuser.me/api/portraits/women/32.jpg" class="rounded-circle me-3" width="60" alt="Cliente">
                            <div>
                                <h5 class="mb-0">Ana Carolina</h5>
                                <div class="text-warning">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                            </div>
                        </div>
                        <p class="mb-0">"A Dream Travel superou todas as expectativas na nossa viagem para a Itália. Tudo foi perfeitamente organizado e tivemos um atendimento excelente durante toda a estadia."</p>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="testimonial-card h-100">
                        <div class="d-flex mb-3">
                            <img src="https://randomuser.me/api/portraits/men/45.jpg" class="rounded-circle me-3" width="60" alt="Cliente">
                            <div>
                                <h5 class="mb-0">Ricardo Almeida</h5>
                                <div class="text-warning">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i>
                                </div>
                            </div>
                        </div>
                        <p class="mb-0">"Contratei o pacote para Cancún e foi incrível! O resort era exatamente como nas fotos e o preço estava muito abaixo do que encontrei em outras agências."</p>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="testimonial-card h-100">
                        <div class="d-flex mb-3">
                            <img src="https://randomuser.me/api/portraits/women/68.jpg" class="rounded-circle me-3" width="60" alt="Cliente">
                            <div>
                                <h5 class="mb-0">Fernanda Souza</h5>
                                <div class="text-warning">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                            </div>
                        </div>
                        <p class="mb-0">"Viajei sozinha para a Tailândia e fui muito bem acompanhada pela equipe da Dream Travel. Me senti segura em todos os momentos e aproveitei cada minuto!"</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="py-5 bg-primary text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h3 class="fw-bold">Receba nossas ofertas exclusivas</h3>
                    <p class="mb-0">Cadastre-se e seja o primeiro a saber sobre promoções e destinos especiais.</p>
                </div>
                <div class="col-lg-6">
                    <form class="row g-2">
                        <div class="col-8">
                            <input type="email" class="form-control form-control-lg" placeholder="Seu melhor e-mail">
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-light btn-lg w-100">
                                Cadastrar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Sobre -->
    <section id="sobre" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="https://images.unsplash.com/photo-1520250497591-112f2f40a3f4" class="img-fluid rounded" alt="Equipe">
                </div>
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-4">Sobre a Dream Travel</h2>
                    <p>Fundada em 2010, a Dream Travel nasceu da paixão por viagens e da vontade de proporcionar experiências únicas para nossos clientes.</p>
                    <p>Nossa equipe é formada por especialistas que já visitaram pessoalmente os destinos que oferecemos, garantindo recomendações autênticas e dicas valiosas.</p>
                    <p>Já ajudamos mais de 5.000 clientes a realizarem o sonho de conhecer novos lugares e culturas.</p>
                    <div class="mt-4">
                        <a href="#" class="btn btn-primary me-2">Nossa história</a>
                        <a href="#" class="btn btn-outline-primary">Nossa equipe</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contato -->
    <section id="contato" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Entre em Contato</h2>
                <p class="lead text-muted">Estamos aqui para ajudar a planejar sua viagem dos sonhos</p>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-6">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="nome" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="nome" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="col-12">
                                <label for="assunto" class="form-label">Assunto</label>
                                <input type="text" class="form-control" id="assunto" required>
                            </div>
                            <div class="col-12">
                                <label for="mensagem" class="form-label">Mensagem</label>
                                <textarea class="form-control" id="mensagem" rows="5" required></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
                            </div>
                        </div>
                    </form>
                </div>
                
                <div class="col-lg-6">
                    <div class="bg-white p-4 rounded h-100">
                        <h5 class="fw-bold mb-4">Informações de Contato</h5>
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <i class="bi bi-geo-alt-fill text-primary me-2"></i>
                                Av. Paulista, 1000 - São Paulo/SP
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-telephone-fill text-primary me-2"></i>
                                (11) 1234-5678
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-whatsapp text-primary me-2"></i>
                                (11) 98765-4321
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-envelope-fill text-primary me-2"></i>
                                contato@dreamtravel.com.br
                            </li>
                            <li class="mb-3">
                                <i class="bi bi-clock-fill text-primary me-2"></i>
                                Seg-Sex: 9h-18h | Sáb: 9h-13h
                            </li>
                        </ul>
                        
                        <h5 class="fw-bold mt-4 mb-3">Nos acompanhe</h5>
                        <div>
                            <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="social-icon"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="social-icon"><i class="bi bi-youtube"></i></a>
                            <a href="#" class="social-icon"><i class="bi bi-tiktok"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mapa -->
    <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.1973535856183!2d-46.6586759844755!3d-23.5611164673579!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59c8da0aa315%3A0xd59f9431f2c9776a!2sAv.%20Paulista%2C%201000%20-%20Bela%20Vista%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2001310-100!5e0!3m2!1spt-BR!2sbr!4v1620000000000!5m2!1spt-BR!2sbr" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <!-- Footer -->
    <footer class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">
                        <i class="bi bi-airplane-engines"></i> Dream Travel
                    </h5>
                    <p>Sua agência de viagens confiável, oferecendo os melhores destinos e experiências desde 2010.</p>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Links Rápidos</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Home</a></li>
                        <li class="mb-2"><a href="#destinos" class="text-white text-decoration-none">Destinos</a></li>
                        <li class="mb-2"><a href="#pacotes" class="text-white text-decoration-none">Pacotes</a></li>
                        <li class="mb-2"><a href="#sobre" class="text-white text-decoration-none">Sobre Nós</a></li>
                        <li class="mb-2"><a href="#contato" class="text-white text-decoration-none">Contato</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Destinos Populares</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Europa</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">América do Norte</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">América do Sul</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Ásia</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Oceania</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Newsletter</h5>
                    <p>Assine para receber ofertas exclusivas.</p>
                    <form class="mb-3">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Seu e-mail">
                            <button class="btn btn-primary" type="button">
                                <i class="bi bi-send"></i>
                            </button>
                        </div>
                    </form>
                    <div>
                        <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>
            </div>
            
            <hr class="my-4 bg-secondary">
            
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; 2023 Dream Travel. Todos os direitos reservados.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">
                        <a href="#" class="text-white text-decoration-none">Termos de uso</a> | 
                        <a href="#" class="text-white text-decoration-none">Política de privacidade</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
@endsection