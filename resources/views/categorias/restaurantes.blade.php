@extends('layout')

@section('title', 'Gourmet Delight | Experiência Gastronômica')

@push('estilos')
    <style>
        /* Reset e Estilos Globais */
        :root {
            --primary-color: #e63946;
            --secondary-color: #1d3557;
            --accent-color: #a8dadc;
            --light-color: #f1faee;
            --dark-color: #457b9d;
            --text-color: #333;
            --text-light: #777;
            --bg-light: #f9f9f9;
            --transition: all 0.3s ease;
            --shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            --border-radius: 8px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: var(--text-color);
            background-color: #fff;
            line-height: 1.6;
            overflow-x: hidden;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        ul {
            list-style: none;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            padding: 0 4%;
            margin: 0 auto;
        }

        .btn-primary {
            display: inline-block;
            background-color: var(--primary-color);
            color: white;
            padding: 12px 25px;
            border-radius: var(--border-radius);
            font-weight: 600;
            transition: var(--transition);
            border: none;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #c1121f;
            transform: translateY(-3px);
        }

        .btn-secondary {
            display: inline-block;
            background-color: transparent;
            color: var(--primary-color);
            padding: 12px 25px;
            border-radius: var(--border-radius);
            font-weight: 600;
            transition: var(--transition);
            border: 2px solid var(--primary-color);
        }

        .btn-secondary:hover {
            background-color: var(--primary-color);
            color: white;
            transform: translateY(-3px);
        }

        .section {
            display: none;
            padding: 100px 4%;
        }

        .section.active {
            display: block;
            animation: fadeIn 0.5s ease;
        }

        .section-header {;
            text-align: center;
            margin-bottom: 50px;
        }

        .section-header h2 {
            font-size: 2.5rem;
            color: var(--secondary-color);
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }

        .section-header h2::after {
            content: '';
            position: absolute;
            width: 50%;
            height: 3px;
            background-color: var(--primary-color);
            bottom: -10px;
            left: 25%;
        }

        .section-header p {
            color: var(--text-light);
            font-size: 1.1rem;
            max-width: 700px;
            margin: 0 auto;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Loader */
        .loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.9);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.5s, visibility 0.5s;
        }

        .loader-spinner {
            width: 50px;
            height: 50px;
            border: 5px solid #f3f3f3;
            border-top: 5px solid var(--primary-color);
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .loader.hidden {
            opacity: 0;
            visibility: hidden;
        }

        /* Header */
        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 20px 0;
            background-color: rgba(255, 255, 255, 0.95);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            transition: var(--transition);
        }

        .header.scrolled {
            padding: 15px 0;
            background-color: rgba(255, 255, 255, 0.98);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
        }

        .header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--secondary-color);
        }

        .logo span {
            color: var(--primary-color);
        }

        .nav ul {
            display: flex;
            align-items: center;
            gap: 30px;
        }

        .nav a {
            font-weight: 500;
            transition: var(--transition);
            position: relative;
        }

        .nav a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background-color: var(--primary-color);
            bottom: -5px;
            left: 0;
            transition: var(--transition);
        }

        .nav a:hover::after {
            width: 100%;
        }

        .reservation-btn {
            margin-left: 30px;
            background-color: var(--primary-color);
            color: white;
            padding: 10px 20px;
            border-radius: var(--border-radius);
            font-weight: 600;
            transition: var(--transition);
            border: none;
            cursor: pointer;
        }

        .reservation-btn:hover {
            background-color: #c1121f;
            transform: translateY(-3px);
        }

        .menu-toggle {
            display: none;
            background: none;
            border: none;
            cursor: pointer;
            padding: 10px;
            z-index: 1001;
        }

        .menu-toggle span {
            display: block;
            width: 25px;
            height: 3px;
            background-color: var(--secondary-color);
            margin: 5px 0;
            transition: var(--transition);
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), 
                        url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80') no-repeat center center/cover;
            display: flex;
            align-items: center;
            color: white;
            text-align: center;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .hero h1 span {
            color: var(--primary-color);
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        .hero-btns {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        /* Features */
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: -50px;
            position: relative;
            z-index: 1;
        }

        .feature-card {
            background-color: white;
            padding: 30px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            text-align: center;
            transition: var(--transition);
        }

        .feature-card:hover {
            transform: translateY(-10px);
        }

        .feature-card i {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 20px;
        }

        .feature-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: var(--secondary-color);
        }

        /* Menu Section */
        .menu-tabs {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 40px;
        }

        .tab-btn {
            padding: 10px 25px;
            background-color: transparent;
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
            border-radius: 30px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
        }

        .tab-btn.active, .tab-btn:hover {
            background-color: var(--primary-color);
            color: white;
        }

        .menu-items {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }

        .menu-item {
            background-color: white;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .menu-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .menu-item-img {
            height: 200px;
            overflow: hidden;
        }

        .menu-item-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .menu-item:hover .menu-item-img img {
            transform: scale(1.1);
        }

        .menu-item-content {
            padding: 20px;
        }

        .menu-item-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .menu-item-title {
            font-size: 1.3rem;
            color: var(--secondary-color);
        }

        .menu-item-price {
            color: var(--primary-color);
            font-weight: 700;
            font-size: 1.2rem;
        }

        .menu-item-ingredients {
            color: var(--text-light);
            margin-bottom: 15px;
            font-size: 0.9rem;
        }

        /* About Section */
        .about-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 50px;
            align-items: center;
        }

        .about-text h2 {
            font-size: 2rem;
            color: var(--secondary-color);
            margin-bottom: 20px;
        }

        .about-text p {
            margin-bottom: 20px;
            color: var(--text-color);
        }

        .about-image {
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow);
        }

        .about-image img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.5s ease;
        }

        .about-image:hover img {
            transform: scale(1.05);
        }

        .awards {
            margin-top: 30px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .award {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .award i {
            color: var(--primary-color);
            font-size: 1.5rem;
        }

        /* Gallery Section */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .gallery-item {
            position: relative;
            border-radius: var(--border-radius);
            overflow: hidden;
            height: 250px;
            cursor: pointer;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
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
            background-color: rgba(230, 57, 70, 0.7);
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: var(--transition);
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }

        .gallery-overlay i {
            color: white;
            font-size: 2rem;
        }

        /* Modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            z-index: 10000;
            overflow: auto;
        }

        .modal-content {
            display: block;
            margin: 50px auto;
            max-width: 90%;
            max-height: 90vh;
            border-radius: 5px;
        }

        .close-modal {
            position: absolute;
            top: 20px;
            right: 30px;
            color: white;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
            transition: var(--transition);
        }

        .close-modal:hover {
            color: var(--primary-color);
        }

        /* Contact Section */
        .contact-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 50px;
        }

        .contact-info {
            display: grid;
            gap: 30px;
        }

        .info-item {
            display: flex;
            gap: 20px;
        }

        .info-item i {
            font-size: 1.5rem;
            color: var(--primary-color);
            margin-top: 5px;
        }

        .info-item h3 {
            font-size: 1.3rem;
            margin-bottom: 10px;
            color: var(--secondary-color);
        }

        .contact-form {
            background-color: white;
            padding: 30px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: var(--border-radius);
            font-family: inherit;
            transition: var(--transition);
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(230, 57, 70, 0.2);
        }

        .form-group textarea {
            min-height: 120px;
            resize: vertical;
        }

        /* Reservation Section */
        .reservation-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 50px;
            align-items: center;
        }

        .reservation-image {
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow);
        }

        .reservation-image img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.5s ease;
        }

        .reservation-image:hover img {
            transform: scale(1.05);
        }

        .reservation-form {
            background-color: white;
            padding: 30px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
        }

        /* Footer */
        .footer {
            background-color: var(--secondary-color);
            color: white;
            padding: 60px 0 0;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-about .logo {
            color: white;
            margin-bottom: 20px;
            display: inline-block;
        }

        .footer-about .logo span {
            color: var(--primary-color);
        }

        .footer-about p {
            margin-bottom: 20px;
            opacity: 0.8;
        }

        .social-links {
            display: flex;
            gap: 15px;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            transition: var(--transition);
        }

        .social-links a:hover {
            background-color: var(--primary-color);
            transform: translateY(-5px);
        }

        .footer-links h3,
        .footer-contact h3,
        .footer-newsletter h3 {
            font-size: 1.3rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-links h3::after,
        .footer-contact h3::after,
        .footer-newsletter h3::after {
            content: '';
            position: absolute;
            width: 50px;
            height: 2px;
            background-color: var(--primary-color);
            bottom: 0;
            left: 0;
        }

        .footer-links ul li {
            margin-bottom: 10px;
        }

        .footer-links ul li a {
            opacity: 0.8;
            transition: var(--transition);
        }

        .footer-links ul li a:hover {
            opacity: 1;
            color: var(--primary-color);
            padding-left: 5px;
        }

        .footer-contact p {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
            opacity: 0.8;
        }

        .footer-contact i {
            color: var(--primary-color);
        }

        .footer-newsletter p {
            opacity: 0.8;
            margin-bottom: 20px;
        }

        .footer-newsletter form {
            display: flex;
        }

        .footer-newsletter input {
            flex: 1;
            padding: 12px 15px;
            border: none;
            border-radius: var(--border-radius) 0 0 var(--border-radius);
            font-family: inherit;
        }

        .footer-newsletter button {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 0 20px;
            border-radius: 0 var(--border-radius) var(--border-radius) 0;
            cursor: pointer;
            transition: var(--transition);
        }

        .footer-newsletter button:hover {
            background-color: #c1121f;
        }

        .footer-bottom {
            background-color: rgba(0, 0, 0, 0.2);
            padding: 20px 0;
            text-align: center;
        }

        .footer-bottom p {
            opacity: 0.7;
            margin-bottom: 10px;
        }

        .footer-legal {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .footer-legal a {
            opacity: 0.7;
            transition: var(--transition);
        }

        .footer-legal a:hover {
            opacity: 1;
            color: var(--primary-color);
        }

        /* Responsivo */
        @media (max-width: 992px) {
            .hero h1 {
                font-size: 2.8rem;
            }
            
            .features {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            }

            .menu-toggle {
                display: block;
                position: absolute;
                z-index: 1001;
                top: 20px;
                right: 20px;
            }
            
            .menu-toggle.active span:nth-child(1) {
                transform: rotate(45deg) translate(5px, 5px);
            }
            
            .menu-toggle.active span:nth-child(2) {
                opacity: 0;
            }
            
            .menu-toggle.active span:nth-child(3) {
                transform: rotate(-45deg) translate(7px, -6px);
            }
            
            .nav ul {
                position: fixed;
                top: 0;
                right: -100%;
                width: 80%;
                max-width: 300px;
                height: 100vh;
                background-color: white;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                gap: 30px;
                box-shadow: -5px 0 15px rgba(0, 0, 0, 0.1);
                transition: var(--transition);
                z-index: 1000;
            }
            
            .nav ul.active {
                right: 0;
            }
            
            .reservation-btn {
                margin-left: 0;
                margin-top: 20px;
            }
            
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .hero p {
                font-size: 1rem;
            }
            
            .section-header h2 {
                font-size: 2rem;
            }
        }

        @media (max-width: 576px) {
            .hero h1 {
                font-size: 2rem;
            }
            
            .hero-btns {
                flex-direction: column;
                gap: 15px;
            }
            
            .btn-primary, .btn-secondary {
                width: 100%;
                text-align: center;
            }
            
            .features {
                margin-top: -30px;
                grid-template-columns: 1fr;
            }
            
            .menu-items {
                grid-template-columns: 1fr;
            }
            
            .section-header h2 {
                font-size: 1.8rem;
            }
        }        
    </style>
@endpush

@section('content')
    <div class="loader">
        <div class="loader-spinner"></div>
    </div>
    
    <header class="header">
        <div class="container">
            <a href="#" class="logo" data-section="home">Gourmet<span>Delight</span></a>
            <nav class="nav">
                <ul>
                    <li><a href="#" data-section="home">Início</a></li>
                    <li><a href="#" data-section="menu">Menu</a></li>
                    <li><a href="#" data-section="about">Sobre</a></li>
                    <li><a href="#" data-section="gallery">Galeria</a></li>
                    <li><a href="#" data-section="contact">Contato</a></li>
                    <li><a class="reservation-btn" data-section="reservation" href="#" data-section="contact">Reservas</a></li>
                </ul>
                <button class="menu-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </nav>
        </div>
    </header>

    <main class="main-content">
        <section class="section active" id="home">
            <div class="hero">
                <div class="hero-content">
                    <h1>Experiência Gastronômica <span>Excepcional</span></h1>
                    <p>Sabores que encantam, momentos que ficam</p>
                    <div class="hero-btns">
                        <a href="#" class="btn-primary" data-section="menu">Ver Menu</a>
                        <a href="#" class="btn-secondary" data-section="reservation">Reservar Mesa</a>
                    </div>
                </div>
            </div>
            
            <div class="features">
                <div class="feature-card">
                    <i class="fas fa-utensils"></i>
                    <h3>Culinária Artesanal</h3>
                    <p>Pratos preparados com ingredientes frescos e selecionados</p>
                </div>
                <div class="feature-card">
                    <i class="fas fa-wine-glass-alt"></i>
                    <h3>Harmonização</h3>
                    <p>Melhores vinhos selecionados por nossos sommeliers</p>
                </div>
                <div class="feature-card">
                    <i class="fas fa-heart"></i>
                    <h3>Ambiente Aconchegante</h3>
                    <p>Decoração moderna e atmosfera acolhedora</p>
                </div>
            </div>
        </section>

        <section class="section" id="menu">
            <div class="section-header">
                <h2>Nosso Menu</h2>
                <p>Descubra nossos sabores exclusivos</p>
            </div>
            
            <div class="menu-tabs">
                <button class="tab-btn active" data-category="entradas">Entradas</button>
                <button class="tab-btn" data-category="principais">Pratos Principais</button>
                <button class="tab-btn" data-category="sobremesas">Sobremesas</button>
                <button class="tab-btn" data-category="bebidas">Bebidas</button>
            </div>
            
            <div class="menu-items" id="menu-items-container">
                <!-- Itens serão carregados via JavaScript -->
            </div>
        </section>

        <section class="section" id="about">
            <div class="about-content">
                <div class="about-text">
                    <h2>Nossa História</h2>
                    <p>Fundado em 2010, o Gourmet Delight nasceu da paixão por gastronomia e do desejo de criar experiências memoráveis. Nosso chef executivo, formado nas melhores escolas culinárias da Europa, traz técnicas refinadas e uma abordagem inovadora.</p>
                    <p>Acreditamos que uma refeição vai além da alimentação - é uma jornada sensorial que deve encantar todos os sentidos.</p>
                    <div class="awards">
                        <div class="award">
                            <i class="fas fa-award"></i>
                            <p>Melhor Restaurante - Prêmio Gastronômico 2022</p>
                        </div>
                        <div class="award">
                            <i class="fas fa-award"></i>
                            <p>Estrela Michelin - Desde 2018</p>
                        </div>
                    </div>
                </div>
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" alt="Chef preparando prato">
                </div>
            </div>
        </section>

        <section class="section" id="gallery">
            <div class="section-header">
                <h2>Galeria</h2>
                <p>Um vislumbre da experiência Gourmet Delight</p>
            </div>
            
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1544025162-d76694265947?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1169&q=80" alt="Prato do chef">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1559847844-5315695dadae?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1158&q=80" alt="Ambiente do restaurante">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1572695157366-5e585ab2b69f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1171&q=80" alt="Bar do restaurante">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1081&q=80" alt="Prato gourmet">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="https://plus.unsplash.com/premium_photo-1661310177352-f586bf23a403?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8ZXNwZXRpbmhvfGVufDB8fDB8fHww" alt="Cozinha profissional">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1099&q=80" alt="Hambúrguer gourmet">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1633321702518-7feccafb94d5?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8ZXNwZXRpbmhvfGVufDB8fDB8fHww" alt="Hambúrguer gourmet">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1529006557810-274b9b2fc783?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8ZXNwZXRpbmhvfGVufDB8fDB8fHww" alt="Hambúrguer gourmet">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1633436375795-12b3b339712f?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8ZXNwZXRpbmhvfGVufDB8fDB8fHww" alt="Hambúrguer gourmet">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="https://media.istockphoto.com/id/1400161255/pt/foto/picanha-barbecue-roasted-over-hot-coals-this-form-of-barbecue-is-widely-consumed-throughout.webp?a=1&b=1&s=612x612&w=0&k=20&c=B0vjfER2ORwZo3Ssc6SQhvUXvdHPYx9-Kh1s6WAJNss=" alt="Hambúrguer gourmet">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                                                
            </div>
            
            <div class="modal">
                <span class="close-modal">&times;</span>
                <img class="modal-content" id="modal-image">
            </div>
        </section>

        <section class="section" id="contact">
            <div class="section-header">
                <h2>Contato</h2>
                <p>Estamos ansiosos para recebê-lo</p>
            </div>
            
            <div class="contact-content">
                <div class="contact-info">
                    <div class="info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h3>Endereço</h3>
                            <p>Av. Gastronômica, 123<br>Bairro Gourmet - São Paulo/SP</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-phone-alt"></i>
                        <div>
                            <h3>Telefone</h3>
                            <p>(11) 1234-5678</p>
                            <p>(11) 98765-4321 (WhatsApp)</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <h3>Email</h3>
                            <p>contato@gourmetdelight.com</p>
                            <p>reservas@gourmetdelight.com</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-clock"></i>
                        <div>
                            <h3>Horário de Funcionamento</h3>
                            <p>Terça a Quinta: 18h - 23h</p>
                            <p>Sexta e Sábado: 18h - 00h</p>
                            <p>Domingo: 12h - 17h</p>
                        </div>
                    </div>
                </div>
                
                <div class="contact-form">
                    <form id="contactForm">
                        <div class="form-group">
                            <input type="text" id="name" placeholder="Seu nome" required>
                        </div>
                        <div class="form-group">
                            <input type="email" id="email" placeholder="Seu email" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" id="phone" placeholder="Seu telefone">
                        </div>
                        <div class="form-group">
                            <textarea id="message" placeholder="Sua mensagem" required></textarea>
                        </div>
                        <button type="submit" class="btn-primary">Enviar Mensagem</button>
                    </form>
                </div>
            </div>
        </section>

        <section class="section" id="reservation">
            <div class="section-header">
                <h2>Reservas</h2>
                <p>Garanta sua experiência conosco</p>
            </div>
            
            <div class="reservation-content">
                <div class="reservation-image">
                    <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Mesa no restaurante">
                </div>
                
                <div class="reservation-form">
                    <form id="reservationForm">
                        <div class="form-group">
                            <input type="text" id="reservation-name" placeholder="Seu nome" required>
                        </div>
                        <div class="form-group">
                            <input type="email" id="reservation-email" placeholder="Seu email" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" id="reservation-phone" placeholder="Seu telefone" required>
                        </div>
                        <div class="form-group">
                            <input type="date" id="reservation-date" required>
                        </div>
                        <div class="form-group">
                            <input type="time" id="reservation-time" required>
                        </div>
                        <div class="form-group">
                            <select id="reservation-guests" required>
                                <option value="" disabled selected>Número de pessoas</option>
                                <option value="1">1 pessoa</option>
                                <option value="2">2 pessoas</option>
                                <option value="3">3 pessoas</option>
                                <option value="4">4 pessoas</option>
                                <option value="5">5 pessoas</option>
                                <option value="6">6 pessoas</option>
                                <option value="7">7+ pessoas</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea id="reservation-notes" placeholder="Observações especiais"></textarea>
                        </div>
                        <button type="submit" class="btn-primary">Reservar Mesa</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-about">
                    <a href="#" class="logo">Gourmet<span>Delight</span></a>
                    <p>Oferecendo experiências gastronômicas excepcionais desde 2010. Sabores que encantam, momentos que ficam.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-tripadvisor"></i></a>
                    </div>
                </div>
                <div class="footer-links">
                    <h3>Links Rápidos</h3>
                    <ul>
                        <li><a href="#" data-section="home">Início</a></li>
                        <li><a href="#" data-section="menu">Menu</a></li>
                        <li><a href="#" data-section="about">Sobre Nós</a></li>
                        <li><a href="#" data-section="gallery">Galeria</a></li>
                        <li><a href="#" data-section="contact">Contato</a></li>
                        <li><a href="#" data-section="reservation">Reservas</a></li>
                    </ul>
                </div>
                <div class="footer-contact">
                    <h3>Contato</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Av. Gastronômica, 123 - SP</p>
                    <p><i class="fas fa-phone-alt"></i> (11) 1234-5678</p>
                    <p><i class="fas fa-envelope"></i> contato@gourmetdelight.com</p>
                </div>
                <div class="footer-newsletter">
                    <h3>Newsletter</h3>
                    <p>Assine para receber novidades e promoções</p>
                    <form id="newsletterForm">
                        <input type="email" placeholder="Seu email" required>
                        <button type="submit"><i class="fas fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <p>&copy; 2023 Gourmet Delight. Todos os direitos reservados.</p>
                <div class="footer-legal">
                    <a href="#">Política de Privacidade</a>
                    <a href="#">Termos de Uso</a>
                </div>
            </div>
        </div>
    </footer>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Loader
            const loader = document.querySelector('.loader');
            setTimeout(() => {
                loader.classList.add('hidden');
            }, 1000);

            // Menu data
            const menuItems = {
                entradas: [
                    {
                        name: 'Bruschetta Clássica',
                        price: 'R$ 28,90',
                        ingredients: 'Pão italiano, tomate fresco, manjericão, azeite e balsâmico',
                        image: 'https://images.unsplash.com/photo-1572695157366-5e585ab2b69f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1171&q=80'
                    },
                    {
                        name: 'Carpaccio de Salmão',
                        price: 'R$ 42,50',
                        ingredients: 'Salmão fresco, alcaparras, rúcula, limão siciliano e azeite trufado',
                        image: 'https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1081&q=80'
                    },
                    {
                        name: 'Tábua de Queijos',
                        price: 'R$ 65,00',
                        ingredients: 'Seleção de queijos artesanais, nozes, mel e compota de frutas',
                        image: 'https://images.unsplash.com/photo-1559847844-5315695dadae?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1158&q=80'
                    }
                ],
                principais: [
                    {
                        name: 'Risoto de Cogumelos',
                        price: 'R$ 78,90',
                        ingredients: 'Arroz arbóreo, cogumelos frescos, vinho branco, queijo parmesão',
                        image: 'https://media.istockphoto.com/id/1369183332/pt/foto/risotto-with-brown-champignon-mushrooms.webp?a=1&b=1&s=612x612&w=0&k=20&c=-HVxb-GM8rrD9mw3_xJxDN2ho8Xn2CZ8i2v0aLcPikw='
                    },
                    {
                        name: 'Filé Mignon ao Molho Madeira',
                        price: 'R$ 112,00',
                        ingredients: 'Filé mignon 250g, molho madeira, purê de batata e legumes grelhados',
                        image: 'https://images.unsplash.com/photo-1544025162-d76694265947?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1169&q=80'
                    },
                    {
                        name: 'Salmão Grelhado',
                        price: 'R$ 95,50',
                        ingredients: 'Salmão fresco, molho de ervas, arroz negro e aspargos',
                        image: 'https://images.unsplash.com/photo-1568901346375-23c9450c58cd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1099&q=80'
                    }
                ],
                sobremesas: [
                    {
                        name: 'Cheesecake de Frutas Vermelhas',
                        price: 'R$ 32,00',
                        ingredients: 'Base de biscoito, cream cheese e calda de frutas vermelhas',
                        image: 'https://images.unsplash.com/photo-1571115177098-24ec42ed204d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80'
                    },
                    {
                        name: 'Petit Gateau',
                        price: 'R$ 38,50',
                        ingredients: 'Bolo de chocolate com núcleo derretido e sorvete de baunilha',
                        image: 'https://images.unsplash.com/photo-1563805042-7684c019e1cb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=627&q=80'
                    },
                    {
                        name: 'Tiramisù',
                        price: 'R$ 35,00',
                        ingredients: 'Biscoitos champanhe, café, mascarpone e cacau em pó',
                        image: 'https://images.unsplash.com/photo-1624353365286-3f8d62daad51?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80'
                    }
                ],
                bebidas: [
                    {
                        name: 'Vinho Tinto Reserva',
                        price: 'R$ 120,00',
                        ingredients: 'Malbec argentino, safra 2018, taça R$ 35,00',
                        image: 'https://images.unsplash.com/photo-1551632436-cbf8dd35adfa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1171&q=80'
                    },
                    {
                        name: 'Coquetel Signature',
                        price: 'R$ 45,00',
                        ingredients: 'Gin, licor de lavanda, suco de limão siciliano e água tônica',
                        image: 'https://images.unsplash.com/photo-1551751299-1b51cab2694c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=765&q=80'
                    },
                    {
                        name: 'Cerveja Artesanal',
                        price: 'R$ 28,00',
                        ingredients: 'Seleção de cervejas locais IPA, Pilsen e Stout',
                        image: 'https://images.unsplash.com/photo-1600788886242-5c96aabe3757?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80'
                    }
                ]
            };

            // SPA Navigation
            const sections = document.querySelectorAll('.section');
            const navLinks = document.querySelectorAll('.nav a, .footer-links a, .reservation-btn, .hero-btns a');
            
            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const sectionId = this.getAttribute('data-section');
                    
                    // Close mobile menu if open
                    if (nav.classList.contains('active')) {
                        nav.classList.remove('active');
                        menuToggle.classList.remove('active');
                    }
                    
                    // Change active section
                    sections.forEach(section => {
                        section.classList.remove('active');
                        if (section.id === sectionId) {
                            section.classList.add('active');
                            window.scrollTo(0, 0);
                        }
                    });
                    
                    // Change active tab if on menu section
                    if (sectionId === 'menu') {
                        const firstTab = document.querySelector('.tab-btn');
                        loadMenuItems(firstTab.getAttribute('data-category'));
                        firstTab.classList.add('active');
                    }
                });
            });

            // Mobile menu toggle
            const menuToggle = document.querySelector('.menu-toggle');
            const nav = document.querySelector('.nav ul');
            
            menuToggle.addEventListener('click', function() {
                this.classList.toggle('active');
                nav.classList.toggle('active');
            });

            // Header scroll effect
            const header = document.querySelector('.header');
            
            window.addEventListener('scroll', function() {
                if (window.scrollY > 100) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            });

            // Menu tabs
            const tabButtons = document.querySelectorAll('.tab-btn');
            
            tabButtons.forEach(button => {
                button.addEventListener('click', function() {
                    tabButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');
                    const category = this.getAttribute('data-category');
                    loadMenuItems(category);
                });
            });

            // Load menu items
            function loadMenuItems(category) {
                const menuContainer = document.getElementById('menu-items-container');
                menuContainer.innerHTML = '';
                
                menuItems[category].forEach(item => {
                    const menuItem = document.createElement('div');
                    menuItem.className = 'menu-item';
                    menuItem.innerHTML = `
                        <div class="menu-item-img">
                            <img src="${item.image}" alt="${item.name}">
                        </div>
                        <div class="menu-item-content">
                            <div class="menu-item-header">
                                <h3 class="menu-item-title">${item.name}</h3>
                                <span class="menu-item-price">${item.price}</span>
                            </div>
                            <p class="menu-item-ingredients">${item.ingredients}</p>
                        </div>
                    `;
                    menuContainer.appendChild(menuItem);
                });
            }

            // Gallery modal
            const galleryItems = document.querySelectorAll('.gallery-item');
            const modal = document.querySelector('.modal');
            const modalImg = document.getElementById('modal-image');
            const closeModal = document.querySelector('.close-modal');
            
            galleryItems.forEach(item => {
                item.addEventListener('click', function() {
                    const imgSrc = this.querySelector('img').getAttribute('src');
                    modalImg.setAttribute('src', imgSrc);
                    modal.style.display = 'flex';
                    document.body.style.overflow = 'hidden';
                });
            });
            
            closeModal.addEventListener('click', function() {
                modal.style.display = 'none';
                document.body.style.overflow = 'auto';
            });
            
            window.addEventListener('click', function(e) {
                if (e.target === modal) {
                    modal.style.display = 'none';
                    document.body.style.overflow = 'auto';
                }
            });

            // Form submissions
            const contactForm = document.getElementById('contactForm');
            const reservationForm = document.getElementById('reservationForm');
            const newsletterForm = document.getElementById('newsletterForm');
            
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                alert('Mensagem enviada com sucesso! Entraremos em contato em breve.');
                this.reset();
            });
            
            reservationForm.addEventListener('submit', function(e) {
                e.preventDefault();
                alert('Reserva confirmada! Aguardamos sua visita.');
                this.reset();
            });
            
            newsletterForm.addEventListener('submit', function(e) {
                e.preventDefault();
                alert('Obrigado por assinar nossa newsletter!');
                this.reset();
            });

            // Initialize first section and menu
            document.querySelector('.section').classList.add('active');
            loadMenuItems('entradas');
        });        
    </script>
@endpush