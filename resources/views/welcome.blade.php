@extends('layouts.app')

@section('title', 'Start To Finish - Desenvolvimento Web Full-Stack')

@push('estilosEcodigos')
    @vite(['resources/css/welcome/welcome.css', 'resources/js/welcome/welcome.js'])
@endpush

@section('content')
    <div class="real-content">
        @include('sessoes.01-navbar')
        @include('sessoes.02-hero')
        @include('sessoes.03-sobre')
        @include('sessoes.04-projetos')
        @include('sessoes.05-depoimentos')
        @include('sessoes.06-contato')
        @include('sessoes.07-serviço')
        @include('sessoes.08-footer')        
    </div>
@endsection