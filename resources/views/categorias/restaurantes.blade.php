@extends('layout')

@section('title', 'Gourmet Delight | Experiência Gastronômica')

@push('estilos')
    <style>
        :root {
            --primary-color: red;
            --secondary-color: #D4AF37;
            --dark-color: #1A1A1A;
            --light-color: #F8F9FA;
            --transition: all 0.3s ease-in-out;
        }
        
        body {
            font-family: 'Josefin Sans', sans-serif;
            color: var(--dark-color);
            overflow-x: hidden;
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-weight: 700;
        }
        
        .navbar {
            background-color: rgba(26, 26, 26, 0.9);
            transition: var(--transition);
            padding: 20px 0;
        }
        
        .navbar.scrolled {
            padding: 10px 0;
            background-color: var(--dark-color);
        }
        
        .navbar-brand {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            color: var(--secondary-color) !important;
        }
        
        .nav-link {
            color: darkgray;
            margin: 0 10px;
            font-weight: 400;
            position: relative;
        }

        .nav-link:hover {
            color: #8080ff;
        }

        .nav-link:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: var(--secondary-color);
            bottom: 0;
            left: 0;
            transition: var(--transition);
        }
        
        .nav-link:hover:after {
            width: 100%;
        }
        
        .nav-link:focus, .nav-link:hover:after {
            color: var(--secondary-color);
        }

        .hero-section {
            height: 100vh;
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            color: white;
        }
        
        .hero-content {
            animation: fadeInUp 1s ease-out;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .section-title {
            position: relative;
            margin-bottom: 50px;
            display: inline-block;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            width: 50%;
            height: 3px;
            background: var(--secondary-color);
            bottom: -10px;
            left: 0;
        }
        
        .about-img {
            border-radius: 5px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            transition: var(--transition);
        }
        
        .about-img:hover {
            transform: scale(1.03);
        }
        
        .menu-card {
            border: none;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: var(--transition);
            margin-bottom: 30px;
        }
        
        .menu-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }
        
        .menu-card img {
            height: 200px;
            object-fit: cover;
        }
        
        .price {
            color: var(--primary-color);
            font-weight: 600;
        }
        
        .testimonial-card {
            padding: 30px;
            border-radius: 5px;
            background-color: white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            margin: 15px;
        }
        
        .testimonial-img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid var(--secondary-color);
        }
        
        .reservation-form {
            background-color: white;
            padding: 40px;
            border-radius: 5px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border: none;
            padding: 12px 30px;
            font-weight: 600;
            transition: var(--transition);
        }
        
        .btn-primary:hover {
            background-color: #6d0000;
            transform: translateY(-3px);
        }
        
        .btn-outline-primary {
            border-color: var(--primary-color);
            color: var(--primary-color);
            padding: 12px 30px;
            font-weight: 600;
            transition: var(--transition);
        }
        
        .btn-outline-primary:hover {
            background-color: var(--primary-color);
            transform: translateY(-3px);
        }
        
        footer {
            background-color: var(--dark-color);
            color: white;
            padding: 50px 0 20px;
        }
        
        .social-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            margin-right: 10px;
            transition: var(--transition);
        }
        
        .social-icon:hover {
            background-color: var(--secondary-color);
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
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            z-index: 99;
            opacity: 0;
            visibility: hidden;
            transition: var(--transition);
        }
        
        .back-to-top.active {
            opacity: 1;
            visibility: visible;
        }
        
        .floating-label {
            position: relative;
            margin-bottom: 20px;
        }
        
        .floating-label input,
        .floating-label select,
        .floating-label textarea {
            width: 100%;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background: transparent;
            transition: var(--transition);
        }
        
        .floating-label label {
            position: absolute;
            top: 15px;
            left: 15px;
            color: #777;
            transition: var(--transition);
            pointer-events: none;
        }
        
        .floating-label input:focus ~ label,
        .floating-label input:valid ~ label,
        .floating-label select:valid ~ label,
        .floating-label textarea:focus ~ label,
        .floating-label textarea:valid ~ label {
            top: -10px;
            left: 10px;
            font-size: 12px;
            background-color: white;
            padding: 0 5px;
            color: var(--primary-color);
        }
        
        .gallery-item {
            margin-bottom: 30px;
            overflow: hidden;
            border-radius: 5px;
            position: relative;
        }
        
        .gallery-item img {
            transition: var(--transition);
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
            background: rgba(139, 0, 0, 0.7);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: var(--transition);
        }
        
        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }
        
        .chef-card {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .chef-img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            transition: var(--transition);
        }
        
        .chef-card:hover .chef-img {
            transform: scale(1.05);
        }
        
        .divider {
            height: 3px;
            width: 100px;
            background: var(--secondary-color);
            margin: 20px auto;
        }
    </style>
