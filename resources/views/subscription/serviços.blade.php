<h1>Planos de assinatura</h1>

<form action="{{route('subscription.store')}}" method="POST">
    @csrf

    <p>Plano Premium de R$500,00</p>
    <hr>
    <input type="hidden" name="plan" value="premium">
    <input type="hidden" name="price_id" value="price_1RjQtlPSFtrJEyUPc3gxFVIz">
    <button type="submit">Assinar plano</button>
</form>