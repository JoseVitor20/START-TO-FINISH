<section id="sobre" class="py-5" data-aos="zoom-in-down" data-aos-duration="2000">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2 class="display-4 fw-bold">Sobre <span class="text-gradient">Mim</span></h2>
            <div class="header-divider"></div>
            <p class="lead">Conheça mais sobre minha jornada profissional e habilidades</p>
        </div>
        <div class="row">
            <!-- Coluna da Foto -->
            <div class="col-xl-4 mb-lg-5 mb-0">
                <div class="profile-card text-center">
                    <div class="profile-image-container">
                        <img src="{{asset('img/perfil-social.png')}}" alt="Minha Foto" class="img-fluid rounded-circle shadow">
                        <div class="image-border animate-spin"></div>
                    </div>
                    <h3 class="mt-4 text-gradient">José Vitor N.L</h3>
                    <span>START TO FINISH</span>
                    <p></p>                    
                    <h4>Desenvolvedor Full Stack | Criador de Soluções Digitais</h4>
                    <a class="btn btn-outline-light btn-lg" href="https://github.com/JoseVitor20" target="_blank"><i class="fab fa-github fa-lg"></i> Link para meu <strong>Github</strong></a>
                </div>
            </div>
            <!-- Coluna do Conteúdo -->
            <div class="col-xl-8">
                <!-- Abas de Navegação -->
                <ul class="nav nav-tabs mb-4" id="aboutTabs" role="tablist">
                    <li class="col-lg-3 col-6 mb-md-3 mb-3 nav-item" role="presentation">
                        <button class="btn mx-lg-0 mx-auto nav-link active" id="resumo-tab" data-bs-toggle="tab" data-bs-target="#resumo" type="button" role="tab">Profissional</button>
                    </li>
                    <li class="col-lg-3 col-6 mb-md-3 mb-3 nav-item" role="presentation">
                        <button class="btn mx-lg-0 mx-auto nav-link" id="tecnico-tab" data-bs-toggle="tab" data-bs-target="#tecnico" type="button" role="tab">Técnico</button>
                    </li>
                    <li class="col-lg-3 col-6 mb-md-3 mb-3 nav-item" role="presentation">
                        <button class="btn mx-lg-0 mx-auto nav-link" id="experiencia-tab" data-bs-toggle="tab" data-bs-target="#experiencia" type="button" role="tab">Experiência</button>
                    </li>
                    <li class="col-lg-3 col-6 mb-md-3 mb-3 nav-item" role="presentation">
                        <button class="btn mx-lg-0 mx-auto nav-link" id="roadmap-tab" data-bs-toggle="tab" data-bs-target="#roadmap" type="button" role="tab">Trajetória</button>
                    </li>
                </ul>
                <!-- Conteúdo das Abas -->
                <div class="tab-content" id="aboutTabsContent">
                    <!-- Profissional -->
                    <div class="tab-pane fade show active" id="resumo" role="tabpanel">
                        <div class="resumo-profissional">
                            <h4 class="mb-4">Resumo Profissional</h4>
                            <p>Profissional Full Stack com três anos de experiência desenvolvendo aplicações web escaláveis, seguras e com alto desempenho. Domínio de tecnologias como HTML5, CSS3, Bootstrap 5, JavaScript, PHP 8, Laravel 11 e MySQL. Forte atuação em arquitetura de sistemas, otimização de código e solução de desafios técnicos em ambientes exigentes.</p>
                            <div class="highlights mt-4">
                                <div class="highlight-item d-flex mb-3">
                                    <div class="icon-box me-3">
                                        <i class="fas fa-bullseye text-primary"></i>
                                    </div>
                                    <div>
                                        <h5>Objetivo Profissional</h5>
                                        <p class="mb-0">Busco oportunidades desafiadoras onde possa aplicar minha experiência em desenvolvimento web para criar produtos inovadores que impactem positivamente os usuários.</p>
                                    </div>
                                </div>
                                <div class="highlight-item d-flex mb-3">
                                    <div class="icon-box me-3">
                                        <i class="fas fa-trophy text-primary"></i>
                                    </div>
                                    <div>
                                        <h5>Principais Conquistas</h5>
                                        <ul>
                                            <li>Criação de E-commerces completos.</li>
                                            <li>Redução de 40% no tempo de carregamento de aplicação.</li>
                                            <li>Publicação automatizada em menos de 1 minuto.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Técnico -->
                    <div class="tab-pane fade" id="tecnico" role="tabpanel">
                        <h4>Resumo Técnico</h4>
                        <!-- Filtros por Categoria -->
                        <div class="mb-4">
                            <div class="btn-group btn-group-sm" role="group">
                                <button type="button" class="btn px-lg-3 py-lg-2 py-2 btn-outline-primary active" data-filter="all">Todas</button>
                                <button type="button" class="btn px-lg-3 py-lg-2 py-2 btn-outline-primary" data-filter="frontend">Front-end</button>
                                <button type="button" class="btn px-lg-3 py-lg-2 py-2 btn-outline-primary" data-filter="backend">Back-end</button>
                                <button type="button" class="btn px-lg-3 py-lg-2 py-2 btn-outline-primary" data-filter="devops">DevOps</button>
                            </div>
                        </div>
                        <!-- Grid de Habilidades -->
                        <div class="skills-grid row g-3">
                            <!-- Front-end -->
                            <div class="col-6 col-md-4 col-lg-3 skill-item" data-category="frontend">
                                <div class="skill-card">
                                    <div class="skill-img">
                                        <img src="{{asset('img/icons/html.png')}}" alt="html">
                                    </div>
                                    <h6>HTML5</h6>
                                    <div class="skill-level">
                                        <div class="level-bar" style="width: 95%"></div>
                                    </div>
                                    <span class="skill-percent">95%</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 skill-item" data-category="frontend">
                                <div class="skill-card">
                                    <div class="skill-img">
                                        <img src="{{asset('img/icons/css-3.png')}}" alt="css">
                                    </div>
                                    <h6>CSS3</h6>
                                    <div class="skill-level">
                                        <div class="level-bar" style="width: 85%"></div>
                                    </div>
                                    <span class="skill-percent">85%</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 skill-item" data-category="frontend">
                                <div class="skill-card">
                                    <div class="skill-img">
                                        <img src="{{asset('img/icons/js.png')}}" alt="javaScript">
                                    </div>
                                    <h6>JavaScript</h6>
                                    <div class="skill-level">
                                        <div class="level-bar" style="width: 75%"></div>
                                    </div>
                                    <span class="skill-percent">75%</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 skill-item" data-category="frontend">
                                <div class="skill-card">
                                    <div class="skill-img">
                                        <img src="{{asset('img/icons/react-native.png')}}" alt="react">
                                    </div>
                                    <h6>React 19</h6>
                                    <div class="skill-level">
                                        <div class="level-bar" style="width: 70%"></div>
                                    </div>
                                    <span class="skill-percent">70%</span>
                                </div>
                            </div>
                            <!-- Back-end -->
                            <div class="col-6 col-md-4 col-lg-3 skill-item" data-category="frontend">
                                <div class="skill-card">
                                    <div class="skill-img">
                                        <img src="{{asset('img/icons/typescript.png')}}" alt="typescript">
                                    </div>
                                    <h6>Typescript</h6>
                                    <div class="skill-level">
                                        <div class="level-bar" style="width: 75%"></div>
                                    </div>
                                    <span class="skill-percent">75%</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 skill-item" data-category="frontend">
                                <div class="skill-card">
                                    <div class="skill-img">
                                        <img src="{{asset('img/icons/react-native.png')}}" alt="react-native">
                                    </div>
                                    <h6>React Native</h6>
                                    <div class="skill-level">
                                        <div class="level-bar" style="width: 55%"></div>
                                    </div>
                                    <span class="skill-percent">55%</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 skill-item" data-category="frontend">
                                <div class="skill-card">
                                    <div class="skill-img">
                                        <img src="{{asset('img/icons/bootstrap.png')}}" alt="bootstrap">
                                    </div>
                                    <h6>Bootstrap 5</h6>
                                    <div class="skill-level">
                                        <div class="level-bar" style="width: 85%"></div>
                                    </div>
                                    <span class="skill-percent">85%</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 skill-item" data-category="frontend">
                                <div class="skill-card">
                                    <div class="skill-img">
                                        <img src="{{asset('img/icons/sass.png')}}" alt="sass">
                                    </div>
                                    <h6>SASS</h6>
                                    <div class="skill-level">
                                        <div class="level-bar" style="width: 85%"></div>
                                    </div>
                                    <span class="skill-percent">85%</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 skill-item" data-category="backend">
                                <div class="skill-card">
                                    <div class="skill-img">
                                        <img src="{{asset('img/icons/php.png')}}" alt="php">
                                    </div>
                                    <h6>PHP 8</h6>
                                    <div class="skill-level">
                                        <div class="level-bar" style="width: 80%"></div>
                                    </div>
                                    <span class="skill-percent">80%</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 skill-item" data-category="backend">
                                <div class="skill-card">
                                    <div class="skill-img">
                                        <img src="{{asset('img/icons/laravel.png')}}" alt="laravel">
                                    </div>
                                    <h6>Laravel 11</h6>
                                    <div class="skill-level">
                                        <div class="level-bar" style="width: 90%"></div>
                                    </div>
                                    <span class="skill-percent">90%</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 skill-item" data-category="backend">
                                <div class="skill-card">
                                    <div class="skill-img">
                                        <img src="{{asset('img/icons/mysql.png')}}" alt="mysql">
                                    </div>
                                    <h6>mySQL</h6>
                                    <div class="skill-level">
                                        <div class="level-bar" style="width: 75%"></div>
                                    </div>
                                    <span class="skill-percent">75%</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 skill-item" data-category="backend">
                                <div class="skill-card">
                                    <div class="skill-img">
                                        <img src="{{asset('img/icons/sqlite.png')}}" alt="sqlite">
                                    </div>
                                    <h6>SQLite</h6>
                                    <div class="skill-level">
                                        <div class="level-bar" style="width: 70%"></div>
                                    </div>
                                    <span class="skill-percent">70%</span>
                                </div>
                            </div>
                            <!-- DevOps -->
                            <div class="col-6 col-md-4 col-lg-3 skill-item" data-category="devops">
                                <div class="skill-card">
                                    <div class="skill-img">
                                        <img src="{{asset('img/icons/git.png')}}" alt="git">
                                    </div>
                                    <h6>Git</h6>
                                    <div class="skill-level">
                                        <div class="level-bar" style="width: 85%"></div>
                                    </div>
                                    <span class="skill-percent">85%</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 skill-item" data-category="devops">
                                <div class="skill-card">
                                    <div class="skill-img">
                                        <img src="{{asset('img/icons/playwright.png')}}" alt="playwright">
                                    </div>
                                    <h6>Playwright</h6>
                                    <div class="skill-level">
                                        <div class="level-bar" style="width: 80%"></div>
                                    </div>
                                    <span class="skill-percent">80%</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 skill-item" data-category="devops">
                                <div class="skill-card">
                                    <div class="skill-img">
                                        <img src="{{asset('img/icons/gulp.png')}}" alt="gulp">
                                    </div>
                                    <h6>Gulp</h6>
                                    <div class="skill-level">
                                        <div class="level-bar" style="width: 95%"></div>
                                    </div>
                                    <span class="skill-percent">95%</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 skill-item" data-category="devops">
                                <div class="skill-card">
                                    <div class="skill-img">
                                        <img src="{{asset('img/icons/webpack.png')}}" alt="webpack">
                                    </div>
                                    <h6>Webpack</h6>
                                    <div class="skill-level">
                                        <div class="level-bar" style="width: 70%"></div>
                                    </div>
                                    <span class="skill-percent">70%</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 skill-item" data-category="devops">
                                <div class="skill-card">
                                    <div class="skill-img">
                                        <img src="{{asset('img/icons/expo.png')}}" alt="expo">
                                    </div>
                                    <h6>Expo</h6>
                                    <div class="skill-level">
                                        <div class="level-bar" style="width: 65%"></div>
                                    </div>
                                    <span class="skill-percent">65%</span>
                                </div>
                            </div>
                            <!-- Adicione mais habilidades conforme necessário -->
                        </div>
                    </div>
                    <!-- Experiência -->
                    <div class="tab-pane fade" id="experiencia" role="tabpanel">
                        <h4 class="mb-4">Minha Experiência</h4>
                        <div class="timeline">
                            <div class="timeline-item">
                                <div class="timeline-date">2025 <br> 2024</div>
                                <div class="timeline-content">
                                    <h4>Desenvolvedor Full-Stack</h4>
                                    <h5><strong class="text-gradient">></strong> Criador de Soluções Digitais</h5>
                                    <ul>
                                        <li>Diminuo o carregamento de sua aplicação web.</li>
                                        <li>Faço sua aplicação aparecer entre os primeiros nos motores de buscas.</li>
                                        <li>Faço teste de automação para garantir que tudo funcione corretamente antes da publicação.</li>
                                        <li>E muito mais.</li>
                                    </ul>
                                    <hr>
                                    <h5><strong class="text-gradient">></strong> Otimização de aplicações web</h5>
                                    <ul>
                                        <li>Criação de sites dinâmicos.</li>
                                        <li>Painéis de controle.</li>
                                        <li>Portal de notícias.</li>
                                        <li>Chat Online.</li>
                                        <li>Envio de E-mails.</li>
                                        <li>Métodos de pagamento.</li>
                                        <li>Loja virtual/E-Commerce.</li>
                                        <li>Publicação de aplicações na internet.</li>
                                        <li>SEO, Analytics e Google WebMaster Tools.</li>
                                        <li>Motor de buscas.</li>
                                        <li>Chatbot.</li>
                                        <li>E muito mais.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-date">2024 <br> 2023</div>
                                <div class="timeline-content">
                                    <h4>Curso Back-End</h4>
                                    <h5><strong class="text-gradient">></strong> PHP Jedai (<a href="https://dankicode.com/">Danki Code</a>)</h5>
                                    <ul>
                                        <li>Gerenciamento de Domínio e Hospedagem.</li>
                                        <li>PHP 8.</li>
                                        <li>Laravel 11.</li>
                                        <li>Banco de dados.</li>
                                        <li>Web Services e API.</li>
                                        <li>Segurança no PHP.</li>
                                        <li>Bibliotecas PHP.</li>
                                        <li>Backup.</li>
                                        <li>E muito mais.</li>
                                    </ul>
                                    <hr>
                                    <h5><strong class="text-gradient">></strong> Curso Web Completo</h5>
                                    <ul>
                                        <li>Criação de sites dinâmicos.</li>
                                        <li>Painéis de controle.</li>
                                        <li>Portal de notícias.</li>
                                        <li>Chat Online.</li>
                                        <li>Envio de E-mails.</li>
                                        <li>Métodos de pagamento.</li>
                                        <li>Loja virtual/E-Commerce.</li>
                                        <li>Publicação de aplicações na internet.</li>
                                        <li>SEO, Analytics e Google WebMaster Tools.</li>
                                        <li>Motor de buscas.</li>
                                        <li>Chatbot.</li>
                                        <li>E muito mais.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-date">2023 <br> 2022</div>
                                <div class="timeline-content">
                                    <h4>Curso Front-End</h4>
                                    <h5><strong class="text-gradient">></strong> Curso Webmaster Front-End Completo (<a href="https://dankicode.com/">Danki Code</a>)</h5>
                                    <ul>
                                        <li>HTML5</li>
                                        <li>CSS3</li>
                                        <li>Javascript</li>
                                        <li>React</li>
                                        <li>Typescript</li>
                                        <li>E muito mais.</li>
                                    </ul>
                                    <hr>
                                    <h5><strong class="text-gradient">></strong> Curso Front-End Completo 2.0 (<a href="https://dankicode.com/">Danki Code</a>)</h5>
                                    <ul>
                                        <li>HTML5 Moderno</li>
                                        <li>CSS3 Moderno</li>
                                        <li>Javascript Moderno</li>
                                        <li>Bootstrap 5</li>
                                        <li>Design Responsivo</li>
                                        <li>E muito mais.</li>
                                    </ul>
                                    <hr>
                                    <h5><strong class="text-gradient">></strong> Curso Lógica de Programação (<a href="https://dankicode.com/">Danki Code</a>)</h5>
                                    <ul>
                                        <li>Entendendo a lógica em diferentes linguagens.</li>
                                        <li>Sintaxes e conceitos gerais.</li>
                                        <li>Analise e inspeção de sistemas.</li>
                                        <li>Situações práticas e algoritmos.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-date">2023 <br> 2022</div>
                                <div class="timeline-content">
                                    <h4>Curso de Informática</h4>
                                    <h5><strong class="text-gradient">></strong> Central Computadores ((67) 99605-2004)</h5>
                                    <ul>
                                        <li>IPD</li>
                                        <li>Windows</li>
                                        <li>Microsoft Office Word, Excel e PowerPoint.</li>
                                        <li>Internet</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tragetória -->
                    <div class="tab-pane fade" id="roadmap" role="tabpanel">
                        <h4 class="mb-4">Meu Roadmap Pessoal</h4>
                        <div class="roadmap-container">
                            <div class="roadmap-phase">
                                <div class="phase-header">
                                    <div class="phase-icon"><i class="fas fa-graduation-cap"></i></div>
                                    <h5>Introdução ao Interesse em Tecnologia</h5>
                                </div>
                                <div class="phase-content">
                                    <q>Sou desenvolvedor web há mais de três anos, e meu interesse por tecnologia começou em 2022, quando decidi deixar meu trabalho como assistente de vendas e comprei meu primeiro computador de mesa. A partir desse momento, iniciei a busca por uma carreira que me permitisse trabalhar diretamente com o computador e evoluir constantemente. Explorei várias áreas relacionadas, como administração, design, edição de imagens e vídeos, mas nenhuma delas me cativava, pois sentia que não ofereciam muito espaço para crescimento. Em uma dessas buscas, descobri o desenvolvimento web. No início, achei que haveria uma longa lista de pré-requisitos, mas logo percebi que não era como eu imaginava. Então, comecei a estudar e me aprofundar no assunto — e, desde então, minha busca chegou ao fim, pois encontrei o caminho que realmente me motiva.</q>
                                </div>
                            </div>
                            <div class="roadmap-phase">
                                <div class="phase-header">
                                    <div class="phase-icon"><i class="fas fa-code"></i></div>
                                    <h5>Primeiros Passos no Desenvolvimento Web</h5>
                                </div>
                                <div class="phase-content">
                                    <q>Iniciei minha carreira nessa área devido à falta de cursos profissionalizantes relacionados à manutenção de dispositivos eletrônicos em minha cidade. No início da minha jornada no desenvolvimento web, enfrentei muitos desafios — especialmente em relação aos requisitos exigidos pelo mercado de trabalho. A lista de exigências parecia interminável, e por vezes pensei que jamais conseguiria alcançá-las. No entanto, percebi que, à medida que me dedicava aos estudos, meu aprendizado evoluía constantemente. Com essa percepção, decidi que, se persistisse, alcançaria meu objetivo de atuar na área. Assim, passei a estudar de 10 a 12 horas por dia, até atingir minhas metas e conquistar meu espaço no mercado.</q>
                                </div>
                            </div>
                            <div class="roadmap-phase">
                                <div class="phase-header">
                                    <div class="phase-icon"><i class="fas fa-layer-group"></i></div>
                                    <h5>Habilidades e Tecnologias Adquiridas</h5>
                                </div>
                                <div class="phase-content">
                                    <q>Com o passar do tempo, meu conhecimento evoluiu para incluir tecnologias como HTML, CSS, Sass, SCSS, Less, Bootstrap, JavaScript, TypeScript, PHP e frameworks como Laravel, React e React Native. Também me familiarizei com diversas ferramentas de desenvolvimento web, como Git, Gulp, Playwright, Docker, WordPress, Webpack e Vite, que expandiram minha visão para novas possibilidades no desenvolvimento.</q>
                                </div>
                            </div>
                            <div class="roadmap-phase">
                                <div class="phase-header">
                                    <div class="phase-icon"><i class="fas fa-chart-line"></i></div>
                                    <h5>Projetos Relevantes</h5>
                                </div>
                                <div class="phase-content">
                                    <q>Alguns dos projetos que mais me desafiaram envolveram a criação de e-commerces, sites institucionais pessoais, sistemas de reembolso e diversos painéis de controle para administradores. Essas experiências me ensinaram a importância de escrever um código limpo e bem documentado, além de trabalhar com versionamento continuo para entregar soluções escaláveis.</q>
                                </div>
                            </div>
                            <div class="roadmap-phase future">
                                <div class="phase-header">
                                    <div class="phase-icon"><i class="fas fa-rocket"></i></div>
                                    <h5>Visão para o Futuro</h5>
                                </div>
                                <div class="phase-content">
                                    <q>Atualmente, estou focado em aprofundar meus conhecimentos em DevOps e na otimização de desempenho em aplicações web, além de explorar novas tecnologias, como arquitetura serverless e automação de fluxos de trabalho com a plataforma n8n. Meu objetivo é continuar desenvolvendo soluções e colaborando em projetos que realmente façam a diferença para os usuários dos meus serviços.</q>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>