<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Verificação de E-mail - {{ config('app.name') }}</title>
    <style>
        :root {
            --bg-pri-color: #101010;
            --bg-sec-color: #262626;
            --text-pri-color: #fff;
            --text-sec-color: #cfcfcf;
            --text-ter-color: #dfdfdf;
            --inver-img: invert(100%);
            --primary-color: #1a1a2e;
            --secondary-color: #21325e;
            --neon: #00fffd;
            --gradiente-pri-color: #00fffd;
            --gradiente-sec-color: #19bf00;
            --box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            --card-bg: #1e1e1e;
            --border-color: #444;
            --btn-shodow: #fff;
            --btn-bg-hover: #000;
            --sol-lua: white;
        }

        body {
            background-color: var(--bg-pri-color);
            color: var(--text-ter-color);
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            padding: 0;
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: 
                radial-gradient(circle at 25% 25%, rgba(0, 255, 253, 0.05) 0%, transparent 50%),
                radial-gradient(circle at 75% 75%, rgba(25, 191, 0, 0.05) 0%, transparent 50%);
        }

        .container {
            max-width: 600px;
            width: 90%;
            margin: 20px auto;
            background-color: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            box-shadow: var(--box-shadow);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .container:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.4);
        }

        .header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            padding: 30px 20px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .header::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--gradiente-pri-color), var(--gradiente-sec-color));
        }

        .header img {
            max-height: 60px;
            filter: var(--inver-img);
            transition: transform 0.3s ease;
        }

        .header:hover img {
            transform: scale(1.05);
        }

        .content {
            padding: 40px;
        }

        h1 {
            color: var(--neon);
            font-size: 26px;
            margin-bottom: 25px;
            position: relative;
            display: inline-block;
            font-weight: 600;
        }

        h1::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 50px;
            height: 3px;
            background: linear-gradient(90deg, var(--gradiente-pri-color), var(--gradiente-sec-color));
            border-radius: 3px;
        }

        p {
            font-size: 16px;
            color: var(--text-sec-color);
            line-height: 1.7;
            margin-bottom: 20px;
        }

        .greeting {
            font-size: 18px;
            color: var(--text-pri-color);
            margin-bottom: 30px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .greeting::before {
            content: '👉';
            font-size: 20px;
        }

        .button {
            margin: 40px 0;
            text-align: center;
        }

        .button a {
            background: linear-gradient(135deg, var(--gradiente-pri-color), var(--gradiente-sec-color));
            color: var(--btn-bg-hover);
            padding: 16px 32px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            display: inline-block;
            box-shadow: 0 0 15px rgba(0, 255, 253, 0.4);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            border: none;
            font-size: 16px;
        }

        .button a:hover {
            transform: translateY(-3px);
            box-shadow: 0 0 25px rgba(0, 255, 253, 0.6);
        }

        .button a:active {
            transform: translateY(0);
        }

        .button a::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, var(--gradiente-sec-color), var(--gradiente-pri-color));
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .button a:hover::before {
            opacity: 1;
        }

        .footer {
            background-color: var(--bg-sec-color);
            text-align: center;
            padding: 25px;
            font-size: 14px;
            color: var(--text-sec-color);
            border-top: 1px solid var(--border-color);
        }

        .subcopy {
            font-size: 14px;
            color: var(--text-sec-color);
            margin-top: 40px;
            padding: 20px;
            background-color: rgba(38, 38, 38, 0.5);
            border-radius: 8px;
            word-break: break-word;
            line-height: 1.6;
            border: 1px dashed var(--border-color);
        }

        .subcopy a {
            color: var(--neon);
            text-decoration: none;
            word-break: break-all;
        }

        .subcopy a:hover {
            text-decoration: underline;
        }

        @media (max-width: 480px) {
            .content {
                padding: 30px 20px;
            }
            
            h1 {
                font-size: 22px;
            }
            
            .button a {
                padding: 14px 24px;
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="{{asset('img/starttofinish-black.png')}}" style="filter: var(--inver-img);" alt="Logo {{ config('app.name') }}">
        </div>
        <div class="content">
            <h1>Confirmação de E-mail</h1>
            
            <div class="greeting">
                Olá, {{ $user->name ?? 'usuário' }}
            </div>

            <p>Você solicitou uma confirmação de e-mail em nossa plataforma. Para completar o processo de verificação, clique no botão abaixo:</p>

            <div class="button">
                <a href="{{ $actionUrl }}">Confirmar E-mail</a>
            </div>

            <p>Se você não solicitou esta verificação, por favor ignore este e-mail ou entre em contato com nosso suporte caso acredite que isto seja um erro.</p>

            <div class="subcopy">
                Se o botão acima não funcionar, copie e cole o seguinte link no seu navegador:<br><br>
                <a href="{{ $actionUrl }}">{{ $actionUrl }}</a>
            </div>
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} {{ config('app.name') }}. Todos os direitos reservados.
        </div>
    </div>
</body>
</html>