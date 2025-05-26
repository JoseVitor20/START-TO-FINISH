<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MobiliArt - Móveis de Qualidade</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #6d4c41;
            --secondary-color: #8d6e63;
            --light-color: #d7ccc8;
            --dark-color: #3e2723;
            --accent-color: #a1887f;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            color: #333;
        }
        
        .navbar {
            background-color: var(--primary-color) !important;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .navbar-brand {
            font-weight: 700;
            color: white !important;
            font-size: 1.5rem;
        }
        
        .nav-link {
            color: var(--light-color) !important;
            font-weight: 500;
            margin: 0 5px;
        }
        
        .nav-link:hover, .nav-link.active {
            color: white !important;
        }
        
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1556228453-efd6c1ff04f6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 120px 0;
            margin-bottom: 50px;
        }
        
        .section-title {
            position: relative;
            margin-bottom: 40px;
            color: var(--dark-color);
            font-weight: 700;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 3px;
            background-color: var(--accent-color);
        }
        
        .card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            margin-bottom: 20px;
        }
        
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }
        
        .card-img-top {
            height: 200px;
            object-fit: cover;
        }
        
        .card-body {
            padding: 20px;
        }
        
        .card-title {
            font-weight: 600;
            color: var(--dark-color);
        }
        
        .price {
            font-weight: 700;
            color: var(--primary-color);
            font-size: 1.2rem;
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .btn-primary:hover {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
        }
        
        .btn-outline-primary {
            color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .btn-outline-primary:hover {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .about-section {
            background-color: white;
            padding: 80px 0;
        }
        
        .testimonial-card {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 20px;
        }
        
        .testimonial-img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
        }
        
        .contact-section {
            background-color: var(--light-color);
            padding: 80px 0;
        }
        
        .footer {
            background-color: var(--dark-color);
            color: white;
            padding: 40px 0 20px;
        }
        
        .footer a {
            color: var(--light-color);
            text-decoration: none;
        }
        
        .footer a:hover {
            color: white;
        }
        
        .social-icons a {
            display: inline-block;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            margin-right: 10px;
            transition: all 0.3s;
        }
        
        .social-icons a:hover {
            background-color: var(--accent-color);
            transform: translateY(-3px);
        }
        
        .page-content {
            display: none;
        }
        
        .page-content.active {
            display: block;
            animation: fadeIn 0.5s;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        .badge-discount {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #e53935;
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            z-index: 1;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#" onclick="showPage('home')">
                <i class="fas fa-couch me-2"></i>MobiliArt
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" onclick="showPage('home')">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showPage('products')">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showPage('about')">Sobre Nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showPage('contact')">Contato</a>
                    </li>
                </ul>
                <div class="ms-3 d-flex">
                    <a href="#" class="btn btn-outline-light me-2" onclick="showPage('cart')">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <a href="#" class="btn btn-light" onclick="showPage('login')">
                        <i class="fas fa-user"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Home Page -->
    <div id="home" class="page-content active">
        <!-- Hero Section -->
        <section class="hero-section text-center">
            <div class="container">
                <h1 class="display-4 fw-bold mb-4">Móveis que transformam seu lar</h1>
                <p class="lead mb-5">Design exclusivo, qualidade premium e conforto incomparável</p>
                <a href="#" class="btn btn-primary btn-lg px-4 me-2" onclick="showPage('products')">Ver Produtos</a>
                <a href="#" class="btn btn-outline-light btn-lg px-4" onclick="showPage('about')">Sobre Nós</a>
            </div>
        </section>

        <!-- Featured Products -->
        <section class="container mb-5">
            <h2 class="section-title">Destaques</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <span class="badge-discount">-20%</span>
                        <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" class="card-img-top" alt="Sofá Moderno">
                        <div class="card-body">
                            <h5 class="card-title">Sofá Moderno em Couro</h5>
                            <p class="card-text">Sofá de 3 lugares em couro sintético de alta qualidade.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">R$ 2.499,00</span>
                                <a href="#" class="btn btn-primary">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1567538096630-e0c55bd6374c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" class="card-img-top" alt="Mesa de Jantar">
                        <div class="card-body">
                            <h5 class="card-title">Mesa de Jantar em Madeira Maciça</h5>
                            <p class="card-text">Mesa para 6 pessoas com tampo em madeira de demolição.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">R$ 3.199,00</span>
                                <a href="#" class="btn btn-primary">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <span class="badge-discount">-15%</span>
                        <img src="https://images.unsplash.com/photo-1598300042247-d088f8ab3a91?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=735&q=80" class="card-img-top" alt="Cama Queen Size">
                        <div class="card-body">
                            <h5 class="card-title">Cama Queen Size com Cabeceira</h5>
                            <p class="card-text">Cama em madeira maciça com cabeceira estofada.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">R$ 1.899,00</span>
                                <a href="#" class="btn btn-primary">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Categories -->
        <section class="container mb-5">
            <h2 class="section-title">Categorias</h2>
            <div class="row g-4">
                <div class="col-md-3 col-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-couch fa-3x mb-3" style="color: var(--primary-color);"></i>
                        <h5>Sofás e Poltronas</h5>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-bed fa-3x mb-3" style="color: var(--primary-color);"></i>
                        <h5>Dormitório</h5>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-utensils fa-3x mb-3" style="color: var(--primary-color);"></i>
                        <h5>Jantar</h5>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="card text-center p-4">
                        <i class="fas fa-chair fa-3x mb-3" style="color: var(--primary-color);"></i>
                        <h5>Escritório</h5>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Products Page -->
    <div id="products" class="page-content">
        <section class="container py-5">
            <h2 class="section-title">Nossos Produtos</h2>
            
            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Pesquisar produtos...">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
                <div class="col-md-6">
                    <select class="form-select">
                        <option selected>Ordenar por</option>
                        <option>Menor preço</option>
                        <option>Maior preço</option>
                        <option>Mais vendidos</option>
                        <option>Novidades</option>
                    </select>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-3 col-md-4 col-6 mb-4">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1556228453-efd6c1ff04f6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" class="card-img-top" alt="Sofá Retrátil">
                        <div class="card-body">
                            <h5 class="card-title">Sofá Retrátil</h5>
                            <p class="card-text">Sofá 3 lugares que vira cama, tecido antimanchas.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">R$ 2.799,00</span>
                                <a href="#" class="btn btn-primary">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-4">
                    <div class="card">
                        <span class="badge-discount">-25%</span>
                        <img src="https://media.istockphoto.com/id/1424803291/pt/foto/close-up-view-of-reclining-chair-in-living-room.webp?a=1&b=1&s=612x612&w=0&k=20&c=Mvr-MoG-eTvNtDG7UaQMfHx4EZ2ngEVqPEtarE5rSOo=" class="card-img-top" alt="Poltrona Reclinável">
                        <div class="card-body">
                            <h5 class="card-title">Poltrona Reclinável</h5>
                            <p class="card-text">Poltrona reclinável com apoio para pernas e massageador.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">R$ 1.599,00</span>
                                <a href="#" class="btn btn-primary">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-4">
                    <div class="card">
                        <img src="https://plus.unsplash.com/premium_photo-1683141392308-aaa39d916686?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8UmFjayUyMHBhcmElMjB0dnxlbnwwfHwwfHx8MA%3D%3D" class="card-img-top" alt="Rack para TV">
                        <div class="card-body">
                            <h5 class="card-title">Rack para TV 65"</h5>
                            <p class="card-text">Rack em MDF com 3 gavetas e porta fechado.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">R$ 899,00</span>
                                <a href="#" class="btn btn-primary">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-4">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1592078615290-033ee584e267?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80" class="card-img-top" alt="Cômoda 6 Gavetas">
                        <div class="card-body">
                            <h5 class="card-title">Cômoda 6 Gavetas</h5>
                            <p class="card-text">Cômoda em MDF com puxadores em metal nobre.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">R$ 1.299,00</span>
                                <a href="#" class="btn btn-primary">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-4">
                    <div class="card">
                        <span class="badge-discount">-10%</span>
                        <img src="https://images.unsplash.com/photo-1600585152220-90363fe7e115?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" class="card-img-top" alt="Mesa de Escritório">
                        <div class="card-body">
                            <h5 class="card-title">Mesa de Escritório</h5>
                            <p class="card-text">Mesa retangular com estrutura em metal e tampo em MDF.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">R$ 799,00</span>
                                <a href="#" class="btn btn-primary">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-4">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1598300042247-d088f8ab3a91?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=735&q=80" class="card-img-top" alt="Cama King Size">
                        <div class="card-body">
                            <h5 class="card-title">Cama King Size</h5>
                            <p class="card-text">Cama em madeira maciça com cabeceira estofada.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">R$ 2.499,00</span>
                                <a href="#" class="btn btn-primary">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-4">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=658&q=80" class="card-img-top" alt="Armário 3 Portas">
                        <div class="card-body">
                            <h5 class="card-title">Armário 3 Portas</h5>
                            <p class="card-text">Armário em MDF com espelho e gavetas internas.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">R$ 1.899,00</span>
                                <a href="#" class="btn btn-primary">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mb-4">
                    <div class="card">
                        <span class="badge-discount">-30%</span>
                        <img src="https://images.unsplash.com/photo-1567538096630-e0c55bd6374c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" class="card-img-top" alt="Mesa de Centro">
                        <div class="card-body">
                            <h5 class="card-title">Mesa de Centro</h5>
                            <p class="card-text">Mesa em madeira maciça com detalhes em metal.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">R$ 599,00</span>
                                <a href="#" class="btn btn-primary">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Anterior</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Próxima</a>
                    </li>
                </ul>
            </nav>
        </section>
    </div>

    <!-- About Page -->
    <div id="about" class="page-content">
        <section class="about-section">
            <div class="container py-5">
                <h2 class="section-title text-center">Sobre Nós</h2>
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4">
                        <img src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" class="img-fluid rounded" alt="Nossa Loja">
                    </div>
                    <div class="col-lg-6 mb-4">
                        <h3 class="mb-4">Nossa História</h3>
                        <p>Fundada em 1995, a MobiliArt começou como uma pequena marcenaria familiar e hoje é referência em móveis de qualidade no Brasil. Nossa missão é transformar lares com peças que unem design, funcionalidade e durabilidade.</p>
                        <p>Com mais de 25 anos de experiência, temos orgulho de oferecer produtos que são verdadeiras obras de arte funcionais, feitos com materiais selecionados e mão de obra especializada.</p>
                        <a href="#" class="btn btn-primary mt-3" onclick="showPage('contact')">Fale Conosco</a>
                    </div>
                </div>
                
                <div class="row mt-5">
                    <div class="col-md-4 mb-4">
                        <div class="text-center p-4">
                            <i class="fas fa-medal fa-3x mb-3" style="color: var(--primary-color);"></i>
                            <h4>Qualidade Garantida</h4>
                            <p>Todos nossos produtos passam por rigorosos controles de qualidade e têm garantia de 2 anos.</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="text-center p-4">
                            <i class="fas fa-truck fa-3x mb-3" style="color: var(--primary-color);"></i>
                            <h4>Entrega Rápida</h4>
                            <p>Entregamos em todo o Brasil em até 15 dias úteis para produtos em estoque.</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="text-center p-4">
                            <i class="fas fa-headset fa-3x mb-3" style="color: var(--primary-color);"></i>
                            <h4>Atendimento Personalizado</h4>
                            <p>Nossa equipe está pronta para te ajudar a encontrar o móvel perfeito para seu espaço.</p>
                        </div>
                    </div>
                </div>
                
                <h3 class="section-title mt-5">Depoimentos</h3>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="testimonial-card text-center">
                            <img src="https://randomuser.me/api/portraits/women/32.jpg" class="testimonial-img" alt="Cliente">
                            <h5>Ana Carolina</h5>
                            <p class="text-muted">São Paulo</p>
                            <p>"Comprei um sofá há 3 anos e ainda está como novo. A qualidade é impressionante!"</p>
                            <div class="text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="testimonial-card text-center">
                            <img src="https://randomuser.me/api/portraits/men/75.jpg" class="testimonial-img" alt="Cliente">
                            <h5>Ricardo Almeida</h5>
                            <p class="text-muted">Rio de Janeiro</p>
                            <p>"Atendimento excelente e os móveis chegaram antes do prazo. Recomendo!"</p>
                            <div class="text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="testimonial-card text-center">
                            <img src="https://randomuser.me/api/portraits/women/68.jpg" class="testimonial-img" alt="Cliente">
                            <h5>Fernanda Silva</h5>
                            <p class="text-muted">Belo Horizonte</p>
                            <p>"Móveis lindos e duráveis. Vale cada centavo investido. Já comprei várias vezes."</p>
                            <div class="text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Contact Page -->
    <div id="contact" class="page-content">
        <section class="contact-section">
            <div class="container py-5">
                <h2 class="section-title text-center">Contato</h2>
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <div class="card p-4">
                            <h3 class="mb-4">Envie sua mensagem</h3>
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
                                    <label for="phone" class="form-label">Telefone</label>
                                    <input type="tel" class="form-control" id="phone">
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Mensagem</label>
                                    <textarea class="form-control" id="message" rows="5" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="card p-4 h-100">
                            <h3 class="mb-4">Informações de Contato</h3>
                            <div class="mb-4">
                                <h5><i class="fas fa-map-marker-alt me-2" style="color: var(--primary-color);"></i> Endereço</h5>
                                <p>Av. Paulista, 1000 - São Paulo/SP</p>
                            </div>
                            <div class="mb-4">
                                <h5><i class="fas fa-phone-alt me-2" style="color: var(--primary-color);"></i> Telefone</h5>
                                <p>(11) 1234-5678</p>
                            </div>
                            <div class="mb-4">
                                <h5><i class="fas fa-envelope me-2" style="color: var(--primary-color);"></i> Email</h5>
                                <p>contato@mobiliart.com.br</p>
                            </div>
                            <div class="mb-4">
                                <h5><i class="fas fa-clock me-2" style="color: var(--primary-color);"></i> Horário de Funcionamento</h5>
                                <p>Segunda a Sexta: 9h às 18h<br>Sábado: 9h às 13h</p>
                            </div>
                            <div>
                                <h5 class="mb-3">Siga-nos</h5>
                                <div class="social-icons">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card mt-4">
                    <div class="card-body p-0">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.1973534215626!2d-46.65867598447592!3d-23.561349184682894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59ceb1eb771f%3A0xe904f6a669744da1!2sAv.%20Paulista%2C%201000%20-%20Bela%20Vista%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2001310-100!5e0!3m2!1spt-BR!2sbr!4v1623261157713!5m2!1spt-BR!2sbr" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Cart Page -->
    <div id="cart" class="page-content">
        <section class="container py-5">
            <h2 class="section-title">Meu Carrinho</h2>
            <div class="row">
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Produto</th>
                                            <th>Preço</th>
                                            <th>Quantidade</th>
                                            <th>Total</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" class="rounded me-3" width="60" height="60">
                                                    <div>
                                                        <h6 class="mb-0">Sofá Moderno em Couro</h6>
                                                        <small class="text-muted">Código: SOF123</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>R$ 2.499,00</td>
                                            <td>
                                                <div class="input-group" style="width: 120px;">
                                                    <button class="btn btn-outline-secondary" type="button">-</button>
                                                    <input type="text" class="form-control text-center" value="1">
                                                    <button class="btn btn-outline-secondary" type="button">+</button>
                                                </div>
                                            </td>
                                            <td>R$ 2.499,00</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="https://images.unsplash.com/photo-1567538096630-e0c55bd6374c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" class="rounded me-3" width="60" height="60">
                                                    <div>
                                                        <h6 class="mb-0">Mesa de Jantar</h6>
                                                        <small class="text-muted">Código: MES456</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>R$ 3.199,00</td>
                                            <td>
                                                <div class="input-group" style="width: 120px;">
                                                    <button class="btn btn-outline-secondary" type="button">-</button>
                                                    <input type="text" class="form-control text-center" value="1">
                                                    <button class="btn btn-outline-secondary" type="button">+</button>
                                                </div>
                                            </td>
                                            <td>R$ 3.199,00</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Cupom de Desconto</h5>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Digite seu cupom">
                                <button class="btn btn-primary" type="button">Aplicar</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="d-flex justify-content-between">
                        <a href="#" class="btn btn-outline-primary" onclick="showPage('products')">
                            <i class="fas fa-arrow-left me-2"></i>Continuar Comprando
                        </a>
                        <button class="btn btn-outline-danger">
                            <i class="fas fa-trash me-2"></i>Limpar Carrinho
                        </button>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Resumo do Pedido</h5>
                            <ul class="list-group list-group-flush mb-3">
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Subtotal</span>
                                    <span>R$ 5.698,00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Frete</span>
                                    <span>R$ 120,00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Desconto</span>
                                    <span>- R$ 0,00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between fw-bold">
                                    <span>Total</span>
                                    <span>R$ 5.818,00</span>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-primary w-100">Finalizar Compra</a>
                        </div>
                    </div>
                    
                    <div class="card mt-4">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Formas de Pagamento</h5>
                            <div class="d-flex flex-wrap">
                                <img src="https://via.placeholder.com/40" class="me-2 mb-2" alt="Visa">
                                <img src="https://via.placeholder.com/40" class="me-2 mb-2" alt="Mastercard">
                                <img src="https://via.placeholder.com/40" class="me-2 mb-2" alt="American Express">
                                <img src="https://via.placeholder.com/40" class="me-2 mb-2" alt="Elo">
                                <img src="https://via.placeholder.com/40" class="me-2 mb-2" alt="Boleto">
                                <img src="https://via.placeholder.com/40" class="me-2 mb-2" alt="Pix">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Login Page -->
    <div id="login" class="page-content">
        <section class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="card">
                        <div class="card-body p-5">
                            <h2 class="text-center mb-4">Login</h2>
                            <form>
                                <div class="mb-3">
                                    <label for="loginEmail" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="loginEmail" required>
                                </div>
                                <div class="mb-3">
                                    <label for="loginPassword" class="form-label">Senha</label>
                                    <input type="password" class="form-control" id="loginPassword" required>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="rememberMe">
                                    <label class="form-check-label" for="rememberMe">Lembrar-me</label>
                                </div>
                                <button type="submit" class="btn btn-primary w-100 mb-3">Entrar</button>
                                <div class="text-center">
                                    <a href="#">Esqueceu sua senha?</a>
                                </div>
                            </form>
                            <hr class="my-4">
                            <p class="text-center mb-3">Ainda não tem uma conta?</p>
                            <a href="#" class="btn btn-outline-primary w-100">Criar Conta</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5><i class="fas fa-couch me-2"></i>MobiliArt</h5>
                    <p>Transformando casas em lares desde 1995. Móveis de qualidade com design exclusivo.</p>
                    <div class="social-icons mt-3">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Links Rápidos</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" onclick="showPage('home')">Home</a></li>
                        <li class="mb-2"><a href="#" onclick="showPage('products')">Produtos</a></li>
                        <li class="mb-2"><a href="#" onclick="showPage('about')">Sobre Nós</a></li>
                        <li class="mb-2"><a href="#" onclick="showPage('contact')">Contato</a></li>
                        <li class="mb-2"><a href="#" onclick="showPage('login')">Minha Conta</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Categorias</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#">Sofás e Poltronas</a></li>
                        <li class="mb-2"><a href="#">Dormitório</a></li>
                        <li class="mb-2"><a href="#">Jantar</a></li>
                        <li class="mb-2"><a href="#">Escritório</a></li>
                        <li class="mb-2"><a href="#">Decoração</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Newsletter</h5>
                    <p>Assine nossa newsletter para receber promoções e novidades.</p>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Seu email">
                        <button class="btn btn-primary" type="button">Assinar</button>
                    </div>
                </div>
            </div>
            <hr class="mt-0 mb-4" style="border-color: rgba(255,255,255,0.1);">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; 2023 MobiliArt. Todos os direitos reservados.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">
                        <a href="#" class="me-3">Termos de Uso</a>
                        <a href="#">Política de Privacidade</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // SPA Navigation
        function showPage(pageId) {
            // Hide all pages
            document.querySelectorAll('.page-content').forEach(page => {
                page.classList.remove('active');
            });
            
            // Show selected page
            document.getElementById(pageId).classList.add('active');
            
            // Update active nav link
            document.querySelectorAll('.nav-link').forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('onclick') === `showPage('${pageId}')`) {
                    link.classList.add('active');
                }
            });
            
            // Scroll to top
            window.scrollTo(0, 0);
            
            // Prevent default anchor behavior
            return false;
        }
        
        // Initialize - show home page
        document.addEventListener('DOMContentLoaded', function() {
            showPage('home');
        });
    </script>
</body>
</html>