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
                                        {{-- Usa o ícone da bandeira do cartão se disponível, caso contrário, um ícone de cartão genérico --}}
                                        @php
                                            $cardBrandIcon = 'cc-visa'; // Padrão
                                            if (isset($paymentMethod['brand'])) {
                                                $brandLower = strtolower($paymentMethod['brand']);
                                                // Mapeamento de marcas para ícones Font Awesome
                                                $brandMap = [
                                                    'visa' => 'cc-visa',
                                                    'mastercard' => 'cc-mastercard',
                                                    'amex' => 'cc-amex',
                                                    'discover' => 'cc-discover',
                                                    'jcb' => 'cc-jcb',
                                                    'diners club' => 'cc-diners-club',
                                                    // Adicione outras marcas conforme necessário
                                                ];
                                                $cardBrandIcon = $brandMap[$brandLower] ?? 'credit-card'; // Fallback para ícone genérico
                                            }
                                        @endphp
                                        <i class="fab fa-{{ $cardBrandIcon }}"></i>
                                    @else
                                        {{-- Para outros tipos de pagamento (ou se tipo não for 'card') --}}
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
                                    <p class="info-value">{{ $product->description ?? 'N/A' }}</p>
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
                </section>
            </div>
        </main>
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
        });
    </script>
@endsection