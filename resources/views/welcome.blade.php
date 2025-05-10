<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- === SEO === --}}
        <meta name="description" content="Oferecemos soluções completas em desenvolvimento web, com foco em performance, velocidade, escalabilidade e design responsivo.">
        
        <meta name="google-site-verification" content="6Sf62hPN2HDwTEdzz7Hc-qaWy-h_A7NP51JfQ8eo7Sk" />
    
    <title>Start To Finish</title>
    <link rel="icon" href="{{asset('img/icone.ico')}}" type="image/x-icon">
    {{-- === BOOTSTRAP CSS === --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    {{-- === ÍCONES BOOTSTRAP === --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    {{-- === ANIMATE === --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"> 

    {{--  === AOS ===  --}}
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- === FONT AWESOME === --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    {{-- === GOOGLE FONTS === --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

    {{-- === ESTILOS CSS ==== --}}
        <link rel="stylesheet" href="{{asset('css/style.min.css')}}">

</head>

<body>

    <!-- Overlay de carregamento -->
    <div class="loading-overlay">
        <div class="loading-content"> 
            <img src="{{asset('img/icone.ico')}}" alt="">                
            <div class="spinner">
            </div>
        </div>
    </div>

    <div class="real-content">
        @include('sessoes-min')
    </div>

    {{-- === BOOTSTRAP === --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    {{-- PARTICLES.JS --}}
        <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    {{--  === AOS ===  --}}
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
          AOS.init();
        </script>

    {{-- === LÓGICA JS ===  --}}
    <script src="{{asset('js/scripts.min.js')}}"></script>

</body>

</html>
