@extends('layout')

@section('title', 'MarketPrime - Supermercado Digital')

@push('estilos')
    <style>
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3f37c9;
            --accent-color: #4cc9f0;
            --dark-color: #1a1a2e;
            --light-color: #f8f9fa;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--light-color);
            min-height: 100vh;
            color: var(--dark-color);
        }

        .navbar {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)) !important;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.8rem;
            letter-spacing: 1px;
        }

        .nav-link {
            color: white !important;
            transition: all 0.3s ease;
            font-weight: 500;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            margin: 0 0.2rem;
        }

        .nav-link:hover, .nav-link.active {
            background-color: rgba(255,255,255,0.2);
            transform: translateY(-2px);
        }

        .nav-link i {
            margin-right: 8px;
        }

        .section-title {
            color: var(--primary-color);
            position: relative;
            padding-bottom: 15px;
            margin-bottom: 30px;
            font-weight: 700;
        }

        .section-title:after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 60px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
            border-radius: 2px;
        }

        .product-card {
            transition: all 0.3s ease;
            border: none;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            margin-bottom: 20px;
            background-color: white;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }

        .product-img-container {
            height: 200px;
            overflow: hidden;
            position: relative;
        }

        .product-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .product-card:hover .product-img {
            transform: scale(1.05);
        }

        .product-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: var(--accent-color);
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: bold;
        }

        .product-price {
            color: var(--primary-color);
            font-weight: 700;
            font-size: 1.2rem;
        }

        .product-old-price {
            text-decoration: line-through;
            color: #999;
            font-size: 0.9rem;
        }

        .btn-market {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            border: none;
            border-radius: 30px;
            padding: 10px 20px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(67, 97, 238, 0.3);
        }

        .btn-market:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(67, 97, 238, 0.4);
            color: white;
        }

        .btn-market-outline {
            background: transparent;
            color: var(--primary-color);
            border: 2px solid var(--primary-color);
        }

        .btn-market-outline:hover {
            background: var(--primary-color);
            color: white;
        }

        .active-section {
            display: block !important;
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1606787366850-de6330128bfc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
            border-radius: 15px;
            margin-bottom: 50px;
        }

        .hero-title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .hero-subtitle {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .category-card {
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            margin-bottom: 20px;
            position: relative;
            height: 150px;
        }

        .category-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .category-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);
            display: flex;
            align-items: flex-end;
            padding: 15px;
            color: white;
        }

        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        .cart-item {
            background: white;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 15px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }

        .cart-item:hover {
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .cart-item-img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 8px;
        }

        .quantity-control {
            display: flex;
            align-items: center;
        }

        .quantity-btn {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: var(--light-color);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .quantity-btn:hover {
            background-color: var(--primary-color);
            color: white;
        }

        .quantity-input {
            width: 40px;
            text-align: center;
            border: none;
            background-color: transparent;
            font-weight: bold;
        }

        .cart-summary {
            background: white;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            z-index: 1;
        }

        .feature-card {
            background: white;
            border-radius: 12px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            height: 100%;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }

        .feature-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 20px;
        }

        .search-bar {
            position: relative;
            margin-bottom: 30px;
        }

        .search-input {
            border-radius: 30px;
            padding: 15px 20px;
            border: 2px solid #eee;
            width: 100%;
            transition: all 0.3s ease;
            padding-right: 50px;
        }

        .search-input:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(67, 97, 238, 0.25);
        }

        .search-btn {
            position: absolute;
            right: 5px;
            top: 5px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .footer {
            background: var(--dark-color);
            color: white;
            padding: 50px 0 20px;
            margin-top: 50px;
        }

        .footer-title {
            font-weight: 700;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 15px;
        }

        .footer-title:after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 40px;
            height: 3px;
            background: var(--accent-color);
        }

        .footer-links a {
            color: #ccc;
            display: block;
            margin-bottom: 10px;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .footer-links a:hover {
            color: white;
            transform: translateX(5px);
        }

        .social-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255,255,255,0.1);
            border-radius: 50%;
            margin-right: 10px;
            transition: all 0.3s ease;
        }

        .social-icon:hover {
            background-color: var(--accent-color);
            transform: translateY(-5px);
        }

        .toast-notification {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
            animation: slideIn 0.5s ease;
        }

        @keyframes slideIn {
            from { transform: translateX(100%); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        .loading-spinner {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0,0,0,0.5);
            z-index: 1001;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .spinner {
            width: 50px;
            height: 50px;
            border: 5px solid rgba(255,255,255,0.3);
            border-radius: 50%;
            border-top-color: var(--accent-color);
            animation: spin 1s ease-in-out infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        .filter-section {
            background: white;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            margin-bottom: 30px;
        }

        .filter-title {
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--primary-color);
        }

        .form-check-label {
            cursor: pointer;
        }

        .form-check-input:checked {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
    </style>
@endpush

@section('content')
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#home">MarketPrime</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#produtos"><i class="fas fa-shopping-basket"></i> Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#categorias"><i class="fas fa-tags"></i> Categorias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#ofertas"><i class="fas fa-percentage"></i> Ofertas</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#carrinho"><i class="fas fa-shopping-cart"></i> Carrinho <span class="badge bg-danger cart-count">0</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#conta"><i class="fas fa-user"></i> Minha Conta</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Loading Spinner -->
    <div class="loading-spinner d-none">
        <div class="spinner"></div>
    </div>

    <!-- Toast Notification -->
    <div class="toast-notification toast align-items-center text-white bg-success border-0 d-none" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body"></div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>

    <!-- Seções -->
    <div class="container my-5">
        <!-- Home -->
        <section id="home" class="active-section">
            <div class="hero-section text-center">
                <div class="container">
                    <h1 class="hero-title">MarketPrime</h1>
                    <p class="hero-subtitle">Seu supermercado digital com os melhores preços e entregas rápidas</p>
                    <a class="btn btn-market btn-lg" href="#produtos"><i class="fas fa-shopping-basket"></i> Comprar Agora</a>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-md-4 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-truck"></i>
                        </div>
                        <h3>Entrega Rápida</h3>
                        <p>Receba seus produtos em até 2 horas na região metropolitana</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-percentage"></i>
                        </div>
                        <h3>Melhores Ofertas</h3>
                        <p>Descontos exclusivos e promoções diárias para você economizar</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3>Compra Segura</h3>
                        <p>Pagamentos criptografados e garantia de satisfação</p>
                    </div>
                </div>
            </div>

            <h2 class="section-title">Produtos em Destaque</h2>
            <div class="row row-cols-1 row-cols-md-4 g-4 featured-products">
                <!-- Produtos serão carregados via JavaScript -->
            </div>
        </section>

        <!-- Produtos -->
        <section id="produtos" class="d-none">
            <div class="row">
                <div class="col-md-3">
                    <div class="filter-section">
                        <h5 class="filter-title">Categorias</h5>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="hortifruti" id="filter-hortifruti" checked>
                            <label class="form-check-label" for="filter-hortifruti">
                                Hortifrúti
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="bebidas" id="filter-bebidas" checked>
                            <label class="form-check-label" for="filter-bebidas">
                                Bebidas
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="mercearia" id="filter-mercearia" checked>
                            <label class="form-check-label" for="filter-mercearia">
                                Mercearia
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="limpeza" id="filter-limpeza" checked>
                            <label class="form-check-label" for="filter-limpeza">
                                Limpeza
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="carnes" id="filter-carnes" checked>
                            <label class="form-check-label" for="filter-carnes">
                                Carnes
                            </label>
                        </div>
                    </div>

                    <div class="filter-section mt-3">
                        <h5 class="filter-title">Preço</h5>
                        <div class="range-slider">
                            <input type="range" class="form-range" min="0" max="100" step="5" id="priceRange">
                            <div class="d-flex justify-content-between">
                                <span>R$ 0</span>
                                <span>R$ 100+</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="search-bar">
                        <input type="text" class="form-control search-input" placeholder="Pesquisar produtos...">
                        <button class="search-btn"><i class="fas fa-search"></i></button>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h2 class="section-title mb-0">Todos os Produtos</h2>
                        <div class="dropdown">
                            <button class="btn btn-market-outline dropdown-toggle" type="button" id="sortDropdown" data-bs-toggle="dropdown">
                                Ordenar por: Relevância
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item sort-option" href="#" data-sort="relevance">Relevância</a></li>
                                <li><a class="dropdown-item sort-option" href="#" data-sort="price-asc">Preço: Menor para Maior</a></li>
                                <li><a class="dropdown-item sort-option" href="#" data-sort="price-desc">Preço: Maior para Menor</a></li>
                                <li><a class="dropdown-item sort-option" href="#" data-sort="name-asc">Nome: A-Z</a></li>
                                <li><a class="dropdown-item sort-option" href="#" data-sort="name-desc">Nome: Z-A</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="row row-cols-1 row-cols-md-3 g-4 products-container">
                        <!-- Produtos serão carregados via JavaScript -->
                    </div>

                    <nav aria-label="Page navigation" class="mt-5">
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
                </div>
            </div>
        </section>

        <!-- Categorias -->
        <section id="categorias" class="d-none">
            <h2 class="section-title">Nossas Categorias</h2>
            <div class="row row-cols-2 row-cols-md-4 g-4">
                <div class="col">
                    <div class="category-card">
                        <img src="https://images.unsplash.com/photo-1542838132-92c53300491e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" alt="Mercearia">
                        <div class="category-overlay">
                            <h5>Mercearia</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="category-card">
                        <img src="https://images.unsplash.com/photo-1603569283847-aa295f0d016a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Hortifrúti">
                        <div class="category-overlay">
                            <h5>Hortifrúti</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="category-card">
                        <img src="https://images.unsplash.com/photo-1601050690597-df0568f70950?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Bebidas">
                        <div class="category-overlay">
                            <h5>Bebidas</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="category-card">
                        <img src="https://images.unsplash.com/photo-1606787366850-de6330128bfc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Carnes">
                        <div class="category-overlay">
                            <h5>Carnes</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="category-card">
                        <img src="https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1130&q=80" alt="Padaria">
                        <div class="category-overlay">
                            <h5>Padaria</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="category-card">
                        <img src="https://images.unsplash.com/photo-1581495307358-3e8c55942678?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Limpeza">
                        <div class="category-overlay">
                            <h5>Limpeza</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="category-card">
                        <img src="https://images.unsplash.com/photo-1550583724-b2692b85b150?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" alt="Congelados">
                        <div class="category-overlay">
                            <h5>Congelados</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="category-card">
                        <img src="https://images.unsplash.com/photo-1578916171728-46686eac8b58?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" alt="Utilidades">
                        <div class="category-overlay">
                            <h5>Utilidades</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Ofertas -->
        <section id="ofertas" class="d-none">
            <h2 class="section-title">Ofertas Especiais</h2>
            <div class="row row-cols-1 row-cols-md-4 g-4 offers-container">
                <!-- Ofertas serão carregadas via JavaScript -->
            </div>
        </section>

        <!-- Carrinho -->
        <section id="carrinho" class="d-none">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="section-title">Seu Carrinho</h2>
                    <div class="cart-items-container">
                        <!-- Itens do carrinho serão carregados via JavaScript -->
                        <div class="text-center py-5 empty-cart-message">
                            <i class="fas fa-shopping-cart fa-4x mb-3 text-muted"></i>
                            <h4>Seu carrinho está vazio</h4>
                            <p>Adicione produtos para continuar</p>
                            <a href="#produtos" class="btn btn-market">Ver Produtos</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cart-summary sticky-top" style="top: 20px;">
                        <h4 class="mb-4">Resumo do Pedido</h4>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Subtotal:</span>
                            <span class="cart-subtotal">R$ 0,00</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Entrega:</span>
                            <span class="cart-delivery">Grátis</span>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <span>Desconto:</span>
                            <span class="cart-discount">- R$ 0,00</span>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between mb-4">
                            <h5>Total:</h5>
                            <h5 class="cart-total">R$ 0,00</h5>
                        </div>
                        <button class="btn btn-market w-100 btn-checkout" disabled>Finalizar Compra</button>
                        <div class="mt-3">
                            <p class="text-muted small">* Frete grátis para compras acima de R$ 100,00</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Conta -->
        <section id="conta" class="d-none">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="https://ui-avatars.com/api/?name=Usuario+Market&background=4361ee&color=fff&size=100" alt="Usuário" class="rounded-circle mb-3">
                            <h4>Usuário Market</h4>
                            <p class="text-muted">Cliente desde 2023</p>
                        </div>
                    </div>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active"><i class="fas fa-user me-2"></i> Meus Dados</a>
                        <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-box me-2"></i> Meus Pedidos</a>
                        <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-map-marker-alt me-2"></i> Endereços</a>
                        <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-credit-card me-2"></i> Pagamentos</a>
                        <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-heart me-2"></i> Favoritos</a>
                    </div>
                </div>
                <div class="col-md-8">
                    <h2 class="section-title">Meus Dados</h2>
                    <form>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Nome</label>
                                <input type="text" class="form-control" value="Usuário Market">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Sobrenome</label>
                                <input type="text" class="form-control" value="Prime">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" value="usuario@marketprime.com">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Telefone</label>
                            <input type="tel" class="form-control" value="(11) 99999-9999">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">CPF</label>
                            <input type="text" class="form-control" value="123.456.789-00">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Data de Nascimento</label>
                            <input type="date" class="form-control" value="1990-01-01">
                        </div>
                        <button type="submit" class="btn btn-market">Salvar Alterações</button>
                    </form>

                    <h2 class="section-title mt-5">Alterar Senha</h2>
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Senha Atual</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nova Senha</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Confirmar Nova Senha</label>
                            <input type="password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-market">Alterar Senha</button>
                    </form>
                </div>
            </div>
        </section>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h4 class="footer-title">MarketPrime</h4>
                    <p>O melhor supermercado digital com os melhores preços e entregas rápidas na sua região.</p>
                    <div class="mt-3">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-md-2 mb-4">
                    <h4 class="footer-title">Links</h4>
                    <div class="footer-links">
                        <a href="#home">Home</a>
                        <a href="#produtos">Produtos</a>
                        <a href="#ofertas">Ofertas</a>
                        <a href="#categorias">Categorias</a>
                        <a href="#carrinho">Carrinho</a>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <h4 class="footer-title">Ajuda</h4>
                    <div class="footer-links">
                        <a href="#">FAQ</a>
                        <a href="#">Entregas</a>
                        <a href="#">Pagamentos</a>
                        <a href="#">Trocas e Devoluções</a>
                        <a href="#">Contato</a>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <h4 class="footer-title">Contato</h4>
                    <div class="footer-links">
                        <p><i class="fas fa-map-marker-alt me-2"></i> Av. Paulista, 1000 - São Paulo, SP</p>
                        <p><i class="fas fa-phone me-2"></i> (11) 4002-8922</p>
                        <p><i class="fas fa-envelope me-2"></i> contato@marketprime.com</p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-0">&copy; 2024 MarketPrime. Todos os direitos reservados.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <img src="https://via.placeholder.com/200x30?text=Payment+Methods" alt="Formas de Pagamento" class="img-fluid">
                </div>
            </div>
        </div>
    </footer>
@endsection

@push('scripts')
    <script>
        // Dados dos produtos
        const products = [
            { id: 1, name: "Arroz Integral", category: "mercearia", price: 12.90, oldPrice: 15.90, image: "https://images.unsplash.com/photo-1598346762291-aee88549193f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80", offer: false },
            { id: 2, name: "Feijão Carioca", category: "mercearia", price: 8.50, oldPrice: 9.90, image: "https://images.unsplash.com/photo-1601050690597-df0568f70950?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80", offer: false },
            { id: 3, name: "Azeite de Oliva", category: "mercearia", price: 29.90, oldPrice: 34.90, image: "https://media.istockphoto.com/id/1206682746/pt/foto/pouring-extra-virgin-olive-oil-in-a-glass-bowl.webp?a=1&b=1&s=612x612&w=0&k=20&c=-XqNh1AvA-I5MF47VVkoPiTjLugps9e3KoomMHUReuw=", offer: true },
            { id: 4, name: "Leite Integral", category: "bebidas", price: 4.20, oldPrice: 4.80, image: "https://images.unsplash.com/photo-1550583724-b2692b85b150?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80", offer: false },
            { id: 5, name: "Café em Grãos", category: "mercearia", price: 18.90, oldPrice: 22.50, image: "https://images.unsplash.com/photo-1511920170033-f8396924c348?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80", offer: true },
            { id: 6, name: "Banana Prata", category: "hortifruti", price: 3.90, oldPrice: 4.50, image: "https://images.unsplash.com/photo-1571771894821-ce9b6c11b08e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=880&q=80", offer: false },
            { id: 7, name: "Maçã Fuji", category: "hortifruti", price: 7.90, oldPrice: 9.20, image: "https://images.unsplash.com/photo-1568702846914-96b305d2aaeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80", offer: false },
            { id: 8, name: "Sabão em Pó", category: "limpeza", price: 15.90, oldPrice: 18.90, image: "https://media.istockphoto.com/id/1413851648/pt/foto/woman-adding-fabric-softener-or-detergent-to-a-washing-machine.webp?a=1&b=1&s=612x612&w=0&k=20&c=KrSBUimzvKBEmOmLbWSCSPtcFo51b4poSEYVdY6AJ3s=", offer: true },
            { id: 9, name: "Desinfetante", category: "limpeza", price: 6.50, oldPrice: 7.90, image: "https://images.unsplash.com/photo-1598300042247-d088f8ab3a91?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1130&q=80", offer: false },
            { id: 10, name: "Água Mineral", category: "bebidas", price: 2.90, oldPrice: 3.50, image: "https://images.unsplash.com/photo-1561047029-3000c68339ca?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80", offer: false },
            { id: 11, name: "Refrigerante", category: "bebidas", price: 7.50, oldPrice: 8.90, image: "https://images.unsplash.com/photo-1553456558-aff63285bdd1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80", offer: false },
            { id: 12, name: "Pão de Forma", category: "padaria", price: 9.90, oldPrice: 11.50, image: "https://images.unsplash.com/photo-1509440159596-0249088772ff?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1172&q=80", offer: true }
        ];

        // Carrinho de compras
        let cart = [];
        
        // Função para exibir produtos
        function displayProducts(productsToShow, container) {
            const containerElement = document.querySelector(container);
            containerElement.innerHTML = '';
            
            if (productsToShow.length === 0) {
                containerElement.innerHTML = '<div class="col-12 text-center py-5"><h4>Nenhum produto encontrado</h4><p>Tente ajustar seus filtros de busca</p></div>';
                return;
            }
            
            productsToShow.forEach(product => {
                const productCard = document.createElement('div');
                productCard.className = 'col';
                productCard.innerHTML = `
                    <div class="card product-card h-100">
                        <div class="product-img-container">
                            <img src="${product.image}" class="card-img-top product-img" alt="${product.name}">
                            ${product.offer ? '<div class="product-badge">OFERTA</div>' : ''}
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">${product.name}</h5>
                            <p class="card-text">${product.category.charAt(0).toUpperCase() + product.category.slice(1)}</p>
                            <div class="d-flex align-items-center mb-3">
                                <span class="product-price me-2">R$ ${product.price.toFixed(2)}</span>
                                ${product.oldPrice ? `<span class="product-old-price text-muted">R$ ${product.oldPrice.toFixed(2)}</span>` : ''}
                            </div>
                            <button class="btn btn-market w-100 btn-add-to-cart" data-id="${product.id}">
                                <i class="fas fa-cart-plus me-2"></i>Adicionar
                            </button>
                        </div>
                    </div>
                `;
                containerElement.appendChild(productCard);
            });
            
            // Adiciona event listeners aos botões
            document.querySelectorAll('.btn-add-to-cart').forEach(button => {
                button.addEventListener('click', addToCart);
            });
        }
        
        // Função para adicionar ao carrinho
        function addToCart(e) {
            const productId = parseInt(e.target.getAttribute('data-id'));
            const product = products.find(p => p.id === productId);
            
            // Verifica se o produto já está no carrinho
            const existingItem = cart.find(item => item.id === productId);
            
            if (existingItem) {
                existingItem.quantity += 1;
            } else {
                cart.push({
                    id: product.id,
                    name: product.name,
                    price: product.price,
                    image: product.image,
                    quantity: 1
                });
            }
            
            updateCart();
            showToast(`${product.name} adicionado ao carrinho`);
        }
        
        // Função para atualizar o carrinho
        function updateCart() {
            const cartItemsContainer = document.querySelector('.cart-items-container');
            const cartCount = document.querySelector('.cart-count');
            const cartSubtotal = document.querySelector('.cart-subtotal');
            const cartTotal = document.querySelector('.cart-total');
            const checkoutButton = document.querySelector('.btn-checkout');
            const emptyCartMessage = document.querySelector('.empty-cart-message');
            
            // Atualiza contador
            const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
            cartCount.textContent = totalItems;
            
            if (cart.length === 0) {
                cartItemsContainer.innerHTML = '';
                emptyCartMessage.classList.remove('d-none');
                checkoutButton.disabled = true;
                cartSubtotal.textContent = 'R$ 0,00';
                cartTotal.textContent = 'R$ 0,00';
                return;
            }
            
            emptyCartMessage.classList.add('d-none');
            checkoutButton.disabled = false;
            
            // Limpa o container
            cartItemsContainer.innerHTML = '';
            
            // Adiciona itens
            let subtotal = 0;
            
            cart.forEach(item => {
                const itemTotal = item.price * item.quantity;
                subtotal += itemTotal;
                
                const cartItem = document.createElement('div');
                cartItem.className = 'cart-item';
                cartItem.innerHTML = `
                    <div class="row align-items-center">
                        <div class="col-3 col-md-2">
                            <img src="${item.image}" class="cart-item-img" alt="${item.name}">
                        </div>
                        <div class="col-5 col-md-4">
                            <h6>${item.name}</h6>
                            <p class="mb-0">R$ ${item.price.toFixed(2)}</p>
                        </div>
                        <div class="col-2 col-md-3">
                            <div class="quantity-control">
                                <div class="quantity-btn btn-decrease" data-id="${item.id}">-</div>
                                <input type="text" class="quantity-input" value="${item.quantity}" readonly>
                                <div class="quantity-btn btn-increase" data-id="${item.id}">+</div>
                            </div>
                        </div>
                        <div class="col-2 col-md-2 text-end">
                            <p class="mb-0 fw-bold">R$ ${itemTotal.toFixed(2)}</p>
                        </div>
                        <div class="col-12 col-md-1 text-end mt-2 mt-md-0">
                            <button class="btn btn-sm btn-danger btn-remove" data-id="${item.id}">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                `;
                cartItemsContainer.appendChild(cartItem);
            });
            
            // Calcula totais
            const delivery = subtotal >= 100 ? 0 : 15;
            const discount = 0; // Poderia implementar cupons de desconto
            const total = subtotal + delivery - discount;
            
            // Atualiza totais
            cartSubtotal.textContent = `R$ ${subtotal.toFixed(2)}`;
            cartTotal.textContent = `R$ ${total.toFixed(2)}`;
            document.querySelector('.cart-delivery').textContent = delivery === 0 ? 'Grátis' : `R$ ${delivery.toFixed(2)}`;
            document.querySelector('.cart-discount').textContent = discount === 0 ? '- R$ 0,00' : `- R$ ${discount.toFixed(2)}`;
            
            // Adiciona event listeners
            document.querySelectorAll('.btn-increase').forEach(btn => {
                btn.addEventListener('click', increaseQuantity);
            });
            
            document.querySelectorAll('.btn-decrease').forEach(btn => {
                btn.addEventListener('click', decreaseQuantity);
            });
            
            document.querySelectorAll('.btn-remove').forEach(btn => {
                btn.addEventListener('click', removeFromCart);
            });
            
            checkoutButton.addEventListener('click', checkout);
        }
        
        // Funções para manipular quantidade
        function increaseQuantity(e) {
            const productId = parseInt(e.target.getAttribute('data-id'));
            const item = cart.find(item => item.id === productId);
            item.quantity += 1;
            updateCart();
        }
        
        function decreaseQuantity(e) {
            const productId = parseInt(e.target.getAttribute('data-id'));
            const item = cart.find(item => item.id === productId);
            
            if (item.quantity > 1) {
                item.quantity -= 1;
                updateCart();
            } else {
                removeFromCart(e);
            }
        }
        
        function removeFromCart(e) {
            const productId = parseInt(e.target.getAttribute('data-id'));
            cart = cart.filter(item => item.id !== productId);
            updateCart();
            showToast('Item removido do carrinho');
        }
        
        // Função para finalizar compra
        function checkout() {
            showLoading();
            
            // Simula um processamento
            setTimeout(() => {
                hideLoading();
                showToast('Compra finalizada com sucesso!', 'success');
                
                // Limpa o carrinho
                cart = [];
                updateCart();
                
                // Redireciona para home
                document.querySelector('.nav-link[href="#home"]').click();
            }, 2000);
        }
        
        // Função para mostrar toast
        function showToast(message, type = 'success') {
            const toast = document.querySelector('.toast-notification');
            const toastBody = toast.querySelector('.toast-body');
            
            toast.className = `toast-notification toast align-items-center text-white bg-${type} border-0`;
            toastBody.textContent = message;
            
            // Mostra o toast
            toast.classList.remove('d-none');
            
            // Esconde após 3 segundos
            setTimeout(() => {
                toast.classList.add('d-none');
            }, 3000);
        }
        
        // Funções para loading
        function showLoading() {
            document.querySelector('.loading-spinner').classList.remove('d-none');
        }
        
        function hideLoading() {
            document.querySelector('.loading-spinner').classList.add('d-none');
        }
        
        // Filtros e ordenação
        function filterAndSortProducts() {
            const searchTerm = document.querySelector('.search-input').value.toLowerCase();
            const activeCategories = Array.from(document.querySelectorAll('.form-check-input:checked')).map(cb => cb.value);
            const sortOption = document.querySelector('.dropdown-toggle').getAttribute('data-sort') || 'relevance';
            
            let filteredProducts = products.filter(product => {
                const matchesSearch = product.name.toLowerCase().includes(searchTerm);
                const matchesCategory = activeCategories.includes(product.category);
                return matchesSearch && matchesCategory;
            });
            
            // Ordenação
            switch (sortOption) {
                case 'price-asc':
                    filteredProducts.sort((a, b) => a.price - b.price);
                    break;
                case 'price-desc':
                    filteredProducts.sort((a, b) => b.price - a.price);
                    break;
                case 'name-asc':
                    filteredProducts.sort((a, b) => a.name.localeCompare(b.name));
                    break;
                case 'name-desc':
                    filteredProducts.sort((a, b) => b.name.localeCompare(a.name));
                    break;
                default:
                    // Relevância (mantém ordem original)
                    break;
            }
            
            return filteredProducts;
        }
        
        // Navegação entre seções
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                
                // Atualiza navbar
                document.querySelectorAll('.nav-link').forEach(navLink => {
                    navLink.classList.remove('active');
                });
                link.classList.add('active');
                
                // Esconde todas as seções
                document.querySelectorAll('section').forEach(section => {
                    section.classList.remove('active-section');
                    section.classList.add('d-none');
                });
                
                // Mostra a seção clicada
                const targetSection = document.querySelector(link.getAttribute('href'));
                targetSection.classList.remove('d-none');
                targetSection.classList.add('active-section');
                
                // Rolagem suave para o topo da seção
                window.scrollTo({
                    top: targetSection.offsetTop - 20,
                    behavior: 'smooth'
                });
                
                // Carrega conteúdo específico se necessário
                if (link.getAttribute('href') === '#produtos') {
                    const filteredProducts = filterAndSortProducts();
                    displayProducts(filteredProducts, '.products-container');
                } else if (link.getAttribute('href') === '#ofertas') {
                    const offers = products.filter(p => p.offer);
                    displayProducts(offers, '.offers-container');
                } else if (link.getAttribute('href') === '#home') {
                    const featuredProducts = products.slice(0, 4);
                    displayProducts(featuredProducts, '.featured-products');
                }
            });
        });
        
        // Event listeners para filtros
        document.querySelectorAll('.form-check-input').forEach(checkbox => {
            checkbox.addEventListener('change', () => {
                const filteredProducts = filterAndSortProducts();
                displayProducts(filteredProducts, '.products-container');
            });
        });
        
        document.querySelector('.search-input').addEventListener('input', () => {
            const filteredProducts = filterAndSortProducts();
            displayProducts(filteredProducts, '.products-container');
        });
        
        document.querySelectorAll('.sort-option').forEach(option => {
            option.addEventListener('click', (e) => {
                e.preventDefault();
                const sortOption = e.target.getAttribute('data-sort');
                const dropdownToggle = document.querySelector('#sortDropdown');
                
                dropdownToggle.textContent = `Ordenar por: ${e.target.textContent}`;
                dropdownToggle.setAttribute('data-sort', sortOption);
                
                const filteredProducts = filterAndSortProducts();
                displayProducts(filteredProducts, '.products-container');
            });
        });
        
        // Inicialização
        document.addEventListener('DOMContentLoaded', () => {
            // Carrega produtos em destaque na home
            const featuredProducts = products.slice(0, 4);
            displayProducts(featuredProducts, '.featured-products');
            
            // Carrega todos os produtos na página de produtos
            displayProducts(products, '.products-container');
            
            // Carrega ofertas
            const offers = products.filter(p => p.offer);
            displayProducts(offers, '.offers-container');
            
            // Atualiza carrinho
            updateCart();
        });
    </script>
@endpush
