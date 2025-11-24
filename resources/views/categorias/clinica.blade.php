@extends('layouts.app')

@section('title', 'VitaCare - Clínica Médica Integrada')

@push('estilosEcodigos')
    <link rel="stylesheet" href="{{ asset('css/categorias/clinica.css') }}">
    <script type="module" src="{{ asset('js/categorias/clinica.js') }}"></script>      
@endpush

@section('content')
    <!-- Barra de Navegação -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary-custom fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <i class="bi bi-heart-pulse fs-3 me-2"></i>
                <span class="fw-bold">VitaCare</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#inicio">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#servicos">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#medicos">Médicos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sobre">Sobre Nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contato">Contato</a>
                    </li>
                </ul>
                <a href="#agendamento" class="btn btn-light ms-lg-3 btn-primary-custom text-white">Agendar Consulta</a>
            </div>
        </div>
    </nav>

    <!-- Seção Hero -->
    <section class="hero-section d-flex align-items-center" id="inicio">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Cuidando da sua saúde com excelência</h1>
                    <p class="lead mb-4">Na VitaCare, oferecemos atendimento médico personalizado com tecnologia de ponta e profissionais altamente qualificados.</p>
                    <div class="d-flex gap-3">
                        <a href="#agendamento" class="btn btn-primary-custom btn-lg text-white">Agendar Consulta</a>
                        <a href="#servicos" class="btn btn-outline-light btn-lg">Nossos Serviços</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção Serviços -->
    <section class="py-5" id="servicos">
        <div class="container py-5">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="fw-bold text-primary-custom">Nossos Serviços</h2>
                    <p class="lead">Oferecemos uma gama completa de serviços médicos para cuidar de você e sua família</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="service-card card h-100">
                        <div class="card-body text-center p-4">
                            <div class="icon-box bg-primary bg-opacity-10 text-primary rounded-circle p-3 d-inline-block mb-3">
                                <i class="bi bi-heart-pulse fs-2"></i>
                            </div>
                            <h4 class="card-title">Cardiologia</h4>
                            <p class="card-text">Exames e tratamentos para manter seu coração saudável, com equipamentos de última geração.</p>
                            <a href="#" class="btn btn-outline-primary">Saiba mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card card h-100">
                        <div class="card-body text-center p-4">
                            <div class="icon-box bg-primary bg-opacity-10 text-primary rounded-circle p-3 d-inline-block mb-3">
                                <i class="bi bi-lungs fs-2"></i>
                            </div>
                            <h4 class="card-title">Pneumologia</h4>
                            <p class="card-text">Cuidados respiratórios completos, desde diagnósticos até tratamentos especializados.</p>
                            <a href="#" class="btn btn-outline-primary">Saiba mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card card h-100">
                        <div class="card-body text-center p-4">
                            <div class="icon-box bg-primary bg-opacity-10 text-primary rounded-circle p-3 d-inline-block mb-3">
                                <i class="bi bi-bandaid fs-2"></i>
                            </div>
                            <h4 class="card-title">Dermatologia</h4>
                            <p class="card-text">Tratamentos para pele, cabelos e unhas, com abordagem preventiva e curativa.</p>
                            <a href="#" class="btn btn-outline-primary">Saiba mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card card h-100">
                        <div class="card-body text-center p-4">
                            <div class="icon-box bg-primary bg-opacity-10 text-primary rounded-circle p-3 d-inline-block mb-3">
                                <i class="bi bi-eye fs-2"></i>
                            </div>
                            <h4 class="card-title">Oftalmologia</h4>
                            <p class="card-text">Cuidados com a visão, exames de rotina e tratamentos para doenças oculares.</p>
                            <a href="#" class="btn btn-outline-primary">Saiba mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card card h-100">
                        <div class="card-body text-center p-4">
                            <div class="icon-box bg-primary bg-opacity-10 text-primary rounded-circle p-3 d-inline-block mb-3">
                                <i class="bi bi-bone fs-2"></i>
                            </div>
                            <h4 class="card-title">Ortopedia</h4>
                            <p class="card-text">Tratamento de lesões e doenças do sistema musculoesquelético com técnicas avançadas.</p>
                            <a href="#" class="btn btn-outline-primary">Saiba mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card card h-100">
                        <div class="card-body text-center p-4">
                            <div class="icon-box bg-primary bg-opacity-10 text-primary rounded-circle p-3 d-inline-block mb-3">
                                <i class="bi bi-activity fs-2"></i>
                            </div>
                            <h4 class="card-title">Exames Laboratoriais</h4>
                            <p class="card-text">Laboratório completo com exames clínicos, imagem e diagnósticos precisos.</p>
                            <a href="#" class="btn btn-outline-primary">Saiba mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção Sobre Nós -->
    <section class="py-5 bg-light" id="sobre">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Clínica VitaCare" class="img-fluid rounded-3 shadow">
                </div>
                <div class="col-lg-6">
                    <h2 class="fw-bold text-primary-custom mb-4">Sobre a VitaCare</h2>
                    <p class="lead">Há mais de 15 anos cuidando da saúde e bem-estar de nossos pacientes.</p>
                    <p>Fundada em 2008, a VitaCare nasceu da visão de oferecer medicina humanizada aliada à tecnologia de ponta. Nossa equipe é composta por profissionais altamente qualificados e comprometidos com o cuidado integral do paciente.</p>
                    <p>Possuímos certificação de excelência pela Associação Médica Brasileira e somos reconhecidos por nosso atendimento personalizado e infraestrutura moderna.</p>
                    <div class="row mt-4">
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-box bg-primary bg-opacity-10 text-primary rounded-circle p-2 me-3">
                                    <i class="bi bi-people fs-4"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0">+50.000</h5>
                                    <small class="text-muted">Pacientes atendidos</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-box bg-primary bg-opacity-10 text-primary rounded-circle p-2 me-3">
                                    <i class="bi bi-award fs-4"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0">+20</h5>
                                    <small class="text-muted">Prêmios de excelência</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-box bg-primary bg-opacity-10 text-primary rounded-circle p-2 me-3">
                                    <i class="bi bi-building fs-4"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0">5</h5>
                                    <small class="text-muted">Unidades</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-box bg-primary bg-opacity-10 text-primary rounded-circle p-2 me-3">
                                    <i class="bi bi-person-vcard fs-4"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0">+80</h5>
                                    <small class="text-muted">Especialistas</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção Médicos -->
    <section class="py-5" id="medicos">
        <div class="container py-5">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="fw-bold text-primary-custom">Nossos Especialistas</h2>
                    <p class="lead">Conheça nosso time de médicos altamente qualificados</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="doctor-card card">
                        <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="card-img-top" alt="Dra. Ana Silva">
                        <div class="card-body text-center">
                            <h5 class="card-title">Dra. Ana Silva</h5>
                            <p class="text-muted">Cardiologista</p>
                            <p class="card-text small">CRM: 12345/SP</p>
                            <div class="d-flex justify-content-center gap-2">
                                <a href="#" class="btn btn-sm btn-outline-primary">Perfil</a>
                                <a href="#agendamento" class="btn btn-sm btn-primary-custom text-white">Agendar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="doctor-card card">
                        <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1064&q=80" class="card-img-top" alt="Dr. Carlos Mendes">
                        <div class="card-body text-center">
                            <h5 class="card-title">Dr. Carlos Mendes</h5>
                            <p class="text-muted">Ortopedista</p>
                            <p class="card-text small">CRM: 54321/SP</p>
                            <div class="d-flex justify-content-center gap-2">
                                <a href="#" class="btn btn-sm btn-outline-primary">Perfil</a>
                                <a href="#agendamento" class="btn btn-sm btn-primary-custom text-white">Agendar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="doctor-card card">
                        <img src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=987&q=80" class="card-img-top" alt="Dra. Juliana Costa">
                        <div class="card-body text-center">
                            <h5 class="card-title">Dra. Juliana Costa</h5>
                            <p class="text-muted">Dermatologista</p>
                            <p class="card-text small">CRM: 67890/SP</p>
                            <div class="d-flex justify-content-center gap-2">
                                <a href="#" class="btn btn-sm btn-outline-primary">Perfil</a>
                                <a href="#agendamento" class="btn btn-sm btn-primary-custom text-white">Agendar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="doctor-card card">
                        <img src="https://images.unsplash.com/photo-1651008376811-b90baee60c1f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=987&q=80" class="card-img-top" alt="Dr. Roberto Almeida">
                        <div class="card-body text-center">
                            <h5 class="card-title">Dr. Roberto Almeida</h5>
                            <p class="text-muted">Oftalmologista</p>
                            <p class="card-text small">CRM: 09876/SP</p>
                            <div class="d-flex justify-content-center gap-2">
                                <a href="#" class="btn btn-sm btn-outline-primary">Perfil</a>
                                <a href="#agendamento" class="btn btn-sm btn-primary-custom text-white">Agendar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="#" class="btn btn-outline-primary">Ver todos os especialistas</a>
            </div>
        </div>
    </section>

    <!-- Seção Depoimentos -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="fw-bold text-primary-custom">Depoimentos</h2>
                    <p class="lead">O que nossos pacientes dizem sobre nós</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="testimonial-card card h-100 border-0 bg-white p-4">
                        <div class="card-body">
                            <div class="mb-3 text-warning">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p class="card-text fst-italic">"Excelente atendimento! A Dra. Ana foi muito atenciosa e resolveu meu problema cardíaco que outros médicos não haviam diagnosticado."</p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Maria Souza" class="rounded-circle me-3" width="50">
                                <div>
                                    <h6 class="mb-0">Maria Souza</h6>
                                    <small class="text-muted">Paciente de Cardiologia</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card card h-100 border-0 bg-white p-4">
                        <div class="card-body">
                            <div class="mb-3 text-warning">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p class="card-text fst-italic">"O Dr. Carlos fez minha cirurgia no joelho e hoje posso voltar a jogar futebol com meus amigos. Profissional incrível e humano!"</p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="João Santos" class="rounded-circle me-3" width="50">
                                <div>
                                    <h6 class="mb-0">João Santos</h6>
                                    <small class="text-muted">Paciente de Ortopedia</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card card h-100 border-0 bg-white p-4">
                        <div class="card-body">
                            <div class="mb-3 text-warning">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </div>
                            <p class="card-text fst-italic">"A clínica tem uma estrutura maravilhosa e todos são muito atenciosos. A Dra. Juliana resolveu meu problema de pele que durava anos."</p>
                            <div class="d-flex align-items-center mt-4">
                                <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Ana Paula" class="rounded-circle me-3" width="50">
                                <div>
                                    <h6 class="mb-0">Ana Paula</h6>
                                    <small class="text-muted">Paciente de Dermatologia</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção Agendamento -->
    <section class="py-5" id="agendamento">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="appointment-form p-4 p-md-5">
                        <div class="text-center mb-5">
                            <h2 class="fw-bold text-primary-custom">Agende sua Consulta</h2>
                            <p>Preencha o formulário abaixo e entraremos em contato para confirmar seu agendamento</p>
                        </div>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="nome" class="form-label">Nome Completo</label>
                                    <input type="text" class="form-control" id="nome" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="telefone" class="form-label">Telefone</label>
                                    <input type="tel" class="form-control" id="telefone" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="data" class="form-label">Data Preferencial</label>
                                    <input type="date" class="form-control" id="data" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="especialidade" class="form-label">Especialidade</label>
                                    <select class="form-select" id="especialidade" required>
                                        <option value="" selected disabled>Selecione</option>
                                        <option value="Cardiologia">Cardiologia</option>
                                        <option value="Ortopedia">Ortopedia</option>
                                        <option value="Dermatologia">Dermatologia</option>
                                        <option value="Oftalmologia">Oftalmologia</option>
                                        <option value="Pneumologia">Pneumologia</option>
                                        <option value="Clínico Geral">Clínico Geral</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="medico" class="form-label">Médico (opcional)</label>
                                    <select class="form-select" id="medico">
                                        <option value="" selected>Qualquer médico</option>
                                        <option value="Dra. Ana Silva">Dra. Ana Silva</option>
                                        <option value="Dr. Carlos Mendes">Dr. Carlos Mendes</option>
                                        <option value="Dra. Juliana Costa">Dra. Juliana Costa</option>
                                        <option value="Dr. Roberto Almeida">Dr. Roberto Almeida</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="mensagem" class="form-label">Mensagem (opcional)</label>
                                    <textarea class="form-control" id="mensagem" rows="3"></textarea>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="termos" required>
                                        <label class="form-check-label" for="termos">
                                            Concordo com os termos de uso e política de privacidade
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 text-center mt-4">
                                    <button type="submit" class="btn btn-primary-custom btn-lg px-5 text-white">Enviar Agendamento</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção Contato -->
    <section class="py-5 bg-light" id="contato">
        <div class="container py-5">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="fw-bold text-primary-custom">Entre em Contato</h2>
                    <p class="lead">Estamos à disposição para tirar suas dúvidas</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card border-0 bg-white h-100">
                        <div class="card-body text-center p-4">
                            <div class="icon-box bg-primary bg-opacity-10 text-primary rounded-circle p-3 d-inline-block mb-3">
                                <i class="bi bi-geo-alt fs-2"></i>
                            </div>
                            <h4 class="card-title">Endereço</h4>
                            <p class="card-text">Av. Paulista, 1000<br>São Paulo - SP<br>CEP: 01310-100</p>
                            <a href="#" class="btn btn-outline-primary">Ver no mapa</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 bg-white h-100">
                        <div class="card-body text-center p-4">
                            <div class="icon-box bg-primary bg-opacity-10 text-primary rounded-circle p-3 d-inline-block mb-3">
                                <i class="bi bi-telephone fs-2"></i>
                            </div>
                            <h4 class="card-title">Telefone</h4>
                            <p class="card-text">(11) 1234-5678<br>(11) 98765-4321 (WhatsApp)</p>
                            <p class="card-text">Segunda a Sexta: 8h às 19h<br>Sábado: 8h às 13h</p>
                            <a href="#" class="btn btn-outline-primary">Ligar agora</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 bg-white h-100">
                        <div class="card-body text-center p-4">
                            <div class="icon-box bg-primary bg-opacity-10 text-primary rounded-circle p-3 d-inline-block mb-3">
                                <i class="bi bi-envelope fs-2"></i>
                            </div>
                            <h4 class="card-title">E-mail</h4>
                            <p class="card-text">contato@vitacare.com.br<br>emergencia@vitacare.com.br</p>
                            <p class="card-text">Respondemos em até 24h nos dias úteis</p>
                            <a href="#" class="btn btn-outline-primary">Enviar e-mail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mapa -->
    <div class="container-fluid p-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.197584455882!2d-46.65867592437136!3d-23.56134617880086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59c8da0aa315%3A0xd59f9431f2c9776a!2sAv.%20Paulista%2C%201000%20-%20Bela%20Vista%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2001310-100!5e0!3m2!1spt-BR!2sbr!4v1689874726036!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <!-- Rodapé -->
    <footer class="footer pt-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <h5 class="text-white mb-4">
                        <i class="bi bi-heart-pulse me-2"></i> VitaCare
                    </h5>
                    <p>Cuidando da sua saúde com excelência, tecnologia e humanização desde 2008.</p>
                    <div class="d-flex gap-3 mt-4">
                        <a href="#" class="text-white"><i class="bi bi-facebook fs-4"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-instagram fs-4"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-linkedin fs-4"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-youtube fs-4"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <h5 class="text-white mb-4">Links Rápidos</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#inicio">Início</a></li>
                        <li class="mb-2"><a href="#servicos">Serviços</a></li>
                        <li class="mb-2"><a href="#medicos">Médicos</a></li>
                        <li class="mb-2"><a href="#sobre">Sobre Nós</a></li>
                        <li class="mb-2"><a href="#contato">Contato</a></li>
                        <li class="mb-2"><a href="#agendamento">Agendamento</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4">
                    <h5 class="text-white mb-4">Serviços</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#">Cardiologia</a></li>
                        <li class="mb-2"><a href="#">Ortopedia</a></li>
                        <li class="mb-2"><a href="#">Dermatologia</a></li>
                        <li class="mb-2"><a href="#">Oftalmologia</a></li>
                        <li class="mb-2"><a href="#">Pneumologia</a></li>
                        <li class="mb-2"><a href="#">Exames</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4">
                    <h5 class="text-white mb-4">Newsletter</h5>
                    <p>Assine nossa newsletter para receber dicas de saúde e novidades.</p>
                    <form class="mt-4">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Seu e-mail">
                            <button class="btn btn-primary-custom text-white" type="button">Assinar</button>
                        </div>
                    </form>
                </div>
            </div>
            <hr class="my-4 bg-light">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; 2023 VitaCare. Todos os direitos reservados.</p>
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

    <!-- Botão Voltar ao Topo -->
    <a href="#" class="btn btn-primary-custom btn-lg rounded-circle position-fixed bottom-0 end-0 m-4 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
        <i class="bi bi-arrow-up"></i>
    </a>
@endsection