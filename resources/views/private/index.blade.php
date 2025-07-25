@extends('layouts.layout-dashboard')

@section('title', 'Start To Finish - Gerenciar Assinatura')

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
        --gradiente-pri-color: #00fffd;
        --gradiente-sec-color: #19bf00;
        --box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        --card-bg: #1e1e1e;
        --border-color: #444;
        --btn-bg-hover: #000;
    }

    .subscription-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 2rem;
        color: var(--text-pri-color);
    }

    .subscription-section {
        background: var(--bg-sec-color);
        border-radius: 10px;
        padding: 2rem;
        margin-bottom: 2rem;
        box-shadow: var(--box-shadow);
        border: 1px solid var(--border-color);
    }

    .section-title {
        color: var(--neon);
        margin-bottom: 1.5rem;
        font-size: 1.5rem;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .subscription-cards {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
        gap: 1.5rem;
    }

    .subscription-card {
        background: var(--card-bg);
        border-radius: 8px;
        overflow: hidden;
        box-shadow: var(--box-shadow);
        border: 1px solid var(--border-color);
        transition: transform 0.3s ease;
    }

    .subscription-card:hover {
        transform: translateY(-5px);
    }

    .card-header {
        padding: 1.25rem;
        border-bottom: 1px solid var(--border-color);
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: rgba(0, 0, 0, 0.2);
    }

    .card-header h4 {
        margin: 0;
        color: var(--text-pri-color);
        font-size: 1.1rem;
    }

    .badge {
        padding: 0.35rem 0.75rem;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: bold;
        text-transform: uppercase;
    }

    .badge.active {
        background: rgba(0, 255, 0, 0.2);
        color: #00ff00;
        border: 1px solid #00ff00;
    }

    .badge.canceled {
        background: rgba(255, 0, 0, 0.2);
        color: #ff5555;
        border: 1px solid #ff5555;
    }

    .card-body {
        padding: 1.25rem;
    }

    .info-row {
        margin-bottom: 0.75rem;
        display: flex;
        justify-content: space-between;
    }

    .info-label {
        color: var(--text-sec-color);
        font-weight: 500;
    }

    .info-value {
        color: var(--text-pri-color);
        font-weight: 600;
    }

    .info-row.trial .info-value {
        color: var(--gradiente-pri-color);
    }

    .info-row.grace-period .info-value {
        color: #ffcc00;
    }

    .info-row.ended .info-value {
        color: #ff5555;
    }

    .card-footer {
        padding: 1.25rem;
        border-top: 1px solid var(--border-color);
        background: rgba(0, 0, 0, 0.1);
    }

    .action-form {
        margin-top: 0.5rem;
    }

    .btn-primary, .btn-success, .btn-warning, .btn-danger {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.75rem 1.5rem;
        border-radius: 6px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        border: none;
        width: 100%;
        justify-content: center;
        text-align: center;
    }

    .btn-primary {
        background: linear-gradient(135deg, var(--gradiente-pri-color), var(--gradiente-sec-color));
        color: var(--btn-bg-hover);
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(0, 255, 253, 0.3);
    }

    .btn-success {
        background: rgba(0, 255, 0, 0.1);
        color: #00ff00;
        border: 1px solid #00ff00;
    }

    .btn-success:hover {
        background: rgba(0, 255, 0, 0.2);
    }

    .btn-warning {
        background: rgba(255, 165, 0, 0.1);
        color: #ffaa00;
        border: 1px solid #ffaa00;
    }

    .btn-warning:hover {
        background: rgba(255, 165, 0, 0.2);
    }

    .btn-danger {
        background: rgba(255, 0, 0, 0.1);
        color: #ff5555;
        border: 1px solid #ff5555;
    }

    .btn-danger:hover {
        background: rgba(255, 0, 0, 0.2);
    }

    .empty-state {
        text-align: center;
        padding: 2rem;
        color: var(--text-sec-color);
    }

    .empty-state i {
        font-size: 3rem;
        margin-bottom: 1rem;
        color: var(--neon);
        opacity: 0.7;
    }

    .empty-state p {
        font-size: 1.1rem;
    }

    .plan-form-container {
        max-width: 500px;
        margin: 0 auto;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-label {
        display: block;
        margin-bottom: 0.5rem;
        color: var(--text-sec-color);
    }

    .current-plan {
        color: var(--neon);
        font-weight: bold;
    }

    .form-select {
        width: 100%;
        padding: 0.75rem;
        background: var(--bg-pri-color);
        border: 1px solid var(--border-color);
        border-radius: 6px;
        color: var(--text-pri-color);
        font-size: 1rem;
    }

    .form-select:focus {
        outline: none;
        border-color: var(--neon);
    }

    .info-message {
        text-align: center;
        color: var(--text-sec-color);
        font-style: italic;
    }

    .subscribe-cta {
        text-align: center;
    }

    .subscribe-cta p {
        margin-bottom: 1rem;
        color: var(--text-sec-color);
    }

    @media (max-width: 768px) {
        .subscription-cards {
            grid-template-columns: 1fr;
        }
        
        .subscription-container {
            padding: 1rem;
        }
        
        .subscription-section {
            padding: 1.5rem;
        }
    }
</style>
@endpush

@section('content')
<div class="subscription-container">
    <!-- Assinaturas Ativas -->
    <div class="subscription-section active-subscriptions">
        <h3 class="section-title"><i class="fas fa-bolt"></i> Assinatura Ativa</h3>
        
        @if ($activeSubscriptions->isNotEmpty())
            <div class="subscription-cards">
                @foreach ($activeSubscriptions as $subscription)
                <div class="subscription-card">
                    <div class="card-header">
                        <h4>{{ $subscription->name }}</h4>
                        <span class="badge active">Ativa</span>
                    </div>
                    
                    <div class="card-body">
                        <div class="info-row">
                            <span class="info-label">Plano ID (Stripe):</span>
                            <span class="info-value">{{ $subscription->stripe_price }}</span>
                        </div>
                        
                        <div class="info-row">
                            <span class="info-label">Próxima cobrança:</span>
                            <span class="info-value">
                                @if ($subscription->next_billing_date)
                                    {{ $subscription->next_billing_date->format('d/m/Y') }}
                                @else
                                    N/A
                                @endif
                            </span>
                        </div>
                        
                        @if ($subscription->onTrial())
                        <div class="info-row trial">
                            <span class="info-label">Período de teste até:</span>
                            <span class="info-value">{{ $subscription->trial_ends_at->format('d/m/Y') }}</span>
                        </div>
                        @endif
                    </div>
                    
                    <div class="card-footer">
                        @if($subscription->onGracePeriod())
                            <form action="{{ route('subscription.cancelNow') }}" method="POST" class="action-form">
                                @csrf
                                <input type="hidden" name="subscription_id" value="{{ $subscription->id }}">
                                <button type="submit" class="btn-danger">
                                    <i class="fas fa-times-circle"></i> Cancelar Imediatamente
                                </button>
                            </form>
                        @else
                            <form action="{{ route('subscription.cancel') }}" method="POST" class="action-form">
                                @csrf
                                <input type="hidden" name="subscription_id" value="{{ $subscription->id }}">
                                <button type="submit" class="btn-warning">
                                    <i class="fas fa-pause"></i> Cancelar Assinatura
                                </button>
                            </form>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        @else
            <div class="empty-state">
                <i class="fas fa-folder-open"></i>
                <p>Você não possui assinaturas ativas no momento.</p>
            </div>
        @endif
    </div>

    <!-- Mudança de Plano -->
    @php
        $mainSubscription = Auth::user()->subscription('main_subscription');
    @endphp

    @if($mainSubscription && !$mainSubscription->onGracePeriod() && !$mainSubscription->ended())
    <div class="subscription-section change-plan">
        <h3 class="section-title"><i class="fas fa-exchange-alt"></i> Mudar Plano</h3>
        <div class="plan-form-container">
            <form action="{{ route('subscription.update') }}" method="POST" class="plan-form">
                @csrf
                <div class="form-group">
                    <label for="new_plan" class="form-label">Plano Atual: <span class="current-plan">{{ $mainSubscription->stripe_price }}</span></label>
                    <select name="new_price_id" id="new_plan" class="form-select">
                        <option value="price_1RjQsDPSFtrJEyUP3fhEZkGT">Plano Básico (R$300,00)</option>
                        <option value="price_1RjQtlPSFtrJEyUPc3gxFVIz">Plano Premium (R$500,00)</option>
                    </select>
                </div>
                <button type="submit" class="btn-primary">
                    <i class="fas fa-sync-alt"></i> Atualizar Plano
                </button>
            </form>
        </div>
    </div>
    @endif

    <!-- Assinaturas Canceladas -->
    <div class="subscription-section canceled-subscriptions">
        <h3 class="section-title"><i class="fas fa-history"></i> Assinaturas Canceladas</h3>
        
        @if ($canceledSubscriptions->isNotEmpty())
            <div class="subscription-cards">
                @foreach ($canceledSubscriptions as $subscription)
                <div class="subscription-card canceled">
                    <div class="card-header">
                        <h4>{{ $subscription->name }}</h4>
                        <span class="badge canceled">Cancelada</span>
                    </div>
                    
                    <div class="card-body">
                        <div class="info-row">
                            <span class="info-label">Plano ID (Stripe):</span>
                            <span class="info-value">{{ $subscription->stripe_price }}</span>
                        </div>
                        
                        @if ($subscription->onGracePeriod())
                            <div class="info-row grace-period">
                                <span class="info-label">Acesso até:</span>
                                <span class="info-value">{{ $subscription->ends_at->format('d/m/Y') }}</span>
                            </div>
                        @elseif ($subscription->ended())
                            <div class="info-row ended">
                                <span class="info-label">Encerrada em:</span>
                                <span class="info-value">{{ $subscription->ends_at->format('d/m/Y') }}</span>
                            </div>
                        @endif
                    </div>
                    
                    <div class="card-footer">
                        @if ($subscription->onGracePeriod())
                            <form action="{{ route('subscription.resume') }}" method="POST" class="action-form">
                                @csrf
                                <input type="hidden" name="subscription_id" value="{{ $subscription->id }}">
                                <button type="submit" class="btn-success">
                                    <i class="fas fa-play"></i> Reativar Assinatura
                                </button>
                            </form>
                        @elseif ($subscription->ended())
                            @if(Auth::user()->subscribed('main_subscription'))
                                <p class="info-message">Você já possui uma assinatura ativa!</p>
                            @else
                                <div class="subscribe-cta">
                                    <p>Para ter acesso novamente, assine ou atualize um novo plano.</p>
                                    <a href="{{ route('subscription.index') }}" class="btn-primary">
                                        <i class="fas fa-star"></i> Escolha Seu Plano
                                    </a>
                                </div>
                            @endif
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        @else
            <div class="empty-state">
                <i class="fas fa-check-circle"></i>
                <p>Você não possui assinaturas canceladas.</p>
            </div>
        @endif
    </div>
</div>
@endsection