@extends('layouts.app')

@section('title', 'MarketPrime - Supermercado Digital')

@push('estilosEcodigos')
    @vite(['resources/css/categorias/mercado.css', 'resources/js/categorias/mercado.js']);
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
                        <img src="https://plus.unsplash.com/premium_photo-1684952849219-5a0d76012ed2?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8YmViaWRhc3xlbnwwfHwwfHx8MA%3D%3D" alt="Bebidas">
                        <div class="category-overlay">
                            <h5>Bebidas</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="category-card">
                        <img src="https://images.unsplash.com/photo-1607623814075-e51df1bdc82f?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y2FybmVzfGVufDB8fDB8fHww" alt="Carnes">
                        <div class="category-overlay">
                            <h5>Carnes</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="category-card">
                        <img src="https://media.istockphoto.com/id/2042866626/pt/foto/french-bread-in-production-inside-the-bakery.webp?a=1&b=1&s=612x612&w=0&k=20&c=i1LfLAeO2-QJzDBsrlh78VBTwvhYZ4-4xit38kDxFmg=" alt="Padaria">
                        <div class="category-overlay">
                            <h5>Padaria</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="category-card">
                        <img src="https://media.istockphoto.com/id/2169450161/pt/foto/box-with-cleaning-products-on-the-kitchen-counter-at-home.webp?a=1&b=1&s=612x612&w=0&k=20&c=KDk4PHTLEzF-2ggfLx2RP9uaIn03jofQ5VQ2__PYXgE=" alt="Limpeza">
                        <div class="category-overlay">
                            <h5>Limpeza</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="category-card">
                        <img src="https://media.istockphoto.com/id/183405249/pt/foto/carne-de-vaca-congelada.webp?a=1&b=1&s=612x612&w=0&k=20&c=uJ7MrchkpWcyO87yjs9J7MJYoKXa3Iq71to2ItMTUk8=" alt="Congelados">
                        <div class="category-overlay">
                            <h5>Congelados</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="category-card">
                        <img src="https://images.unsplash.com/photo-1597484661643-2f5fef640dd1?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8ZmVycmFtZW50YXN8ZW58MHx8MHx8fDA%3D" alt="Utilidades">
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
            </div>
        </div>
    </footer>
@endsection