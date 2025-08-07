<div class="container" id="precos" data-aos="zoom-in-down" data-aos-duration="2000">
    <header>
        <h2 class="text-center mt-lg-5 mt-3 display-4 fw-bold">Meus <span class="text-gradient">Preços</span></h2>
        <div class="CONTATO-divider"></div>            
        <p class="info-plan">Oferecemos soluções completas para sua presença online - da criação à manutenção contínua. Escolha o plano ideal para o seu negócio e orçamento.</p>
    </header>
    
    <div class="pricing-container" id="scrollBox">
        <script>
            const pai = document.getElementById('scrollBox');

            function scrollY(valor) {
              pai.scrollBy({ top: valor, behavior: 'smooth' });
            }

            function scrollX(valor) {
              pai.scrollBy({ left: valor, behavior: 'smooth' });
            }            
        </script>           
        @php
            $plans = [
                [
                    'id' => 'micro',
                    'name' => 'Micro',
                    'price' => '49',
                    'tag' => 'Iniciante',
                    'description' => '"Pare de perder dinheiro e comece a ganhar." Transforme R$ 49 em um site profissional. Com apenas 2 novos clientes por mês que gastem R$ 25,00 cada, você já recupera o investimento. O ROI é instantâneo. "Por que não dar um passo adiante?" Com mais R$ 50,00 por mês, o Plano Básico te dá um site com mais páginas e recursos para acelerar seu crescimento.',
                    'benefits' => [
                        'Site de 1 página (cartão de visita online)',
                        'Criação de site prioritária (sujeito à disponibilidade)',
                        'Design responsivo',
                        'SEO básico para visibilidade',
                        'Hospedagem de 5GB SSD',
                        'Domínio grátis (enquanto for assinante)',
                        'Manutenção e suporte grátis agendado via WhatsApp (prioridade baixa)',
                        'Formulário de contato',
                        'Certificado SSL grátis',
                        'Backup semanal automático',
                        '1 conta de e-mail profissional'
                    ],
                    'ideal_for' => 'Ideal para quem está dando o primeiro passo',
                    'price_id' => 'price_1Rtd6DATrxUtVNls55TD2FwV'
                ],
                [
                    'id' => 'basico',
                    'name' => 'Básico',
                    'price' => '99',
                    'tag' => null,
                    'description' => '"Seu negócio pronto para decolar." Seu site vai trabalhar 24h por dia. Com R$ 99, você investe na sua visibilidade. Com 4 novos clientes por mês, que gastem R$ 25,00 cada, você já paga o plano e lucra. É a garantia de mais visibilidade e retorno. "Pronto para impressionar?" Com apenas mais R$ 50,00 por mês, o Plano Essencial te dá um site com mais páginas e recursos para acelerar seu crescimento.',
                    'benefits' => [
                        'Site de até 5 páginas',
                        'Criação de site prioritária (sujeito à disponibilidade)',
                        'Design responsivo',
                        'SEO para ranqueamento',
                        'Hospedagem premium de 10GB SSD',
                        'Domínio grátis (enquanto for assinante)',
                        'Manutenção e suporte grátis agendado via WhatsApp (prioridade média)',
                        'Integração com redes sociais',
                        'Certificado SSL grátis',
                        'Relatório mensal de desempenho (Google Analytics)',
                        '3 contas de e-mail profissional',
                        'Backup diário automático'
                    ],
                    'ideal_for' => 'Para pequenos negócios que querem crescer',
                    'price_id' => 'price_1Rtd6zATrxUtVNlslxYeAk0i'
                ],
                [
                    'id' => 'essencial',
                    'name' => 'Essencial',
                    'price' => '149',
                    'tag' => 'Popular',
                    'description' => '"Um site que gera resultados reais." Para quem leva o crescimento a sério. Por R$ 149,00, você atrai os clientes certos com otimização de SEO avançada. Com 5 novos clientes por mês, que gastem R$ 30,00 cada, o retorno já compensa o investimento. Sua marca ganha autoridade e impressiona. "Quer mostrar seus produtos de forma profissional?" Com apenas R$ 50,00 a mais por mês, o Plano Profissional te dá um site com mais páginas e recursos para acelerar seu crescimento.',
                    'benefits' => [
                        'Site de até 15 páginas com galeria de produtos',
                        'Criação de site prioritária (sujeito à disponibilidade)',
                        'Design exclusivo e responsivo',
                        'SEO avançado',
                        'Hospedagem avançada de 20GB SSD',
                        'Domínio grátis (enquanto for assinante)',
                        'Manutenção e suporte grátis agendado via WhatsApp (prioridade alta)',
                        'Galeria de produtos/serviços',
                        'Ambiente de testes (staging)',
                        'Backup semanal automático',
                        '5 contas de e-mail profissional'
                    ],
                    'ideal_for' => 'Para negócios em crescimento que buscam autoridade',
                    'price_id' => 'price_1Rt85EPSFtrJEyUPK8H2s7E7'
                ],
                [
                    'id' => 'profissional',
                    'name' => 'Profissional',
                    'price' => '199',
                    'tag' => null,
                    'description' => '"Mais clientes, mais conversão, mais presença." Por R$ 199,00, você investe em um site com agendamento online, galeria de produtos e recursos pensados para gerar resultados. Com apenas 6 clientes por mês que gastem R$ 35,00 cada, você já recupera seu investimento e potencializa seu faturamento. "Quer vender ainda mais?" Com apenas R$ 50,00 a mais por mês, o Plano Avançado oferece uma loja virtual completa para transformar visitantes em compradores 24h por dia.',
                    'benefits' => [
                        'Site institucional completo com SEO',
                        'Formulário de orçamento e botão de WhatsApp flutuante',
                        'Agendamento online integrado',
                        'Design exclusivo e responsivo',
                        'SEO Avançado e Local SEO',
                        'Hospedagem premium de 30GB SSD',
                        'Domínio grátis (enquanto for assinante)',
                        'Backup diário automático',
                        '5 contas de e-mail profissional',
                        'Manutenção e suporte grátis agendado via WhatsApp (prioridade alta)',
                        'Ambiente de testes (staging)'
                    ],
                    'ideal_for' => 'Para empresas que querem converter mais e escalar',
                    'price_id' => 'price_1Rt86VPSFtrJEyUPfUS70vfM'
                ],
                [
                    'id' => 'avancado',
                    'name' => 'Avançado',
                    'price' => '249',
                    'tag' => null,
                    'description' => '"Sua loja aberta 24/7." É o seu atalho para o mundo das vendas online. Por R$ 249,00, você investe em uma loja virtual completa e segura. Vendendo apenas 8 produtos de R$ 35,00, você já cobre o custo do plano e tem a chance de vender a qualquer momento, para qualquer lugar. "Pronto para escalar?" Com apenas mais R$ 150,00 por mês, o Plano Master te dá uma loja virtual completa para começar a faturar 24/7, com ferramentas de gestão avançada.',
                    'benefits' => [
                        'Loja virtual com até 50 produtos',
                        'Criação de site prioritária (sujeito à disponibilidade)',
                        'Design exclusivo e responsivo',
                        'Integração com meios de pagamento e logística',
                        'Hospedagem empresarial de 50GB SSD',
                        '1 domínio grátis (enquanto for assinante)',
                        'Manutenção e suporte grátis agendado via WhatsApp (prioridade urgente)',
                        'Páginas ilimitadas',
                        'Certificado SSL premium',
                        'SEO avançado',
                        'Backup diário',
                        'Suporte 24/6 (WhatsApp e e-mail)'
                    ],
                    'ideal_for' => 'Para empresas prontas para vender online',
                    'price_id' => 'price_1Rt8A5PSFtrJEyUPWvDK3zVT'
                ],
                [
                    'id' => 'master',
                    'name' => 'Master',
                    'price' => '599',
                    'tag' => null,
                    'description' => '"Escalabilidade ilimitada e automação total." O plano definitivo para grandes empresas. Por R$ 599,00, você terá um e-commerce sem limites, que se integra com seus sistemas internos para automatizar tudo. Com apenas 18 vendas de R$ 35,00, você cobre o investimento. O retorno não está apenas em vendas, mas na otimização de toda a sua operação e na construção de um império digital.',
                    'benefits' => [
                        'E-commerce ilimitado e integrações com sistemas',
                        'Aplicação web complexa (gestão de estoque, cotação online, etc.)',
                        'Hospedagem dedicada de 100GB SSD',
                        'Criação de site prioritária (sujeito à disponibilidade)',
                        '5 domínios grátis (enquanto for assinante)',
                        'Manutenção e suporte grátis agendado via WhatsApp (prioridade extrema)',
                        'Sistema de gerenciamento de conteúdo',
                        'Integração com APIs externas',
                        'Segurança avançada',
                        'Design exclusivo e responsivo',
                        'SEO completo',
                        'Consultoria estratégica mensal',
                        'Suporte 24/7 (WhatsApp e e-mail)',
                        'Backup e recuperação de desastres (diário)'
                    ],
                    'ideal_for' => 'Para grandes empresas que buscam o topo',
                    'price_id' => 'price_1Rt8BWPSFtrJEyUPaF7RDRjt'
                ]
            ];
        @endphp

        @foreach($plans as $plan)
        <div class="pricing-card">
            @if($plan['tag'])
                <div class="tag">{{ $plan['tag'] }}</div>
            @endif
            
            <div class="card-header">
                <h2>{{ $plan['name'] }}</h2>
                <div class="price">R$ {{ $plan['price'] }}<span>/mês</span></div>
                <p>{{ $plan['ideal_for'] }}</p>
            </div>
            
            <div class="card-body">
                <div class="card-description">
                    <p>{{ $plan['description'] }}</p>
                </div>
                
                <button class="toggle-btn toggle-description">
                    <span>Ver mais</span>
                    <i class="fas fa-chevron-down"></i>
                </button>
                
                <div class="benefits-title">
                    <h3>Benefícios</h3>
                    <button class="toggle-btn toggle-benefits">
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
                
                <ul class="benefits-list">
                    @foreach($plan['benefits'] as $benefit)
                        <li><i class="fas fa-check-circle"></i> {{ $benefit }}</li>
                    @endforeach
                </ul>
            </div>
            
            <div class="card-footer">
                @guest
                    <a href="register" class="btn-subscribe">Tenha uma conta primeiro</a>
                @endguest     

                @auth
                    @if(auth()->user()->contract_status === 'contract_accepted')
                        @if(Auth::user()->subscription('main_subscription') && Auth::user()->subscription('main_subscription')->canceled() == 0)
                            <a href="{{route('dashboard')}}" class="btn-subscribe btn-trigger-modal"> Tem um plano ativo</a>
                        @else
                            <div class="conteudo-real">
                                <form action="{{ route('subscription.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="plan" value="main_subscription">
                                    <input type="hidden" name="price_id" value="{{ $plan['price_id'] }}">
                                    <button type="submit" class="btn-subscribe">Assinar Plano</button>
                                </form>                                
                            </div>                        
                        @endif
                    @else
                        <div class="botao-falso">
                            <button type="button" class="btn-subscribe btn-trigger-modal" data-plan="{{ $plan['id'] }}">Assinar Plano</button>
                        </div>
                    @endif
                @endauth
            </div>
        </div>  
        @endforeach
    </div>
    <button class="botao-scroll botao-voltar" onclick="scrollX(-300)"><i class="fas fa-arrow-left"></i> Anterior</button>   
    <button class="botao-scroll botao-passar" onclick="scrollX(+300)">Próximo <i class="fas fa-arrow-right"></i> </button>

