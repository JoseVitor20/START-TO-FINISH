<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redefinir Senha - {{ config('app.name') }}</title>
    <style type="text/css">
        @media screen and (max-width: 600px) {
            h2 {
                font-size: 18px !important;
            }
            p, a {
                font-size: 14px !important;
            }
            .button {
                font-size: 14px !important;
                padding: 12px 24px !important;
            }
        }
    </style>
</head>
<body style="margin: 0; padding: 1rem; background-color: #101010; font-family: 'Poppins', Arial, sans-serif; color: #dfdfdf;">

    <div style="background-color: #1e1e1e; border-radius: 16px; padding: 20px; max-width: 600px; margin: 0 auto; border: 1px solid #444; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);">

        <h2 style="color: #00fffd; font-size: 24px; margin-bottom: 24px; padding-bottom: 10px; border-bottom: 3px solid #19bf00; margin-top: 0;">
            Olá, {{ $user->name }} 👋
        </h2>

        <p style="color: #cfcfcf; font-size: 16px; line-height: 1.6; margin-bottom: 24px;">
            Recebemos uma solicitação para redefinir a senha da sua conta. Clique no botão abaixo para criar uma nova senha
        </p>

        <div style="text-align: center; margin: 40px 0;">
            <a href="{{ $url }}" style="display: inline-block; padding: 16px 32px; background: linear-gradient(135deg, #00fffd, #19bf00); color: #000 !important; text-decoration: none; border-radius: 8px; font-weight: 600; font-size: 16px;" class="button">
                Redefinir Senha
            </a>
        </div>

        <p style="color: #cfcfcf; font-size: 16px; line-height: 1.6; margin-bottom: 24px;">
            Este link de redefinição expirará em <strong>60 minutos</strong> por motivos de segurança.
        </p>

        <p style="color: #cfcfcf; font-size: 16px; line-height: 1.6;">
            Se você não solicitou a redefinição de senha, por favor ignore este e-mail ou entre em contato com nosso suporte caso acredite que isto seja um erro.
        </p>

        <p style="margin-top: 40px; color: #ffffff; font-size: 16px;">
            Atenciosamente,<br>
            <strong style="color: #00fffd;">{{ config('app.name') }}</strong>
        </p>
    </div>

</body>
</html>