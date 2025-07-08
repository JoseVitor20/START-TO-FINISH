<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Verificação de E-mail - {{ config('app.name') }}</title>
</head>
<body style="background-color: #101010; color: #dfdfdf; font-family: 'Segoe UI', system-ui, sans-serif; margin: 0; padding: 20px;">
    <div style="max-width: 600px; margin: 0 auto; background-color: #1e1e1e; border: 1px solid #444; border-radius: 16px; box-shadow: 0 4px 12px rgba(0,0,0,0.3); overflow: hidden;">
        
        <!-- Header -->
        <div style="background: linear-gradient(135deg, #1a1a2e, #21325e); padding: 30px 20px; text-align: center; position: relative;">
            <img src="{{ asset('img/starttofinish-black.png') }}" alt="Logo {{ config('app.name') }}" style="max-height: 60px; filter: invert(100%);">
            <div style="height: 4px; background: linear-gradient(90deg, #00fffd, #19bf00); position: absolute; top: 0; left: 0; right: 0;"></div>
        </div>

        <!-- Content -->
        <div style="padding: 40px;">
            <h1 style="color: #00fffd; font-size: 26px; margin-bottom: 25px; font-weight: 600; position: relative; display: inline-block;">
                Confirmação de E-mail
                <span style="display: block; height: 3px; width: 100%; background: linear-gradient(90deg, #00fffd, #19bf00); border-radius: 3px; position: absolute; bottom: -8px; left: 0;"></span>
            </h1>

            <div style="font-size: 18px; color: #fff; margin-bottom: 30px;">
                Olá, {{ $user->name ?? 'usuário' }} 👋
            </div>

            <p style="font-size: 16px; color: #cfcfcf; line-height: 1.7; margin-bottom: 20px;">
                Você solicitou uma confirmação de e-mail em nossa plataforma. Para completar o processo de verificação, clique no botão abaixo 👇
            </p>

            <div style="text-align: center; margin: 40px 0;">
                <a href="{{ $url }}" style="background: linear-gradient(135deg, #00fffd, #19bf00); color: #000; padding: 16px 32px; border-radius: 8px; text-decoration: none; font-weight: 600; display: inline-block; font-size: 16px; box-shadow: 0 0 15px rgba(0,255,253,0.4);">
                    Confirmar E-mail
                </a>
            </div>

            <p style="font-size: 16px; color: #cfcfcf; line-height: 1.7; margin-bottom: 20px;">
                Se você não solicitou esta verificação, por favor ignore este e-mail ou entre em contato com nosso suporte caso acredite que isto seja um erro.
            </p>
        </div>

        <!-- Footer -->
        <div style="background-color: #262626; text-align: center; padding: 25px; font-size: 14px; color: #cfcfcf; border-top: 1px solid #444;">
            &copy; {{ date('Y') }} {{ config('app.name') }}. Todos os direitos reservados.
        </div>
    </div>
</body>
</html>
