@extends('layouts.app')

@section('title', 'Elegance Construções - Materiais de Qualidade')

@push('estilosEcodigos')
    <link rel="stylesheet" href="{{ asset('css/categorias/loja-materiais.css') }}">
    <script type="module" src="{{ asset('js/categorias/loja-materiais.js') }}"></script>                      
@endpush

@section('content')
    <!-- Header -->
    <header>
        <div class="container header-container">
            <a href="#" class="logo">Elegance<span>Construções</span></a>
            <nav>
                <ul>
                    <li><a href="#hero">Início</a></li>
                    <li><a href="#about">Sobre</a></li>
                    <li><a href="#products">Produtos</a></li>
                    <li><a href="#services">Serviços</a></li>
                    <li><a href="#contact">Contato</a></li>
                </ul>
            </nav>
            <div class="mobile-menu">☰</div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="hero">
        <div class="container hero-content">
            <h1>Materiais de Construção de Alta Qualidade</h1>
            <p>Fornecemos os melhores materiais para sua obra, com qualidade garantida e preços competitivos.</p>
            <div class="hero-btns">
                <a href="#products" class="btn">Nossos Produtos</a>
                <a href="#contact" class="btn btn-outline">Fale Conosco</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="section-title">
                <h2>Sobre Nós</h2>
                <p>Conheça nossa história e valores</p>
            </div>
            <div class="about-content">
                <div class="about-img">
                    <img src="https://images.unsplash.com/photo-1580810734754-711d6c5d55b0?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTZ8fE1hdGVyaWFzJTIwZGUlMjBjb250cnUlQzMlQTclQzMlQTNvfGVufDB8fDB8fHww" alt="Sobre a Elegance Construções">
                </div>
                <div class="about-text">
                    <h3>Mais de 20 anos no mercado de construção</h3>
                    <p>A Elegance Construções nasceu da paixão por oferecer materiais de qualidade para transformar sonhos em realidade. Desde 2000, temos orgulho de ser parte das melhores construções da região.</p>
                    <p>Nossa missão é fornecer produtos que combinem durabilidade, estética e preço justo, sempre com atendimento personalizado e orientação técnica especializada.</p>
                    <p>Com um estoque diversificado e parcerias com os melhores fabricantes, garantimos a procedência e qualidade de todos os nossos produtos.</p>
                    <a href="#contact" class="btn">Saiba Mais</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products">
        <div class="container">
            <div class="section-title">
                <h2>Nossos Produtos</h2>
                <p>Materiais selecionados para sua obra</p>
            </div>
            <div class="products-grid">
                <!-- Product 1 -->
                <div class="product-card">
                    <div class="product-img">
                        <img src="https://media.istockphoto.com/id/1273512798/pt/foto/ceramic-brick-for-use-in-home-construction.webp?a=1&b=1&s=612x612&w=0&k=20&c=AAWkOmGx4ZIfJLD8q6c8ywbh-Nb-Q60CtKC9NjABZE8=" alt="Tijolos">
                    </div>
                    <div class="product-info">
                        <h3>Tijolos Cerâmicos</h3>
                        <p>Tijolos de alta resistência para alvenaria estrutural e vedação. Disponíveis em vários tamanhos.</p>
                        <div class="product-price">
                            <span class="price">R$ 1,20/un</span>
                            <a href="#" class="btn">Comprar</a>
                        </div>
                    </div>
                </div>
                <!-- Product 2 -->
                <div class="product-card">
                    <div class="product-img">
                        <img src="https://media.istockphoto.com/id/506429663/pt/foto/cimento-mistura-de-cinza-de-portland-com-esp%C3%A1tula-ferramenta-no-balde.webp?a=1&b=1&s=612x612&w=0&k=20&c=EqLeBenDWeyRbxlCxOr_ULe9mw8qJIbwC3K327r1DVs=" alt="Cimento">
                    </div>
                    <div class="product-info">
                        <h3>Cimento Portland</h3>
                        <p>Cimento de alta qualidade para todos os tipos de construção. Resistência garantida.</p>
                        <div class="product-price">
                            <span class="price">R$ 35,00/saco</span>
                            <a href="#" class="btn">Comprar</a>
                        </div>
                    </div>
                </div>
                <!-- Product 3 -->
                <div class="product-card">
                    <div class="product-img">
                        <img src="https://plus.unsplash.com/premium_photo-1683140940649-71864ae8156e?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjV8fE1hdGVyaWFzJTIwZGUlMjBjb250cnUlQzMlQTclQzMlQTNvfGVufDB8fDB8fHww" alt="Telhas">
                    </div>
                    <div class="product-info">
                        <h3>Telhas Cerâmicas</h3>
                        <p>Telhas coloniais e portuguesas para seu telhado. Diversas cores disponíveis.</p>
                        <div class="product-price">
                            <span class="price">R$ 2,50/un</span>
                            <a href="#" class="btn">Comprar</a>
                        </div>
                    </div>
                </div>
                <!-- Product 4 -->
                <div class="product-card">
                    <div class="product-img">
                        <img src="https://plus.unsplash.com/premium_photo-1661577094877-725f859aff3e?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8VHVib3MlMjBQVkN8ZW58MHx8MHx8fDA%3D" alt="Tubos PVC">
                    </div>
                    <div class="product-info">
                        <h3>Tubos PVC</h3>
                        <p>Tubos para esgoto e água em diversos diâmetros. Alta resistência e durabilidade.</p>
                        <div class="product-price">
                            <span class="price">R$ 15,00/m</span>
                            <a href="#" class="btn">Comprar</a>
                        </div>
                    </div>
                </div>
                <!-- Product 5 -->
                <div class="product-card">
                    <div class="product-img">
                        <img src="https://images.unsplash.com/photo-1708199631647-76f4dc982fb0?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjN8fEFyZWlhJTIwTGF2YWRhJTIwZGUlMjBjb25zdHJ1JUMzJUE3JUMzJUEzb3xlbnwwfHwwfHx8MA%3D%3D" alt="Areia">
                    </div>
                    <div class="product-info">
                        <h3>Areia Lavada</h3>
                        <p>Areia de rio lavada, ideal para concreto, assentamento e chapisco. Vendida por metro cúbico.</p>
                        <div class="product-price">
                            <span class="price">R$ 120,00/m³</span>
                            <a href="#" class="btn">Comprar</a>
                        </div>
                    </div>
                </div>
                <!-- Product 6 -->
                <div class="product-card">
                    <div class="product-img">
                        <img src="https://images.unsplash.com/photo-1623658229453-86b927f82b63?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fFRpbnRhJTIwQWNyJUMzJUFEbGljYXxlbnwwfHwwfHx8MA%3D%3D" alt="Tinta">
                    </div>
                    <div class="product-info">
                        <h3>Tinta Acrílica</h3>
                        <p>Tinta de alta cobertura para paredes internas e externas. Diversas cores disponíveis.</p>
                        <div class="product-price">
                            <span class="price">R$ 89,90/galão</span>
                            <a href="#" class="btn">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="section-title">
                <h2>Nossos Serviços</h2>
                <p>Além de produtos, oferecemos soluções completas</p>
            </div>
            <div class="services-grid">
                <!-- Service 1 -->
                <div class="service-card">
                    <div class="service-icon">🚚</div>
                    <h3>Entrega Rápida</h3>
                    <p>Entregamos seus materiais no local da obra com agilidade e segurança, com frota própria e terceirizada.</p>
                </div>
                <!-- Service 2 -->
                <div class="service-card">
                    <div class="service-icon">🧮</div>
                    <h3>Cálculo de Material</h3>
                    <p>Nossos especialistas calculam a quantidade exata de material que você precisa para sua obra, evitando desperdício.</p>
                </div>
                <!-- Service 3 -->
                <div class="service-card">
                    <div class="service-icon">👷</div>
                    <h3>Assistência Técnica</h3>
                    <p>Orientação técnica especializada para ajudar na escolha dos melhores materiais para cada etapa da construção.</p>
                </div>
                <!-- Service 4 -->
                <div class="service-card">
                    <div class="service-icon">💳</div>
                    <h3>Condições de Pagamento</h3>
                    <p>Diversas opções de pagamento, incluindo parcelamento sem juros e condições especiais para construtoras.</p>
                </div>
                <!-- Service 5 -->
                <div class="service-card">
                    <div class="service-icon">🏗️</div>
                    <h3>Projetos Personalizados</h3>
                    <p>Desenvolvemos projetos sob medida para suas necessidades, com materiais específicos para cada tipo de obra.</p>
                </div>
                <!-- Service 6 -->
                <div class="service-card">
                    <div class="service-icon">🔧</div>
                    <h3>Pós-Venda</h3>
                    <p>Acompanhamento após a compra para garantir sua satisfação e resolver qualquer eventualidade com os produtos.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="section-title">
                <h2>Entre em Contato</h2>
                <p>Estamos à disposição para tirar suas dúvidas</p>
            </div>
            <div class="contact-container">
                <div class="contact-info">
                    <h3>Informações de Contato</h3>
                    <div class="contact-details">
                        <div class="contact-item">
                            <div class="contact-icon">📍</div>
                            <div>
                                <h4>Endereço</h4>
                                <p>Av. das Construções, 1234 - Centro, Cidade/SP</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">📞</div>
                            <div>
                                <h4>Telefone</h4>
                                <p>(11) 1234-5678 / (11) 98765-4321</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">✉️</div>
                            <div>
                                <h4>Email</h4>
                                <p>contato@eleganceconstrucoes.com.br</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">⏰</div>
                            <div>
                                <h4>Horário de Funcionamento</h4>
                                <p>Seg-Sex: 8h às 18h | Sáb: 8h às 13h</p>
                            </div>
                        </div>
                    </div>
                    <h3>Redes Sociais</h3>
                    <div class="social-links">
                        <a href="#" aria-label="Facebook">📘</a>
                        <a href="#" aria-label="Instagram">📷</a>
                        <a href="#" aria-label="WhatsApp">💬</a>
                        <a href="#" aria-label="LinkedIn">🔗</a>
                    </div>
                </div>
                <div class="contact-form">
                    <form>
                        <div class="form-group">
                            <label for="name">Nome Completo</label>
                            <input type="text" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Telefone</label>
                            <input type="tel" id="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="subject">Assunto</label>
                            <input type="text" id="subject" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Mensagem</label>
                            <textarea id="message" class="form-control" required></textarea>
                        </div>
                        <button type="submit" class="btn">Enviar Mensagem</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-container">
                <div class="footer-col">
                    <h3>Elegance Construções</h3>
                    <p>Fornecendo materiais de qualidade para suas obras desde 2000. Compromisso com excelência e satisfação do cliente.</p>
                    <p>CNPJ: 12.345.678/0001-99</p>
                </div>
                <div class="footer-col">
                    <h3>Links Rápidos</h3>
                    <ul class="footer-links">
                        <li><a href="#hero">Início</a></li>
                        <li><a href="#about">Sobre Nós</a></li>
                        <li><a href="#products">Produtos</a></li>
                        <li><a href="#services">Serviços</a></li>
                        <li><a href="#contact">Contato</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Produtos</h3>
                    <ul class="footer-links">
                        <li><a href="#">Tijolos e Blocos</a></li>
                        <li><a href="#">Cimento e Argamassa</a></li>
                        <li><a href="#">Telhas e Coberturas</a></li>
                        <li><a href="#">Hidráulica</a></li>
                        <li><a href="#">Elétrica</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Newsletter</h3>
                    <p>Assine nossa newsletter para receber promoções e novidades.</p>
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Seu email" required>
                        </div>
                        <button type="submit" class="btn">Assinar</button>
                    </form>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2023 Elegance Construções. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>
@endsection