<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cancelamento imediato de Plano - {{ config('app.name') }}</title>
    <style type="text/css">
        @media screen and (max-width: 600px) {
            h2 {
                font-size: 14px !important;
            }
            p, a {
                font-size: 10px !important;
            }
            .button {
                font-size: 10px !important;
                padding: 12px 24px !important;
            }
        }
    </style>
</head>
<body style="background-color: #0f0f13; color: #ffffff; font-family: 'Segoe UI', system-ui, sans-serif; margin: 0; padding: 20px;">

    <div style="max-width: 600px; margin: 0 auto; background-color: #1e1e2a; border: 1px solid #2d2d42; border-radius: 16px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3); overflow: hidden;">
        
        <!-- Header -->
        <div style="background: linear-gradient(135deg, #1a1a24, #1900df); padding: 30px 20px; text-align: center; position: relative;">
            <img src="{{ asset('img/starttofinish-white.png') }}" alt="Logo {{ config('app.name') }}" style="max-height: 60px; filter: invert(100%);">
        </div>

        <!-- Content -->
        <div style="padding: 40px;">
            <h1 style="color: #00f5d0; font-size: 14px; margin-bottom: 25px; font-weight: 600; position: relative; display: inline-block;">
                Cancelamento de Plano
                <span style="display: block; height: 3px; width: 100%; background: linear-gradient(90deg, #00f5d0, #19bf00); border-radius: 3px; position: absolute; bottom: -8px; left: 0;"></span>
            </h1>

            <div style="font-size: 10px; color: #ffffff; margin-bottom: 30px;">
                Olá, {{ $userName }}! 👋
            </div>

            {{-- Condicional para PLANO MICRO --}}
            @if($planName == 'price_1SCm0XATrxUtVNlsHXiIWMlU')
                <div style="margin-bottom: 30px;">
                    <p style="font-size: 16px; color: #ffffff; line-height: 1.7; margin-bottom: 20px;">
                        O plano <strong style="color: #00f5d0;">MICRO</strong> foi cancelado imediatamente!
                    </p>
                    <div style="text-align: center; margin: 20px 0;">
                        <img src="{{asset('img/assinaturas/plano-micro.png')}}" alt="Plano Micro" style="max-height: 200px; border-radius: 8px; border: 1px solid #2d2d42;">                       
                    </div>
                    <h3 style="color: #e0e0e0; font-size: 18px; margin-bottom: 15px;">Ao cancelar, você perde os seguintes benefícios:</h3>
                    <ul style="padding-left: 20px; color: #a0a0c0; line-height: 1.6; margin-bottom: 20px;">
                        <li style="margin-bottom: 8px;">Site de 1 página (cartão de visita online)</li>
                        <li style="margin-bottom: 8px;">Design responsivo</li>
                        <li style="margin-bottom: 8px;">SEO básico para visibilidade</li>
                        <li style="margin-bottom: 8px;">Hospedagem de 5GB SSD</li>
                        <li style="margin-bottom: 8px;">Domínio grátis (enquanto for assinante)</li>
                        <li style="margin-bottom: 8px;">Manutenção e suporte grátis agendado via WhatsApp</li>
                        <li style="margin-bottom: 8px;">Certificado SSL grátis</li>
                    </ul>
                </div>
            {{-- Condicional para PLANO BÁSICO --}}
            @elseif($planName == 'price_1SCm2VATrxUtVNlsRTlIdlpn')
                <div style="margin-bottom: 30px;">
                    <p style="font-size: 16px; color: #ffffff; line-height: 1.7; margin-bottom: 20px;">
                        O plano <strong style="color: #00f5d0;">BÁSICO</strong> foi cancelado imediatamente!
                    </p>
                    <div style="text-align: center; margin: 20px 0;">
                        <img src="{{asset('img/assinaturas/plano-basico.png')}}" alt="Plano Básico" style="max-height: 200px; border-radius: 8px; border: 1px solid #2d2d42;">                       
                    </div>
                    <h3 style="color: #e0e0e0; font-size: 18px; margin-bottom: 15px;">Ao cancelar, você perde os seguintes benefícios:</h3>
                    <ul style="padding-left: 20px; color: #a0a0c0; line-height: 1.6; margin-bottom: 20px;">
                        <li style="margin-bottom: 8px;">Todos os benefícios do Plano Micro</li>
                        <li style="margin-bottom: 8px;">Site de até 5 páginas</li>
                        <li style="margin-bottom: 8px;">SEO para ranqueamento</li>
                        <li style="margin-bottom: 8px;">Hospedagem premium de 10GB SSD</li>
                        <li style="margin-bottom: 8px;">Manutenção e suporte com prioridade média</li>
                        <li style="margin-bottom: 8px;">Relatório mensal de desempenho (Google Analytics)</li>
                        <li style="margin-bottom: 8px;">3 contas de e-mail profissional</li>
                    </ul>
                </div>
            {{-- Condicional para PLANO ESSENCIAL --}}
            @elseif($planName == 'price_1SCm4tATrxUtVNlswjaFgA3g')
                <div style="margin-bottom: 30px;">
                    <p style="font-size: 16px; color: #ffffff; line-height: 1.7; margin-bottom: 20px;">
                        O plano <strong style="color: #00f5d0;">ESSENCIAL</strong> foi cancelado imediatamente!
                    </p>
                    <div style="text-align: center; margin: 20px 0;">
                        <img src="{{asset('img/assinaturas/plano-essencial.png')}}" alt="Plano Essencial" style="max-height: 200px; border-radius: 8px; border: 1px solid #2d2d42;">                       
                    </div>
                    <h3 style="color: #e0e0e0; font-size: 18px; margin-bottom: 15px;">Ao cancelar, você perde os seguintes benefícios:</h3>
                    <ul style="padding-left: 20px; color: #a0a0c0; line-height: 1.6; margin-bottom: 20px;">
                        <li style="margin-bottom: 8px;">Todos os benefícios do Plano Básico</li>
                        <li style="margin-bottom: 8px;">Site de até 15 páginas com galeria de produtos</li>
                        <li style="margin-bottom: 8px;">Design exclusivo e responsivo</li>
                        <li style="margin-bottom: 8px;">SEO avançado</li>
                        <li style="margin-bottom: 8px;">Hospedagem avançada de 20GB SSD</li>
                        <li style="margin-bottom: 8px;">Manutenção e suporte com prioridade alta</li>                        
                    </ul>
                </div>
            {{-- Condicional para PLANO PROFISSIONAL --}}
            @elseif($planName == 'price_1SCm7SATrxUtVNls8VjLkuS0')
                <div style="margin-bottom: 30px;">
                    <p style="font-size: 16px; color: #ffffff; line-height: 1.7; margin-bottom: 20px;">
                        O plano <strong style="color: #00f5d0;">PROFISSIONAL</strong> foi cancelado imediatamente!
                    </p>
                    <div style="text-align: center; margin: 20px 0;">
                        <img src="{{asset('img/assinaturas/plano-profissional.png')}}" alt="Plano Profissional" style="max-height: 200px; border-radius: 8px; border: 1px solid #2d2d42;">                       
                    </div>
                    <h3 style="color: #e0e0e0; font-size: 18px; margin-bottom: 15px;">Ao cancelar, você perde os seguintes benefícios:</h3>
                    <ul style="padding-left: 20px; color: #a0a0c0; line-height: 1.6; margin-bottom: 20px;">
                        <li style="margin-bottom: 8px;">Todos os benefícios do Plano Essencial</li>
                        <li style="margin-bottom: 8px;">Site institucional completo com SEO</li>
                        <li style="margin-bottom: 8px;">Formulário de orçamento e botão de WhatsApp flutuante</li>
                        <li style="margin-bottom: 8px;">Agendamento online integrado</li>
                        <li style="margin-bottom: 8px;">SEO Avançado e Local SEO</li>
                        <li style="margin-bottom: 8px;">Hospedagem premium de 30GB SSD</li>
                        <li style="margin-bottom: 8px;">Backup diário automático</li>
                    </ul>
                </div>
            {{-- Condicional para PLANO AVANÇADO --}}
            @elseif($planName == 'price_1SCm99ATrxUtVNls9ArDBqB1')
                <div style="margin-bottom: 30px;">
                    <p style="font-size: 16px; color: #ffffff; line-height: 1.7; margin-bottom: 20px;">
                        O plano <strong style="color: #00f5d0;">AVANÇADO</strong> foi cancelado imediatamente!
                    </p>
                    <div style="text-align: center; margin: 20px 0;">
                        <img src="{{asset('img/assinaturas/plano-avancado.png')}}" alt="Plano Avançado" style="max-height: 200px; border-radius: 8px; border: 1px solid #2d2d42;">                       
                    </div>
                    <h3 style="color: #e0e0e0; font-size: 18px; margin-bottom: 15px;">Ao cancelar, você perde os seguintes benefícios:</h3>
                    <ul style="padding-left: 20px; color: #a0a0c0; line-height: 1.6; margin-bottom: 20px;">
                        <li style="margin-bottom: 8px;">Todos os benefícios do Plano Profissional</li>
                        <li style="margin-bottom: 8px;">Loja virtual com até 50 produtos</li>
                        <li style="margin-bottom: 8px;">Páginas ilimitadas</li>
                        <li style="margin-bottom: 8px;">Integração com meios de pagamento e logística</li>
                        <li style="margin-bottom: 8px;">Hospedagem empresarial de 50GB SSD</li>
                        <li style="margin-bottom: 8px;">Suporte com prioridade urgente</li>
                        <li style="margin-bottom: 8px;">Suporte 24/6 (WhatsApp e e-mail)</li>
                    </ul>
                </div>
            {{-- Condicional para PLANO MASTER --}}
            @elseif($planName == 'price_1SCmAlATrxUtVNlsRpWIdnA1')
                <div style="margin-bottom: 30px;">
                    <p style="font-size: 16px; color: #ffffff; line-height: 1.7; margin-bottom: 20px;">
                        O plano <strong style="color: #00f5d0;">MASTER</strong> foi cancelado imediatamente!
                    </p>
                    <div style="text-align: center; margin: 20px 0;">
                        <img src="{{asset('img/assinaturas/plano-master.png')}}" alt="Plano Master" style="max-height: 200px; border-radius: 8px; border: 1px solid #2d2d42;">                       
                    </div>
                    <h3 style="color: #e0e0e0; font-size: 18px; margin-bottom: 15px;">Ao cancelar, você perde os seguintes benefícios:</h3>
                    <ul style="padding-left: 20px; color: #a0a0c0; line-height: 1.6; margin-bottom: 20px;">
                        <li style="margin-bottom: 8px;">Todos os benefícios do Plano Avançado</li>
                        <li style="margin-bottom: 8px;">E-commerce ilimitado e integrações com sistemas</li>
                        <li style="margin-bottom: 8px;">Aplicação web complexa (gestão de estoque, cotação online, etc.)</li>
                        <li style="margin-bottom: 8px;">Hospedagem dedicada de 100GB SSD</li>
                        <li style="margin-bottom: 8px;">Suporte com prioridade extrema</li>
                        <li style="margin-bottom: 8px;">Consultoria estratégica mensal</li>
                        <li style="margin-bottom: 8px;">Suporte 24/7 (WhatsApp e e-mail)</li>
                    </ul>
                </div>
            @endif

            @if($endsAt && $endsAt !== 'Data de término do ciclo não definida')
            <p style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 20px;">
                O período foi encerrado de imediato, não haverá mais cobranças referentes a esse plano.
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
