<div class="container" id="precos" data-aos="zoom-in-down" data-aos-duration="2000">
    <header>
        <h2 class="text-center mt-lg-5 mt-3 display-4 fw-bold">Meus <span class="text-gradient">Preços</span></h2>
        <div class="CONTATO-divider"></div>            
        <p class="info-plan">Oferecemos soluções completas para sua presença online - da criação à manutenção contínua. Escolha o plano ideal para o seu negócio e orçamento.</p>
    </header>
    
    <div class="pricing-container">
        @php
            // Array com a definição dos planos de serviço com ROI aprimorado e termos mais amigáveis
            $plans = [
                [
                    'id' => 'basico',
                    'name' => 'Básico',
                    'price' => '149',
                    'tag' => null,
                    'description' => 'Perfeito para quem está começando. Inclui a criação de um site de uma única página grátis, manutenção, hospedagem, domínio e outros recursos essenciais para estabelecer sua presença online de forma eficiente. **ROI na Prática:** Com o seu site no ar, imagine atrair apenas 5 novos clientes por mês, cada um gerando um gasto médio de R$ 30. Isso resulta em um faturamento mensal de R$ 150, cobrindo o custo do plano. A medida que seu negócio cresce, com um site mais robusto e otimizado, o retorno potencial aumenta significativamente. Compensa considerar o Plano Essencial, que custa apenas R$ 50,00 a mais por mês, para ampliar seu alcance. São R$ 4,97 por dia, no mês dá R$ 149,00.',
                    'benefits' => [
                        'Site de uma única página (Gratuito)',
                        'A criação do site terá prioridade, desde que não haja outros sites sendo criados no momento.',
                        'Design responsivo',
                        'Otimização de SEO básica para visibilidade online',
                        'Hospedagem incluída (5GB SSD)',
                        'Domínio grátis, desde que seja assinante do plano.',
                        'Manutenção e suporte por agendamento via WhatsApp com prioridade baixa (Grátis)',
                        '3 seções principais', // Alterei '3 páginas principais' para '3 seções principais' para ser mais coerente com um site de uma única página
                        'Formulário de contato',
                        'Instalação de certificado SSL grátis',
                        'Backup semanal automático',
                        '1 conta de e-mail profissional'
                    ],
                    'ideal_for' => 'Ideal para iniciantes',
                    'price_id' => 'price_1RjQtlPSFtrJEyUPc3gxFVIzprice_1RjQsDPSFtrJEyUP3fhEZkGT'
                ],
                [
                    'id' => 'essencial',
                    'name' => 'Essencial',
                    'price' => '199',
                    'tag' => 'Popular',
                    'description' => 'O plano essencial oferece a criação de um site com várias páginas grátis, manutenção, hospedagem e domínio. Ideal para empresas que precisam de uma presença online profissional com recursos avançados. **ROI na Prática:** Com a maior visibilidade do seu site e o ranqueamento no Google, você pode facilmente atrair 8 novos clientes por mês, cada um com um gasto médio de R$ 50. O faturamento de R$ 400 por mês paga o plano e ainda gera lucro, além de construir uma base de clientes sólida. A próxima etapa é o Plano Avançado, que custa só mais R$ 70,00 por mês, para um site com mais páginas e recursos, alcançando um público ainda maior. São R$ 6,63 por dia, no mês dá R$ 199,00.',
                    'benefits' => [
                        'Site com várias páginas (Gratuito)',
                        'A criação do site terá prioridade, desde que não haja outros sites sendo criados no momento.',                        
                        'Design responsivo',
                        'Hospedagem premium (10GB SSD)',
                        'Domínio grátis, desde que seja assinante do plano.',
                        'Manutenção e suporte por agendamento via WhatsApp com prioridade média (Grátis)',
                        'Até 8 páginas',
                        'Integração com redes sociais',
                        'Otimização de SEO básica para ranqueamento',
                        'Certificado SSL grátis (https)',
                        'Ambiente de Staging (versões de teste)',
                        'Relatório mensal de desempenho (Google Analytics)',
                        '5 contas de e-mail profissional',
                        'Backup diário automático'
                    ],
                    'ideal_for' => 'Para pequenos negócios',
                    'price_id' => 'price_1RjQtlPSFtrJEyUPc3gxFVIz'
                ],
                [
                    'id' => 'avancado',
                    'name' => 'Avançado',
                    'price' => '269',
                    'tag' => null,
                    'description' => 'Solução completa com a criação de um site institucional grátis, manutenção, hospedagem e domínio. Perfeito para empresas que buscam uma presença online robusta e profissional. **ROI na Prática:** Com a otimização de SEO avançada, seu site pode facilmente atrair 15 novos clientes por mês, cada um com um gasto médio de R$ 60. Isso gera um faturamento de R$ 900 por mês, cobrindo o investimento e criando um negócio mais sólido. O upgrade para o Plano Premium, com um custo de apenas R$ 80,00 por mês, te permite começar a vender online e expandir as oportunidades de faturamento. São R$ 8,97 por dia, no mês dá R$ 269,00.',
                    'benefits' => [
                        'Site Institucional completo (Gratuito)',
                        'A criação do site terá prioridade, desde que não haja outros sites sendo criados no momento.',                        
                        'Design exclusivo e responsivo',
                        'Hospedagem avançada (20GB SSD)',
                        'Domínio grátis, desde que seja assinante do plano.',
                        'Manutenção e suporte por agendamento via WhatsApp com prioridade alta(Grátis)',
                        'Até 15 páginas',
                        'Otimização de SEO avançada',
                        'Galeria de produtos/serviços',
                        'Integração com Google Analytics e APIs',
                        'Ambiente de Staging (versões de teste)',
                        'Backup semanal automático',
                        '10 contas de e-mail profissional',
                        'Suporte prioritário via WhatsApp e Telefone',
                        'Ferramenta de Chat Online integrada'
                    ],
                    'ideal_for' => 'Para negócios em crescimento',
                    'price_id' => 'price_1RjQtlPSFtrJEyUPc3gxFVIz'
                ],
                [
                    'id' => 'premium',
                    'name' => 'Premium',
                    'price' => '349',
                    'tag' => null,
                    'description' => 'Plano completo com recursos avançados para empresas que exigem alta performance, funcionalidades complexas e suporte premium. Inclui todas as vantagens dos planos anteriores e muito mais. **ROI na Prática:** Com um e-commerce básico e um design exclusivo, você pode facilmente converter 20 novos clientes por mês com um gasto médio de R$ 100. Isso gera um faturamento de R$ 2.000 mensais, cobrindo o plano e abrindo a possibilidade de vendas 24/7. O próximo passo é o Plano Master, por mais R$ 100,00 por mês, para um e-commerce sem limites de produtos e com funcionalidades que otimizam sua operação e faturamento. São R$ 11,63 por dia, no mês dá R$ 349,00.',
                    'benefits' => [
                        'Site premium com design exclusivo (Gratuito)',
                        'A criação do site terá prioridade, desde que não haja outros sites sendo criados no momento.',                        
                        'Hospedagem empresarial (50GB SSD)',
                        '2 domínios grátis, desde que seja assinante do plano.',
                        'Manutenção e suporte por agendamento via WhatsApp com prioridade urgente(Grátis)',
                        'Páginas ilimitadas',
                        'E-commerce básico (até 50 produtos)',
                        'Certificado SSL premium',
                        'Otimização de SEO avançada',
                        'Backup diário',
                        'Suporte 24/7 por telefone',
                        'E-commerce com até 100 produtos',
                        'Relatórios de e-commerce e vendas mensais',
                        'Integração com gateways de pagamento e logística'
                    ],
                    'ideal_for' => 'Para empresas estabelecidas',
                    'price_id' => 'price_1RjQtlPSFtrJEyUPc3gxFVIz'
                ],
                [
                    'id' => 'master',
                    'name' => 'Master',
                    'price' => '449',
                    'tag' => null,
                    'description' => 'O plano definitivo para grandes empresas. Oferece todos os recursos, suporte máximo e funcionalidades premium. Ideal para corporações que exigem o máximo em desempenho, segurança e personalização. **ROI na Prática:** Com um e-commerce avançado e integrações com seus sistemas de gestão (ERP/CRM), você pode otimizar suas vendas e converter facilmente 40 novos clientes por mês com um gasto médio de R$ 100. Isso resulta em um faturamento de R$ 4.000 mensais, garantindo um alto retorno sobre o investimento e escalabilidade para o seu negócio. São R$ 14,97 por dia, no mês dá R$ 449,00.',
                    'benefits' => [
                        'Aplicação web complexa (Gratuito)',
                        'Hospedagem dedicada (100GB SSD)',
                        'A criação do site terá prioridade, desde que não haja outros sites sendo criados no momento.',                        
                        '5 domínios grátis, desde que seja assinante do plano.',
                        'Manutenção e suporte por agendamento via WhatsApp com prioridade extrema(Grátis)',
                        'E-commerce avançado',
                        'Sistema de gerenciamento de conteúdo',
                        'Integração com APIs externas',
                        'Segurança avançada',
                        'Design exclusivo e responsivo',
                        'Otimização de SEO completa',
                        'Consultoria estratégica mensal',
                        'Suporte dedicado 24/7',
                        'Backup e recuperação de desastres (Diário)',
                        'E-commerce sem limite de produtos',
                        'Integrações personalizadas com ERP/CRM',
                        'IP dedicado para alta performance'
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
                <a href="{{route('info-contrato')}}">Esses são os termos do contrato...</a>
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
