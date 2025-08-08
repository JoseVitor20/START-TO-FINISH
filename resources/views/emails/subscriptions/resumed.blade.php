<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação de Renovação de Plano - {{ config('app.name') }}</title>
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

        .plan-renewal-title {
            color: #00f5d0;
            font-size: 26px; /* Larger base font size for renewal title */
            margin-bottom: 25px;
            font-weight: 600;
            position: relative;
            display: inline-block;
        }

        .plan-title-underline {
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
            font-size: 18px; /* Larger base font size for greeting */
            color: #ffffff;
            margin-bottom: 30px;
        }

        .plan-renewal-text {
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
            border-radius: 8px;
            border: 1px solid #2d2d42;
            display: block; /* Ensures proper scaling */
            margin: 0 auto; /* Center image */
        }

        .benefits-heading {
            color: #00f5d0; /* Changed to match primary color for benefits heading */
            font-size: 20px;
            margin-top: 30px;
            margin-bottom: 10px;
        }

        .benefits-list {
            list-style-type: none; /* Remove default list bullets */
            padding-left: 0; /* Remove default padding */
            color: #a0a0c0;
            line-height: 1.7;
            margin-bottom: 20px;
        }

        .benefits-list li {
            font-size: 16px;
            margin-bottom: 5px; /* Adjust spacing between list items */
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

            .plan-renewal-title {
                font-size: 20px !important; /* Adjust title size for mobile */
                margin-bottom: 20px !important;
            }

            .greeting {
                font-size: 16px !important; /* Adjust greeting size for mobile */
                margin-bottom: 20px !important;
            }

            .plan-renewal-text,
            .signature-text,
            .footer {
                font-size: 14px !important; /* Base text smaller on mobile */
            }

            .benefits-heading {
                font-size: 18px !important; /* Smaller benefits heading */
                margin-top: 20px !important;
                margin-bottom: 8px !important;
            }

            .benefits-list li {
                font-size: 14px !important; /* Smaller list items */
                margin-bottom: 4px !important;
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
            <h1 class="plan-renewal-title" style="color: #00f5d0; font-size: 26px; margin-bottom: 25px; font-weight: 600; position: relative; display: inline-block;">
                Confirmação de Renovação de Plano
                <span class="plan-title-underline" style="display: block; height: 3px; width: 100%; background: linear-gradient(90deg, #00f5d0, #19bf00); border-radius: 3px; position: absolute; bottom: -8px; left: 0;"></span>
            </h1>

            <div class="greeting" style="font-size: 18px; color: #ffffff; margin-bottom: 30px;">
                Olá, {{ $userName }}! 👋
            </div>

            {{-- Condicionais de planos --}}
            @if($planName == 'price_1Rtd6DATrxUtVNls55TD2FwV')
                <div style="margin-bottom: 30px;">
                    <p class="plan-renewal-text" style="font-size: 16px; color: #ffffff; line-height: 1.7; margin-bottom: 20px;">
                        Ótimas notícias! O plano <strong style="color: #00f5d0;">MICRO</strong> foi renovado com sucesso!
                    </p>
                    <div class="plan-image-container" style="text-align: center; margin: 20px 0;">                       
                        <img class="plan-image" src="{{asset('img/assinaturas/plano-micro.png')}}" alt="Plano Micro" style="max-height: 200px; border-radius: 8px; border: 1px solid #2d2d42;">
                    </div>
                    <h3 class="benefits-heading" style="color: #00f5d0; font-size: 20px; margin-top: 30px; margin-bottom: 10px;">Benefícios que você continua aproveitando:</h3>
                    <ul class="benefits-list" style="list-style-type: none; padding-left: 0;">
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Site de 1 página (cartão de visita online)</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Criação de site prioritária (sujeito à disponibilidade)</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Design responsivo</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- SEO básico para visibilidade</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Hospedagem de 5GB SSD</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Domínio grátis (enquanto for assinante)</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Manutenção e suporte grátis agendado via WhatsApp (prioridade baixa)</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Formulário de contato</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Certificado SSL grátis</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Backup semanal automático</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- 1 conta de e-mail profissional</li>
                    </ul>
                </div>
            @elseif($planName == 'price_1Rtd6zATrxUtVNlslxYeAk0i')
                <div style="margin-bottom: 30px;">
                    <p class="plan-renewal-text" style="font-size: 16px; color: #ffffff; line-height: 1.7; margin-bottom: 20px;">
                        Ótimas notícias! O plano <strong style="color: #00f5d0;">BÁSICO</strong> foi renovado com sucesso!
                    </p>
                    <div class="plan-image-container" style="text-align: center; margin: 20px 0;">                       
                        <img class="plan-image" src="{{asset('img/assinaturas/plano-basico.png')}}" alt="Plano Básico" style="max-height: 200px; border-radius: 8px; border: 1px solid #2d2d42;">
                    </div>
                    <h3 class="benefits-heading" style="color: #00f5d0; font-size: 20px; margin-top: 30px; margin-bottom: 10px;">Benefícios que você continua aproveitando:</h3>
                    <ul class="benefits-list" style="list-style-type: none; padding-left: 0;">
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Site de até 5 páginas</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Criação de site prioritária (sujeito à disponibilidade)</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Design responsivo</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- SEO para ranqueamento</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Hospedagem premium de 10GB SSD</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Domínio grátis (enquanto for assinante)</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Manutenção e suporte grátis agendado via WhatsApp (prioridade média)</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Integração com redes sociais</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Certificado SSL grátis</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Relatório mensal de desempenho (Google Analytics)</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- 3 contas de e-mail profissional</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Backup diário automático</li>
                    </ul>
                </div>
            @elseif($planName == 'price_1Rt85EPSFtrJEyUPK8H2s7E7')
                <div style="margin-bottom: 30px;">
                    <p class="plan-renewal-text" style="font-size: 16px; color: #ffffff; line-height: 1.7; margin-bottom: 20px;">
                        Ótimas notícias! O plano <strong style="color: #00f5d0;">ESSENCIAL</strong> foi renovado com sucesso!
                    </p>
                    <div class="plan-image-container" style="text-align: center; margin: 20px 0;">                       
                        <img class="plan-image" src="{{asset('img/assinaturas/plano-essencial.png')}}" alt="Plano Essencial" style="max-height: 200px; border-radius: 8px; border: 1px solid #2d2d42;">
                    </div>
                    <h3 class="benefits-heading" style="color: #00f5d0; font-size: 20px; margin-top: 30px; margin-bottom: 10px;">Benefícios que você continua aproveitando:</h3>
                    <ul class="benefits-list" style="list-style-type: none; padding-left: 0;">
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Site de até 15 páginas com galeria de produtos</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Criação de site prioritária (sujeito à disponibilidade)</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Design exclusivo e responsivo</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- SEO avançado</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Hospedagem avançada de 20GB SSD</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Domínio grátis (enquanto for assinante)</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Manutenção e suporte grátis agendado via WhatsApp (prioridade alta)</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Galeria de produtos/serviços</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Ambiente de testes (staging)</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Backup semanal automático</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- 5 contas de e-mail profissional</li>
                    </ul>
                </div>
            @elseif($planName == 'price_1Rt86VPSFtrJEyUPfUS70vfM')
                <div style="margin-bottom: 30px;">
                    <p class="plan-renewal-text" style="font-size: 16px; color: #ffffff; line-height: 1.7; margin-bottom: 20px;">
                        Ótimas notícias! O plano <strong style="color: #00f5d0;">PROFISSIONAL</strong> foi renovado com sucesso!
                    </p>
                    <div class="plan-image-container" style="text-align: center; margin: 20px 0;">                       
                        <img class="plan-image" src="{{asset('img/assinaturas/plano-profissional.png')}}" alt="Plano Profissional" style="max-height: 200px; border-radius: 8px; border: 1px solid #2d2d42;">
                    </div>
                    <h3 class="benefits-heading" style="color: #00f5d0; font-size: 20px; margin-top: 30px; margin-bottom: 10px;">Benefícios que você continua aproveitando:</h3>
                    <ul class="benefits-list" style="list-style-type: none; padding-left: 0;">
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Site institucional completo com SEO</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Formulário de orçamento e botão de WhatsApp flutuante</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Agendamento online integrado</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Design exclusivo e responsivo</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- SEO Avançado e Local SEO</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Hospedagem premium de 30GB SSD</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Domínio grátis (enquanto for assinante)</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Backup diário automático</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- 5 contas de e-mail profissional</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Manutenção e suporte grátis agendado via WhatsApp (prioridade alta)</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Ambiente de testes (staging)</li>
                    </ul>
                </div>
            @elseif($planName == 'price_1Rt8A5PSFtrJEyUPWvDK3zVT')
                <div style="margin-bottom: 30px;">
                    <p class="plan-renewal-text" style="font-size: 16px; color: #ffffff; line-height: 1.7; margin-bottom: 20px;">
                        Ótimas notícias! O plano <strong style="color: #00f5d0;">AVANÇADO</strong> foi renovado com sucesso!
                    </p>
                    <div class="plan-image-container" style="text-align: center; margin: 20px 0;">                       
                        <img class="plan-image" src="{{asset('img/assinaturas/plano-avancado.png')}}" alt="Plano Avançado" style="max-height: 200px; border-radius: 8px; border: 1px solid #2d2d42;">
                    </div>
                    <h3 class="benefits-heading" style="color: #00f5d0; font-size: 20px; margin-top: 30px; margin-bottom: 10px;">Benefícios que você continua aproveitando:</h3>
                    <ul class="benefits-list" style="list-style-type: none; padding-left: 0;">
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Loja virtual com até 50 produtos</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Criação de site prioritária (sujeito à disponibilidade)</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Design exclusivo e responsivo</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Integração com meios de pagamento e logística</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Hospedagem empresarial de 50GB SSD</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- 1 domínio grátis (enquanto for assinante)</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Manutenção e suporte grátis agendado via WhatsApp (prioridade urgente)</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Páginas ilimitadas</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Certificado SSL premium</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- SEO avançado</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Backup diário</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Suporte 24/6 (WhatsApp e e-mail)</li>
                    </ul>
                </div>
            @elseif($planName == 'price_1Rt8BWPSFtrJEyUPaF7RDRjt')
                <div style="margin-bottom: 30px;">
                    <p class="plan-renewal-text" style="font-size: 16px; color: #ffffff; line-height: 1.7; margin-bottom: 20px;">
                        Ótimas notícias! O plano <strong style="color: #00f5d0;">MASTER</strong> foi renovado com sucesso!
                    </p>
                    <div class="plan-image-container" style="text-align: center; margin: 20px 0;">                       
                        <img class="plan-image" src="{{asset('img/assinaturas/plano-master.png')}}" alt="Plano Master" style="max-height: 200px; border-radius: 8px; border: 1px solid #2d2d42;">
                    </div>
                    <h3 class="benefits-heading" style="color: #00f5d0; font-size: 20px; margin-top: 30px; margin-bottom: 10px;">Benefícios que você continua aproveitando:</h3>
                    <ul class="benefits-list" style="list-style-type: none; padding-left: 0;">
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- E-commerce ilimitado e integrações com sistemas</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Aplicação web complexa (gestão de estoque, cotação online, etc.)</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Hospedagem dedicada de 100GB SSD</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Criação de site prioritária (sujeito à disponibilidade)</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- 5 domínios grátis (enquanto for assinante)</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Manutenção e suporte grátis agendado via WhatsApp (prioridade extrema)</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Sistema de gerenciamento de conteúdo</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Integração com APIs externas</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Segurança avançada</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Design exclusivo e responsivo</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- SEO completo</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Consultoria estratégica mensal</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Suporte 24/7 (WhatsApp e e-mail)</li>
                        <li style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Backup e recuperação de desastres (diário)</li>
                    </ul>
                </div>
            @endif

            @if($endsAt && $endsAt !== 'Data de término do ciclo não definida')
            <p class="plan-renewal-text" style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 20px;">
                Sua próxima cobrança será em <strong style="color: #00f5d0;">{{ $endsAt }}</strong>.
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
