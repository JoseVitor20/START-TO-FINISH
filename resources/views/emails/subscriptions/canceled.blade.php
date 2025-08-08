<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação de Cancelamento de Plano - {{ config('app.name') }}</title>
    <style type="text/css">
        /* Estilos gerais para desktop */
        body {
            background-color: #0f0f13;
            color: #ffffff;
            font-family: 'Segoe UI', system-ui, sans-serif;
            margin: 0;
            padding: 14px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #1e1e2a;
            border: 1px solid #2d2d42;
            border-radius: 16px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.3);
            overflow: hidden;
        }

        .header {
            background: linear-gradient(135deg, #1a1a24, #1900df);
            padding: 30px 14px;
            text-align: center;
            position: relative;
        }

        .header img {
            max-height: 60px;
            filter: invert(100%);
        }

        .content {
            padding: 40px;
        }

        .title {
            color: #00f5d0;
            font-size: 24px;
            margin-bottom: 25px;
            font-weight: 600;
            position: relative;
            display: inline-block;
        }
        
        .title span {
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
            font-size: 16px;
            color: #ffffff;
            margin-bottom: 30px;
        }

        .plan-info {
            margin-bottom: 30px;
        }

        .plan-info p,
        .plan-info ul {
            font-size: 14px;
            color: #ffffff;
            line-height: 1.7;
            margin-bottom: 14px;
        }

        .plan-info strong {
            color: #00f5d0;
        }

        .plan-image {
            text-align: center;
            margin: 14px 0;
        }

        .plan-image img {
            max-height: 200px;
            border-radius: 8px;
            border: 1px solid #2d2d42;
            height: auto;
        }

        .benefits h3 {
            color: #00f5d0;
            font-size: 18px;
            margin-top: 30px;
            margin-bottom: 10px;
        }

        .benefits ul {
            list-style-type: none;
            padding-left: 0;
        }

        .benefits li {
            font-size: 12px;
            color: #a0a0c0;
            line-height: 1.7;
            margin-bottom: 5px;
        }

        .cancellation-details p {
            font-size: 14px;
            color: #a0a0c0;
            line-height: 1.7;
            margin-bottom: 14px;
        }
        
        .cancellation-details strong {
            color: #00f5d0;
        }

        .button-container {
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

        .signature {
            font-size: 14px;
            color: #a0a0c0;
            line-height: 1.7;
            margin-bottom: 14px;
        }

        .footer {
            background-color: #1a1a24;
            text-align: center;
            padding: 25px;
            font-size: 14px;
            color: #a0a0c0;
            border-top: 1px solid #2d2d42;
        }

        /* Media Queries para dispositivos móveis */
        @media screen and (max-width: 600px) {
            .content {
                padding: 20px; /* Reduz o padding em telas menores */
            }

            .title {
                font-size: 20px; /* Título um pouco menor */
            }
            
            .greeting,
            .plan-info p,
            .plan-info strong,
            .cancellation-details p,
            .cancellation-details strong,
            .signature p {
                font-size: 12px !important; /* Reduz o tamanho da fonte para a leitura */
            }
            
            .benefits h3 {
                font-size: 16px; /* Título de benefícios menor */
            }
            
            .benefits li {
                font-size: 10px; /* Lista de benefícios com fonte menor */
            }

            .button {
                font-size: 14px !important;
                padding: 12px 24px !important; /* Diminui o padding do botão */
            }
        }
    </style>
</head>
<body>
    <div class="container">
        
        <div class="header">
            <img src="{{ asset('img/starttofinish-white.png') }}" alt="Logo {{ config('app.name') }}">
        </div>

        <div class="content">
            <h1 class="title">
                Confirmação de Cancelamento de Plano
                <span></span>
            </h1>

            <div class="greeting">
                Olá, {{ $userName }}! 👋
            </div>

            {{-- Condicionais de planos --}}
            @if($planName == 'price_1Rtd6DATrxUtVNls55TD2FwV')
                <div class="plan-info">
                    @if($endsAt && $endsAt !== 'Data de término do ciclo não definida')
                        <p>
                            O plano <strong style="color: #00f5d0;">MICRO</strong> será cancelado no final do ciclo!
                        </p>
                    @else
                        <p>
                            O plano <strong style="color: #00f5d0;">MICRO</strong> foi cancelado imediatamente!
                        </p>
                    @endif
                    <div class="plan-image">
                        <img src="{{asset('img/assinaturas/plano-micro.png')}}" alt="Plano Micro">
                    </div>
                    <div class="benefits">
                        <h3>Benefícios que você irá perder:</h3>
                        <ul>
                            <li>- Site de 1 página (cartão de visita online)</li>
                            <li>- Criação de site prioritária (sujeito à disponibilidade)</li>
                            <li>- Design responsivo</li>
                            <li>- SEO básico para visibilidade</li>
                            <li>- Hospedagem de 5GB SSD</li>
                            <li>- Domínio grátis (enquanto for assinante)</li>
                            <li>- Manutenção e suporte grátis agendado via WhatsApp (prioridade baixa)</li>
                            <li>- Formulário de contato</li>
                            <li>- Certificado SSL grátis</li>
                            <li>- Backup semanal automático</li>
                            <li>- 1 conta de e-mail profissional</li>
                        </ul>
                    </div>
                </div>
            @elseif($planName == 'price_1Rtd6zATrxUtVNlslxYeAk0i')
                <div class="plan-info">
                    @if($endsAt && $endsAt !== 'Data de término do ciclo não definida')
                        <p>
                            O plano <strong style="color: #00f5d0;">BÁSICO</strong> será cancelado no final do ciclo!
                        </p>
                    @else
                        <p>
                            O plano <strong style="color: #00f5d0;">BÁSICO</strong> foi cancelado imediatamente!
                        </p>
                    @endif
                    <div class="plan-image">
                        <img src="{{asset('img/assinaturas/plano-basico.png')}}" alt="Plano Básico">
                    </div>
                    <div class="benefits">
                        <h3>Benefícios que você irá perder:</h3>
                        <ul>
                            <li>- Site de até 5 páginas</li>
                            <li>- Criação de site prioritária (sujeito à disponibilidade)</li>
                            <li>- Design responsivo</li>
                            <li>- SEO para ranqueamento</li>
                            <li>- Hospedagem premium de 10GB SSD</li>
                            <li>- Domínio grátis (enquanto for assinante)</li>
                            <li>- Manutenção e suporte grátis agendado via WhatsApp (prioridade média)</li>
                            <li>- Integração com redes sociais</li>
                            <li>- Certificado SSL grátis</li>
                            <li>- Relatório mensal de desempenho (Google Analytics)</li>
                            <li>- 3 contas de e-mail profissional</li>
                            <li>- Backup diário automático</li>
                        </ul>
                    </div>
                </div>
            @elseif($planName == 'price_1Rt85EPSFtrJEyUPK8H2s7E7')
                <div class="plan-info">
                    @if($endsAt && $endsAt !== 'Data de término do ciclo não definida')
                        <p>
                            O plano <strong style="color: #00f5d0;">ESSENCIAL</strong> será cancelado no final do ciclo!
                        </p>
                    @else
                        <p>
                            O plano <strong style="color: #00f5d0;">ESSENCIAL</strong> foi cancelado imediatamente!
                        </p>
                    @endif
                    <div class="plan-image">
                        <img src="{{asset('img/assinaturas/plano-essencial.png')}}" alt="Plano Essencial">
                    </div>
                    <div class="benefits">
                        <h3>Benefícios que você irá perder:</h3>
                        <ul>
                            <li>- Site de até 15 páginas com galeria de produtos</li>
                            <li>- Criação de site prioritária (sujeito à disponibilidade)</li>
                            <li>- Design exclusivo e responsivo</li>
                            <li>- SEO avançado</li>
                            <li>- Hospedagem avançada de 20GB SSD</li>
                            <li>- Domínio grátis (enquanto for assinante)</li>
                            <li>- Manutenção e suporte grátis agendado via WhatsApp (prioridade alta)</li>
                            <li>- Galeria de produtos/serviços</li>
                            <li>- Ambiente de testes (staging)</li>
                            <li>- Backup semanal automático</li>
                            <li>- 5 contas de e-mail profissional</li>
                        </ul>
                    </div>
                </div>
            @elseif($planName == 'price_1Rt86VPSFtrJEyUPfUS70vfM')
                <div class="plan-info">
                    @if($endsAt && $endsAt !== 'Data de término do ciclo não definida')
                        <p>
                            O plano <strong style="color: #00f5d0;">PROFISSIONAL</strong> será cancelado no final do ciclo!
                        </p>
                    @else
                        <p>
                            O plano <strong style="color: #00f5d0;">PROFISSIONAL</strong> foi cancelado imediatamente!
                        </p>
                    @endif
                    <div class="plan-image">
                        <img src="{{asset('img/assinaturas/plano-profissional.png')}}" alt="Plano Profissional">
                    </div>
                    <div class="benefits">
                        <h3>Benefícios que você irá perder:</h3>
                        <ul>
                            <li>- Site institucional completo com SEO</li>
                            <li>- Formulário de orçamento e botão de WhatsApp flutuante</li>
                            <li>- Agendamento online integrado</li>
                            <li>- Design exclusivo e responsivo</li>
                            <li>- SEO Avançado e Local SEO</li>
                            <li>- Hospedagem premium de 30GB SSD</li>
                            <li>- Domínio grátis (enquanto for assinante)</li>
                            <li>- Backup diário automático</li>
                            <li>- 5 contas de e-mail profissional</li>
                            <li>- Manutenção e suporte grátis agendado via WhatsApp (prioridade alta)</li>
                            <li>- Ambiente de testes (staging)</li>
                        </ul>
                    </div>
                </div>
            @elseif($planName == 'price_1Rt8A5PSFtrJEyUPWvDK3zVT')
                <div class="plan-info">
                    @if($endsAt && $endsAt !== 'Data de término do ciclo não definida')
                        <p>
                            O plano <strong style="color: #00f5d0;">AVANÇADO</strong> será cancelado no final do ciclo!
                        </p>
                    @else
                        <p>
                            O plano <strong style="color: #00f5d0;">AVANÇADO</strong> foi cancelado imediatamente!
                        </p>
                    @endif
                    <div class="plan-image">
                        <img src="{{asset('img/assinaturas/plano-avancado.png')}}" alt="Plano Avançado">
                    </div>
                    <div class="benefits">
                        <h3>Benefícios que você irá perder:</h3>
                        <ul>
                            <li>- Loja virtual com até 50 produtos</li>
                            <li>- Criação de site prioritária (sujeito à disponibilidade)</li>
                            <li>- Design exclusivo e responsivo</li>
                            <li>- Integração com meios de pagamento e logística</li>
                            <li>- Hospedagem empresarial de 50GB SSD</li>
                            <li>- 1 domínio grátis (enquanto for assinante)</li>
                            <li>- Manutenção e suporte grátis agendado via WhatsApp (prioridade urgente)</li>
                            <li>- Páginas ilimitadas</li>
                            <li>- Certificado SSL premium</li>
                            <li>- SEO avançado</li>
                            <li>- Backup diário</li>
                            <li>- Suporte 24/6 (WhatsApp e e-mail)</li>
                        </ul>
                    </div>
                </div>
            @elseif($planName == 'price_1Rt8BWPSFtrJEyUPaF7RDRjt')
                <div class="plan-info">
                    @if($endsAt && $endsAt !== 'Data de término do ciclo não definida')
                        <p>
                            O plano <strong style="color: #00f5d0;">MASTER</strong> será cancelado no final do ciclo!
                        </p>
                    @else
                        <p>
                            O plano <strong style="color: #00f5d0;">MASTER</strong> foi cancelado imediatamente!
                        </p>
                    @endif
                    <div class="plan-image">
                        <img src="{{asset('img/assinaturas/plano-master.png')}}" alt="Plano Master">
                    </div>
                    <div class="benefits">
                        <h3>Benefícios que você irá perder:</h3>
                        <ul>
                            <li>- E-commerce ilimitado e integrações com sistemas</li>
                            <li>- Aplicação web complexa (gestão de estoque, cotação online, etc.)</li>
                            <li>- Hospedagem dedicada de 100GB SSD</li>
                            <li>- Criação de site prioritária (sujeito à disponibilidade)</li>
                            <li>- 5 domínios grátis (enquanto for assinante)</li>
                            <li>- Manutenção e suporte grátis agendado via WhatsApp (prioridade extrema)</li>
                            <li>- Sistema de gerenciamento de conteúdo</li>
                            <li>- Integração com APIs externas</li>
                            <li>- Segurança avançada</li>
                            <li>- Design exclusivo e responsivo</li>
                            <li>- SEO completo</li>
                            <li>- Consultoria estratégica mensal</li>
                            <li>- Suporte 24/7 (WhatsApp e e-mail)</li>
                            <li>- Backup e recuperação de desastres (diário)</li>
                        </ul>
                    </div>
                </div>
            @endif

            <div class="cancellation-details">
                @if($endsAt && $endsAt !== 'Data de término do ciclo não definida')
                <p>
                    Seu período atual termina em <strong style="color: #00f5d0;">{{ $endsAt }}</strong>.
                </p>
                @else
                <p>
                    O período foi encerrado de imediato, não haverá mais cobranças referentes a esse plano.
                </p>
                @endif
            </div>

            <div class="button-container">
                <a href="{{ route('dashboard') }}" class="button">
                    Acessar Minha Conta
                </a>
            </div>

            <div class="signature">
                <p>
                    Atenciosamente,<br>
                    <strong style="color: #ffffff;">{{ config('app.name') }}</strong>
                </p>
            </div>
        </div>

        <div class="footer">
            &copy; {{ date('Y') }} {{ config('app.name') }}. Todos os direitos reservados.
        </div>
    </div>
</body>
</html>