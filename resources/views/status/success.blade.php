@extends('layouts.layout-dashboard')

@section('title', 'Start To Finish - Compra bem-sucedida!')

@push('estilos')
    <style>
        :root {
            --bg-pri-color: #101010;
            --bg-sec-color: #262626;
            --text-pri-color: #fff;
            --text-sec-color: #cfcfcf;
            --text-ter-color: #dfdfdf;
            --primary-color: #1a1a2e;
            --secondary-color: #21325e;
            --neon: #00fffd;
            --gradient: linear-gradient(135deg, #00fffd 0%, #19bf00 100%);
            --box-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
            --card-bg: rgba(30, 30, 30, 0.8);
            --border-color: rgba(68, 68, 68, 0.5);
            --success-color: #4caf50;
            --warning-color: #ff9800;
        }

        .success-wrapper {
            min-height: 100vh;
            background: var(--bg-pri-color);
            padding: 2rem;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        }

        .success-main {
            max-width: 1100px;
            margin: 0 auto;
            background: var(--bg-sec-color);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: var(--box-shadow);
            position: relative;
            border: 1px solid rgba(0, 255, 253, 0.1);
        }

        .success-main::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient);
        }

        .success-hero {
            padding: 3rem 2rem;
            text-align: center;
            background: linear-gradient(rgba(22, 22, 22, 0.9), rgba(22, 22, 22, 0.9));
            position: relative;
            overflow: hidden;
        }

        .success-hero::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(0, 255, 253, 0.05) 0%, transparent 70%);
            z-index: 0;
        }

        .success-title {
            font-size: 2.8rem;
            margin-bottom: 1rem;
            color: var(--neon);
            position: relative;
            display: inline-block;
            z-index: 1;
            text-shadow: 0 0 15px rgba(0, 255, 253, 0.3);
        }

        .success-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: var(--gradient);
        }

        .success-subtitle {
            color: var(--text-sec-color);
            font-size: 1.2rem;
            max-width: 600px;
            margin: 1rem auto 0;
            z-index: 1;
            position: relative;
        }

        .success-content {
            display: flex;
            flex-wrap: wrap;
            padding: 0;
        }

        .success-aside {
            flex: 1;
            min-width: 300px;
            padding: 2rem;
            background: var(--card-bg);
            border-right: 1px solid var(--border-color);
        }

        .success-details {
            flex: 2;
            min-width: 400px;
            padding: 2rem;
            display: flex;
            flex-direction: column;
        }

        .info-section {
            margin-bottom: 2.5rem;
            position: relative;
            z-index: 1;
        }

        .section-title {
            font-size: 1.5rem;
            color: var(--neon);
            margin-bottom: 1.5rem;
            padding-bottom: 0.5rem;
            border-bottom: 1px solid var(--border-color);
            display: flex;
            align-items: center;
        }

        .section-title::before {
            content: '';
            display: inline-block;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--neon);
            margin-right: 12px;
            box-shadow: 0 0 8px var(--neon);
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 1.5rem;
        }

        .info-item {
            margin-bottom: 1rem;
        }

        .info-label {
            color: var(--text-sec-color);
            font-size: 0.9rem;
            margin-bottom: 0.3rem;
            display: flex;
            align-items: center;
        }

        .info-label i {
            margin-right: 8px;
            font-size: 1rem;
            color: var(--neon);
        }

        .info-value {
            color: var(--text-pri-color);
            font-size: 1.1rem;
            word-break: break-word;
        }

        .payment-method {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 10px;
            background: rgba(40, 40, 40, 0.5);
            border-radius: 8px;
            margin-top: 10px;
            border-left: 3px solid var(--neon);
        }

        .payment-icon {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(0, 0, 0, 0.3);
            border-radius: 6px;
            font-size: 1.5rem;
        }

        .payment-details {
            flex: 1;
        }

        .device-info {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 10px;
            background: rgba(40, 40, 40, 0.5);
            border-radius: 8px;
            margin-top: 10px;
            border-left: 3px solid var(--neon);
        }

        .device-icon {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(0, 0, 0, 0.3);
            border-radius: 6px;
            font-size: 1.5rem;
        }

        .product-card {
            display: flex;
            gap: 1.5rem;
            align-items: center;
            margin-bottom: 1.5rem;
            padding: 1rem;
            background: rgba(40, 40, 40, 0.5);
            border-radius: 8px;
            border-left: 3px solid var(--neon);
        }

        .product-image {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 8px;
            border: 2px solid var(--border-color);
        }

        .product-info {
            flex: 1;
        }

        .product-name {
            color: var(--neon);
            margin-bottom: 0.5rem;
        }

        .billing-info {
            background: rgba(30, 30, 30, 0.6);
            padding: 1.5rem;
            border-radius: 8px;
            margin-top: auto;
        }

        .action-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.8rem 2.5rem;
            background: var(--gradient);
            color: var(--bg-pri-color);
            font-weight: 600;
            text-decoration: none;
            border-radius: 6px;
            transition: all 0.3s ease;
            text-align: center;
            margin-top: 2rem;
            border: none;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(0, 255, 253, 0.3);
            gap: 8px;
            font-size: 1.1rem;
        }

        .action-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 255, 253, 0.4);
        }

        .highlight {
            color: var(--neon);
            font-weight: 600;
        }

        .status-badge {
            display: inline-block;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
        }

        .status-active {
            background: rgba(76, 175, 80, 0.2);
            color: var(--success-color);
        }

        .status-pending {
            background: rgba(255, 152, 0, 0.2);
            color: var(--warning-color);
        }

        @media (max-width: 768px) {
            .success-content {
                flex-direction: column;
            }

            .success-aside {
                border-right: none;
                border-bottom: 1px solid var(--border-color);
            }

            .success-title {
                font-size: 2rem;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
@endpush

@section('content')
    <div class="success-wrapper">
        <main class="success-main">
            <section class="success-hero">
                <h1 class="success-title">🎉 Assinatura Concluída!</h1>
                <p class="success-subtitle">Sua assinatura foi processada com sucesso. Abaixo estão todos os detalhes da sua compra.</p>
                <div class="status-badge status-active">ATIVO</div>
            </section>

            <div class="success-content">
                <aside class="success-aside">
                    <div class="info-section">
                        <h3 class="section-title">Seus Dados</h3>
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
                        <div class="info-section">
                            <h3 class="section-title">Período de Teste</h3>
                            <div class="info-item">
                                <div class="info-value">
                                    Válido até: <span id="trial-ends-date" data-utc-time="{{ $subscription->trial_ends_at->toISOString() }}"></span>
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="info-section">
                        <h3 class="section-title">Pagamento</h3>
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
                    <div class="info-section">
                        <h3 class="section-title">Detalhes da Assinatura</h3>

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
                                        {{ $price->recurring->interval_count }}
                                        {{ \Illuminate\Support\Str::plural($price->recurring->interval, $price->recurring->interval_count) }}
                                    </div>
                                </div>
                            @endisset

                            <div class="info-item">
                                <div class="info-label"><i class="fas fa-id-card"></i> ID da Assinatura</div>
                                <div class="info-value">{{ $subscription->stripe_id }}</div>
                            </div>
                            <div class="info-item">
                                <div class="info-label"><i class="fas fa-info-circle"></i> Status</div>
                                <div class="info-value highlight">{{ ucfirst($subscription->stripe_status) }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="billing-info">
                        <h3 class="section-title">Próximas Cobranças</h3>
                        @isset($nextBillingDate)
                            @php
                                $nextBillingDateIso = $nextBillingDate instanceof \Carbon\Carbon ? $nextBillingDate->toISOString() : $nextBillingDate;
                            @endphp
                            <div class="info-item">
                                <div class="info-value">
                                    Próxima cobrança: <span id="next-billing-date" data-utc-time="{{ $nextBillingDateIso }}"></span>
                                </div>
                            </div>
                        @else
                            <div class="info-item">
                                <div class="info-value">Data da próxima cobrança não disponível no momento</div>
                            </div>
                        @endisset
                    </div>

                    <a href="{{ route('private.index') }}" class="action-button">
                        <i class="fas fa-tachometer-alt"></i> Acessar Painel
                    </a>
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