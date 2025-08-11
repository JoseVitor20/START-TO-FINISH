<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start To Finish - Compra cancelada!</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* Definir as variáveis de cor e transição */
        :root {
            /* Dark Mode (Padrão) */
            --bg-pri-color: #0f0f13;
            --bg-pri-color-transparent: #0f0f1380;
            --bg-sec-color: #1a1a24;
            --bg-sec-color-transparent: #1a1a2480;
            --text-pri-color: #ffffff;
            --text-sec-color: #a0a0c0;
            --primary-color: #1900df;
            --secondary-color: purple;
            --neon: #00f5d0;
            --gradiente-pri-color: #19bf00;
            --gradiente-sec-color: #40ffe2;
            --box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            --card-bg: #1e1e2a;
            --border-color: #2d2d42;
            --btn-shodow: #00f5d0;
            --btn-bg-hover: #000;
            --sol-lua: #00f5d0;
            --error-color: #ff5e7d;
            --success-color: #00e0a0;
            --transition: all 0.4s cubic-bezier(0.68, -0.55, 0.27, 1.55);
            --inver-img: invert(100%);
            /* Ajustado de --success-color: #59ff40; para evitar duplicidade */
            --hover-text: #606060;
            --hover-bg: #cfcfcf;
        }

        /* Estilos globais para centralização e aparência do corpo */
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-pri-color);
            display: flex;
            justify-content: center; /* Centraliza horizontalmente */
            align-items: center; /* Centraliza verticalmente */
            min-height: 100vh; /* Garante que o corpo ocupe toda a altura da viewport */
            color: var(--text-pri-color); /* Cor de texto padrão para o corpo */
            padding: 20px; /* Espaçamento geral nas laterais para telas muito pequenas */
            box-sizing: border-box; /* Inclui padding e borda na largura total */
        }

        /* Estilos para o card principal */
        .custom-card {
            background-color: var(--card-bg);
            border: 1px solid var(--border-color);
            box-shadow: var(--box-shadow);
            border-radius: 10px;
            max-width: 500px;
            width: 100%; /* Garante que o card ocupe a largura disponível até o max-width */
            padding: 40px; /* Padding interno generoso para o conteúdo do card */
            text-align: center; /* Centraliza o texto dentro do card */
            transition: var(--transition); /* Adiciona transição para efeitos de hover */
        }

        .custom-card:hover {
            transform: scale(1.005); /* Leve zoom para um efeito elegante ao passar o mouse */
        }

        /* Estilos para o ícone */
        .icon-container {
            margin-bottom: 25px; /* Espaçamento abaixo do ícone */
        }

        .icon-container svg {
            fill: var(--error-color); /* Garante que a cor do ícone use a variável */
        }

        /* Estilos para o título */
        .custom-card h1 {
            color: var(--error-color);
            margin-bottom: 15px; /* Espaçamento abaixo do título */
            font-size: 2em; /* Tamanho da fonte para o título */
        }

        /* Estilos para o parágrafo de texto */
        .custom-card p {
            color: var(--text-sec-color);
            margin-bottom: 30px; /* Espaçamento abaixo do parágrafo */
            font-size: 1.1em; /* Tamanho da fonte para o parágrafo */
            line-height: 1.6; /* Altura da linha para melhor leitura */
        }

        /* Estilos para o botão personalizado */
        .btn-custom {
            background-color: var(--primary-color);
            color: var(--text-pri-color);
            border: none;
            padding: 12px 25px;
            border-radius: 8px;
            transition: var(--transition); /* Garante uma transição suave */
            font-weight: bold;
            text-decoration: none; /* Remove o sublinhado padrão dos links */
            display: inline-block; /* Permite que o padding e transform funcionem corretamente */
            cursor: pointer; /* Indica que é um elemento clicável */
            font-size: 1em; /* Tamanho da fonte do botão */
        }

        .btn-custom:hover {
            background-color: var(--btn-bg-hover); /* Muda a cor de fundo no hover */
            box-shadow: 0 0 15px var(--btn-shodow); /* Adiciona uma sombra neon no hover */
            transform: translateY(-2px); /* Efeito sutil de "levantar" no hover */
        }

        /* Media queries para responsividade */
        @media (max-width: 600px) {
            .custom-card {
                padding: 25px; /* Reduz o padding em telas menores */
            }
            .custom-card h1 {
                font-size: 1.7em;
            }
            .custom-card p {
                font-size: 1em;
            }
            .btn-custom {
                padding: 10px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="custom-card">
        <div class="icon-container">
            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
            </svg>
        </div>
        <h1>Pagamento Cancelado</h1>
        <p>
            A sua compra não foi finalizada. Por favor, tente novamente ou entre em contato com o suporte se o problema persistir.
        </p>
        <a href="/#precos" class="btn-custom">
            Voltar para o Início
        </a>
    </div>
</body>
</html>
