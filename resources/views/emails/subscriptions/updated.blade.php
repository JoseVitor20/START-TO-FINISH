<x-mail::message>
# Olá, {{ $userName }}!

Sua assinatura do plano **{{ $planName }}** foi atualizada com sucesso! 🎉

Você terá acesso total aos nossos recursos.

@if($endsAt && $endsAt !== 'Data de término do ciclo não definida')
Seu período atual termina em **{{ $endsAt }}**.
@endif

Agradecemos por fazer parte da nossa comunidade!

<x-mail::button :url="route('private.index')">
Acessar Minha Conta
</x-mail::button>

Atenciosamente,<br>
{{ config('app.name') }}
</x-mail::message>