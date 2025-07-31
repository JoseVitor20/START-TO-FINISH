@extends('layouts.app')

@section('title', 'Start To Finish - Desenvolvimento Web Full-Stack')

@push('estilosEcodigos')
    @vite(['resources/css/welcome/welcome.css', 'resources/js/welcome/welcome.js'])
@endpush

@section('content')
    {{-- === OVERLAY DE CARREGAMENTO === --}}
    <div class="CARREGAMENTO CARREGAMENTO__overlay">
        <div class="CARREGAMENTO__content"> 
            <img class="CARREGAMENTO__logo" src="{{asset('img/logo-internet.png')}}" alt="Logo Start To Finish">                
            <div class="CARREGAMENTO__spinner">
            </div>
        </div>
    </div>  

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