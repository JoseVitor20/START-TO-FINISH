<!DOCTYPE html>
<html lang="pt-BR">

<head>
    {{-- === SEO ESSENCIAL === --}}
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Language" content="pt-BR">
        <meta name="robots" content="index, follow">
        <meta name="author" content="Start to Finish">
        <meta name="description" content="A Start To Finish é especialista em divulgação online, atuando na criação de sites e na publicação de anúncios em plataformas como Facebook, Instagram, Youtube, etc.">
        <meta name="keywords" content="laravel, desenvolvimento web, full-stack, sistemas personalizados">
        <meta name="google-site-verification" content="6Sf62hPN2HDwTEdzz7Hc-qaWy-h_A7NP51JfQ8eo7Sk">

    {{-- === URL CANÔNICA === --}}
        <link rel="canonical" href="{{ request()->url() }}">

    {{-- === OPEN GRAPH (PARA FACEBOOK, LINKEDIN ETC.) === --}}
        <meta property="og:type" content="website">
        <meta property="og:title" content="Start to Finish">
        <meta property="og:description" content="A Start To Finish é especialista em divulgação online, atuando na criação de sites e na publicação de anúncios em plataformas como Facebook, Instagram, Youtube, etc.">
        <meta property="og:image" content="https://www.starttofinish.com.br/img/perfil-google.png">
        <meta property="og:url" content="https://www.starttofinish.com.br">

    {{-- === TWITTER CARDS (PARA TWITTER/X) === --}}
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:t   itle" content="Start to Finish">
        <meta name="twitter:description" content="A Start to Finish oferece soluções completas em tecnologia.">
        <meta name="twitter:image" content="https://www.starttofinish.com.br/img/perfil-google.png">

    {{-- === SCHEMA.ORG STRUCTURED DATA === --}}
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Organization",
          "name": "Start to Finish",
          "url": "https://www.starttofinish.com.br",
          "logo": "https://www.starttofinish.com.br/img/logo-internet.png",
          "description": "A Start to Finish oferece soluções completas em tecnologia, sites, sistemas e aplicações web personalizadas. Inove seu projeto com agilidade e qualidade.",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "Rua Padre Aquiles Pio Redin, 150",
            "addressLocality": "Dourados - MS",
            "postalCode": "79000-000",
            "addressCountry": "BR"
          },
          "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+55-67-9872-2284",
            "contactType": "customer service"
          },
          "sameAs": [
            "https://www.linkedin.com/in/josé-vitor-nascimento-lopes-aa2a24265",
            "https://github.com/JoseVitor20",
            "https://www.instagram.com/josevitor.nascimentolopes",
            "https://www.facebook.com/josevitor.nascimentolopes"
          ]
        }
        </script>

    {{-- === TÍTULO DA PÁGINA E ÍCONE=== --}}
        <title>@yield('title')</title>

        <link rel="icon" href="{{asset('img/icone.ico')}}" type="image/x-icon">
        
    {{-- === BOOTSTRAP CSS === --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    {{-- === ÍCONES BOOTSTRAP === --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    {{-- === ANIMATE === --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"> 
     {{--=== LIGHTBOXCSS === --}}
        <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">

    {{-- === AOS === --}}
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- === FONT AWESOME === --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    {{-- === GOOGLE FONTS === --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

    {{-- === ESTILOS CSS E JS === --}}
        @stack('estilosEcodigos')

    {{-- CARREGAMENTO --}}
    <link rel="stylesheet" href="{{asset('css/welcome/01-carregamento.css')}}">
    <script src="{{asset('js/welcome/01-carregamento.js')}}"></script>

</head>

<body>
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

    @yield('content')

    {{-- === LÓGICA === --}}
        {{-- === Bootstrap === --}}
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        {{-- PARTICLES.JS --}}
            <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

        {{--  === AOS ===  --}}
            <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
            <script>
              AOS.init();
            </script>

</body>

</html>
