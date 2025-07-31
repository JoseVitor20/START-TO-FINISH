@extends('layouts.app')

@section('title', 'Pães&Doces | Panificadora Premium')

@push('estilosEcodigos')
    @vite(['resources/css/categorias/panificadora.css', 'resources/js/categorias/panificadora.js'])
@endpush

@section('content')
    <body data-bs-spy="scroll" data-bs-target="#navbar">
       <!-- Preloader -->
       <div class="preloader">
          <div class="spinner-border text-primary" role="status">
             <span class="visually-hidden">Loading...</span>
          </div>
       </div>
       <!-- Navbar -->
       <nav id="navbar" class="navbar navbar-expand-lg navbar-dark fixed-top">
          <div class="container">
             <a class="navbar-brand" href="#home">
             <span class="logo-text">Pães <strong style="color: lightblue;">&</strong></span><span class="logo-highlight"><strong>Doces</strong></span>
             </a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                   <li class="nav-item">
                      <a class="nav-link active" href="#home">Início</a>
                   </li>
                   <li class="nav-item">
                      <a class="nav-link" href="#about">Sobre</a>
                   </li>
                   <li class="nav-item">
                      <a class="nav-link" href="#menu">Menu</a>
                   </li>
                   <li class="nav-item">
                      <a class="nav-link" href="#gallery">Galeria</a>
                   </li>
                   <li class="nav-item">
                      <a class="nav-link" href="#chefs">Chefs</a>
                   </li>
                   <li class="nav-item">
                      <a class="nav-link" href="#contact">Contato</a>
                   </li>
                </ul>
                <button class="btn btn-primary ms-lg-3" data-bs-toggle="modal" data-bs-target="#reservationModal">
                <i class="fas fa-calendar-check me-2"></i>Fazer Pedido
                </button>
             </div>
          </div>
       </nav>
       <!-- Hero Section -->
       <section id="home" class="hero-section">
          <div class="hero-overlay"></div>
          <div class="container h-100">
             <div class="row h-100 align-items-center">
                <div class="col-12 text-center text-white">
                   <h1 class="display-3 fw-bold mb-4">Tradição Artesanal <span class="text-primary">Excepcional</span></h1>
                   <p class="lead mb-5">Sabores refinados em um ambiente sofisticado</p>
                   <div class="d-flex justify-content-center gap-3">
                      <a href="#menu" class="btn btn-primary btn-lg px-4 py-3">Ver Menu</a>
                      <a href="#contact" class="btn btn-outline-light btn-lg px-4 py-3">Contato</a>
                   </div>
                </div>
             </div>
          </div>
          <a href="#about" class="scroll-down">
          <i class="fas fa-chevron-down"></i>
          </a>
       </section>
       <!-- About Section -->
       <section id="about" class="py-5 py-lg-7">
          <div class="container">
             <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                   <div class="about-img position-relative">
                      <img src="https://media.istockphoto.com/id/1623084565/pt/foto/group-of-employees-working-at-a-bakery-baking-bread.webp?a=1&b=1&s=612x612&w=0&k=20&c=iV4XOAmxAlHFs7w3ifNwgzrqWx2bLHXLFTfvv8gqPb4=" alt="Nossa Padaria" class="img-fluid rounded-3 shadow">
                      <div class="experience-box bg-primary text-white text-center p-4 rounded-3 shadow">
                         <h3 class="mb-0">12+</h3>
                         <p class="mb-0">Anos de Experiência</p>
                      </div>
                   </div>
                </div>
                <div class="col-lg-6">
                   <h2 class="section-title mb-4">Nossa <span class="text-primary">História</span></h2>
                   <p class="lead">Fundado em 2010, o Sabor Elegante nasceu da paixão por gastronomia de alta qualidade.</p>
                   <p>Nossa equipe de chefs renomados combina técnicas tradicionais com inovação para criar pratos memoráveis. Cada detalhe, desde a seleção dos ingredientes até o atendimento, é cuidadosamente planejado para proporcionar uma experiência única.</p>
                   <div class="row mt-4">
                      <div class="col-md-6 mb-4">
                         <div class="d-flex">
                            <div class="me-4 text-primary">
                               <i class="fas fa-award fa-2x"></i>
                            </div>
                            <div>
                               <h5 class="mb-2">Prêmios</h5>
                               <p class="mb-0">Melhor Padaria 2022 e Estrela Michelin desde 2018</p>
                            </div>
                         </div>
                      </div>
                      <div class="col-md-6 mb-4">
                         <div class="d-flex">
                            <div class="me-4 text-primary">
                               <i class="fas fa-seedling fa-2x"></i>
                            </div>
                            <div>
                               <h5 class="mb-2">Ingredientes</h5>
                               <p class="mb-0">Frescos, locais e selecionados a dedo</p>
                            </div>
                         </div>
                      </div>
                   </div>
                   <a href="#menu" class="btn btn-outline-primary mt-2">Conheça Nosso Menu</a>
                </div>
             </div>
          </div>
       </section>
       <!-- Menu Section -->
       <section id="menu" class="py-5 py-lg-7 bg-light">
          <div class="container">
             <div class="row justify-content-center">
                <div class="col-lg-8 text-center mb-5">
                   <h2 class="section-title mb-3">Nosso <span class="text-primary">Menu</span></h2>
                   <p class="lead">Descubra nossa seleção de pratos cuidadosamente preparados</p>
                </div>
             </div>
             <ul class="nav nav-pills justify-content-center mb-5" id="menu-tab" role="tablist">
                <li class="nav-item" role="presentation">
                   <button class="nav-link active" id="entradas-tab" data-bs-toggle="pill" data-bs-target="#entradas" type="button" role="tab">🥖 Pães Clássicos
                   </button>
                </li>
                <li class="nav-item" role="presentation">
                   <button class="nav-link" id="principais-tab" data-bs-toggle="pill" data-bs-target="#principais" type="button" role="tab">🥐 Folhados e Massas Viennoiserie
                   </button>
                </li>
                <li class="nav-item" role="presentation">
                   <button class="nav-link" id="sobremesas-tab" data-bs-toggle="pill" data-bs-target="#sobremesas" type="button" role="tab">🍰 Doces e Bolos
                   </button>
                </li>
                <li class="nav-item" role="presentation">
                   <button class="nav-link" id="bebidas-tab" data-bs-toggle="pill" data-bs-target="#bebidas" type="button" role="tab">🥟 Salgados Tradicionais
                   </button>
                </li>
             </ul>
             <div class="tab-content" id="menu-tabContent">
                <div class="tab-pane fade show active" id="entradas" role="tabpanel">
                   <div class="row g-4">
                      <!-- Entradas serão carregadas via JavaScript -->
                   </div>
                </div>
                <div class="tab-pane fade" id="principais" role="tabpanel">
                   <div class="row g-4">
                      <!-- Principais serão carregadas via JavaScript -->
                   </div>
                </div>
                <div class="tab-pane fade" id="sobremesas" role="tabpanel">
                   <div class="row g-4">
                      <!-- Sobremesas serão carregadas via JavaScript -->
                   </div>
                </div>
                <div class="tab-pane fade" id="bebidas" role="tabpanel">
                   <div class="row g-4">
                      <!-- Bebidas serão carregadas via JavaScript -->
                   </div>
                </div>
             </div>
          </div>
       </section>
       <!-- Gallery Section -->
       <section id="gallery" class="py-5 py-lg-7">
          <div class="container">
             <div class="row justify-content-center">
                <div class="col-lg-8 text-center mb-5">
                   <h2 class="section-title mb-3">Nossa <span class="text-primary">Galeria</span></h2>
                   <p class="lead">Um vislumbre da experiência Sabor Elegante</p>
                </div>
             </div>
             <div class="row g-3">
                <div class="gallery-container col-md-4 col-6">
                   <a href="#" class="gallery-item" data-bs-toggle="modal" data-bs-target="#galleryModal" data-img="https://media.istockphoto.com/id/173228391/pt/foto/feito-em-casa-frango-empadas-de-cerveja-refrescante-no-suporte.webp?a=1&b=1&s=612x612&w=0&k=20&c=VfXsXWLUrdQMVc9SGrw9QR75RSbhgq5OCVDIgBzoliA=">
                      <img src="https://media.istockphoto.com/id/173228391/pt/foto/feito-em-casa-frango-empadas-de-cerveja-refrescante-no-suporte.webp?a=1&b=1&s=612x612&w=0&k=20&c=VfXsXWLUrdQMVc9SGrw9QR75RSbhgq5OCVDIgBzoliA=" class="img-fluid rounded-3" alt="Prato gourmet">
                      <div class="gallery-overlay">
                         <i class="fas fa-search-plus"></i>
                      </div>
                   </a>
                </div>
                <div class="col-md-4 col-6">
                   <a href="#" class="gallery-item" data-bs-toggle="modal" data-bs-target="#galleryModal" data-img="https://images.unsplash.com/photo-1623194418728-0ea4d06c593a?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTJ8fENveGluaGF8ZW58MHx8MHx8fDA%3D">
                      <img src="https://images.unsplash.com/photo-1623194418728-0ea4d06c593a?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTJ8fENveGluaGF8ZW58MHx8MHx8fDA%3D" class="img-fluid rounded-3" alt="Ambiente do Padaria">
                      <div class="gallery-overlay">
                         <i class="fas fa-search-plus"></i>
                      </div>
                   </a>
                </div>
                <div class="col-md-4 col-6">
                   <a href="#" class="gallery-item" data-bs-toggle="modal" data-bs-target="#galleryModal" data-img="https://media.istockphoto.com/id/2120363428/pt/foto/open-meat-sfiha.webp?a=1&b=1&s=612x612&w=0&k=20&c=uZJ9qMCV7zykXUCtCTHf8L5Bu0CfCYYHFsg8R8MMK_E=">
                      <img src="https://media.istockphoto.com/id/2120363428/pt/foto/open-meat-sfiha.webp?a=1&b=1&s=612x612&w=0&k=20&c=uZJ9qMCV7zykXUCtCTHf8L5Bu0CfCYYHFsg8R8MMK_E=" class="img-fluid rounded-3" alt="Doces da Padaria">
                      <div class="gallery-overlay">
                         <i class="fas fa-search-plus"></i>
                      </div>
                   </a>
                </div>
                <div class="col-md-4 col-6">
                   <a href="#" class="gallery-item" data-bs-toggle="modal" data-bs-target="#galleryModal" data-img="https://plus.unsplash.com/premium_photo-1675604220150-38028d3690d0?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NjV8fFAlQzMlQTNvJTIwRG9jZXxlbnwwfHwwfHx8MA%3D%3D">
                      <img src="https://plus.unsplash.com/premium_photo-1675604220150-38028d3690d0?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NjV8fFAlQzMlQTNvJTIwRG9jZXxlbnwwfHwwfHx8MA%3D%3D" class="img-fluid rounded-3" alt="Prato gourmet">
                      <div class="gallery-overlay">
                         <i class="fas fa-search-plus"></i>
                      </div>
                   </a>
                </div>
                <div class="col-md-4 col-6">
                   <a href="#" class="gallery-item" data-bs-toggle="modal" data-bs-target="#galleryModal" data-img="https://images.unsplash.com/photo-1646523222953-adf5609ec0a0?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzJ8fFRvcnRhJTIwRG9jZXxlbnwwfHwwfHx8MA%3D%3D">
                      <img src="https://images.unsplash.com/photo-1646523222953-adf5609ec0a0?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzJ8fFRvcnRhJTIwRG9jZXxlbnwwfHwwfHx8MA%3D%3D" class="img-fluid rounded-3" alt="Cozinha profissional">
                      <div class="gallery-overlay">
                         <i class="fas fa-search-plus"></i>
                      </div>
                   </a>
                </div>
                <div class="col-md-4 col-6">
                   <a href="#" class="gallery-item" data-bs-toggle="modal" data-bs-target="#galleryModal" data-img="https://images.unsplash.com/photo-1684439680374-35ace4b972f2?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDN8fFRvcnRhJTIwRG9jZXxlbnwwfHwwfHx8MA%3D%3D">
                      <img src="https://images.unsplash.com/photo-1684439680374-35ace4b972f2?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDN8fFRvcnRhJTIwRG9jZXxlbnwwfHwwfHx8MA%3D%3D" class="img-fluid rounded-3" alt="Hambúrguer gourmet">
                      <div class="gallery-overlay">
                         <i class="fas fa-search-plus"></i>
                      </div>
                   </a>
                </div>
             </div>
          </div>
       </section>
       <!-- Chefs Section -->
       <section id="chefs" class="py-5 py-lg-7 bg-light">
          <div class="container">
             <div class="row justify-content-center">
                <div class="col-lg-8 text-center mb-5">
                   <h2 class="section-title mb-3">Nossos <span class="text-primary">Chefs</span></h2>
                   <p class="lead">Profissionais renomados que dão vida aos nossos pratos</p>
                </div>
             </div>
             <div class="row g-4">
                <div class="col-md-4">
                   <div class="chef-card text-center p-4 rounded-3 bg-white shadow-sm">
                      <div class="chef-img mb-4 mx-auto">
                         <img src="https://images.unsplash.com/photo-1604551969716-5d6d8f77b241?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDJ8fHBhbmlmaWNhZG9yYXxlbnwwfHwwfHx8MA%3D%3D" class="img-fluid rounded-circle" alt="Chef Carlos">
                      </div>
                      <h4 class="mb-2">Carlos Mendes</h4>
                      <p class="text-primary mb-3">Chef Executivo</p>
                      <p>Formado na Le Cordon Bleu em Paris, traz 15 anos de experiência em cozinhas internacionais.</p>
                      <div class="social-links mt-3">
                         <a href="#"><i class="fab fa-facebook-f"></i></a>
                         <a href="#"><i class="fab fa-twitter"></i></a>
                         <a href="#"><i class="fab fa-instagram"></i></a>
                      </div>
                   </div>
                </div>
                <div class="col-md-4">
                   <div class="chef-card text-center p-4 rounded-3 bg-white shadow-sm">
                      <div class="chef-img mb-4 mx-auto">
                         <img src="https://plus.unsplash.com/premium_photo-1658506697852-99645ed7ce1b?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzN8fHBhbmlmaWNhZG9yYXxlbnwwfHwwfHx8MA%3D%3D" class="img-fluid rounded-circle" alt="Chef Ana">
                      </div>
                      <h4 class="mb-2">Ana Souza</h4>
                      <p class="text-primary mb-3">Chef de Pastelaria</p>
                      <p>Especialista em doces e sobremesas, premiada no Concurso Mundial de Confeitaria em 2019.</p>
                      <div class="social-links mt-3">
                         <a href="#"><i class="fab fa-facebook-f"></i></a>
                         <a href="#"><i class="fab fa-twitter"></i></a>
                         <a href="#"><i class="fab fa-instagram"></i></a>
                      </div>
                   </div>
                </div>
                <div class="col-md-4">
                   <div class="chef-card text-center p-4 rounded-3 bg-white shadow-sm">
                      <div class="chef-img mb-4 mx-auto">
                         <img src="https://plus.unsplash.com/premium_photo-1682088971433-3ed3521da072?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTMyfHxwYW5pZmljYWRvcmF8ZW58MHx8MHx8fDA%3D" class="img-fluid rounded-circle" alt="Chef Marco">
                      </div>
                      <h4 class="mb-2">Marco Rocha</h4>
                      <p class="text-primary mb-3">Sous Chef</p>
                      <p>Especialista em técnicas modernas de cocção e apresentação de pratos.</p>
                      <div class="social-links mt-3">
                         <a href="#"><i class="fab fa-facebook-f"></i></a>
                         <a href="#"><i class="fab fa-twitter"></i></a>
                         <a href="#"><i class="fab fa-instagram"></i></a>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </section>
       <!-- Testimonials Section -->
       <section class="py-5 py-lg-7 bg-primary text-white">
          <div class="container">
             <div class="row justify-content-center">
                <div class="col-lg-8 text-center mb-5">
                   <h2 class="section-title mb-3">O Que Dizem <span class="text-white">Nossos Clientes</span></h2>
                   <p class="lead">Depoimentos de quem já viveu a experiência Sabor Elegante</p>
                </div>
             </div>
             <div class="row">
                <div class="col-12">
                   <div id="testimonialsCarousel" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                         <div class="carousel-item active">
                            <div class="testimonial-item text-center px-4">
                               <div class="testimonial-img mb-4 mx-auto">
                                  <img src="https://randomuser.me/api/portraits/women/32.jpg" class="rounded-circle" alt="Cliente">
                               </div>
                               <p class="mb-4">"A experiência gastronômica mais incrível que já vivi! Cada prato é uma obra de arte, tanto visual quanto no paladar."</p>
                               <h5 class="mb-1">Juliana Santos</h5>
                               <p class="text-white-50">Advogada</p>
                            </div>
                         </div>
                         <div class="carousel-item">
                            <div class="testimonial-item text-center px-4">
                               <div class="testimonial-img mb-4 mx-auto">
                                  <img src="https://randomuser.me/api/portraits/men/75.jpg" class="rounded-circle" alt="Cliente">
                               </div>
                               <p class="mb-4">"O serviço impecável e a atenção aos detalhes fazem toda a diferença. Voltarei com certeza para experimentar outros pratos do menu."</p>
                               <h5 class="mb-1">Ricardo Oliveira</h5>
                               <p class="text-white-50">Empresário</p>
                            </div>
                         </div>
                         <div class="carousel-item">
                            <div class="testimonial-item text-center px-4">
                               <div class="testimonial-img mb-4 mx-auto">
                                  <img src="https://randomuser.me/api/portraits/women/68.jpg" class="rounded-circle" alt="Cliente">
                               </div>
                               <p class="mb-4">"Celebramos nosso aniversário de casamento no Sabor Elegante e foi perfeito. A equipe tornou nossa noite ainda mais especial."</p>
                               <h5 class="mb-1">Fernanda e Marcelo</h5>
                               <p class="text-white-50">Casados há 10 anos</p>
                            </div>
                         </div>
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                      </button>
                   </div>
                </div>
             </div>
          </div>
       </section>
       <!-- Contact Section -->
       <section id="contact" class="py-5 py-lg-7">
          <div class="container">
             <div class="row justify-content-center">
                <div class="col-lg-8 text-center mb-5">
                   <h2 class="section-title mb-3">Entre em <span class="text-primary">Contato</span></h2>
                   <p class="lead">Estamos ansiosos para atendê-lo</p>
                </div>
             </div>
             <div class="row g-4">
                <div class="col-lg-4">
                   <div class="contact-info">
                      <div class="contact-item d-flex mb-4">
                         <div class="icon-box bg-primary text-white rounded-3 me-4">
                            <i class="fas fa-map-marker-alt"></i>
                         </div>
                         <div>
                            <h5>Endereço</h5>
                            <p>Av. Gastronômica, 1234<br>Jardim Paulista - São Paulo/SP</p>
                         </div>
                      </div>
                      <div class="contact-item d-flex mb-4">
                         <div class="icon-box bg-primary text-white rounded-3 me-4">
                            <i class="fas fa-phone-alt"></i>
                         </div>
                         <div>
                            <h5>Telefone</h5>
                            <p>(11) 1234-5678<br>(11) 98765-4321 (WhatsApp)</p>
                         </div>
                      </div>
                      <div class="contact-item d-flex mb-4">
                         <div class="icon-box bg-primary text-white rounded-3 me-4">
                            <i class="fas fa-envelope"></i>
                         </div>
                         <div>
                            <h5>Email</h5>
                            <p>contato@saborelegante.com<br>reservas@saborelegante.com</p>
                         </div>
                      </div>
                      <div class="contact-item d-flex">
                         <div class="icon-box bg-primary text-white rounded-3 me-4">
                            <i class="fas fa-clock"></i>
                         </div>
                         <div>
                            <h5>Horário</h5>
                            <p>Terça a Quinta: 18h - 23h<br>Sexta e Sábado: 18h - 00h<br>Domingo: 12h - 17h</p>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-lg-8">
                   <div class="contact-form bg-light p-4 p-lg-5 rounded-3 shadow-sm">
                      <form id="contactForm">
                         <div class="row g-3">
                            <div class="col-md-6">
                               <input type="text" class="form-control" placeholder="Seu nome" required>
                            </div>
                            <div class="col-md-6">
                               <input type="email" class="form-control" placeholder="Seu email" required>
                            </div>
                            <div class="col-12">
                               <input type="text" class="form-control" placeholder="Assunto">
                            </div>
                            <div class="col-12">
                               <textarea class="form-control" rows="5" placeholder="Sua mensagem" required></textarea>
                            </div>
                            <div class="col-12">
                               <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
                            </div>
                         </div>
                      </form>
                   </div>
                </div>
             </div>
          </div>
       </section>
       <!-- Map Section -->
       <div class="map-section">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.1973535856183!2d-46.6586759246831!3d-23.56134917880034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59c8da0aa315%3A0xd59f9431f2c9776a!2sAv.%20Paulista%2C%20S%C3%A3o%20Paulo%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1687459210976!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       </div>
       <!-- Footer -->
       <footer class="bg-dark text-white py-5">
          <div class="container">
             <div class="row g-4">
                <div class="col-lg-4">
                   <h3 class="text-white mb-4">Sabor<span class="text-primary">Elegante</span></h3>
                   <p>Oferecendo experiências gastronômicas excepcionais desde 2010. Sabores que encantam, momentos que ficam.</p>
                   <div class="social-links mt-4">
                      <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                      <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                      <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                      <a href="#" class="text-white"><i class="fab fa-tripadvisor"></i></a>
                   </div>
                </div>
                <div class="col-lg-2 col-md-4">
                   <h5 class="text-white mb-4">Links Rápidos</h5>
                   <ul class="list-unstyled">
                      <li class="mb-2"><a href="#home" class="text-white-50">Início</a></li>
                      <li class="mb-2"><a href="#about" class="text-white-50">Sobre</a></li>
                      <li class="mb-2"><a href="#menu" class="text-white-50">Menu</a></li>
                      <li class="mb-2"><a href="#gallery" class="text-white-50">Galeria</a></li>
                      <li class="mb-2"><a href="#contact" class="text-white-50">Contato</a></li>
                   </ul>
                </div>
                <div class="col-lg-3 col-md-4">
                   <h5 class="text-white mb-4">Horário de Funcionamento</h5>
                   <ul class="list-unstyled text-white-50">
                      <li class="mb-2">Terça a Quinta: 18h - 23h</li>
                      <li class="mb-2">Sexta e Sábado: 18h - 00h</li>
                      <li class="mb-2">Domingo: 12h - 17h</li>
                      <li>Segunda-feira: Fechado</li>
                   </ul>
                </div>
                <div class="col-lg-3 col-md-4">
                   <h5 class="text-white mb-4">Newsletter</h5>
                   <p class="text-white-50">Assine para receber novidades e promoções especiais.</p>
                   <form class="mt-3">
                      <div class="input-group">
                         <input type="email" class="form-control" placeholder="Seu email">
                         <button class="btn btn-primary" type="submit"><i class="fas fa-paper-plane"></i></button>
                      </div>
                   </form>
                </div>
             </div>
             <hr class="my-4 bg-secondary">
             <div class="row">
                <div class="col-md-6 text-center text-md-start">
                   <p class="mb-0">&copy; 2023 Sabor Elegante. Todos os direitos reservados.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                   <p class="mb-0">
                      <a href="#" class="text-white-50 me-3">Termos de Uso</a>
                      <a href="#" class="text-white-50">Política de Privacidade</a>
                   </p>
                </div>
             </div>
          </div>
       </footer>
       <!-- Reservation Modal -->
       <div class="modal fade" id="reservationModal" tabindex="-1" aria-labelledby="reservationModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
             <div class="modal-content">
                <div class="modal-header">
                   <h5 class="modal-title" id="reservationModalLabel">Fazer pedido!</h5>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                   <form id="reservationForm">
                      <div class="mb-3">
                         <input type="text" class="form-control" placeholder="Seu nome" required>
                      </div>
                      <div class="mb-3">
                         <input type="email" class="form-control" placeholder="Seu email" required>
                      </div>
                      <div class="mb-3">
                         <input type="tel" class="form-control" placeholder="Seu telefone" required>
                      </div>
                      <div class="row g-3 mb-3">
                         <div class="col-md-6">
                            <input type="date" class="form-control" required>
                         </div>
                         <div class="col-md-6">
                            <input type="time" class="form-control" required>
                         </div>
                      </div>
                      <div class="mb-3">
                         <select class="form-select" required>
                            <option value="" selected disabled>Quantidade</option>
                            <option value="1">1 </option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7+">7+</option>
                         </select>
                      </div>
                      <div class="mb-3">
                         <textarea class="form-control" rows="3" placeholder="Observações especiais"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary w-100">Confirmar Pedido</button>
                   </form>
                </div>
             </div>
          </div>
       </div>
       <!-- Gallery Modal -->
       <div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
             <div class="modal-content bg-transparent border-0">
                <div class="modal-header border-0">
                   <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                   <img src="" id="galleryModalImg" class="img-fluid rounded-3" alt="">
                </div>
             </div>
          </div>
       </div>
       <!-- Back to Top Button -->
       <a href="#" class="back-to-top btn-primary">
       <i class="fas fa-arrow-up"></i>
       </a>
    </body>
@endsection