<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Mensagem de Contato</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 20px;
            color: #333;
        }

        .email-wrapper {
            background-color: #fff;
            max-width: 650px;
            margin: auto;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
        }

        h2 {
            color: #1e90ff;
            margin-bottom: 20px;
        }

        .content p {
            margin: 12px 0;
            line-height: 1.6;
        }

        .label {
            font-weight: bold;
            color: #555;
        }

        .footer {
            margin-top: 30px;
            font-size: 0.9em;
            color: #888;
            border-top: 1px solid #eee;
            padding-top: 15px;
        }
    </style>
</head>
<body>
    <div class="email-wrapper">
        <h2>📬 Você recebeu uma nova mensagem pelo site</h2>

        <div class="content">
            <p><span class="label">👤 Nome:</span> {{ $dados['nome'] }}</p>
            <p><span class="label">✉️ E-mail:</span> {{ $dados['email'] }}</p>
            <p><span class="label">📝 Mensagem:</span><br>{{ $dados['mensagem'] }}</p>
        </div>

        <div class="footer">
            <p>Essa mensagem foi enviada pelo formulário de contato do seu site. Responda diretamente para <strong>{{ $dados['email'] }}</strong> caso queira entrar em contato.</p>
            <p>Data do envio: {{ \Carbon\Carbon::now()->format('d/m/Y H:i') }}</p>
        </div>
    </div>
</body>
</html>