@extends('layouts.layout-dashboard')

@section('title', 'Start To Finish - Comprovante!')

@push('estilosEcodigosDash')
    @vite(['resources/css/dashboard/dashboard.css', 'resources/js/dashboard/dashboard.js'])
@endpush

@section('content')
    <div class="success-wrapper">
        <main class="success-main">
            <section class="success-hero">
                @if(ucfirst($subscription->stripe_status) == 'Active')
                    <h1 class="success-title">🎉 Assinatura Concluída!</h1>
                    <p class="success-subtitle">Sua assinatura foi processada com sucesso. Abaixo estão todos os detalhes da sua compra.</p>
                    <h3 class="status-badge-sucesso status-active status-ativo">ATIVO</h3>
                @elseif(ucfirst($subscription->stripe_status) == 'Trialing')
                    <h1 class="success-title">🧪Assinatura De Teste Iniciada!</h1>
                    <p class="success-subtitle">Sua assinatura de teste foi iniciada com sucesso. Abaixo estão todos os detalhes da assinatura de teste.</p>
                    <h3 class="status-badge-sucesso status-active status-testando">TESTANDO</h3>
                @else
                    <h1 class="success-title">🚫Assinatura Cancelada!</h1>
                    <p class="success-subtitle">Sua assinatura foi cancelada com sucesso. Abaixo estão todos os detalhes do cancelamento.</p>
                    <h3 class="status-badge-sucesso status-active status-desativado">DESATIVADO</h3>
                @endif
            </section>

            <div class="success-content">
                <aside class="success-aside">
                    <div class="info-section-sucesso">
                        <h3 class="section-title-sucesso">Seus Dados</h3>
                        <div class="info-grid">
                            <div class="info-item">
                                <div class="info-label"><i class="fas fa-user"></i> Nome</div>
                                <div class="info-value">{{ $user->name }}</div>
                            </div>
                            <div class="info-item">
                                <div class="info-label"><i class="fas fa-envelope"></i> Email</div>
                                <div class="info-value">{{ $user->email }}</div>
                            </div>
                            <div class="info-item">
                                <div class="info-label"><i class="fas fa-calendar-alt"></i> Data da Compra</div>
                                <div class="info-value">
                                    <span id="purchase-date" data-utc-time="{{ $subscription->created_at->toISOString() }}"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if($subscription->trial_ends_at)
                        <div class="info-section-sucesso">
                            <h3 class="section-title-sucesso">Período de Teste</h3>
                            <div class="info-item">
                                <div class="info-value">
                                    O período de teste termina em: <br> <span id="trial-ends-date" data-utc-time="{{ $subscription->trial_ends_at->toISOString() }}"></span>
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="info-section-sucesso">
                        <h3 class="section-title-sucesso">Pagamento</h3>
                        <div class="info-item">
                            <div class="info-label"><i class="fas fa-credit-card"></i> Método de Pagamento</div>
                            <div class="payment-method">
                                <div class="payment-icon">
                                    @if(isset($paymentMethod['type']) && $paymentMethod['type'] == 'card')
                                        @php
                                            $cardBrandIcon = 'cc-visa';
                                            if (isset($paymentMethod['brand'])) {
                                                $brandLower = strtolower($paymentMethod['brand']);
                                                $brandMap = [
                                                    'visa' => 'cc-visa',
                                                    'mastercard' => 'cc-mastercard',
                                                    'amex' => 'cc-amex',
                                                    'discover' => 'cc-discover',
                                                    'jcb' => 'cc-jcb',
                                                    'diners club' => 'cc-diners-club',
                                                ];
                                                $cardBrandIcon = $brandMap[$brandLower] ?? 'credit-card';
                                            }
                                        @endphp
                                        <i class="fab fa-{{ $cardBrandIcon }}"></i>
                                    @else
                                        <i class="fas fa-wallet"></i>
                                    @endif
                                </div>
                                <div class="payment-details">
                                    @if(isset($paymentMethod['type']) && $paymentMethod['type'] == 'card')
                                        <div class="info-value">{{ ucfirst($paymentMethod['brand'] ?? 'Cartão') }} terminado em {{ $paymentMethod['last4'] ?? '****' }}</div>
                                        <div class="info-label">Válido até: {{ $paymentMethod['exp_month'] ?? '**' }}/{{ $paymentMethod['exp_year'] ?? '****' }}</div>
                                    @else
                                        <div class="info-value">{{ ucfirst($paymentMethod['type'] ?? 'Método Desconhecido') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>

                <section class="success-details">
                    <div class="info-section-sucesso">
                        <h3 class="section-title-sucesso">Detalhes da Assinatura</h3>

                        @isset($product)
                            <div class="product-card">
                                @if (isset($product->images) && is_array($product->images) && count($product->images) > 0)
                                    <img src="{{ $product->images[0] }}" alt="{{ $product->name ?? 'Imagem do Produto' }}" class="product-image">
                                @endif
                                <div class="product-info">
                                    <h4 class="product-name">{{ $product->name ?? 'N/A' }}</h4>
                                    <ul class="product-list">
                                    @if($product->name == 'Plano Micro')
                                        <li><i class="fa-solid fa-circle-check"></i> Site de 1 página (cartão de visita online)</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Criação de site prioritária (sujeito à disponibilidade)</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Design responsivo</li>
                                        <li><i class="fa-solid fa-circle-check"></i> SEO básico para visibilidade</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Hospedagem de 5GB SSD</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Domínio grátis (enquanto for assinante)</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Manutenção e suporte grátis agendado via WhatsApp (prioridade baixa)</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Formulário de contato</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Certificado SSL grátis</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Backup semanal automático</li>
                                        <li><i class="fa-solid fa-circle-check"></i> 1 conta de e-mail profissional</li>
                                    @elseif($product->name == 'Plano Básico')
                                        <li><i class="fa-solid fa-circle-check"></i> Site de até 5 páginas</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Criação de site prioritária (sujeito à disponibilidade)</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Design responsivo</li>
                                        <li><i class="fa-solid fa-circle-check"></i> SEO para ranqueamento</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Hospedagem premium de 10GB SSD</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Domínio grátis (enquanto for assinante)</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Manutenção e suporte grátis agendado via WhatsApp (prioridade média)</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Integração com redes sociais</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Certificado SSL grátis</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Relatório mensal de desempenho (Google Analytics)</li>
                                        <li><i class="fa-solid fa-circle-check"></i> 3 contas de e-mail profissional</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Backup diário automático</li>
                                    @elseif($product->name == 'Plano Essencial')
                                        <li><i class="fa-solid fa-circle-check"></i> Site de até 15 páginas com galeria de produtos</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Criação de site prioritária (sujeito à disponibilidade)</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Design exclusivo e responsivo</li>
                                        <li><i class="fa-solid fa-circle-check"></i> SEO avançado</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Hospedagem avançada de 20GB SSD</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Domínio grátis (enquanto for assinante)</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Manutenção e suporte grátis agendado via WhatsApp (prioridade alta)</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Galeria de produtos/serviços</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Ambiente de testes (staging)</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Backup semanal automático</li>
                                        <li><i class="fa-solid fa-circle-check"></i> 5 contas de e-mail profissional</li>
                                    @elseif($product->name == 'Plano Profissional')
                                        <li><i class="fa-solid fa-circle-check"></i> Site institucional completo com SEO</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Formulário de orçamento e botão de WhatsApp flutuante</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Agendamento online integrado</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Design exclusivo e responsivo</li>
                                        <li><i class="fa-solid fa-circle-check"></i> SEO Avançado e Local SEO</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Hospedagem premium de 30GB SSD</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Domínio grátis (enquanto for assinante)</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Backup diário automático</li>
                                        <li><i class="fa-solid fa-circle-check"></i> 5 contas de e-mail profissional</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Manutenção e suporte grátis agendado via WhatsApp (prioridade alta)</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Ambiente de testes (staging)</li>
                                    @elseif($product->name == 'Plano Avançado')
                                        <li><i class="fa-solid fa-circle-check"></i> Loja virtual com até 50 produtos</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Criação de site prioritária (sujeito à disponibilidade)</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Design exclusivo e responsivo</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Integração com meios de pagamento e logística</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Hospedagem empresarial de 50GB SSD</li>
                                        <li><i class="fa-solid fa-circle-check"></i> 1 domínio grátis (enquanto for assinante)</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Manutenção e suporte grátis agendado via WhatsApp (prioridade urgente)</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Páginas ilimitadas</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Certificado SSL premium</li>
                                        <li><i class="fa-solid fa-circle-check"></i> SEO avançado</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Backup diário</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Suporte 24/6 (WhatsApp e e-mail)</li>
                                    @elseif($product->name == 'Plano Master')
                                        <li><i class="fa-solid fa-circle-check"></i> E-commerce ilimitado e integrações com sistemas</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Aplicação web complexa (gestão de estoque, cotação online, etc.)</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Hospedagem dedicada de 100GB SSD</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Criação de site prioritária (sujeito à disponibilidade)</li>
                                        <li><i class="fa-solid fa-circle-check"></i> 5 domínios grátis (enquanto for assinante)</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Manutenção e suporte grátis agendado via WhatsApp (prioridade extrema)</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Sistema de gerenciamento de conteúdo</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Integração com APIs externas</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Segurança avançada</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Design exclusivo e responsivo</li>
                                        <li><i class="fa-solid fa-circle-check"></i> SEO completo</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Consultoria estratégica mensal</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Suporte 24/7 (WhatsApp e e-mail)</li>
                                        <li><i class="fa-solid fa-circle-check"></i> Backup e recuperação de desastres (diário)</li>
                                    @endif                                        
                                    </ul>                                    
                                </div>
                            </div>
                        @endisset

                        <div class="info-grid">
                            @isset($price)
                                <div class="info-item">
                                    <div class="info-label"><i class="fas fa-tag"></i> Valor</div>
                                    <div class="info-value">R$ {{ number_format($price->unit_amount / 100, 2, ',', '.') }}</div>
                                </div>
                                <div class="info-item">
                                    <div class="info-label"><i class="fas fa-sync-alt"></i> Intervalo</div>
                                    <div class="info-value">
                                        @if(\Illuminate\Support\Str::plural($price->recurring->interval, $price->recurring->interval_count) == 'month')
                                            {{ $price->recurring->interval_count }} vez por Mês
                                        @else
                                            {{ $price->recurring->interval_count }} vez por Ano
                                        @endif
                                    </div>
                                </div>
                            @endisset

                            <div class="info-item">
                                <div class="info-label"><i class="fas fa-id-card"></i> ID da Assinatura</div>
                                <div class="info-value">{{ $subscription->stripe_id }}</div>
                            </div>
                            <div class="info-item">
                                <div class="info-label"><i class="fas fa-info-circle"></i> Status</div>
                                <div class="info-value highlight">
                                    @if(ucfirst($subscription->stripe_status) == 'Active')
                                        Assinatura Ativada
                                    @elseif(ucfirst($subscription->stripe_status) == 'Trialing')
                                        Período de teste
                                    @else
                                        Assinatura Cancelada
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="billing-info">
                        @isset($nextBillingDate)
                            @php
                                $nextBillingDateIso = $nextBillingDate instanceof \Carbon\Carbon ? $nextBillingDate->toISOString() : $nextBillingDate;
                            @endphp
                            <h3 class="section-title-sucesso">Próximas Cobranças</h3>
                            <div class="info-item">
                                <div class="info-value">
                                    @if(ucfirst($subscription->stripe_status) == 'Active')
                                        Próxima cobrança: <span id="next-billing-date" data-utc-time="{{ $nextBillingDateIso }}"></span>
                                    @elseif(ucfirst($subscription->stripe_status) == 'Trialing')
                                        A cobrança irá começar: <span id="next-billing-date" data-utc-time="{{ $nextBillingDateIso }}"></span>
                                    @else
                                        Última cobrança: <span id="next-billing-date" data-utc-time="{{ $nextBillingDateIso }}"></span>
                                    @endif
                                </div>
                            </div>
                        @else
                            <div class="info-item">
                                <div class="info-value">Data da próxima cobrança não disponível no momento</div>
                            </div>
                        @endisset
                    </div>

                    <div class="contract-actions">
                        <button class="contract-button view-contract-btn" id="view-contract-btn">Ver Contrato</button>
                        <a href="{{ route('contrato.download') }}" class="contract-button download-contract-btn">Baixar Contrato</a>
                    </div>
                </section>
            </div>
        </main>
    </div>

    {{-- O modal para visualização do contrato ainda usa a mesma estrutura HTML --}}
    <div id="contract-modal" class="modal">
        <div class="modal-content">
          <div class="modal-header">
            <h2>Contrato de Prestação de Serviços</h2>
            <button class="close-button" id="close-modal-btn">&times;</button>
          </div>
          <div class="contract-content" id="contract-content">
            <h1>Contrato de Prestação de Serviços de Assinatura Mensal de Website</h1>
            
            <h2>DAS PARTES</h2>
            <p>
              <strong>CONTRATADO:</strong> START TO FINISH, pessoa jurídica de direito privado inscrita no CNPJ/CPF sob o nº 098.717.321-98, com sede na Rua Padre Aquiles Pio Redin, nº 150, Município de Dourados, Estado de Mato Grosso do Sul, doravante denominada PRESTADOR DE SERVIÇOS.
            </p>
            <p>
              <strong>CONTRATANTE:</strong> {{Auth::user()->name}}, pessoa jurídica ou física, inscrito no CNPJ/CPF sob o nº {{Auth::user()->document}}, com endereço em {{Auth::user()->address}}, doravante denominado CLIENTE.
            </p>

            <h2>CONSIDERAÇÕES INICIAIS</h2>
            <p>
              O presente instrumento tem como objetivo estabelecer as condições para a prestação de serviços de assinatura mensal de website, que inclui a criação, manutenção, hospedagem e outros benefícios descritos abaixo.
            </p>

            <h3>CLÁUSULA 1 - OBJETO E BENEFÍCIOS DA ASSINATURA</h3>
            <p>
              <strong>1.1. Objeto:</strong> Este contrato tem por objeto a prestação de serviços de assinatura mensal, pela qual o CLIENTE terá acesso a um pacote de benefícios relacionados a um website, conforme o plano contratado.
            </p>
            <p>
              <strong>1.2. Benefícios da Assinatura:</strong> O CLIENTE, ao manter sua assinatura em dia, terá direito aos seguintes benefícios:
            </p>
            <ul>
              <li>Criação de Site Gratuita: A criação de um site é oferecida gratuitamente, conforme as especificações e limitações do plano de assinatura escolhido.</li>
              <li>Manutenção Gratuita: O PRESTADOR DE SERVIÇOS realizará a manutenção técnica e de segurança do site.</li>
              <li>Adição de Novo Conteúdo Gratuita: O PRESTADOR DE SERVIÇOS fará a adição de novos conteúdos fornecidos pelo CLIENTE.</li>
              <li>Hospedagem Gratuita: O site será hospedado nos servidores do PRESTADOR DE SERVIÇOS.</li>
              <li>Domínio Gratuito: O domínio do site será gerenciado e mantido pelo PRESTADOR DE SERVIÇOS.</li>
            </ul>

            <h3>CLÁUSULA 2 - DAS OBRIGAÇÕES DO CLIENTE</h3>
            <p>
              <strong>2.1. Agendamento:</strong> O CLIENTE deverá solicitar a criação de site, adição de conteúdo ou qualquer outro serviço através de agendamento prévio, utilizando os canais de comunicação fornecidos pelo PRESTADOR DE SERVIÇOS (e.g., WhatsApp, e-mail, etc.).
            </p>
            <p>
              <strong>2.2. Aviso Prévio:</strong> Para qualquer alteração de plano (upgrade/downgrade) ou cancelamento da assinatura, o CLIENTE deverá notificar o PRESTADOR DE SERVIÇOS com, no mínimo, 7 dias de antecedência, para que a gestão dos agendamentos e das tarefas possa ser realizada de forma adequada.
            </p>
            <p>
              <strong>2.3. Dados Cadastrais:</strong> O CLIENTE é responsável por fornecer e manter atualizados seu CPF/CNPJ e endereço. A falta ou o fornecimento de informações incorretas poderá invalidar este contrato como prova judicial para fins de cobrança ou qualquer outro processo legal movido contra o PRESTADOR DE SERVIÇOS.
            </p>

            <h3>CLÁUSULA 3 - DAS CONDIÇÕES E RESTRIÇÕES</h3>
            <p>
              <strong>3.1. Downgrade de Plano:</strong> O CLIENTE que optar por um "downgrade" (migração para um plano inferior) perderá o acesso e os benefícios do site criado sob o plano anterior. Um novo site será criado, conforme as especificações do novo plano contratado. O site anterior não será excluído, mas sim arquivado, e não estará mais disponível para o CLIENTE, pois o valor do novo plano não cobre a manutenção da estrutura mais complexa.
            </p>
            <p>
              <strong>3.2. Cancelamento da Assinatura:</strong> No caso de cancelamento da assinatura, o CLIENTE perderá imediatamente o acesso a todos os benefícios do plano, incluindo manutenção, hospedagem e domínio. O site criado ficará offline. Caso o CLIENTE deseje adquirir o site para si, deverá pagar o valor justo e acordado pelo site, sendo que o PRESTADOR DE SERVIÇOS entregará todos os arquivos do site. A partir da aquisição, a manutenção, hospedagem e domínio passarão a ser de total responsabilidade do CLIENTE.
            </p>

            <h3>CLÁUSULA 4 - DO REEMBOLSO</h3>
            <p>
              <strong>4.1. Condições de Reembolso:</strong> O CLIENTE tem o direito de solicitar o reembolso integral da primeira compra realizada em até 24 (vinte e quatro) horas após a confirmação do pagamento.
            </p>
            <p>
              <strong>4.2. Procedimento de Solicitação:</strong> Para solicitar o reembolso, a comunicação deve ser feita exclusivamente através dos canais oficiais do PRESTADOR DE SERVIÇOS (e-mail ou WhatsApp). Na solicitação, o CLIENTE deverá informar seu nome completo, o número do pedido ou da transação, e o motivo da desistência.
            </p>
            <p>
              <strong>4.3. Processamento do Reembolso:</strong> Após o recebimento e a devida análise da solicitação, e uma vez verificadas as condições estabelecidas na Cláusula 4.1, o reembolso será processado no prazo acordado entre as partes, conforme os meios de pagamento originais.
            </p>

            <h3>CLÁUSULA 5 - DAS OBRIGAÇÕES DO PRESTADOR DE SERVIÇOS</h3>
            <p>
              <strong>5.1. Gestão de Planos:</strong> Em caso de alteração de plano, o PRESTADOR DE SERVIÇOS garantirá a criação de um novo site conforme o novo plano contratado. O site anterior será substituído pelo novo, mas será arquivado para fins de segurança e histórico, não sendo excluído.
            </p>
            <p>
              <strong>5.2. Arquivamento de Sites:</strong> O PRESTADOR DE SERVIÇOS se compromete a não excluir os sites criados sob planos anteriores, mas sim substituí-los no servidor pelo novo site e mantê-los arquivados, seguindo a regra do item 3.1.
            </p>

            <h3>CLÁUSULA 6 - DO PAGAMENTO E DA VIGÊNCIA</h3>
            <p>
              <strong>6.1. Vigência:</strong> Este contrato entra em vigor a partir da data de sua assinatura e é válido por prazo indeterminado, com renovação automática a cada mês, mediante o pagamento da assinatura.
            </p>
            <p>
              <strong>6.2. Pagamento:</strong> O CLIENTE se compromete a efetuar o pagamento mensal da assinatura na data de {{ \Carbon\Carbon::parse($nextBillingDateIso)->isoFormat('DD [de] MMMM [de] YYYY') }} de cada mês.
            </p>
            
            <h3>CLÁUSULA 7 - DO FORO</h3>
            <p>
              <strong>7.1. Resolução de Conflitos:</strong> Fica eleito o foro da comarca de Dourados/MS, com exclusão de qualquer outro, por mais privilegiado que seja, para dirimir quaisquer dúvidas ou conflitos oriundos do presente contrato.
            </p>

            <div class="signature-section">
              <p>Rua Visconde de Taunay, 250, no bairro Jardim Londrina</p>
              <div class="signature-line"></div>
              <div class="signature-line-text">
                <p>START TO FINISH<br>PRESTADOR DE SERVIÇOS</p>
              </div>
              <div class="signature-line"></div>
              <div class="signature-line-text">
                <p>{{Auth::user()->name}}<br>CLIENTE</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            function displayLocalTime(elementId) {
                const element = document.getElementById(elementId);
                if (element && element.dataset.utcTime) {
                    const dateUtc = new Date(element.dataset.utcTime);
                    const options = {
                        year: 'numeric',
                        month: 'long',
                        day: 'numeric',
                        hour: '2-digit',
                        minute: '2-digit',
                        timeZoneName: 'short'
                    };
                    element.textContent = new Intl.DateTimeFormat(navigator.language || 'pt-BR', options).format(dateUtc);
                }
            }

            displayLocalTime('purchase-date');
            displayLocalTime('trial-ends-date');
            displayLocalTime('next-billing-date');

            // Lógica do Modal
            const modal = document.getElementById('contract-modal');
            const openModalBtn = document.getElementById('view-contract-btn');
            const closeModalBtn = document.getElementById('close-modal-btn');

            if (openModalBtn) {
                openModalBtn.addEventListener('click', () => {
                    modal.classList.add('is-active');
                });
            }

            if (closeModalBtn) {
                closeModalBtn.addEventListener('click', () => {
                    modal.classList.remove('is-active');
                });
            }

            // Fechar modal ao clicar fora do conteúdo
            window.addEventListener('click', (event) => {
                if (event.target === modal) {
                    modal.classList.remove('is-active');
                }
            });
        });
    </script>
@endsection