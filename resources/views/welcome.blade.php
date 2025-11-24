@extends('layouts.app')

@section('title', 'Start To Finish - Desenvolvimento Web Full-Stack')

@push('estilosEcodigos')
    <link rel="stylesheet" href="{{ asset('css/welcome/welcome.css') }}">
    <script type="module" src="{{ asset('js/welcome/welcome.js') }}"></script>
@endpush


@section('content')
    <div class="real-content">
        @include('sessoes.01-navbar')
        @include('sessoes.02-hero')
        @include('sessoes.03-sobre')
        @include('sessoes.04-projetos')
        @include('sessoes.05-depoimentos')
        @include('sessoes.08-footer')        
    </div>
@endsection