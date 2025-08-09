<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Auth Page')</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <link rel="icon" href="{{asset('img/icone.ico')}}" type="image/x-icon">

    {{-- Fontes do Google --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

    @stack('estilos')
    @vite(['resources/css/welcome/01-carregamento.css', 'resources/js/welcome/01-carregamento.js'])    

</head>
<body class="auth-page">
    {{-- === OVERLAY DE CARREGAMENTO === --}}
    <div id="loading-overlay">
        <div class="overlay-background">
            <div class="overlay-stars"></div>
        </div>
        <div class="loading-content">
            <div class="logo-spinner">
                <img src="{{asset('img/logo-internet.png')}}" alt="Logo Start to Finish" class="logo-placeholder">
                <div class="pulse-ring"></div>
            </div>
            <p>Estamos preparando tudo para você...</p>
        </div>
    </div>

    
    <div class="auth-container">
        @yield('content')
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
    @stack('scripts')
</body>
</html>