<!-- Exibe o nome do usuário autenticado -->
<h2>Olá, {{Auth::user()->name}}</h2>

<!-- Exibe um conteúdo apenas para usuários assinados no tipo 'premium'-->
@if(Auth::user()->subscribed('premium'))
    <p>Você esta assinado </p>
@endif

<!-- Exibe um conteúdo apenas para usuários assinados no id do produto e tipo correto -->
<!-- prod_Sek é o id do produto -->
@if(Auth::user()->subscribedToProduct('prod_SekO3IZ7WfqMkl', 'premium'))
    <p>Você esta assinado no plano PREMIUM </p>
@endif

<!-- Exibe um conteúdo apenas para usuários assinados no id do preço e tipo correto -->
<!-- price_1Rj é o id do preço -->
@if(Auth::user()->subscribedToPrice('price_1RjQtlPSFtrJEyUPc3gxFVIz', 'premium'))
    <p>Você esta assinado no plano de R$500,00 </p>
@endif