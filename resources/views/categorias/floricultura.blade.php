@extends('layouts.app')

@section('title', 'Flora Elegante - Floricultura')

@push('estilosEcodigos')
    @vite(['resources/css/categorias/floricultura.css', 'resources/js/categorias/floricultura.js']);
@endpush

@section('content')
    <nav>
        <a href="#home" class="logo">
            <i class="fas fa-spa"></i>
            <span>Flora Elegante</span>
        </a>
        <div class="menu-toggle" id="mobile-menu">
            <i class="fas fa-bars"></i>
        </div>
        <ul class="nav-links" id="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">Sobre</a></li>
            <li><a href="#products">Produtos</a></li>
            <li><a href="#contact">Contato</a></li>
        </ul>
    </nav>

    <section id="home">
        <div class="hero-content fade-in">
            <h1 class="delay-1">Flores que Inspiram</h1>
            <p class="delay-2">Descubra a beleza natural em cada detalhe de nossas criações florais exclusivas.</p>
            <a href="#products" class="btn delay-3">Nossos Produtos</a>
        </div>
    </section>

    <section id="about">
        <h2 class="section-title fade-in">Sobre Nós</h2>
        <div class="about-content">
            <div class="about-text fade-in delay-1">
                <h3>Nossa História</h3>
                <p>Fundada em 2010, a Flora Elegante nasceu da paixão por transformar momentos especiais em memórias inesquecíveis através da beleza das flores. Nossa equipe de floristas talentosos combina técnicas tradicionais com designs contemporâneos para criar arranjos únicos.</p>
                <p>Acreditamos que cada flor conta uma história, e nos dedicamos a encontrar as combinações perfeitas que expressem suas emoções e estilo pessoal.</p>
                <a href="#contact" class="btn">Saiba Mais</a>
            </div>
            <div class="about-image fade-in delay-2">
                <img src="https://plus.unsplash.com/premium_photo-1678723981832-dc1ca494dcfd?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mzd8fEZsb3JpY3VsdHVyYXxlbnwwfHwwfHx8MA%3D%3D" alt="Florista trabalhando">
            </div>
        </div>
    </section>

    <section id="products">
        <h2 class="section-title fade-in">Nossos Produtos</h2>
        <div class="products-container">
            <div class="product-grid">
                <div class="product-card fade-in">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1526047932273-341f2a7631f9?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Buquê de Rosas">
                    </div>
                    <div class="product-info">
                        <h3>Buquê Elegante</h3>
                        <p>Rosas vermelhas e brancas combinadas com folhagens verdes.</p>
                        <span class="product-price">R$ 189,90</span>
                        <a href="#contact" class="btn">Encomendar</a>
                    </div>
                </div>

                <div class="product-card fade-in delay-1">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1455659817273-f96807779a8a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Arranjo de Flores do Campo">
                    </div>
                    <div class="product-info">
                        <h3>Flores do Campo</h3>
                        <p>Seleção de flores silvestres em um arranjo rústico e encantador.</p>
                        <span class="product-price">R$ 149,90</span>
                        <a href="#contact" class="btn">Encomendar</a>
                    </div>
                </div>

                <div class="product-card fade-in delay-2">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1710524784485-5c77ae822ecc?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8T3JxdSVDMyVBRGRlYSUyMEJyYW5jYXxlbnwwfHwwfHx8MA%3D%3D" alt="Orquídeas">
                    </div>
                    <div class="product-info">
                        <h3>Orquídea Branca</h3>
                        <p>Elegante orquídea phalaenopsis em vaso de cerâmica artesanal.</p>
                        <span class="product-price">R$ 129,90</span>
                        <a href="#contact" class="btn">Encomendar</a>
                    </div>
                </div>

                <div class="product-card fade-in delay-3">
                    <div class="product-image">
                        <img src="https://media.istockphoto.com/id/1630788322/pt/foto/vintage-bicycle-with-artificial-rose-flower-in-basket-vintage-style.webp?a=1&b=1&s=612x612&w=0&k=20&c=uDQ471bSylj5Mde_0uc8y0DGwfrn7aKls4aih9o2CM4=" alt="Cesta de Flores">
                    </div>
                    <div class="product-info">
                        <h3>Cesta Primaveril</h3>
                        <p>Variedade de flores da estação em uma linda cesta de vime.</p>
                        <span class="product-price">R$ 219,90</span>
                        <a href="#contact" class="btn">Encomendar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <h2 class="section-title fade-in">Entre em Contato</h2>
        <div class="contact-container">
            <div class="contact-info fade-in">
                <h3>Informações</h3>
                <div class="contact-details">
                    <p><i class="fas fa-map-marker-alt"></i> Rua das Flores, 123 - Jardim Botânico</p>
                    <p><i class="fas fa-phone"></i> (11) 98765-4321</p>
                    <p><i class="fas fa-envelope"></i> contato@floraelegante.com</p>
                    <p><i class="fas fa-clock"></i> Seg-Sex: 9h-18h | Sáb: 9h-13h</p>
                </div>
                <h3>Redes Sociais</h3>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
            <div class="contact-form fade-in delay-1">
                <form>
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" id="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Telefone</label>
                        <input type="tel" id="phone">
                    </div>
                    <div class="form-group">
                        <label for="message">Mensagem</label>
                        <textarea id="message" required></textarea>
                    </div>
                    <button type="submit" class="btn">Enviar Mensagem</button>
                </form>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-content">
            <p>&copy; 2023 Flora Elegante. Todos os direitos reservados.</p>
            <p>Desenvolvido com <i class="fas fa-heart" style="color: var(--secondary-color);"></i> para amantes de flores.</p>
            <a href="#home" class="back-to-top"><i class="fas fa-arrow-up"></i></a>
        </div>
    </footer>

@endsection