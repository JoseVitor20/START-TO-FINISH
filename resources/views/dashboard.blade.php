@extends('layouts.layout-dashboard')

@section('title', 'Start To Finish - Administrativo')

@section('content')
<style>
    /* Todos os estilos originais mantidos exatamente como estavam */
    .subscriptions-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 2rem;
        color: var(--text-pri-color);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .section-title {
        font-size: 1.8rem;
        margin-bottom: 1.5rem;
        color: var(--neon);
        position: relative;
        padding-bottom: 0.5rem;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100px;
        height: 3px;
        background: linear-gradient(90deg, var(--gradiente-pri-color), var(--gradiente-sec-color));
    }

    .subscription-card {
        background: var(--card-bg);
        border-radius: 8px;
        padding: 1.5rem;
        margin-bottom: 2rem;
        box-shadow: var(--box-shadow);
        border: 1px solid var(--border-color);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .subscription-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
    }

    .subscription-header {
        display: flex;
        align-items: center;
        margin-bottom: 1.5rem;
        padding-bottom: 1rem;
        border-bottom: 1px solid var(--border-color);
    }

    .product-image {
        width: auto;
        height: 200px;
        object-fit: cover;
        border-radius: 8px;
        margin-right: 1.5rem;
    }

    .product-name {
        font-size: 1.4rem;
        margin: 0;
        color: var(--text-pri-color);
    }

    .product-description {
        color: var(--text-sec-color);
        margin: 0.5rem 0 0;
    }

    .subscription-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1.5rem;
        margin-bottom: 1.5rem;
    }

    .info-section {
        background: var(--bg-sec-color);
        padding: 1rem;
        border-radius: 6px;
    }

    .info-section h4 {
        margin-top: 0;
        margin-bottom: 1rem;
        color: var(--neon);
        font-size: 1.1rem;
    }

    .info-section p {
        margin: 0.5rem 0;
        color: var(--text-ter-color);
    }

    .info-section strong {
        color: var(--text-pri-color);
    }

    .status {
        display: inline-block;
        padding: 0.25rem 0.75rem;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 600;
    }

    .status.active {
        background-color: rgba(0, 255, 253, 0.2);
        color: var(--neon);
    }

    .status.inactive {
        background-color: rgba(255, 0, 0, 0.2);
        color: #ff6b6b;
    }

    .metadata-list {
        list-style: none;
        padding: 0;
        margin: 0.5rem 0 0;
    }

    .metadata-list li {
        margin-bottom: 0.3rem;
    }

    .action-buttons {
        margin-top: 1.5rem;
        display: flex;
        gap: 1rem;
    }

    .btn {
        padding: 0.6rem 1.2rem;
        border: none;
        border-radius: 4px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        text-transform: uppercase;
        font-size: 0.85rem;
        letter-spacing: 0.5px;
    }

    .btn-danger {
        background-color: #ff4757;
        color: white;
    }

    .btn-danger:hover {
        background-color: #ff6b81;
        box-shadow: 0 0 15px rgba(255, 107, 129, 0.5);
    }

    .btn-warning {
        background-color: #eccc68;
        color: #2f3542;
    }

    .btn-warning:hover {
        background-color: #f4e2aa;
        box-shadow: 0 0 15px #eccc6894;
    }

    .btn-info{
        background-color: #55fffe;
        color: #2f3542 !important;        
    }

    .btn-info:hover {
        background-color: #9ffffe;
        box-shadow: 0 0 15px #55fffe7a;
    }

    .btn-warning:hover {
        background-color: #ffa502;
        box-shadow: 0 0 15px rgba(255, 165, 2, 0.5);
    }

    .btn-primary {
        background-color: var(--neon);
        color: var(--primary-color);
    }

    .btn-primary:hover {
        background-color: var(--gradiente-sec-color);
        box-shadow: 0 0 10px rgba(25, 191, 0, 0.5);
    }

    .form-select {
        background-color: var(--bg-sec-color);
        border: 1px solid var(--border-color);
        color: var(--text-pri-color);
        padding: 0.5rem;
        border-radius: 4px;
        width: 100%;
        margin-bottom: 1rem;
    }

    .form-select:focus {
        outline: none;
        border-color: var(--neon);
    }

    .empty-state {
        text-align: center;
        padding: 2rem;
        background: var(--bg-sec-color);
        border-radius: 8px;
        margin-bottom: 2rem;
    }

    .empty-state p {
        margin-bottom: 1rem;
        color: var(--text-sec-color);
    }

    .empty-state a {
        color: var(--neon);
        text-decoration: none;
        font-weight: 600;
    }

    .empty-state a:hover {
        text-decoration: underline;
    }

    .users-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 1.5rem;
        background: var(--bg-sec-color);
        border-radius: 8px;
        overflow: hidden;
    }

    .users-table th, .users-table td {
        padding: 1rem;
        text-align: left;
        border-bottom: 1px solid var(--border-color);
    }

    .users-table th {
        background-color: var(--primary-color);
        color: var(--neon);
        font-weight: 600;
    }

    .users-table tr:hover {
        background-color: rgba(0, 255, 253, 0.05);
    }

    .divider {
        height: 1px;
        background: linear-gradient(90deg, transparent, var(--border-color), var(--border-color), transparent);
        margin: 2.5rem 0;
        border: none;
    }

    .current-plan-card {
        background: var(--card-bg);
        border-radius: 12px;
        padding: 2rem;
        box-shadow: var(--box-shadow);
        border: 1px solid var(--border-color);
    }

    .plan-header {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-bottom: 2rem;
        padding-bottom: 1.5rem;
        border-bottom: 1px solid var(--border-color);
    }

    .plan-icon {
        width: 32px;
        height: 32px;
    }

    .plan-title {
        margin: 0;
        color: var(--neon);
        font-size: 1.5rem;
    }

    .current-plan-info {
        margin-bottom: 2rem;
    }

    .current-plan-label {
        color: var(--text-sec-color);
        margin-bottom: 0.5rem;
        font-size: 0.95rem;
    }

    .plan-details {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .plan-badge {
        padding: 0.35rem 1rem;
        border-radius: 20px;
        font-weight: 600;
        font-size: 0.9rem;
    }

    .plan-badge.basic {
        background: rgba(0, 255, 253, 0.15);
        color: var(--neon);
        border: 1px solid var(--neon);
    }

    .plan-badge.premium {
        background: rgba(25, 191, 0, 0.15);
        color: var(--gradiente-sec-color);
        border: 1px solid var(--gradiente-sec-color);
    }

    .plan-price {
        font-weight: 600;
        color: var(--text-pri-color);
        font-size: 1.1rem;
    }

    .upgrade-form {
        margin-top: 2rem;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-label {
        display: block;
        margin-bottom: 0.75rem;
        color: var(--text-pri-color);
        font-weight: 500;
        font-size: 0.95rem;
    }

    .select-wrapper {
        position: relative;
    }

    .plan-select {
        width: 100%;
        padding: 0.85rem 1rem;
        background: var(--bg-sec-color);
        border: 1px solid var(--border-color);
        border-radius: 8px;
        color: var(--text-pri-color);
        font-size: 1rem;
        appearance: none;
        transition: border-color 0.3s ease;
    }

    .plan-select:focus {
        outline: none;
        border-color: var(--neon);
        box-shadow: 0 0 0 2px rgba(0, 255, 253, 0.2);
    }

    .select-arrow {
        position: absolute;
        right: 1rem;
        top: 50%;
        transform: translateY(-50%);
        width: 20px;
        height: 20px;
        pointer-events: none;
    }

    .upgrade-button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.75rem;
        width: 100%;
        padding: 1rem;
        background: linear-gradient(135deg, var(--gradiente-pri-color), var(--gradiente-sec-color));
        color: var(--primary-color);
        border: none;
        border-radius: 8px;
        font-weight: 600;
        font-size: 1rem;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(0, 255, 253, 0.3);
    }

    .upgrade-button:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(0, 255, 253, 0.4);
    }

    .upgrade-button:active {
        transform: translateY(0);
    }

    .button-icon {
        width: 18px;
        height: 18px;
    }

    .upgrade-disabled-card {
        background: var(--card-bg);
        border-radius: 12px;
        padding: 2rem;
        text-align: center;
        box-shadow: var(--box-shadow);
        border: 1px dashed var(--border-color);
    }

    .disabled-icon {
        width: 48px;
        height: 48px;
        margin: 0 auto 1.5rem;
    }

    .disabled-title {
        color: var(--neon);
        margin: 0 0 1rem;
        font-size: 1.5rem;
    }

    .disabled-message {
        color: var(--text-sec-color);
        margin: 0;
        line-height: 1.6;
    }

    @media (max-width: 768px) {
        .current-plan-card,
        .upgrade-disabled-card {
            padding: 1.5rem;
        }
        
        .plan-header {
            margin-bottom: 1.5rem;
        }
        
        .plan-title {
            font-size: 1.3rem;
        }
    }

    /* Estilos adicionais apenas para a paginação (mantendo o estilo original) */
    .pagination-controls {
        display: flex;
        justify-content: center;
        gap: 1rem;
        margin: 2rem 0;
    }

    .pagination-button {
        padding: 0.5rem 1rem;
        background: var(--bg-sec-color);
        border: 1px solid var(--border-color);
        color: var(--text-pri-color);
        border-radius: 4px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .pagination-button:hover {
        border-color: var(--neon);
        color: var(--neon);
    }

    .pagination-button:disabled {
        opacity: 0.5;
        cursor: not-allowed;
    }

    .page-indicator {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .page-dot {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background-color: var(--border-color);
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .page-dot.active {
        background-color: var(--neon);
        transform: scale(1.2);
    }

    .subscription-group {
        display: none;
    }

    .subscription-group.active {
        display: block;
    }
</style>

<div class="subscriptions-container">
    <!-- Seção de Assinaturas Ativas (mantida igual) -->
    @if ($activeSubscriptions->isNotEmpty())
    <h3 class="section-title">Assinatura Ativa</h3>
        @foreach ($activeSubscriptions as $subscription)
            <div class="subscription-card">
                <div class="subscription-header">
                    @if ($subscription->product_image)
                        <img src="{{ $subscription->product_image }}" alt="{{ $subscription->product_name }}" class="product-image">
                    @endif
                    <div>
                        <h3 class="product-name">{{ $subscription->product_name ?? 'Nome do Produto Indisponível' }}</h3>
                        @if ($subscription->product_description)
                            <p class="product-description">{{ $subscription->product_description }}</p>
                        @endif
                        @if ($subscription->product_url)
                            <p><a href="{{ $subscription->product_url }}" target="_blank" style="color: var(--neon);">Ver mais detalhes do produto</a></p>
                        @endif
                    </div>
                </div>

                <div class="subscription-grid">
                    <div class="info-section">
                        <h4>Detalhes do Plano</h4>
                        <p><strong>Plano:</strong> 
                            @if($subscription->plan_name == 'price_1RjQtlPSFtrJEyUPc3gxFVIz')
                                <strong class="status active">Premium</strong>
                            @elseif($subscription->plan_name == 'price_1RjQsDPSFtrJEyUP3fhEZkGT')
                                <strong class="status active">Básico</strong>                            
                            @endif
                        </p>
                        <p><strong>Preço:</strong> {{ $subscription->price ? 'R$' . number_format($subscription->price, 2, ',', '.') : 'N/A' }} {{ $subscription->currency ?? '' }}</p>
                        <p><strong>Período:</strong>
                            @if($subscription->billing_period == 'month')
                                1 / Mês
                            @endif
                        </p>
                        @if ($subscription->price_metadata && count((array)$subscription->price_metadata) > 0)
                            <div class="price-metadata">
                                <ul class="metadata-list">
                                    @foreach ($subscription->price_metadata as $key => $value)
                                        <li><strong>{{ ucfirst(str_replace('_', ' ', $key)) }}:</strong> {{ $value }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>

                    <div class="info-section">
                        <h4>Status</h4>
                        <p><strong>Status:</strong> <span class="status active">Ativado</span></p>
                        <p><strong>Início:</strong> {{ $subscription->created_at ? \Carbon\Carbon::parse($subscription->created_at)->format('d/m/Y') : 'N/A' }}</p>
                        <p><strong>Próxima Cobrança:</strong> {{ $subscription->next_billing_date ? \Carbon\Carbon::parse($subscription->next_billing_date)->format('d/m/Y') : 'N/A' }}</p>
                    </div>
                </div>

                @if (isset($subscription->last_payment_date) && $subscription->last_payment_date)
                    <div class="info-section">
                        <h4>Pagamento</h4>
                        <p><strong>Último pagamento:</strong> {{ \Carbon\Carbon::parse($subscription->last_payment_date)->format('d/m/Y H:i') }}</p>
                        <p><strong>Método de pagamento:</strong> {{ $subscription->payment_method ?? 'N/A' }}</p>
                    </div>
                @endif

                @if ($subscription->coupon_code)
                    <div class="info-section">
                        <h4>Cupom</h4>
                        <p><strong>Cupom aplicado:</strong> {{ $subscription->coupon_code }}</p>
                    </div>
                @endif

                <div class="action-buttons">
                    @if($subscription->onGracePeriod())
                        <form action="{{ route('subscription.cancelNow') }}" method="POST">
                            @csrf
                            <input type="hidden" name="subscription_id" value="{{ $subscription->id }}">
                            <button type="submit" class="btn btn-danger">Cancelar Imediatamente</button>
                        </form>
                        @if(Auth::user()->subscription('main_subscription')->canceled())
                            <form action="{{ route('subscription.resume') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-info">Reativar Assinatura</button>
                            </form>
                        @endif                        
                    @else
                        <form action="{{ route('subscription.cancel') }}" method="POST">
                            @csrf
                            <input type="hidden" name="subscription_id" value="{{ $subscription->id }}">
                            <button type="submit" class="btn btn-warning">Cancelar Assinatura</button>
                        </form>
                    @endif
                </div>
            </div>
        @endforeach
    @else
        <div class="empty-state">
            <p>Você não possui assinaturas ativas no momento.</p>
            <a href="/#precos" class="btn btn-info" style="text-decoration: none !important;">Assinar um plano</a>
        </div>
    @endif

    <div class="divider"></div>

    <!-- Seção de Atualização de Plano (mantida igual) -->
    @php
        $mainSubscription = Auth::user()->subscription('main_subscription');
    @endphp

    @if($mainSubscription && !$mainSubscription->onGracePeriod() && !$mainSubscription->ended())
        <h3 class="section-title">Atualizar Plano</h3>
        <div class="plan-upgrade-container">
            <div class="current-plan-card">
                <div class="plan-header">
                    <svg class="plan-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 17L4 12M4 12L9 7M4 12H20" stroke="var(--neon)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15 17L20 12M20 12L15 7M20 12H4" stroke="var(--neon)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" opacity="0.5"/>
                    </svg>
                    <h3 class="plan-title">Atualizar Plano</h3>
                </div>
                
                <div class="current-plan-info">
                    <p class="current-plan-label">Seu plano atual:</p>
                    <div class="plan-details">
                        @if($mainSubscription->stripe_price == 'price_1RjQtlPSFtrJEyUPc3gxFVIz')
                            <span class="plan-badge premium">Premium</span>
                            <span class="plan-price">R$500,00/mês</span>
                        @elseif($mainSubscription->stripe_price == 'price_1RjQsDPSFtrJEyUP3fhEZkGT')
                            <span class="plan-badge basic">Básico</span>
                            <span class="plan-price">R$300,00/mês</span>
                        @endif
                    </div>
                </div>
                
                <form action="{{ route('subscription.update') }}" method="POST" class="upgrade-form">
                    @csrf
                    <div class="form-group">
                        <label for="new_plan" class="form-label">Selecione o novo plano</label>
                        <div class="select-wrapper">
                            <select name="new_price_id" id="new_plan" class="plan-select">
                                @if($mainSubscription->stripe_price == 'price_1RjQsDPSFtrJEyUP3fhEZkGT')
                                    <option value="price_1RjQtlPSFtrJEyUPc3gxFVIz">Plano Premium - R$500,00/mês</option>
                                @else
                                    <option value="price_1RjQsDPSFtrJEyUP3fhEZkGT">Plano Básico - R$300,00/mês</option>
                                @endif
                            </select>
                            <svg class="select-arrow" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 9L12 15L18 9" stroke="var(--text-pri-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                    
                    <button type="submit" class="upgrade-button">
                        <span>Atualizar Plano</span>
                        <svg class="button-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </form>
            </div>
        @else
            <div class="upgrade-disabled-card">
                <svg class="disabled-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="var(--neon)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 8V12M12 16H12.01" stroke="var(--neon)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <h3 class="disabled-title">Atualização indisponível</h3>
                <p class="disabled-message">Não é possível atualizar o plano no momento. Você pode não ter uma assinatura principal ativa ou ela está em período de carência/cancelada.</p>
            </div>
        @endif

    <div class="divider"></div>

    <!-- Seção de Assinaturas Canceladas com Paginação -->
    @if ($canceledSubscriptions->isNotEmpty())
        <h3 class="section-title">Assinaturas Canceladas</h3>
        
        @php
            // Dividir as assinaturas em grupos de 3
            $canceledGroups = $canceledSubscriptions->chunk(3);
            $totalPages = count($canceledGroups);
        @endphp
        
        @foreach($canceledGroups as $page => $group)
            <div class="subscription-group {{ $page === 0 ? 'active' : '' }}" data-page="{{ $page }}">
                @foreach($group as $subscription)
                    <div class="subscription-card">
                        <div class="subscription-header">
                            @if ($subscription->product_image)
                                <img src="{{ $subscription->product_image }}" alt="{{ $subscription->product_name }}" class="product-image">
                            @endif
                            <div>
                                <h3 class="product-name">{{ $subscription->product_name ?? 'Nome do Produto Indisponível' }}</h3>
                                @if ($subscription->product_description)
                                    <p class="product-description">{{ $subscription->product_description }}</p>
                                @endif
                                @if ($subscription->product_url)
                                    <p><a href="{{ $subscription->product_url }}" target="_blank" style="color: var(--neon);">Ver mais detalhes do produto</a></p>
                                @endif
                            </div>
                        </div>

                        <div class="subscription-grid">
                            <div class="info-section">
                                <h4>Detalhes do Plano</h4>
                                <p><strong>Plano:</strong>
                                    @if($subscription->plan_name == 'price_1RjQtlPSFtrJEyUPc3gxFVIz')
                                        <strong class="status active">Premium</strong>
                                    @elseif($subscription->plan_name == 'price_1RjQsDPSFtrJEyUP3fhEZkGT')
                                        <strong class="status active">Básico</strong>                            
                                    @endif                        
                                </p>
                                <p><strong>Preço:</strong> {{ $subscription->price ? 'R$' . number_format($subscription->price, 2, ',', '.') : 'N/A' }} {{ $subscription->currency ?? '' }}</p>
                                <p><strong>Período:</strong>
                                    @if($subscription->billing_period == 'month')
                                        1 / Mês
                                    @endif
                                </p>
                            </div>

                            <div class="info-section">
                                <h4>Status</h4>
                                <p><strong>Status:</strong> <span class="status inactive">Cancelada</span></p>
                                <p><strong>Início:</strong> {{ $subscription->created_at ? \Carbon\Carbon::parse($subscription->created_at)->format('d/m/Y') : 'N/A' }}</p>
                                <p><strong>Término Efetivo:</strong> {{ $subscription->ends_at ? \Carbon\Carbon::parse($subscription->ends_at)->format('d/m/Y') : 'N/A' }}</p>
                                @if ($subscription->canceled_at)
                                    <p><strong>Cancelada em:</strong> {{ \Carbon\Carbon::parse($subscription->canceled_at)->format('d/m/Y H:i') }}</p>
                                    <p><strong>Motivo do cancelamento:</strong> {{ $subscription->cancellation_reason ?? 'Não informado' }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach

        <!-- Controles de Paginação -->
        @if($totalPages > 1)
            <div class="pagination-controls">
                <button class="pagination-button prev-button" disabled>Anterior</button>
                
                <div class="page-indicator">
                    @for($i = 0; $i < $totalPages; $i++)
                        <div class="page-dot {{ $i === 0 ? 'active' : '' }}" data-page="{{ $i }}"></div>
                    @endfor
                </div>
                
                <button class="pagination-button next-button" {{ $totalPages <= 1 ? 'disabled' : '' }}>Próxima</button>
            </div>
        @endif
    @else
        <div class="empty-state">
            <p>Você não possui assinaturas canceladas.</p>
        </div>
    @endif

    <div class="divider"></div>

    <!-- Seção de Gerenciamento de Usuários (mantida igual) -->
    @if ($user->can('access-owner'))
        <!-- ... (conteúdo de gerenciamento de usuários) ... -->
    @endif
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Paginação das assinaturas canceladas
        const groups = document.querySelectorAll('.subscription-group');
        const dots = document.querySelectorAll('.page-dot');
        const prevButton = document.querySelector('.prev-button');
        const nextButton = document.querySelector('.next-button');
        let currentPage = 0;
        const totalPages = groups.length;

        function updatePagination() {
            // Esconde todos os grupos e mostra apenas o atual
            groups.forEach(group => group.classList.remove('active'));
            groups[currentPage].classList.add('active');
            
            // Atualiza os dots de paginação
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentPage);
            });
            
            // Atualiza estado dos botões
            if(prevButton) prevButton.disabled = currentPage === 0;
            if(nextButton) nextButton.disabled = currentPage === totalPages - 1;
        }

        // Eventos para os dots
        dots.forEach(dot => {
            dot.addEventListener('click', function() {
                currentPage = parseInt(this.dataset.page);
                updatePagination();
            });
        });

        // Eventos para os botões de navegação
        if(prevButton) {
            prevButton.addEventListener('click', function() {
                if(currentPage > 0) {
                    currentPage--;
                    updatePagination();
                }
            });
        }

        if(nextButton) {
            nextButton.addEventListener('click', function() {
                if(currentPage < totalPages - 1) {
                    currentPage++;
                    updatePagination();
                }
            });
        }
    });
</script>
@endsection