<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Redefinir Senha</title>
    <style>
        body {
            background-color: #101010;
            color: #dfdfdf;
            font-family: 'Segoe UI', sans-serif;
            padding: 0;
            margin: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #1e1e1e;
            border: 1px solid #444;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.3);
            overflow: hidden;
        }

        .header {
            background-color: #21325e;
            padding: 20px;
            text-align: center;
        }

        .header img {
            max-height: 50px;
            filter: invert(100%);
        }

        .content {
            padding: 30px;
        }

        h1 {
            color: #00fffd;
            font-size: 22px;
        }

        p {
            font-size: 16px;
            color: #cfcfcf;
            line-height: 1.6;
        }

        .button {
            margin: 30px 0;
            text-align: center;
        }

        .button a {
            background-color: #00fffd;
            color: #101010;
            padding: 14px 28px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
            display: inline-block;
            box-shadow: 0 0 10px #00fffd;
        }

        .footer {
            background-color: #262626;
            text-align: center;
            padding: 20px;
            font-size: 13px;
            color: #999;
        }

        .subcopy {
            font-size: 13px;
            color: #888;
            margin-top: 30px;
            word-break: break-word;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="{{asset('img/logo-internet.png')}}" alt="Logo Start To Finish">
        </div>
        <div class="content">
            <h1>Redefinição de Senha</h1>
            <p>Olá, {{ $user->name ?? 'usuário' }}😁</p>

            <p>Você solicitou uma confirmação de E-mail. Clique no botão abaixo para criar confirmar seu E-mail👇</p>

            <div class="button">
                <a href="{{ $actionUrl }}">Confirmar E-mail</a>
            </div>

            <p>Se você não solicitou essa alteração, ignore este e-mail.</p>

            <div class="subcopy">
                Se o botão acima não funcionar, copie e cole o link abaixo no seu navegador:<br>
                <a href="{{ $actionUrl }}">{{ $actionUrl }}</a>
            </div>
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} {{ config('app.name') }}. Todos os direitos reservados.
        </div>
    </div>
</body>
</html>