</div>

<!-- Modal de contrato -->
@auth
    @if(auth()->user()->contract_status !== 'contract_accepted')
        <div id="contractModal" class="modal">
            <div class="modal-content">
                <i class="fa-solid fa-xmark close-modal"></i>
                <h2>Contrato de Uso</h2>
                <a href="{{route('info-contrato')}}" class="info-contrato"><i class="fa-solid fa-file-contract"></i> Leia os termos do contrato</a>
                <a href="{{ route('contract.download') }}" class="download-contract" target="_blank">
                    <i class="fas fa-file-pdf"></i> Baixar contrato em PDF
                </a>  

                <div class="form-check">
                    <input type="checkbox" id="acceptCheckbox">
                    <label for="acceptCheckbox" class="form-check-label">Li e aceito os termos do contrato</label>
                </div>

            <form method="POST" action="{{ route('contract.accept') }}" st>
                @csrf
                <input type="hidden" name="accepted" id="acceptedInput" value="0"> <!-- Valor padrão 0 (recusar) -->
                
                <p class="contract-info">Marque a caixa <q>Li e aceito os termos do contrato</q> para prosseguir com a assinatura.</p>                    
                <div>
                    <button type="submit" class="btn btn-success" id="acceptBtn" disabled
                            onclick="event.preventDefault(); document.getElementById('acceptedInput').value = '1'; this.closest('form').submit();">
                        Aceito os termos
                    </button>
                    <button type="submit" class="btn btn-danger" id="denyBtn"
                            onclick="event.preventDefault(); document.getElementById('acceptedInput').value = '0'; this.closest('form').submit();">
                        Não aceito os termos
                    </button>
                </div>
            </form>
            </div>
        </div>
    @endif
@endauth
