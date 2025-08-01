@extends('layouts.layout-dashboard')

@section('title', 'Start To Finish - Contrato e cláusulas')

@push('estilosEcodigosDash')
    @vite(['resources/css/dashboard/dashboard.css', 'resources/js/dashboard/dashboard.js'])
@endpush

@section('content')
<div class="container">
    <h2>Status do contrato</h2>

    @if(auth()->user()->contract_status === 'contract_rejected')
        <div class="alert alert-danger">
            Você recusou os termos do contrato. Seu acesso pode ser limitado.
        </div>
    @endif

    @if($status === 'contract_accepted')
        <p>✅ Você aceitou o contrato.</p>
    @elseif($status === 'contract_refused')
        <p>❌ Você recusou o contrato.</p>
    @else
        <p>⚠️ Você ainda não respondeu ao contrato.</p>
        <a href="{{route('painel')}}">Acessar a página para aceitar os termos</a>
    @endif
</div>
@endsection