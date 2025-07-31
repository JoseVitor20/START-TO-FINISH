<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação de Assinatura - {{ config('app.name') }}</title>
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
<body style="background-color: #0f0f13; color: #ffffff; font-family: 'Segoe UI', system-ui, sans-serif; margin: 0; padding: 20px;">

    <div style="max-width: 600px; margin: 0 auto; background-color: #1e1e2a; border: 1px solid #2d2d42; border-radius: 16px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3); overflow: hidden;">
        
        <!-- Header -->
        <div style="background: linear-gradient(135deg, #1a1a24, #1900df); padding: 30px 20px; text-align: center; position: relative;">
            <img src="{{ asset('img/starttofinish-black.png') }}" alt="Logo {{ config('app.name') }}" style="max-height: 60px; filter: invert(100%);">
        </div>

        <!-- Content -->
        <div style="padding: 40px;">
            <h1 style="color: #00f5d0; font-size: 26px; margin-bottom: 25px; font-weight: 600; position: relative; display: inline-block;">
                Confirmação de Assinatura
                <span style="display: block; height: 3px; width: 100%; background: linear-gradient(90deg, #00f5d0, #19bf00); border-radius: 3px; position: absolute; bottom: -8px; left: 0;"></span>
            </h1>

            <div style="font-size: 18px; color: #ffffff; margin-bottom: 30px;">
                Olá, {{ $userName }}! 👋
            </div>

            @if($planName == 'price_1RjQsDPSFtrJEyUP3fhEZkGT')
                <div style="margin-bottom: 30px;">
                    <p style="font-size: 16px; color: #ffffff; line-height: 1.7; margin-bottom: 20px;">
                        Sua assinatura do plano <strong style="color: #00f5d0;">Basico</strong> foi confirmada com sucesso! 🎉
                    </p>
                    <div style="text-align: center; margin: 20px 0;">
                        <img src="{{ asset('img/assinaturas/plano-basico.png') }}" alt="Plano Básico" style="max-width: 100%; border-radius: 8px; border: 1px solid #2d2d42;">
                    </div>
                    <h3 style="color: #00f5d0; font-size: 18px; margin-bottom: 15px;">Você terá o acesso a esses benefícios do plano Básico:</h3>
                    <ul style="padding-left: 20px; color: #a0a0c0; line-height: 1.6; margin-bottom: 20px;">
                        <li style="margin-bottom: 8px;">Benefício 1</li>
                        <li style="margin-bottom: 8px;">Benefício 2</li>
                        <li style="margin-bottom: 8px;">Benefício 3</li>
                        <li style="margin-bottom: 8px;">Benefício 4</li>
                        <li style="margin-bottom: 8px;">Benefício 5</li>
                    </ul>
                </div>                  
            @elseif($planName == 'price_1RjQtlPSFtrJEyUPc3gxFVIz')
                <div style="margin-bottom: 30px;">
                    <p style="font-size: 16px; color: #ffffff; line-height: 1.7; margin-bottom: 20px;">
                        Sua assinatura do plano <strong style="color: #00f5d0;">Premium</strong> foi confirmada com sucesso! 🎉
                    </p>
                    <div style="text-align: center; margin: 20px 0;">
                        <img src="{{ asset('img/assinaturas/plano-premium.png') }}" alt="Plano Premium" style="max-width: 100%; border-radius: 8px; border: 1px solid #2d2d42;">
                    </div>
                    <h3 style="color: #00f5d0; font-size: 18px; margin-bottom: 15px;">Você terá o acesso a esses benefícios do plano Premium:</h3>
                    <ul style="padding-left: 20px; color: #a0a0c0; line-height: 1.6; margin-bottom: 20px;">
                        <li style="margin-bottom: 8px;">Benefício 1</li>
                        <li style="margin-bottom: 8px;">Benefício 2</li>
                        <li style="margin-bottom: 8px;">Benefício 3</li>
                        <li style="margin-bottom: 8px;">Benefício 4</li>
                        <li style="margin-bottom: 8px;">Benefício 5</li>
                    </ul>
                </div>                    
            @endif            

            @if($endsAt && $endsAt !== 'Data de término do ciclo não definida')
            <p style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 20px;">
                A proxíma cobrança será: <strong style="color: #00f5d0;">{{ $endsAt }}</strong>.
            </p>
            @endif

            <div style="text-align: center; margin: 40px 0;">
                <a href="{{ route('dashboard') }}" style="background: linear-gradient(135deg, #00f5d0, #19bf00); color: #000000; padding: 16px 32px; border-radius: 8px; text-decoration: none; font-weight: 600; display: inline-block; font-size: 16px; box-shadow: 0 0 15px rgba(0,245,208,0.4); transition: all 0.4s cubic-bezier(0.68, -0.55, 0.27, 1.55);">
                    Acessar Minha Conta
                </a>
            </div>

            <p style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 20px;">
                Atenciosamente,<br>
                <strong style="color: #ffffff;">{{ config('app.name') }}</strong>
            </p>
        </div>

        <!-- Footer -->
        <div style="background-color: #1a1a24; text-align: center; padding: 25px; font-size: 14px; color: #a0a0c0; border-top: 1px solid #2d2d42;">
            &copy; {{ date('Y') }} {{ config('app.name') }}. Todos os direitos reservados.
        </div>
    </div>

</body>
</html>