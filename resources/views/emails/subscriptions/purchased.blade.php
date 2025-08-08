<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação de Assinatura - {{ config('app.name') }}</title>
    <style type="text/css">
        /* Base styles for all screens (desktop-first approach) */
        body {
            background-color: #0f0f13;
            color: #ffffff;
            font-family: 'Segoe UI', system-ui, sans-serif;
            margin: 0;
            padding: 20px; /* Base padding for body */
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #1e1e2a;
            border: 1px solid #2d2d42;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            overflow: hidden;
        }

        .header {
            background: linear-gradient(135deg, #1a1a24, #1900df);
            padding: 30px 20px;
            text-align: center;
            position: relative;
        }

        .content {
            padding: 40px; /* Base padding for content section */
        }

        .subscription-title {
            color: #00f5d0;
            font-size: 26px;
            margin-bottom: 25px;
            font-weight: 600;
            position: relative;
            display: inline-block;
        }

        .title-underline {
            display: block;
            height: 3px;
            width: 100%;
            background: linear-gradient(90deg, #00f5d0, #19bf00);
            border-radius: 3px;
            position: absolute;
            bottom: -8px;
            left: 0;
        }

        .greeting {
            font-size: 18px;
            color: #ffffff;
            margin-bottom: 30px;
        }

        .subscription-text {
            font-size: 16px;
            color: #ffffff;
            line-height: 1.7;
            margin-bottom: 20px;
        }

        .plan-image-container {
            text-align: center;
            margin: 20px 0;
        }

        .plan-image {
            max-height: 200px;
            width: auto; /* Allow image to scale down */
            border-radius: 8px;
            border: 1px solid #2d2d42;
            display: block; /* Ensures proper scaling */
            margin: 0 auto; /* Center image */
        }

        .benefits-heading {
            color: #00f5d0;
            font-size: 18px;
            margin-bottom: 15px;
        }

        .benefits-list {
            padding-left: 20px;
            color: #a0a0c0;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .benefits-list li {
            margin-bottom: 8px;
        }

        .call-to-action-container {
            text-align: center;
            margin: 40px 0;
        }

        .button {
            background: linear-gradient(135deg, #00f5d0, #19bf00);
            color: #000000;
            padding: 16px 32px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            display: inline-block;
            font-size: 16px;
            box-shadow: 0 0 15px rgba(0,245,208,0.4);
            transition: all 0.4s cubic-bezier(0.68, -0.55, 0.27, 1.55);
        }

        .signature-text {
            font-size: 16px;
            color: #a0a0c0;
            line-height: 1.7;
            margin-bottom: 20px;
        }

        .footer {
            background-color: #1a1a24;
            text-align: center;
            padding: 25px;
            font-size: 14px;
            color: #a0a0c0;
            border-top: 1px solid #2d2d42;
        }

        /* Mobile specific styles */
        @media screen and (max-width: 600px) {
            body {
                padding: 10px; /* Reduce body padding on mobile */
            }

            .container {
                border-radius: 0; /* Remove border-radius on mobile for full width */
                box-shadow: none; /* Remove shadow on mobile */
            }

            .header {
                padding: 20px 10px; /* Adjust header padding */
            }

            .header img {
                max-height: 50px; /* Slightly smaller logo on mobile */
            }

            .content {
                padding: 20px; /* Adjust content padding */
            }

            .subscription-title {
                font-size: 20px !important; /* Adjust title size for mobile */
                margin-bottom: 20px !important;
            }

            .greeting {
                font-size: 16px !important; /* Adjust greeting size for mobile */
                margin-bottom: 20px !important;
            }

            .subscription-text,
            .signature-text,
            .footer {
                font-size: 14px !important; /* Base text smaller on mobile */
            }

            .benefits-heading {
                font-size: 16px !important; /* Smaller benefits heading */
                margin-bottom: 10px !important;
            }

            .benefits-list {
                font-size: 14px !important; /* Smaller list items */
                padding-left: 15px !important;
                margin-bottom: 15px !important;
            }

            .plan-image {
                max-height: 150px !important; /* Smaller image on mobile */
                width: 100% !important; /* Ensure image is fluid */
            }

            .button {
                font-size: 14px !important; /* Smaller button text */
                padding: 12px 24px !important; /* Adjust button padding */
            }

            .call-to-action-container {
                margin: 30px 0 !important; /* Adjust button container margin */
            }
        }
    </style>
</head>
<body style="background-color: #0f0f13; color: #ffffff; font-family: 'Segoe UI', system-ui, sans-serif; margin: 0; padding: 20px;">

    <div class="container" style="max-width: 600px; margin: 0 auto; background-color: #1e1e2a; border: 1px solid #2d2d42; border-radius: 16px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3); overflow: hidden;">
        
        <!-- Header -->
        <div class="header" style="background: linear-gradient(135deg, #1a1a24, #1900df); padding: 30px 20px; text-align: center; position: relative;">
            <img src="{{ asset('img/starttofinish-white.png') }}" alt="Logo {{ config('app.name') }}" style="max-height: 60px; filter: invert(100%);">
        </div>

        <!-- Content -->
        <div class="content" style="padding: 40px;">
            <h1 class="subscription-title" style="color: #00f5d0; font-size: 16px; margin-bottom: 25px; font-weight: 600; position: relative; display: inline-block;">
                Confirmação de Assinatura
                <span class="title-underline" style="display: block; height: 3px; width: 100%; background: linear-gradient(90deg, #00f5d0, #19bf00); border-radius: 3px; position: absolute; bottom: -8px; left: 0;"></span>
            </h1>

            <div class="greeting" style="font-size: 14px; color: #ffffff; margin-bottom: 30px;">
                Olá, {{ $userName }}! 👋
            </div>

            {{-- Condicional para PLANO MICRO --}}
            @if($planName == 'price_1RtxvFATrxUtVNlsRUQN7PI5')
                <div style="margin-bottom: 30px;">
                    <p class="subscription-text" style="font-size: 12px; color: #ffffff; line-height: 1.7; margin-bottom: 20px;">
                        Sua assinatura do plano <strong style="color: #00f5d0;">MICRO</strong> foi confirmada com sucesso! 🎉
                    </p>
                    <div class="plan-image-container" style="text-align: center; margin: 20px 0;">                       
                        <img class="plan-image" src="{{asset('img/assinaturas/plano-micro.png')}}" alt="Plano Micro" style="max-height: 200px; border-radius: 8px; border: 1px solid #2d2d42;">
                    </div>
                    <h3 class="benefits-heading" style="color: #00f5d0; font-size: 18px; margin-bottom: 15px;">Você terá acesso a esses benefícios do plano Micro:</h3>
                    <ul class="benefits-list" style="padding-left: 20px; color: #a0a0c0; line-height: 1.6; margin-bottom: 20px;">
                        <li style="font-size: 10px; margin-bottom: 8px;">Site de 1 página (cartão de visita online)</li>
                        <li style="font-size: 10px; margin-bottom: 8px;">Design responsivo</li>
                        <li style="font-size: 10px; margin-bottom: 8px;">SEO básico para visibilidade</li>
                        <li style="font-size: 10px; margin-bottom: 8px;">Hospedagem de 5GB SSD</li>
                        <li style="font-size: 10px; margin-bottom: 8px;">Domínio grátis (enquanto for assinante)</li>
                        <li style="font-size: 10px; margin-bottom: 8px;">Manutenção e suporte grátis agendado via WhatsApp</li>
                        <li style="font-size: 10px; margin-bottom: 8px;">Certificado SSL grátis</li>
                    </ul>
                </div>
            {{-- Condicional para PLANO BÁSICO --}}
            @elseif($planName == 'price_1RtxwcATrxUtVNlsax7gHMWt')
                <div style="margin-bottom: 30px;">
                    <p class="subscription-text" style="font-size: 16px; color: #ffffff; line-height: 1.7; margin-bottom: 20px;">
                        Sua assinatura do plano <strong style="color: #00f5d0;">BÁSICO</strong> foi confirmada com sucesso! 🎉
                    </p>
                    <div class="plan-image-container" style="text-align: center; margin: 20px 0;">                       
                        <img class="plan-image" src="{{asset('img/assinaturas/plano-basico.png')}}" alt="Plano Básico" style="max-height: 200px; border-radius: 8px; border: 1px solid #2d2d42;">
                    </div>
                    <h3 class="benefits-heading" style="color: #00f5d0; font-size: 18px; margin-bottom: 15px;">Você terá acesso a esses benefícios do plano Básico:</h3>
                    <ul class="benefits-list" style="padding-left: 20px; color: #a0a0c0; line-height: 1.6; margin-bottom: 20px;">
                        <li style="font-size: 10px; margin-bottom: 8px;">Todos os benefícios do Plano Micro</li>
                        <li style="font-size: 10px; margin-bottom: 8px;">Site de até 5 páginas</li>
                        <li style="font-size: 10px; margin-bottom: 8px;">SEO para ranqueamento</li>
                        <li style="font-size: 10px; margin-bottom: 8px;">Hospedagem premium de 10GB SSD</li>
                        <li style="font-size: 10px; margin-bottom: 8px;">Manutenção e suporte com prioridade média</li>
                        <li style="font-size: 10px; margin-bottom: 8px;">Relatório mensal de desempenho (Google Analytics)</li>
                        <li style="font-size: 10px; margin-bottom: 8px;">3 contas de e-mail profissional</li>
                    </ul>
                </div>
            {{-- Condicional para PLANO ESSENCIAL --}}
            @elseif($planName == 'price_1RtxyXATrxUtVNlskia8tsRB')
                <div style="margin-bottom: 30px;">
                    <p class="subscription-text" style="font-size: 16px; color: #ffffff; line-height: 1.7; margin-bottom: 20px;">
                        Sua assinatura do plano <strong style="color: #00f5d0;">ESSENCIAL</strong> foi confirmada com sucesso! 🎉
                    </p>
                    <div class="plan-image-container" style="text-align: center; margin: 20px 0;">                       
                        <img class="plan-image" src="{{asset('img/assinaturas/plano-essencial.png')}}" alt="Plano Essencial" style="max-height: 200px; border-radius: 8px; border: 1px solid #2d2d42;">
                    </div>
                    <h3 class="benefits-heading" style="color: #00f5d0; font-size: 18px; margin-bottom: 15px;">Você terá acesso a esses benefícios do plano Essencial:</h3>
                    <ul class="benefits-list" style="padding-left: 20px; color: #a0a0c0; line-height: 1.6; margin-bottom: 20px;">
                        <li style="font-size: 10px; margin-bottom: 8px;">Todos os benefícios do Plano Básico</li>
                        <li style="font-size: 10px; margin-bottom: 8px;">Site de até 15 páginas com galeria de produtos</li>
                        <li style="font-size: 10px; margin-bottom: 8px;">Design exclusivo e responsivo</li>
                        <li style="font-size: 10px; margin-bottom: 8px;">SEO avançado</li>
                        <li style="font-size: 10px; margin-bottom: 8px;">Hospedagem avançada de 20GB SSD</li>
                        <li style="font-size: 10px; margin-bottom: 8px;">Manutenção e suporte com prioridade alta</li>
                        <li style="font-size: 10px; margin-bottom: 8px;">Ambiente de testes (staging)</li>
                    </ul>
                </div>
            {{-- Condicional para PLANO PROFISSIONAL --}}
            @elseif($planName == 'price_1RtxzlATrxUtVNlsC5rdTbcI')
                <div style="margin-bottom: 30px;">
                    <p class="subscription-text" style="font-size: 16px; color: #ffffff; line-height: 1.7; margin-bottom: 20px;">
                        Sua assinatura do plano <strong style="color: #00f5d0;">PROFISSIONAL</strong> foi confirmada com sucesso! 🎉
                    </p>
                    <div class="plan-image-container" style="text-align: center; margin: 20px 0;">                       
                        <img class="plan-image" src="{{asset('img/assinaturas/plano-profissional.png')}}" alt="Plano Profissional" style="max-height: 200px; border-radius: 8px; border: 1px solid #2d2d42;">
                    </div>
                    <h3 class="benefits-heading" style="color: #00f5d0; font-size: 18px; margin-bottom: 15px;">Você terá acesso a esses benefícios do plano Profissional:</h3>
                    <ul class="benefits-list" style="padding-left: 20px; color: #a0a0c0; line-height: 1.6; margin-bottom: 20px;">
                        <li style="font-size: 10px; margin-bottom: 8px;">Todos os benefícios do Plano Essencial</li>
                        <li style="font-size: 10px; margin-bottom: 8px;">Site institucional completo com SEO</li>
                        <li style="font-size: 10px; margin-bottom: 8px;">Formulário de orçamento e botão de WhatsApp flutuante</li>
                        <li style="font-size: 10px; margin-bottom: 8px;">Agendamento online integrado</li>
                        <li style="font-size: 10px; margin-bottom: 8px;">SEO Avançado e Local SEO</li>
                        <li style="font-size: 10px; margin-bottom: 8px;">Hospedagem premium de 30GB SSD</li>
                        <li style="font-size: 10px; margin-bottom: 8px;">Backup diário automático</li>
                    </ul>
                </div>
            {{-- Condicional para PLANO AVANÇADO --}}
            @elseif($planName == 'price_1Rty1DATrxUtVNlscvduK7xW')
                <div style="margin-bottom: 30px;">
                    <p class="subscription-text" style="font-size: 16px; color: #ffffff; line-height: 1.7; margin-bottom: 20px;">
                        Sua assinatura do plano <strong style="color: #00f5d0;">AVANÇADO</strong> foi confirmada com sucesso! 🎉
                    </p>
                    <div class="plan-image-container" style="text-align: center; margin: 20px 0;">                       
                        <img class="plan-image" src="{{asset('img/assinaturas/plano-avancado.png')}}" alt="Plano Avançado" style="max-height: 200px; border-radius: 8px; border: 1px solid #2d2d42;">
                    </div>
                    <h3 class="benefits-heading" style="color: #00f5d0; font-size: 18px; margin-bottom: 15px;">Você terá acesso a esses benefícios do plano Avançado:</h3>
                    <ul class="benefits-list" style="padding-left: 20px; color: #a0a0c0; line-height: 1.6; margin-bottom: 20px;">
                        <li style="font-size: 10px; margin-bottom: 8px;">Todos os benefícios do Plano Profissional</li>
                        <li style="font-size: 10px; margin-bottom: 8px;">Loja virtual com até 50 produtos</li>
                        <li style="font-size: 10px; margin-bottom: 8px;">Páginas ilimitadas</li>
                        <li style="font-size: 10px; margin-bottom: 8px;">Integração com meios de pagamento e logística</li>
                        <li style="font-size: 10px; margin-bottom: 8px;">Hospedagem empresarial de 50GB SSD</li>
                        <li style="font-size: 10px; margin-bottom: 8px;">Suporte com prioridade urgente</li>
                        <li style="font-size: 10px; margin-bottom: 8px;">Suporte 24/6 (WhatsApp e e-mail)</li>
                    </ul>
                </div>
            {{-- Condicional para PLANO MASTER --}}
            @elseif($planName == 'price_1Rty2wATrxUtVNlslZP3DyEE')
                <div style="margin-bottom: 30px;">
                    <p class="subscription-text" style="font-size: 16px; color: #ffffff; line-height: 1.7; margin-bottom: 20px;">
                        Sua assinatura do plano <strong style="color: #00f5d0;">MASTER</strong> foi confirmada com sucesso! 🎉
                    </p>
                    <div class="plan-image-container" style="text-align: center; margin: 20px 0;">                       
                        <img class="plan-image" src="{{asset('img/assinaturas/plano-master.png')}}" alt="Plano Master" style="max-height: 200px; border-radius: 8px; border: 1px solid #2d2d42;">
                    </div>
                    <h3 class="benefits-heading" style="color: #00f5d0; font-size: 18px; margin-bottom: 15px;">Você terá acesso a esses benefícios do plano Master:</h3>
                    <ul class="benefits-list" style="padding-left: 20px; color: #a0a0c0; line-height: 1.6; margin-bottom: 20px;">
                        <li style="font-size: 10px; margin-bottom: 8px;">Todos os benefícios do Plano Avançado</li>
                        <li style="font-size: 10px; margin-bottom: 8px;">E-commerce ilimitado e integrações com sistemas</li>
                        <li style="font-size: 10px; margin-bottom: 8px;">Aplicação web complexa (gestão de estoque, cotação online, etc.)</li>
                        <li style="font-size: 10px; margin-bottom: 8px;">Hospedagem dedicada de 100GB SSD</li>
                        <li style="font-size: 10px; margin-bottom: 8px;">Suporte com prioridade extrema</li>
                        <li style="font-size: 10px; margin-bottom: 8px;">Consultoria estratégica mensal</li>
                        <li style="font-size: 10px; margin-bottom: 8px;">Suporte 24/7 (WhatsApp e e-mail)</li>
                    </ul>
                </div>
            @endif

            @if($endsAt && $endsAt !== 'Data de término do ciclo não definida')
            <p class="subscription-text" style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 20px;">
                A próxima cobrança será: <strong style="color: #00f5d0;">{{ $endsAt }}</strong>.
            </p>
            @endif

            <div class="call-to-action-container" style="text-align: center; margin: 40px 0;">
                <a href="{{ route('dashboard') }}" class="button" style="background: linear-gradient(135deg, #00f5d0, #19bf00); color: #000000; padding: 16px 32px; border-radius: 8px; text-decoration: none; font-weight: 600; display: inline-block; font-size: 16px; box-shadow: 0 0 15px rgba(0,245,208,0.4); transition: all 0.4s cubic-bezier(0.68, -0.55, 0.27, 1.55);">
                    Acessar Minha Conta
                </a>
            </div>

            <p class="signature-text" style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 20px;">
                Atenciosamente,<br>
                <strong style="color: #ffffff;">{{ config('app.name') }}</strong>
            </p>
        </div>

        <!-- Footer -->
        <div class="footer" style="background-color: #1a1a24; text-align: center; padding: 25px; font-size: 14px; color: #a0a0c0; border-top: 1px solid #2d2d42;">
            &copy; {{ date('Y') }} {{ config('app.name') }}. Todos os direitos reservados.
        </div>
    </div>

</body>
</html>
