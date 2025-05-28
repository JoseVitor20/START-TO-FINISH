@extends('layout')

@section('title', 'Start To Finish - Desenvolvimento Web Full-Stack')
  
@push('estilos')
    <link rel="stylesheet" href="{{asset('css/style.min.css')}}">
@endpush

@section('content')
    {{-- === OVERLAY DE CARREGAMENTO === --}}
    <div class="loading-overlay">
        <div class="loading-content"> 
            <img src="{{asset('img/logo-internet.png')}}" alt="Logo Start To Finish">                
            <div class="spinner">
            </div>
        </div>
    </div>

    <div class="real-content">
        @include('sessoes-min')
    </div>
@endsection

@push('scripts')
    {{-- === LÓGICA JS ===  --}}
    <script src="{{asset('js/scripts.min.js')}}"></script>
@endpush