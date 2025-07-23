<h1>Escolha Seu Plano</h1>

@if(Auth::user() && Auth::user()->subscribed('main_subscription'))
    <p>Você já possui uma assinatura ativa. <a href="{{ route('private.index') }}">Gerencie sua assinatura aqui.</a></p>
@else
    <div style="display: flex; gap: 20px;">
        <div style="border: 1px solid #ccc; padding: 15px; border-radius: 8px;">
            <h2>Plano Básico Mensal</h2>
            <p>Acesso essencial aos recursos.</p>
            <h3>R$ 300,00 / mês</h3>
            <form action="{{ route('subscription.store') }}" method="POST">
                @csrf
                <input type="hidden" name="plan" value="main_subscription">
                <input type="hidden" name="price_id" value="price_1RjQsDPSFtrJEyUP3fhEZkGT">
                <button type="submit">Assinar Básico</button>
            </form>
        </div>

        <div style="border: 1px solid #ccc; padding: 15px; border-radius: 8px;">
            <h2>Plano Premium Mensal</h2>
            <p>Todos os recursos, faturamento mensal.</p>
            <h3>R$ 500,00 / mês</h3>
            <form action="{{ route('subscription.store') }}" method="POST">
                @csrf
                <input type="hidden" name="plan" value="main_subscription">
                <input type="hidden" name="price_id" value="price_1RjQtlPSFtrJEyUPc3gxFVIz">
                <button type="submit">Assinar Premium</button>
            </form>
        </div>
    </div>
@endif