@endpush

@section('content')
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Éclat</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">Sobre</a></li>
                    <li class="nav-item"><a class="nav-link" href="#menu">Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="#gallery">Galeria</a></li>
                    <li class="nav-item"><a class="nav-link" href="#chefs">Chefs</a></li>
                    <li class="nav-item"><a class="nav-link" href="#reservation">Reservas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contato</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="container">
            <div class="hero-content text-center">
                <h1 class="display-3 fw-bold mb-4">Éclat</h1>
                <div class="divider mx-auto"></div>
                <p class="lead mb-5">Gastronomia Contemporânea com Toque Clássico</p>
                <a href="#reservation" class="btn btn-primary me-2">Reserve Agora</a>
                <a href="#menu" class="btn btn-outline-primary">Ver Menu</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5 bg-light">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80" alt="Restaurante Éclat" class="img-fluid about-img">
                </div>
                <div class="col-lg-6">
                    <h2 class="section-title">Nossa História</h2>
                    <p class="lead">Fundado em 2010, o Éclat nasceu da paixão pela gastronomia refinada e pelo atendimento impecável.</p>
                    <p>Nossa equipe de chefs internacionais combina técnicas tradicionais com inovações culinárias para criar pratos que são verdadeiras obras de arte. Cada ingrediente é cuidadosamente selecionado de produtores locais e internacionais que compartilham nosso compromisso com a excelência.</p>
                    <p>O ambiente sofisticado e acolhedor do Éclat proporciona a experiência gastronômica perfeita para ocasiões especiais ou simplesmente para desfrutar da melhor culinária da cidade.</p>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-utensils fa-2x me-3" style="color: var(--secondary-color);"></i>
                                <div>
                                    <h5 class="mb-0">Culinária Artesanal</h5>
                                    <p class="mb-0">Técnicas tradicionais</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-seedling fa-2x me-3" style="color: var(--secondary-color);"></i>
                                <div>
                                    <h5 class="mb-0">Ingredientes Frescos</h5>
                                    <p class="mb-0">Produtos sazonais</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu Section -->
    <section id="menu" class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="section-title">Nosso Menu</h2>
                <p class="lead">Descubra nossa seleção de pratos cuidadosamente elaborados</p>
            </div>
            <ul class="nav nav-tabs justify-content-center mb-5" id="menuTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="entradas-tab" data-bs-toggle="tab" data-bs-target="#entradas" type="button" role="tab">Entradas</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="principais-tab" data-bs-toggle="tab" data-bs-target="#principais" type="button" role="tab">Principais</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="sobremesas-tab" data-bs-toggle="tab" data-bs-target="#sobremesas" type="button" role="tab">Sobremesas</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="vinhos-tab" data-bs-toggle="tab" data-bs-target="#vinhos" type="button" role="tab">Vinhos</button>
                </li>
            </ul>
            <div class="tab-content" id="menuTabsContent">
                <div class="tab-pane fade show active" id="entradas" role="tabpanel">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="menu-card card">
                                <img src="https://media.istockphoto.com/id/1255004844/pt/foto/ahi-tuna-tartare-on-toasted-crostinis.webp?a=1&b=1&s=612x612&w=0&k=20&c=SgjQ2PVvRTo_CqNm4fHBKxzTjTvbS1n20mhngPq_Auw=" class="card-img-top" alt="Entrada 1">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-title">Tartar de Atum</h5>
                                        <span class="price">R$ 58</span>
                                    </div>
                                    <p class="card-text">Atum fresco, abacate, gergelim preto e molho de soja trufado.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="menu-card card">
                                <img src="https://media.istockphoto.com/id/1422866960/pt/foto/seared-foie-gras.webp?a=1&b=1&s=612x612&w=0&k=20&c=zv8_L9NaqtjyZXLnaUab9NRJUv5W7dI6UyIgp4tTGWs=" class="card-img-top" alt="Entrada 2">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-title">Foie Gras</h5>
                                        <span class="price">R$ 72</span>
                                    </div>
                                    <p class="card-text">Foie gras selado, compota de figo e pão brioche torrado.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="menu-card card">
                                <img src="https://media.istockphoto.com/id/1330094289/pt/foto/beetroot-carpaccio-with-sause-pesto-on-plate-on-old-wooden-table.webp?a=1&b=1&s=612x612&w=0&k=20&c=Wy3ae8DcgmYjnLeVLkaV98PwFGz8sXOrPWp2S_TyQUM=" class="card-img-top" alt="Entrada 3">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-title">Carpaccio de Beterraba</h5>
                                        <span class="price">R$ 45</span>
                                    </div>
                                    <p class="card-text">Beterraba orgânica, queijo de cabra e nozes caramelizadas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="principais" role="tabpanel">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="menu-card card">
                                <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=880&q=80" class="card-img-top" alt="Prato Principal 1">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-title">Filé Mignon</h5>
                                        <span class="price">R$ 128</span>
                                    </div>
                                    <p class="card-text">Filé mignon 250g, purê de batata trufado e legumes grelhados.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="menu-card card">
                                <img src="https://images.unsplash.com/photo-1565557623262-b51c2513a641?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1371&q=80" class="card-img-top" alt="Prato Principal 2">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-title">Risoto de Cogumelos</h5>
                                        <span class="price">R$ 89</span>
                                    </div>
                                    <p class="card-text">Arroz arbóreo, mix de cogumelos selvagens e parmesão.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="menu-card card">
                                <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=781&q=80" class="card-img-top" alt="Prato Principal 3">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-title">Salmão Glacê</h5>
                                        <span class="price">R$ 98</span>
                                    </div>
                                    <p class="card-text">Salmão selvagem, mel e mostarda, com aspargos grelhados.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="sobremesas" role="tabpanel">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="menu-card card">
                                <img src="https://images.unsplash.com/photo-1563805042-7684c019e1cb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1527&q=80" class="card-img-top" alt="Sobremesa 1">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-title">Soufflé de Chocolate</h5>
                                        <span class="price">R$ 42</span>
                                    </div>
                                    <p class="card-text">Soufflé quente de chocolate belga com sorvete de baunilha.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="menu-card card">
                                <img src="https://images.unsplash.com/photo-1551024506-0bccd828d307?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1557&q=80" class="card-img-top" alt="Sobremesa 2">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-title">Tarte Tatin</h5>
                                        <span class="price">R$ 38</span>
                                    </div>
                                    <p class="card-text">Tarte de maçã caramelizada com creme fraiche.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="menu-card card">
                                <img src="https://images.unsplash.com/photo-1484723091739-30a097e8f929?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1549&q=80" class="card-img-top" alt="Sobremesa 3">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-title">Cheesecake de Frutas Vermelhas</h5>
                                        <span class="price">R$ 45</span>
                                    </div>
                                    <p class="card-text">Cheesecake cremoso com calda de frutas vermelhas frescas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="vinhos" role="tabpanel">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="mb-4">Vinhos Tintos</h4>
                            <div class="menu-item mb-4">
                                <div class="d-flex justify-content-between">
                                    <h5>Château Margaux 2015</h5>
                                    <span class="price">R$ 1.250</span>
                                </div>
                                <p class="mb-0">Bordeaux, França - Garrafa</p>
                            </div>
                            <div class="menu-item mb-4">
                                <div class="d-flex justify-content-between">
                                    <h5>Quinta do Crasto 2018</h5>
                                    <span class="price">R$ 280</span>
                                </div>
                                <p class="mb-0">Douro, Portugal - Garrafa</p>
                            </div>
                            <div class="menu-item mb-4">
                                <div class="d-flex justify-content-between">
                                    <h5>Catena Zapata Malbec 2019</h5>
                                    <span class="price">R$ 320</span>
                                </div>
                                <p class="mb-0">Mendoza, Argentina - Garrafa</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h4 class="mb-4">Vinhos Brancos</h4>
                            <div class="menu-item mb-4">
                                <div class="d-flex justify-content-between">
                                    <h5>Domaine Leflaive Puligny-Montrachet 2017</h5>
                                    <span class="price">R$ 980</span>
                                </div>
                                <p class="mb-0">Burgundy, França - Garrafa</p>
                            </div>
                            <div class="menu-item mb-4">
                                <div class="d-flex justify-content-between">
                                    <h5>Cloudy Bay Sauvignon Blanc 2021</h5>
                                    <span class="price">R$ 420</span>
                                </div>
                                <p class="mb-0">Marlborough, Nova Zelândia - Garrafa</p>
                            </div>
                            <div class="menu-item mb-4">
                                <div class="d-flex justify-content-between">
                                    <h5>Gramercy Cellars Viognier 2020</h5>
                                    <span class="price">R$ 380</span>
                                </div>
                                <p class="mb-0">Washington, EUA - Garrafa</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="section-title">Galeria</h2>
                <p class="lead">Um vislumbre da experiência Éclat</p>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Galeria 1" class="img-fluid">
                        <div class="gallery-overlay">
                            <i class="fas fa-search-plus fa-3x text-white"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Galeria 2" class="img-fluid">
                        <div class="gallery-overlay">
                            <i class="fas fa-search-plus fa-3x text-white"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80" alt="Galeria 3" class="img-fluid">
                        <div class="gallery-overlay">
                            <i class="fas fa-search-plus fa-3x text-white"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1544025162-d76694265947?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80" alt="Galeria 4" class="img-fluid">
                        <div class="gallery-overlay">
                            <i class="fas fa-search-plus fa-3x text-white"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=781&q=80" alt="Galeria 5" class="img-fluid">
                        <div class="gallery-overlay">
                            <i class="fas fa-search-plus fa-3x text-white"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1551024506-0bccd828d307?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1557&q=80" alt="Galeria 6" class="img-fluid">
                        <div class="gallery-overlay">
                            <i class="fas fa-search-plus fa-3x text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Chefs Section -->
    <section id="chefs" class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="section-title">Nossos Chefs</h2>
                <p class="lead">Os talentosos artistas por trás de nossa culinária</p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="chef-card">
                        <img src="https://images.unsplash.com/photo-1581299894007-aaa50297cf16?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="Chef 1" class="chef-img">
                        <h4>Antoine Moreau</h4>
                        <p class="text-muted">Chef Executivo</p>
                        <div class="divider"></div>
                        <p>Com experiência em restaurantes estrelados Michelin em Paris, o Chef Antoine traz a elegância da culinária francesa para o Éclat.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="chef-card">
                        <img src="https://images.unsplash.com/photo-1595476108010-b4d1f102b1b1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=688&q=80" alt="Chef 2" class="chef-img">
                        <h4>Carlos Mendez</h4>
                        <p class="text-muted">Chef de Cozinha</p>
                        <div class="divider"></div>
                        <p>Nascido no México e treinado na Espanha, o Chef Carlos especializou-se em técnicas contemporâneas de cozinha molecular.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="chef-card">
                        <img src="https://images.unsplash.com/photo-1601315488950-3b5047998b38?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80" alt="Chef 3" class="chef-img">
                        <h4>Sophie Laurent</h4>
                        <p class="text-muted">Chef Confeiteira</p>
                        <div class="divider"></div>
                        <p>A Chef Sophie, formada na Le Cordon Bleu, cria sobremesas que são verdadeiras obras de arte com sabores inovadores.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="section-title">Depoimentos</h2>
                <p class="lead">O que nossos clientes dizem</p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="d-flex align-items-center mb-4">
                            <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Cliente 1" class="testimonial-img me-3">
                            <div>
                                <h5 class="mb-0">Mariana Silva</h5>
                                <div class="text-warning">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <p class="mb-0">"A experiência no Éclat foi simplesmente incrível. Cada prato era uma surpresa deliciosa, e o serviço impecável fez do nosso aniversário de casamento uma noite memorável."</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="d-flex align-items-center mb-4">
                            <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Cliente 2" class="testimonial-img me-3">
                            <div>
                                <h5 class="mb-0">Ricardo Almeida</h5>
                                <div class="text-warning">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <p class="mb-0">"Como crítico gastronômico, posso afirmar que o Éclat está entre os melhores restaurantes que visitei. A combinação de sabores e a apresentação dos pratos são obras-primas."</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="d-flex align-items-center mb-4">
                            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Cliente 3" class="testimonial-img me-3">
                            <div>
                                <h5 class="mb-0">Fernanda Costa</h5>
                                <div class="text-warning">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                        <p class="mb-0">"Levei clientes internacionais para jantar no Éclat e todos ficaram impressionados. A carta de vinhos é excelente e o sommelier nos guiou perfeitamente na escolha."</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reservation Section -->
    <section id="reservation" class="py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h2 class="section-title mb-4">Faça sua Reserva</h2>
                    <p class="mb-4">Garanta sua mesa no Éclat para uma experiência gastronômica inesquecível. Nossa equipe está pronta para proporcionar a você e seus acompanhantes um atendimento personalizado e memorável.</p>
                    <div class="d-flex align-items-center mb-4">
                        <i class="fas fa-phone-alt fa-2x me-3" style="color: var(--secondary-color);"></i>
                        <div>
                            <h5 class="mb-0">Telefone</h5>
                            <p class="mb-0">(11) 5555-1234</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <i class="fas fa-envelope fa-2x me-3" style="color: var(--secondary-color);"></i>
                        <div>
                            <h5 class="mb-0">Email</h5>
                            <p class="mb-0">reservas@eclatgourmet.com</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-map-marker-alt fa-2x me-3" style="color: var(--secondary-color);"></i>
                        <div>
                            <h5 class="mb-0">Endereço</h5>
                            <p class="mb-0">Av. Paulista, 1000 - São Paulo, SP</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="reservation-form">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="floating-label mb-4">
                                        <input type="text" id="name" required>
                                        <label for="name">Seu Nome</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="floating-label mb-4">
                                        <input type="email" id="email" required>
                                        <label for="email">Seu Email</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="floating-label mb-4">
                                        <input type="tel" id="phone" required>
                                        <label for="phone">Telefone</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="floating-label mb-4">
                                        <input type="number" id="guests" min="1" required>
                                        <label for="guests">Número de Pessoas</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="floating-label mb-4">
                                        <input type="date" id="date" required>
                                        <label for="date">Data</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="floating-label mb-4">
                                        <input type="time" id="time" required>
                                        <label for="time">Horário</label>
                                    </div>
                                </div>
                            </div>
                            <div class="floating-label mb-4">
                                <textarea id="message" rows="3"></textarea>
                                <label for="message">Observações</label>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Reservar Mesa</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="section-title">Horário de Funcionamento</h2>
                <p class="lead">Visite-nos ou entre em contato</p>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <i class="fas fa-clock fa-3x mb-3" style="color: var(--secondary-color);"></i>
                            <h4>Horários</h4>
                            <div class="mt-4">
                                <p class="mb-2"><strong>Terça a Quinta:</strong> 18h - 22h</p>
                                <p class="mb-2"><strong>Sexta e Sábado:</strong> 18h - 23h</p>
                                <p class="mb-0"><strong>Domingo:</strong> 12h - 16h</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <i class="fas fa-map-marker-alt fa-3x mb-3" style="color: var(--secondary-color);"></i>
                            <h4>Endereço</h4>
                            <div class="mt-4">
                                <p>Av. Paulista, 1000</p>
                                <p>Bela Vista</p>
                                <p>São Paulo - SP, 01310-100</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <i class="fas fa-phone-alt fa-3x mb-3" style="color: var(--secondary-color);"></i>
                            <h4>Contato</h4>
                            <div class="mt-4">
                                <p class="mb-2"><strong>Telefone:</strong> (11) 5555-1234</p>
                                <p class="mb-2"><strong>Email:</strong> contato@eclatgourmet.com</p>
                                <p class="mb-0"><strong>WhatsApp:</strong> (11) 98765-4321</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.197584455562!2d-46.6586758844073!3d-23.56134606747693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59ceb1eb771f%3A0xe904f6a669744da1!2sAv.%20Paulista%2C%201000%20-%20Bela%20Vista%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2001310-100!5e0!3m2!1spt-BR!2sbr!4v1624567890123!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h3 class="mb-4">Éclat</h3>
                    <p>Gastronomia contemporânea com toque clássico, oferecendo uma experiência culinária memorável no coração de São Paulo.</p>
                    <div class="mt-4">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h3 class="mb-4">Links Rápidos</h3>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#home" class="text-white">Home</a></li>
                        <li class="mb-2"><a href="#about" class="text-white">Sobre Nós</a></li>
                        <li class="mb-2"><a href="#menu" class="text-white">Menu</a></li>
                        <li class="mb-2"><a href="#gallery" class="text-white">Galeria</a></li>
                        <li class="mb-2"><a href="#chefs" class="text-white">Chefs</a></li>
                        <li class="mb-2"><a href="#reservation" class="text-white">Reservas</a></li>
                        <li><a href="#contact" class="text-white">Contato</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h3 class="mb-4">Newsletter</h3>
                    <p>Assine nossa newsletter para receber novidades e promoções especiais.</p>
                    <form class="mt-4">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Seu Email" aria-label="Seu Email">
                            <button class="btn btn-primary" type="button">Assinar</button>
                        </div>
                    </form>
                </div>
            </div>
            <hr class="mt-5 mb-4" style="border-color: rgba(255,255,255,0.1);">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; 2023 Éclat. Todos os direitos reservados.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Desenvolvido com <i class="fas fa-heart" style="color: #dc3545;"></i> por <a href="#" class="text-white">WebDesign</a></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i></a>

@endsection

@push('scripts')
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
        
        // Back to top button
        window.addEventListener('scroll', function() {
            const backToTop = document.querySelector('.back-to-top');
            if (window.scrollY > 300) {
                backToTop.classList.add('active');
            } else {
                backToTop.classList.remove('active');
            }
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
        
        // Initialize tooltips
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        });
    </script>
@endpush