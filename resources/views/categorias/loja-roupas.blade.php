@extends('layouts.app')

@section('title', 'Fashion Boutique - Loja de Roupas')

@push('estilosEcodigos')
    @vite(['resources/css/categorias/loja-roupas.css', 'resources/js/categorias/loja-roupas.js'])
@endpush

@section('content')
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">Fashion Boutique</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#products">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Destaques</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials">Depoimentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contato</a>
                    </li>
                </ul>
                <div class="ms-lg-3 mt-3 mt-lg-0">
                    <a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-user"></i> Login</a>
                    <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i> Carrinho</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="hero-title">Coleção de Verão 2023</h1>
                    <p class="hero-subtitle">Descubra as últimas tendências da moda com nossa nova coleção de verão. Peças exclusivas e de alta qualidade para todos os estilos.</p>
                    <a href="#products" class="btn btn-primary me-2">Comprar Agora</a>
                    <a href="#" class="btn btn-outline-primary">Ver Coleção</a>
                </div>
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Coleção de Verão" class="img-fluid rounded-3 shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section class="py-5" id="products">
        <div class="container">
            <h2 class="text-center section-title">Nossos Produtos</h2>
            <div class="row">
                <!-- Product 1 -->
                <div class="col-md-6 col-lg-3">
                    <div class="product-card">
                        <div class="position-relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1542272604-787c3835535d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1026&q=80" class="product-img w-100" alt="Vestido Floral">
                            <span class="product-badge">Novo</span>
                        </div>
                        <div class="p-3">
                            <h5 class="product-title">Vestido Floral</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="product-price">R$ 189,90</span>
                                    <span class="old-price">R$ 229,90</span>
                                </div>
                                <button class="add-to-cart"><i class="fas fa-shopping-cart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Product 2 -->
                <div class="col-md-6 col-lg-3">
                    <div class="product-card">
                        <div class="position-relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1529374255404-311a2a4f1fd9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1259&q=80" class="product-img w-100" alt="Jaqueta Jeans">
                            <span class="product-badge">-20%</span>
                        </div>
                        <div class="p-3">
                            <h5 class="product-title">Jaqueta Jeans</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="product-price">R$ 159,90</span>
                                    <span class="old-price">R$ 199,90</span>
                                </div>
                                <button class="add-to-cart"><i class="fas fa-shopping-cart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Product 3 -->
                <div class="col-md-6 col-lg-3">
                    <div class="product-card">
                        <div class="position-relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1520367445093-50dc08a59d9d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80" class="product-img w-100" alt="Camiseta Básica">
                        </div>
                        <div class="p-3">
                            <h5 class="product-title">Camiseta Básica</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="product-price">R$ 49,90</span>
                                </div>
                                <button class="add-to-cart"><i class="fas fa-shopping-cart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Product 4 -->
                <div class="col-md-6 col-lg-3">
                    <div class="product-card">
                        <div class="position-relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1591047139829-d91aecb6caea?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=736&q=80" class="product-img w-100" alt="Calça Skinny">
                            <span class="product-badge">Mais Vendido</span>
                        </div>
                        <div class="p-3">
                            <h5 class="product-title">Calça Skinny</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="product-price">R$ 129,90</span>
                                </div>
                                <button class="add-to-cart"><i class="fas fa-shopping-cart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5">
                <a href="#" class="btn btn-outline-primary">Ver Todos os Produtos</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section" id="features">
        <div class="container">
            <h2 class="text-center section-title">Por Que Escolher Nos?</h2>
            <div class="row">
                <div class="col-md-4 text-center mb-5 mb-md-0">
                    <div class="feature-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h3 class="feature-title">Frete Grátis</h3>
                    <p class="feature-text">Frete grátis para todos os pedidos acima de R$ 200,00 em todo o Brasil.</p>
                </div>
                
                <div class="col-md-4 text-center mb-5 mb-md-0">
                    <div class="feature-icon">
                        <i class="fas fa-undo"></i>
                    </div>
                    <h3 class="feature-title">Devolução Fácil</h3>
                    <p class="feature-text">Devolução gratuita dentro de 30 dias para todos os pedidos.</p>
                </div>
                
                <div class="col-md-4 text-center">
                    <div class="feature-icon">
                        <i class="fas fa-lock"></i>
                    </div>
                    <h3 class="feature-title">Pagamento Seguro</h3>
                    <p class="feature-text">Processamento de pagamento 100% seguro com diversas opções.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section" id="testimonials">
        <div class="container">
            <h2 class="text-center section-title">O Que Nossos Clientes Dizem</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"Adorei o vestido que comprei! A qualidade é excelente e o atendimento foi impecável. Com certeza voltarei a comprar."</p>
                        <h6 class="testimonial-author">Ana Carolina</h6>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p class="testimonial-text">"A jaqueta jeans é perfeita! Chegou antes do prazo e superou minhas expectativas. Recomendo a loja!"</p>
                        <h6 class="testimonial-author">Pedro Henrique</h6>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"Sempre compro aqui e nunca me decepcionei. As roupas são de ótima qualidade e o atendimento é excelente."</p>
                        <h6 class="testimonial-author">Mariana Silva</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter-section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="newsletter-title">Assine Nossa Newsletter</h2>
                    <p class="mb-4">Receba as últimas novidades, promoções exclusivas e descontos especiais diretamente no seu e-mail.</p>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control newsletter-input" placeholder="Seu melhor e-mail">
                        <button class="btn newsletter-btn">Assinar</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="footer-title">Fashion Boutique</h4>
                    <p>Loja de roupas com as últimas tendências da moda. Oferecemos produtos de alta qualidade para homens e mulheres.</p>
                    <div class="mt-4">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-pinterest"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-6 mb-5 mb-md-0">
                    <h4 class="footer-title">Links Rápidos</h4>
                    <a href="#home" class="footer-link">Home</a>
                    <a href="#products" class="footer-link">Produtos</a>
                    <a href="#features" class="footer-link">Destaques</a>
                    <a href="#testimonials" class="footer-link">Depoimentos</a>
                    <a href="#contact" class="footer-link">Contato</a>
                </div>
                
                <div class="col-lg-2 col-md-6 mb-5 mb-md-0">
                    <h4 class="footer-title">Categorias</h4>
                    <a href="#" class="footer-link">Feminino</a>
                    <a href="#" class="footer-link">Masculino</a>
                    <a href="#" class="footer-link">Vestidos</a>
                    <a href="#" class="footer-link">Calçados</a>
                    <a href="#" class="footer-link">Acessórios</a>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <h4 class="footer-title">Contato</h4>
                    <p class="mb-2"><i class="fas fa-map-marker-alt me-2"></i> Av. Paulista, 1000 - São Paulo, SP</p>
                    <p class="mb-2"><i class="fas fa-phone me-2"></i> (11) 1234-5678</p>
                    <p class="mb-2"><i class="fas fa-envelope me-2"></i> contato@fashionboutique.com</p>
                    <p><i class="fas fa-clock me-2"></i> Seg-Sex: 9h-18h | Sáb: 9h-13h</p>
                </div>
            </div>
            
            <div class="text-center copyright">
                <p>&copy; 2023 Fashion Boutique. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>
@endsection