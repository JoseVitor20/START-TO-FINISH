@extends('layouts.layout-dashboard')

@section('title', 'Start To Finish - Administrativo')

@push('estilosEcodigosDash')
    @vite(['resources/css/dashboard/dashboard.css', 'resources/js/dashboard/dashboard.js'])
@endpush

@section('content')
    <div class="subscriptions-container">
        {{-- Sessão para Gerenciar assinaturas --}}
        @can('access-user')
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
                            @if($mainSubscription->stripe_price == 'price_1RjQtlPSFtrJEyUPc3gxFVIz')
                                <h3 class="plan-title">Atualizar Plano Premium</h3>
                            @elseif($mainSubscription->stripe_price == 'price_1RjQsDPSFtrJEyUP3fhEZkGT')
                                <h3 class="plan-title">Atualizar Básico</h3>
                            @endif                             
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
        @endcan

        <!-- Seção de Gerenciamento de Usuários (mantida igual) -->
        @can('access-owner')
            <div class="card-grid">
                <div class="report-card">
                    <div class="card-header">
                        <div class="icon-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="var(--text-pri-color)">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                        </div>
                        <h2 class="card-title">Clientes cadastrados</h2>
                        <p class="card-subtitle">Informações gerais sobre os clientes</p>
                    </div>

                    <div class="user-list-container">
                        <h3 class="user-list-title">Usuários Recentes</h3>
                        <ul class="user-list" id="userList">
                            @php
                                $mainSubscription = Auth::user()->subscription('main_subscription');
                            @endphp                                
                            @foreach($usuarios->where('role', '!=', 'owner')->take(5) as $usuario)
                                <li class="user-list-item">
                                    <img src="{{ $usuario->gravatar }}" alt="{{ $usuario->name }}" class="user-avatar">
                                    <div class="user-info">
                                        <div class="user-name">{{ $usuario->name }}</div>
                                        <div class="user-email">{{ $usuario->email }}</div>
                                    </div>
                                    <div class="user-status-indicator"></div>
                                </li>
                            @endforeach

                            @foreach($usuarios->where('role', '!=', 'owner')->skip(5) as $usuario)
                                <li class="user-list-item hidden-user">
                                    <img src="{{ $usuario->gravatar }}" alt="{{ $usuario->name }}" class="user-avatar">
                                    <div class="user-info">
                                        <div class="user-name">{{ $usuario->name }}</div>
                                        <div class="user-email">{{ $usuario->email }}</div>
                                    </div>
                                    <div class="user-status-indicator"></div>
                                </li>
                            @endforeach
                        </ul>
                        @if($usuarios->where('role', '!=', 'owner')->count() > 5)
                            <button class="view-all-btn" id="viewAllBtn">
                                Ver Todos
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="var(--neon)" class="dropdown-icon">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                        @endif
                    </div>
                </div>
            </div>
        @endcan
    </div>
@endsection