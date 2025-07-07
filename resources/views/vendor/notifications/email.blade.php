<!DOCTYPE html> 
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Redefinição de Senha</title>
    <style>
        body {
            background-color: #101010;
            color: #dfdfdf;
            font-family: 'Segoe UI', sans-serif;
            padding: 0;
            margin: 0;
        }

        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #1e1e1e;
            border: 1px solid #444;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        }

        .email-header {
            background-color: #21325e;
            padding: 20px;
            text-align: center;
        }

        .email-header img {
            max-height: 50px;
            filter: invert(100%);
        }

        .email-body {
            padding: 30px;
        }

        .email-body h1 {
            color: #00fffd;
            font-size: 22px;
        }

        .email-body p {
            font-size: 16px;
            color: #cfcfcf;
            line-height: 1.6;
        }

        .email-button {
            margin: 30px 0;
            text-align: center;
        }

        .email-button a {
            background-color: #00fffd;
            color: #101010;
            padding: 14px 28px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
            display: inline-block;
            box-shadow: 0 0 10px #00fffd;
            transition: background 0.3s;
        }

        .email-button a:hover {
            background-color: #19bf00;
            box-shadow: 0 0 12px #19bf00;
        }

        .email-footer {
            background-color: #262626;
            text-align: center;
            padding: 20px;
            font-size: 13px;
            color: #999;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            <img src="{{asset('img/logo-internet.png')}}" alt="Start To Finish">
        </div>
        <div class="email-body">
            <h1>Verificação de conta de E-mail</h1>

            <p>Olá! Recebemos uma solicitação para <strong>confirmar E-mail</strong>. Se você não fez essa solicitação, pode ignorar este e-mail.</p>

            <div class="email-button">
                <a href="{{ $actionUrl }}">Confirmar E-mail</a>
            </div>
        </div>
        <div class="email-footer">
            &copy; {{ date('Y') }} {{ config('app.name') }}. Todos os direitos reservados.
        </div>
    </div>
</body>
</html>
