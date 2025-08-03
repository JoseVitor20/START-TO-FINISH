<div class="container" id="precos" data-aos="zoom-in-down" data-aos-duration="2000">
    <header>
        <h2 class="text-center mt-lg-5 mt-3 display-4 fw-bold">Meus <span class="text-gradient">Preços</span></h2>
        <div class="CONTATO-divider"></div>            
        <p class="info-plan">Oferecemos soluções completas para sua presença online - da criação à manutenção contínua. Escolha o plano ideal para o seu negócio e orçamento.</p>
    </header>
    
    <div class="pricing-container">
        @php
            // Array com a definição dos planos de serviço
            $plans = [
                [
                    'id' => 'basico',
                    'name' => 'Básico',
                    'price' => '149',
                    'tag' => null,
                    'description' => 'Perfeito para quem está começando. Inclui criação de site SPA grátis, manutenção, hospedagem, domínio e outros recursos essenciais para estabelecer sua presença online de forma eficiente. **ROI na Prática:** Se o seu site trouxer 10 novos clientes por mês, e cada um gastar uma média de R$ 40, o faturamento mensal será de R$ 400, com lucro de R$ 200. Sendo assim, o plano se paga e ainda gera lucro. Compensa mudar para o Plano Essencial, que custa só mais R$ 50,00 por mês, para alcançar um público maior. São R$ 4,97 por dia, no mês dá R$ 149,00.',
                    'benefits' => [
                        'Site SPA (Single Page Application)',
                        'Design responsivo',
                        'Otimização de SEO básica para visibilidade online',
                        'Hospedagem incluída (5GB SSD)',
                        'Domínio grátis (1 ano)',
                        'Manutenção e suporte gerenciados por um painel exclusivo no site (1 solicitação por mês)',
                        '3 páginas principais',
                        'Formulário de contato'
                    ],
                    'ideal_for' => 'Ideal para iniciantes',
                    'price_id' => 'price_1RjQtlPSFtrJEyUPc3gxFVIzprice_1RjQsDPSFtrJEyUP3fhEZkGT'
                ],
                [
                    'id' => 'essencial',
                    'name' => 'Essencial',
                    'price' => '199',
                    'tag' => 'Popular',
                    'description' => 'O plano essencial oferece criação de site MPA grátis, manutenção, hospedagem e domínio. Ideal para empresas que precisam de uma presença online profissional com recursos avançados. **ROI na Prática:** Se o seu site trouxer 10 novos clientes por mês, e cada um gastar uma média de R$ 70, o faturamento será de R$ 700 e o lucro de R$ 350. Sendo assim, o plano se paga e ainda aumenta sua base de clientes. Compensar mudar para o Plano Avançado, que custa só mais R$ 70,00 por mês, para obter um site mais robusto e alcançar um público ainda maior. São R$ 6,63 por dia, no mês dá R$ 199,00.',
                    'benefits' => [
                        'Site MPA (Multi Page Application)',
                        'Design responsivo',
                        'Hospedagem premium (10GB SSD)',
                        'Domínio grátis (1 ano)',
                        'Manutenção e suporte gerenciados por um painel exclusivo no site (1 solicitação a cada 15 dias)',
                        'Até 8 páginas',
                        'Integração com redes sociais',
                        'Otimização de SEO básica para ranqueamento',
                        'Certificado SSL grátis (https)',
                        'Ambiente de Staging (versões de teste)'
                    ],
                    'ideal_for' => 'Para pequenos negócios',
                    'price_id' => 'price_1RjQtlPSFtrJEyUPc3gxFVIz'
                ],
                [
                    'id' => 'avancado',
                    'name' => 'Avançado',
                    'price' => '269',
                    'tag' => null,
                    'description' => 'Solução completa com criação de site institucional grátis, manutenção, hospedagem e domínio. Perfeito para empresas que buscam uma presença online robusta e profissional. **ROI na Prática:** Com recursos avançados de SEO, se o seu site trouxer 20 novos clientes por mês, e cada um gastar uma média de R$ 90, o faturamento será de R$ 1.800, com lucro de R$ 900. Sendo assim, você justifica o investimento e cria um negócio mais sólido. Compensa mudar para o Plano Premium, que custa só mais R$ 80,00 por mês, e permite começar a vender online com e-commerce. São R$ 8,97 por dia, no mês dá R$ 269,00.',
                    'benefits' => [
                        'Site Institucional completo',
                        'Design exclusivo e responsivo',
                        'Hospedagem avançada (20GB SSD)',
                        'Domínio grátis (1 ano)',
                        'Manutenção e suporte prioritário gerenciados por um painel exclusivo no site (1 solicitação por semana)',
                        'Até 15 páginas',
                        'Otimização de SEO avançada',
                        'Galeria de produtos/serviços',
                        'Integração com Google Analytics e APIs',
                        'Ambiente de Staging (versões de teste)',
                        'Backup semanal automático'
                    ],
                    'ideal_for' => 'Para negócios em crescimento',
                    'price_id' => 'price_1RjQtlPSFtrJEyUPc3gxFVIz'
                ],
                [
                    'id' => 'premium',
                    'name' => 'Premium',
                    'price' => '349',
                    'tag' => null,
                    'description' => 'Plano completo com recursos avançados para empresas que exigem alta performance, funcionalidades complexas e suporte premium. Inclui todas as vantagens dos planos anteriores e muito mais. **ROI na Prática:** Com um e-commerce básico, se o seu site gerar 30 novos clientes por mês, e cada um fizer compras de cerca de R$ 100, o faturamento será de R$ 3.000, com lucro de R$ 1.500. Sendo assim, o plano se paga e ainda abre a possibilidade de vendas 24/7. Compensa mudar para o Plano Master, que custa só mais R$ 100,00 por mês e permite expandir o catálogo de produtos e ter funcionalidades avançadas. São R$ 11,63 por dia, no mês dá R$ 349,00.',
                    'benefits' => [
                        'Site premium com design exclusivo',
                        'Hospedagem empresarial (50GB SSD)',
                        '2 domínios grátis (1 ano)',
                        'Manutenção e atualizações diárias via painel do cliente (1 solicitação por dia)',
                        'Páginas ilimitadas',
                        'E-commerce básico (até 50 produtos)',
                        'Certificado SSL premium',
                        'Otimização de SEO avançada',
                        'Backup diário',
                        'Suporte 24/7 por telefone'
                    ],
                    'ideal_for' => 'Para empresas estabelecidas',
                    'price_id' => 'price_1RjQtlPSFtrJEyUPc3gxFVIz'
                ],
                [
                    'id' => 'master',
                    'name' => 'Master',
                    'price' => '449',
                    'tag' => null,
                    'description' => 'O plano definitivo para grandes empresas. Oferece todos os recursos, suporte máximo e funcionalidades premium. Ideal para corporações que exigem o máximo em desempenho, segurança e personalização. **ROI na Prática:** Com um e-commerce avançado e recursos empresariais, se o seu site trouxer 50 novos clientes por mês, e cada um fizer compras de cerca de R$ 100, o faturamento será de R$ 5.000, com lucro de R$ 2.500. Este é o plano definitivo para o seu negócio, garantindo um alto retorno sobre o investimento. São R$ 14,97 por dia, no mês dá R$ 449,00.',
                    'benefits' => [
                        'Aplicação web complexa',
                        'Hospedagem dedicada (100GB SSD)',
                        '5 domínios grátis (1 ano)',
                        'Manutenção e atualizações diárias via painel do cliente (1 solicitação por dia)',
                        'E-commerce avançado',
                        'Sistema de gerenciamento de conteúdo',
                        'Integração com APIs externas',
                        'Segurança avançada',
                        'Design exclusivo e responsivo',
                        'Otimização de SEO completa',
                        'Consultoria estratégica mensal',
                        'Suporte dedicado 24/7'
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
