@extends('layouts.layout-dashboard')

@section('title', 'Start To Finish - Compra cancelada!')

@push('estilosEcodigosDash')
    @vite(['resources/css/dashboard/dashboard.css', 'resources/js/dashboard/dashboard.js'])
@endpush

@section('content')
<style>
    /* Estilos para o botão de voltar, usando as variáveis da paleta */
    .btn-custom {
        background-color: var(--primary-color);
        color: var(--text-pri-color);
        border: none;
        padding: 12px 25px;
        border-radius: 8px;
        transition: var(--transition); /* Garante uma transição suave para as mudanças */
        font-weight: bold;
        text-decoration: none; /* Remove o sublinhado padrão dos links */
        display: inline-block; /* Permite que o padding e transform funcionem corretamente */
        cursor: pointer; /* Indica que é um elemento clicável */
    }

    .btn-custom:hover {
        background-color: var(--btn-bg-hover); /* Muda a cor de fundo no hover */
        box-shadow: 0 0 15px var(--btn-shodow); /* Adiciona uma sombra neon no hover */
        transform: translateY(-2px); /* Efeito sutil de "levantar" no hover */
    }

    /* Adiciona uma transição suave e um leve efeito de escala no card ao passar o mouse */
    .card {
        transition: var(--transition);
    }
    .card:hover {
        transform: scale(1.005); /* Leve zoom para um efeito elegante */
    }
</style>
{{-- Container principal para centralizar o conteúdo vertical e horizontalmente --}}
<div class="container d-flex justify-content-center align-items-center vh-100">
    {{-- Card com estilos da paleta de cores e padding aprimorado --}}
    <div class="card p-5 mx-auto" style="max-width: 500px; background-color: var(--card-bg); border-color: var(--border-color); box-shadow: var(--box-shadow); border-radius: 10px;">
        <div class="card-body text-center">
            {{-- Contêiner para o ícone de cancelamento --}}
            <div class="icon-container mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="var(--error-color)" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                </svg>
            </div>
            {{-- Título principal com cor de erro --}}
            <h1 class="card-title mb-3" style="color: var(--error-color);">Pagamento Cancelado</h1>
            {{-- Mensagem descritiva com cor de texto secundária --}}
            <p class="card-text mb-4" style="color: var(--text-sec-color);">
                A sua compra não foi finalizada. Por favor, tente novamente ou entre em contato com o suporte se o problema persistir.
            </p>
            {{-- Botão para voltar à dashboard com estilos da paleta --}}
            <a href="{{ url('/dashboard') }}" class="btn btn-custom">
                Voltar para o Início
            </a>
        </div>
    </div>
</div>
@endsection
