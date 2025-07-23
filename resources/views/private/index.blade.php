<h2>Olá, {{ Auth::user()->name }}</h2>


<h3>Minhas Assinaturas Ativas</h3>
@if ($activeSubscriptions->isNotEmpty())
    <ul>
        @foreach ($activeSubscriptions as $subscription)
            <li>
                <strong>Nome da Assinatura:</strong> {{ $subscription->name }}<br> {{-- Ex: main_subscription --}}
                <strong>Plano ID (Stripe):</strong> {{ $subscription->stripe_price }}<br>
                <strong>Status:</strong> Ativa<br>
                <strong>Próxima cobrança:</strong>
                @if ($subscription->next_billing_date)
                    {{ $subscription->next_billing_date->format('d/m/Y') }}
                @else
                    N/A (Não foi possível obter a próxima data de cobrança)
                @endif
                <br>
                @if ($subscription->onTrial())
                    (Período de teste até: {{ $subscription->trial_ends_at->format('d/m/Y') }})
                @endif

                @if($subscription->onGracePeriod())
                    <form action="{{ route('subscription.cancelNow') }}" method="POST">
                        @csrf
                        <input type="hidden" name="subscription_id" value="{{ $subscription->id }}">
                        <button type="submit">Cancelar Imediatamente</button>
                    </form>

                @else
                    <form action="{{ route('subscription.cancel') }}" method="POST">
                        @csrf
                        <input type="hidden" name="subscription_id" value="{{ $subscription->id }}">
                        <button type="submit">Cancelar Assinatura (mantém acesso até o final do ciclo)</button>
                    </form>                    

                @endif
            </li>
            <br>
        @endforeach
    </ul>
@else
    <p>Você não possui assinaturas ativas no momento.</p>
@endif


<h3>Minhas Assinaturas Canceladas</h3>
@if ($canceledSubscriptions->isNotEmpty())
    <ul>
        @foreach ($canceledSubscriptions as $subscription)
            <li>
                <strong>Nome da Assinatura:</strong> {{ $subscription->name }}<br>
                <strong>Plano ID (Stripe):</strong> {{ $subscription->stripe_price }}<br>
                <strong>Status:</strong> Cancelada
                @if ($subscription->onGracePeriod())
                    (Acesso até: {{ $subscription->ends_at->format('d/m/Y') }})
                    <form action="{{ route('subscription.resume') }}" method="POST">
                        @csrf
                        <input type="hidden" name="subscription_id" value="{{ $subscription->id }}">
                        <button type="submit">Reativar Assinatura</button>
                    </form>
                @elseif ($subscription->ended())
                    (Encerrada em: {{ $subscription->ends_at->format('d/m/Y') }})
                    @if(Auth::user()->subscribed('main_subscription'))
                        {{-- Conteúdo para usuários COM assinatura ativa --}}
                        <p>Você já possui uma assinatura ativa!</p>

                    @else
                        <p>Para ter acesso novamente, assine ou atualize um novo plano.</p>
                        <a href="{{ route('subscription.index') }}" style="background-color: #007bff; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;">Escolha Seu Plano</a>

                    @endif                    
                @endif
            </li>
            <br>
        @endforeach
    </ul>
@else
    <p>Você não possui assinaturas canceladas.</p>
@endif


{{-- Seu código existente para gerenciar a 'main_subscription' pode permanecer, ou você pode refatorá-lo para usar a lista acima. --}}
{{-- Por exemplo, se quiser exibir o formulário de mudança de plano apenas para a 'main_subscription' ativa e que não está em período de carência: --}}
@php
    $mainSubscription = Auth::user()->subscription('main_subscription');
@endphp

@if($mainSubscription && !$mainSubscription->onGracePeriod() && !$mainSubscription->ended())
    <h3>Mudar Plano ({{ $mainSubscription->stripe_price }})</h3>
    <form action="{{ route('subscription.update') }}" method="POST">
        @csrf
        <label for="new_plan">Selecione o novo plano:</label>
        <select name="new_price_id" id="new_plan">
            <option value="price_1RjQsDPSFtrJEyUP3fhEZkGT">Plano Básico (ex: R$300,00)</option>
            <option value="price_1RjQtlPSFtrJEyUPc3gxFVIz">Plano Premium (ex: R$500,00)</option>
        </select>
        <button type="submit">Atualizar Plano</button>
    </form>
@endif