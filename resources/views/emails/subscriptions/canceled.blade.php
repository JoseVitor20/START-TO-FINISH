<x-mail::message>
# Olá, {{ $userName }}!

O plano **{{ $planName }}** foi cancelado com sucesso! 🎉


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