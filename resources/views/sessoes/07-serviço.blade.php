<div class="container" id="precos" data-aos="zoom-in-down" data-aos-duration="2000">
    <header>
        <h2 class="text-center mt-lg-5 mt-3 display-4 fw-bold">Meus <span class="text-gradient">Preços</span></h2>
        <div class="CONTATO-divider"></div>            
        <p class="info-plan">Oferecemos soluções completas para sua presença online - da criação à manutenção contínua. Escolha o plano ideal para o seu negócio e orçamento.</p>
    </header>
    
    <div class="pricing-container">
        @php
            $plans = [
                [
                    'id' => 'basico',
                    'name' => 'Básico',
                    'price' => '70',
                    'tag' => null,
                    'description' => 'Perfeito para quem está começando. Inclui criação de site SPA grátis, manutenção, hospedagem, domínio e outros recursos essenciais para estabelecer sua presença online de forma eficiente.',
                    'benefits' => [
                        'Site SPA (Single Page Application)',
                        'Hospedagem incluída (5GB)',
                        'Domínio grátis (1 ano)',
                        'Manutenção básica mensal',
                        '3 páginas principais',
                        'Formulário de contato',
                        'Suporte por e-mail'
                    ],
                    'ideal_for' => 'Ideal para iniciantes',
                    'price_id' => 'price_1RjQtlPSFtrJEyUPc3gxFVIzprice_1RjQsDPSFtrJEyUP3fhEZkGT'
                ],
                [
                    'id' => 'essencial',
                    'name' => 'Essencial',
                    'price' => '130',
                    'tag' => 'Popular',
                    'description' => 'O plano essencial oferece criação de site MPA grátis, manutenção, hospedagem e domínio. Ideal para empresas que precisam de uma presença online profissional com recursos avançados.',
                    'benefits' => [
                        'Site MPA (Multi Page Application)',
                        'Hospedagem premium (10GB)',
                        'Domínio grátis (1 ano)',
                        'Manutenção quinzenal',
                        'Até 8 páginas',
                        'Integração com redes sociais',
                        'SEO básico',
                        'Suporte por e-mail e chat'
                    ],
                    'ideal_for' => 'Para pequenos negócios',
                    'price_id' => 'price_1RjQtlPSFtrJEyUPc3gxFVIz'
                ],
                [
                    'id' => 'avancado',
                    'name' => 'Avançado',
                    'price' => '290',
                    'tag' => null,
                    'description' => 'Solução completa com criação de site institucional grátis, manutenção, hospedagem e domínio. Perfeito para empresas que buscam uma presença online robusta e profissional.',
                    'benefits' => [
                        'Site Institucional completo',
                        'Hospedagem avançada (20GB)',
                        'Domínio grátis (1 ano)',
                        'Manutenção semanal',
                        'Até 15 páginas',
                        'SEO avançado',
                        'Galeria de produtos/serviços',
                        'Integração com Google Analytics',
                        'Suporte prioritário'
                    ],
                    'ideal_for' => 'Para negócios em crescimento',
                    'price_id' => 'price_1RjQtlPSFtrJEyUPc3gxFVIz'
                ],
                [
                    'id' => 'premium',
                    'name' => 'Premium',
                    'price' => '550',
                    'tag' => null,
                    'description' => 'Plano completo com recursos avançados para empresas que exigem alta performance, funcionalidades complexas e suporte premium. Inclui todas as vantagens dos planos anteriores e muito mais.',
                    'benefits' => [
                        'Site premium com design exclusivo',
                        'Hospedagem empresarial (50GB)',
                        '2 domínios grátis (1 ano)',
                        'Manutenção contínua',
                        'Páginas ilimitadas',
                        'E-commerce básico',
                        'Certificado SSL premium',
                        'Backup diário',
                        'Suporte 24/7 por telefone'
                    ],
                    'ideal_for' => 'Para empresas estabelecidas',
                    'price_id' => 'price_1RjQtlPSFtrJEyUPc3gxFVIz'
                ],
                [
                    'id' => 'master',
                    'name' => 'Master',
                    'price' => '1.150',
                    'tag' => null,
                    'description' => 'O plano definitivo para grandes empresas. Oferece todos os recursos, suporte máximo e funcionalidades premium. Ideal para corporações que exigem o máximo em desempenho, segurança e personalização.',
                    'benefits' => [
                        'Aplicação web complexa',
                        'Hospedagem dedicada (100GB)',
                        '5 domínios grátis (1 ano)',
                        'Manutenção e atualizações diárias',
                        'E-commerce avançado',
                        'Sistema de gerenciamento de conteúdo',
                        'Integração com APIs externas',
                        'Segurança avançada',
                        'Suporte dedicado 24/7',
                        'Consultoria estratégica mensal'
                    ],
                    'ideal_for' => 'Solução empresarial completa',
                    'price_id' => 'price_1RjQtlPSFtrJEyUPc3gxFVIz'
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
                        <div class="conteudo-real">
                            <form action="{{ route('subscription.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="plan" value="{{ $plan['id'] }}_subscription">
                                <input type="hidden" name="price_id" value="{{ $plan['price_id'] }}">
                                <button type="submit" class="btn-subscribe">Assinar Plano</button>
                            </form>                                
                        </div>
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
</div>

<!-- Modal de contrato -->
@auth
    @if(auth()->user()->contract_status !== 'contract_accepted')
        <div id="contractModal" class="modal">
            <div class="modal-content">
                <i class="fa-solid fa-xmark close-modal"></i>
                <h2>Contrato de Uso</h2>
                <p>Esses são os termos do contrato...</p>
                <a href="{{ asset('contrato.pdf') }}" download class="download-contract">
                    <i class="fas fa-file-pdf"></i> Baixar contrato em PDF
                </a>

                <div class="form-check">
                    <input type="checkbox" id="acceptCheckbox">
                    <label for="acceptCheckbox" class="form-check-label">Li e aceito os termos do contrato</label>
                </div>

                <form method="POST" action="{{ route('contract.accept') }}">
                    @csrf
                    <input type="hidden" name="accepted" id="acceptedInput" value="1">
                    <input type="hidden" name="plan_id" id="modalPlanId" value="">

                    <!-- Dentro do formulário do modal, atualize os botões: -->
                    <div class="modal-buttons">
                        <button type="submit" class="btn btn-success" id="acceptBtn" disabled>
                            Aceito os termos
                        </button>
                        <button type="submit" class="btn btn-danger" id="denyBtn" name="accepted" value="0">
                            Não aceito
                        </button>
                    </div>
                </form>
            </div>
        </div>
    @endif
@endauth
