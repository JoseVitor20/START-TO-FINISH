@extends('layouts.app')

@section('title', 'Glamour - Salão de Beleza Premium')

@push('estilosEcodigos')
    @vite(['resources/css/categorias/salao-beleza.css', 'resources/js/categorias/salao-beleza.js'])
@endpush

@section('content')
    <!-- Botão de Agendamento Flutuante -->
    <a href="#contact" class="appointment-btn">
        <i class="fas fa-calendar-check"></i>
    </a>

    <!-- Navegação -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <span class="logo-text">Elegance Beauty</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
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
                        <a class="nav-link" href="#services">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">Equipe</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Galeria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contato</a>
                    </li>
                </ul>
                <a href="#contact" class="btn btn-primary ms-lg-3">Agendar Horário</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Descubra sua beleza única</h1>
                <p>No Elegance Beauty, transformamos sua autoestima com serviços exclusivos e profissionais qualificados. Sua jornada para a beleza começa aqui.</p>
                <a href="#services" class="btn btn-primary me-2">Nossos Serviços</a>
                <a href="#contact" class="btn btn-outline-light">Agendar Horário</a>
            </div>
        </div>
    </section>

    <!-- Sobre Nós -->
    <section id="about" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <img src="https://plus.unsplash.com/premium_photo-1663050860891-82b5fec7e0bf?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fHNhbCVDMyVBM28lMjBkZSUyMGJlbGV6YXxlbnwwfHwwfHx8MA%3D%3D" class="img-fluid rounded" alt="Salão Elegance Beauty">
                </div>
                <div class="col-lg-6">
                    <h2 class="section-title">Sobre Nós</h2>
                    <p class="lead">Bem-vindo ao Elegance Beauty, onde a beleza encontra a excelência.</p>
                    <p>Fundado em 2010, nosso salão se tornou referência em cuidados estéticos e bem-estar. Nossa missão é realçar sua beleza natural com técnicas inovadoras e produtos de alta qualidade.</p>
                    <p>Com uma equipe de profissionais apaixonados e altamente qualificados, oferecemos uma experiência personalizada em um ambiente sofisticado e acolhedor.</p>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Profissionais Certificados</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Produtos Premium</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Ambiente Higienizado</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Atendimento Personalizado</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Técnicas Atualizadas</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Resultados Garantidos</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Serviços -->
    <section id="services" class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title text-center">Nossos Serviços</h2>
            <p class="text-center mb-5">Oferecemos uma variedade de serviços para realçar sua beleza natural</p>
            
            <div class="row">
                <div class="col-md-4">
                    <div class="service-card text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-cut"></i>
                        </div>
                        <h4>Cortes e Penteados</h4>
                        <p>Cortes modernos, escovas progressivas e penteados para ocasiões especiais.</p>
                        <p class="text-primary fw-bold">A partir de R$ 80</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="service-card text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-paint-brush"></i>
                        </div>
                        <h4>Coloração</h4>
                        <p>Técnicas de coloração, mechas, reflexos e tonalização com produtos profissionais.</p>
                        <p class="text-primary fw-bold">A partir de R$ 120</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="service-card text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-spa"></i>
                        </div>
                        <h4>Tratamentos Capilares</h4>
                        <p>Hidratação, reconstrução, cauterização e botox capilar para fios saudáveis.</p>
                        <p class="text-primary fw-bold">A partir de R$ 90</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="service-card text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-hand-sparkles"></i>
                        </div>
                        <h4>Manicure e Pedicure</h4>
                        <p>Cuidados completos para mãos e pés, com esmaltação tradicional e em gel.</p>
                        <p class="text-primary fw-bold">A partir de R$ 60</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="service-card text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h4>Design de Sobrancelhas</h4>
                        <p>Design personalizado, henna e micropigmentação para realçar seu olhar.</p>
                        <p class="text-primary fw-bold">A partir de R$ 50</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="service-card text-center p-4">
                        <div class="service-icon">
                            <i class="fas fa-magic"></i>
                        </div>
                        <h4>Maquiagem</h4>
                        <p>Maquiagem social e artística para eventos especiais com produtos de alta qualidade.</p>
                        <p class="text-primary fw-bold">A partir de R$ 100</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Promoção -->
    <section class="promotion">
        <div class="container text-center">
            <h2 class="mb-4">Pacote Especial de Verão</h2>
            <p class="lead mb-4">Corte + Coloração + Hidratação Profunda</p>
            <h3 class="display-4 fw-bold mb-4">Por apenas R$ 220</h3>
            <p>Promoção válida até 30 de Agosto</p>
            <a href="#contact" class="btn btn-light mt-3">Agendar Promoção</a>
        </div>
    </section>

    <!-- Equipe -->
    <section id="team" class="py-5">
        <div class="container">
            <h2 class="section-title text-center">Nossa Equipe</h2>
            <p class="text-center mb-5">Profissionais qualificados prontos para cuidar de você</p>
            
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="team-card position-relative overflow-hidden">
                        <img src="https://media.istockphoto.com/id/1887700422/pt/foto/hairdresser-creating-a-beautiful-finish-with-drying.webp?a=1&b=1&s=612x612&w=0&k=20&c=9ToFsO3tBJorMdy-EDmvO8VeqnJpzi8qpC_oz9I8xpY=" class="img-fluid" alt="Cabeleireira">
                        <div class="p-3">
                            <h5 class="mb-1">Carla Mendes</h5>
                            <p class="text-muted mb-0">Cabeleireira Master</p>
                        </div>
                        <div class="team-social text-center">
                            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="team-card position-relative overflow-hidden">
                        <img src="https://media.istockphoto.com/id/1269029424/pt/foto/young-woman-enjoying-haircut-at-beauty-salon-empty-space.webp?a=1&b=1&s=612x612&w=0&k=20&c=VFMGYevCYrfRakXOCGE1oBEZiFSc0dT5JlWo0qIha9s=" class="img-fluid" alt="Colorista">
                        <div class="p-3">
                            <h5 class="mb-1">Fernanda Lima</h5>
                            <p class="text-muted mb-0">Especialista em Coloração</p>
                        </div>
                        <div class="team-social text-center">
                            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="team-card position-relative overflow-hidden">
                        <img src="https://media.istockphoto.com/id/1357074670/pt/foto/reflection-in-a-mirror-of-happy-woman-and-her-hairdresser-after-hair-treatment-at-the-salon.webp?a=1&b=1&s=612x612&w=0&k=20&c=kb7hIfD7llPnKtazXNGS6lbvBcXs1pvZC8g1v5hsMh4=" class="img-fluid" alt="Manicure">
                        <div class="p-3">
                            <h5 class="mb-1">Juliana Santos</h5>
                            <p class="text-muted mb-0">Manicure e Pedicure</p>
                        </div>
                        <div class="team-social text-center">
                            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="team-card position-relative overflow-hidden">
                        <img src="https://media.istockphoto.com/id/2148731592/pt/foto/woman-hair-salon-employee-in-modern-hair-studio-cutting-hair.webp?a=1&b=1&s=612x612&w=0&k=20&c=Ijp4NoGZO_Vm5ZEQdxGSE1Gg8bvy7FvgMDCJAtCy6tk=" class="img-fluid" alt="Maquiadora">
                        <div class="p-3">
                            <h5 class="mb-1">Patrícia Oliveira</h5>
                            <p class="text-muted mb-0">Maquiadora Profissional</p>
                        </div>
                        <div class="team-social text-center">
                            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Galeria -->
    <section id="gallery" class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title text-center">Nossa Galeria</h2>
            <p class="text-center mb-5">Alguns momentos e trabalhos realizados em nosso salão</p>
            
            <div class="row">
                <div class="col-md-4">
                    <div class="gallery-item">
                        <img src="https://media.istockphoto.com/id/1264558427/pt/foto/woman-with-protective-mask-receiving-treatment-in-hair-salon.webp?a=1&b=1&s=612x612&w=0&k=20&c=7s1NIxzKAr4rFWCaFDCW4VEYR68iDT0ev-cfl4ywh9s=" alt="Corte de cabelo">
                        <div class="gallery-overlay">
                            <h5 class="text-white">Corte Moderno</h5>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1595476108010-b4d1f102b1b1?ixlib=rb-4.0.3" alt="Coloração">
                        <div class="gallery-overlay">
                            <h5 class="text-white">Coloração</h5>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1633681926022-84c23e8cb2d6?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8c2FsJUMzJUEzbyUyMGRlJTIwYmVsZXphfGVufDB8fDB8fHww" alt="Salão">
                        <div class="gallery-overlay">
                            <h5 class="text-white">Nosso Ambiente</h5>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1632345031435-8727f6897d53?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8TWFuaWN1cmV8ZW58MHx8MHx8fDA%3D" alt="Manicure">
                        <div class="gallery-overlay">
                            <h5 class="text-white">Manicure</h5>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="gallery-item">
                        <img src="https://media.istockphoto.com/id/1286660007/pt/foto/beautician-measuring-brows-with-ruler.webp?a=1&b=1&s=612x612&w=0&k=20&c=yUhc8BzH2_6itvTms7Jz-dIhlCvo6F0wZzYjrZNW9Lo=" alt="Sobrancelha">
                        <div class="gallery-overlay">
                            <h5 class="text-white">Design de Sobrancelhas</h5>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1622336889416-8d790ad807d7?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8c2FsJUMzJUEzbyUyMGRlJTIwYmVsZXphfGVufDB8fDB8fHww" alt="Maquiagem">
                        <div class="gallery-overlay">
                            <h5 class="text-white">Maquiagem</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contato -->
    <section id="contact" class="py-5">
        <div class="container">
            <h2 class="section-title text-center">Agende seu Horário</h2>
            <p class="text-center mb-5">Estamos ansiosos para cuidar de você</p>
            
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="contact-form">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Seu Nome" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" placeholder="Seu E-mail" required>
                                </div>
                            </div>
                            <input type="tel" class="form-control" placeholder="Seu Telefone" required>
                            <select class="form-select form-control">
                                <option selected>Selecione um serviço</option>
                                <option>Corte e Penteado</option>
                                <option>Coloração</option>
                                <option>Tratamento Capilar</option>
                                <option>Manicure/Pedicure</option>
                                <option>Design de Sobrancelhas</option>
                                <option>Maquiagem</option>
                            </select>
                            <input type="date" class="form-control" required>
                            <textarea class="form-control" rows="4" placeholder="Mensagem (opcional)"></textarea>
                            <button type="submit" class="btn btn-primary w-100">Agendar Horário</button>
                        </form>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="p-4">
                        <h4 class="mb-4">Informações de Contato</h4>
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <i class="fas fa-map-marker-alt text-primary me-2"></i>
                                <strong>Endereço:</strong> Av. Paulista, 1000 - São Paulo/SP
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-phone-alt text-primary me-2"></i>
                                <strong>Telefone:</strong> (11) 9999-8888
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-envelope text-primary me-2"></i>
                                <strong>E-mail:</strong> contato@elegancebeauty.com.br
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-clock text-primary me-2"></i>
                                <strong>Horário de Funcionamento:</strong><br>
                                Segunda a Sexta: 9h às 20h<br>
                                Sábado: 9h às 18h<br>
                                Domingo: Fechado
                            </li>
                        </ul>
                        
                        <div class="mt-4">
                            <h5 class="mb-3">Siga-nos</h5>
                            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Rodapé -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h4 class="footer-title">Elegance Beauty</h4>
                    <p>Transformando autoestima e realçando beleza desde 2010. Seu bem-estar é nossa prioridade.</p>
                    <div class="mt-4">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-pinterest-p"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h4 class="footer-title">Links Rápidos</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#home" class="text-white text-decoration-none">Início</a></li>
                        <li class="mb-2"><a href="#about" class="text-white text-decoration-none">Sobre Nós</a></li>
                        <li class="mb-2"><a href="#services" class="text-white text-decoration-none">Serviços</a></li>
                        <li class="mb-2"><a href="#team" class="text-white text-decoration-none">Equipe</a></li>
                        <li class="mb-2"><a href="#gallery" class="text-white text-decoration-none">Galeria</a></li>
                        <li><a href="#contact" class="text-white text-decoration-none">Contato</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-4">
                    <h4 class="footer-title">Newsletter</h4>
                    <p>Inscreva-se para receber nossas promoções e novidades</p>
                    <form>
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Seu e-mail">
                            <button class="btn btn-primary botao" type="submit">Inscrever</button>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="copyright text-center">
                <p class="mb-0">&copy; 2023 Elegance Beauty. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

@endsection