<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação de Renovação de Plano - {{ config('app.name') }}</title>
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
            <img src="{{ asset('img/starttofinish-white.png') }}" alt="Logo {{ config('app.name') }}" style="max-height: 60px; filter: invert(100%);">
        </div>

        <!-- Content -->
        <div style="padding: 40px;">
            <h1 style="color: #00f5d0; font-size: 16px; margin-bottom: 25px; font-weight: 600; position: relative; display: inline-block;">
                Confirmação de Renovação de Plano
                <span style="display: block; height: 3px; width: 100%; background: linear-gradient(90deg, #00f5d0, #19bf00); border-radius: 3px; position: absolute; bottom: -8px; left: 0;"></span>
            </h1>

            <div style="font-size: 14px; color: #ffffff; margin-bottom: 30px;">
                Olá, {{ $userName }}! 👋
            </div>

            {{-- Condicionais de planos --}}
            @if($planName == 'price_1RtxvFATrxUtVNlsRUQN7PI5')
                <div style="margin-bottom: 30px;">
                    <p style="font-size: 12px; color: #ffffff; line-height: 1.7; margin-bottom: 20px;">
                        Ótimas notícias! O plano <strong style="color: #00f5d0;">MICRO</strong> foi renovado com sucesso!
                    </p>
                    <div style="text-align: center; margin: 20px 0;">                        
                        <img src="{{asset('img/assinaturas/plano-micro.png')}}" alt="Plano Micro" style="max-height: 200px; border-radius: 8px; border: 1px solid #2d2d42;">
                    </div>
                    <h3 style="color: #00f5d0; font-size: 20px; margin-top: 30px; margin-bottom: 10px;">Benefícios que você continua aproveitando:</h3>
                    <ul style="list-style-type: none; padding-left: 0;">
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Site de 1 página (cartão de visita online)</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Criação de site prioritária (sujeito à disponibilidade)</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Design responsivo</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- SEO básico para visibilidade</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Hospedagem de 5GB SSD</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Domínio grátis (enquanto for assinante)</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Manutenção e suporte grátis agendado via WhatsApp (prioridade baixa)</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Formulário de contato</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Certificado SSL grátis</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Backup semanal automático</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- 1 conta de e-mail profissional</li>
                    </ul>
                </div>
            @elseif($planName == 'price_1RtxwcATrxUtVNlsax7gHMWt')
                <div style="margin-bottom: 30px;">
                    <p style="font-size: 16px; color: #ffffff; line-height: 1.7; margin-bottom: 20px;">
                        Ótimas notícias! O plano <strong style="color: #00f5d0;">BÁSICO</strong> foi renovado com sucesso!
                    </p>
                    <div style="text-align: center; margin: 20px 0;">                        
                        <img src="{{asset('img/assinaturas/plano-basico.png')}}" alt="Plano Básico" style="max-height: 200px; border-radius: 8px; border: 1px solid #2d2d42;">
                    </div>
                    <h3 style="color: #00f5d0; font-size: 20px; margin-top: 30px; margin-bottom: 10px;">Benefícios que você continua aproveitando:</h3>
                    <ul style="list-style-type: none; padding-left: 0;">
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Site de até 5 páginas</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Criação de site prioritária (sujeito à disponibilidade)</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Design responsivo</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- SEO para ranqueamento</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Hospedagem premium de 10GB SSD</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Domínio grátis (enquanto for assinante)</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Manutenção e suporte grátis agendado via WhatsApp (prioridade média)</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Integração com redes sociais</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Certificado SSL grátis</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Relatório mensal de desempenho (Google Analytics)</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- 3 contas de e-mail profissional</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Backup diário automático</li>
                    </ul>
                </div>
            @elseif($planName == 'price_1RtxyXATrxUtVNlskia8tsRB')
                <div style="margin-bottom: 30px;">
                    <p style="font-size: 16px; color: #ffffff; line-height: 1.7; margin-bottom: 20px;">
                        Ótimas notícias! O plano <strong style="color: #00f5d0;">ESSENCIAL</strong> foi renovado com sucesso!
                    </p>
                    <div style="text-align: center; margin: 20px 0;">                        
                        <img src="{{asset('img/assinaturas/plano-essencial.png')}}" alt="Plano Essencial" style="max-height: 200px; border-radius: 8px; border: 1px solid #2d2d42;">
                    </div>
                    <h3 style="color: #00f5d0; font-size: 20px; margin-top: 30px; margin-bottom: 10px;">Benefícios que você continua aproveitando:</h3>
                    <ul style="list-style-type: none; padding-left: 0;">
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Site de até 15 páginas com galeria de produtos</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Criação de site prioritária (sujeito à disponibilidade)</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Design exclusivo e responsivo</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- SEO avançado</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Hospedagem avançada de 20GB SSD</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Domínio grátis (enquanto for assinante)</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Manutenção e suporte grátis agendado via WhatsApp (prioridade alta)</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Galeria de produtos/serviços</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Ambiente de testes (staging)</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Backup semanal automático</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- 5 contas de e-mail profissional</li>
                    </ul>
                </div>
            @elseif($planName == 'price_1RtxzlATrxUtVNlsC5rdTbcI')
                <div style="margin-bottom: 30px;">
                    <p style="font-size: 16px; color: #ffffff; line-height: 1.7; margin-bottom: 20px;">
                        Ótimas notícias! O plano <strong style="color: #00f5d0;">PROFISSIONAL</strong> foi renovado com sucesso!
                    </p>
                    <div style="text-align: center; margin: 20px 0;">                        
                        <img src="{{asset('img/assinaturas/plano-profissional.png')}}" alt="Plano Profissional" style="max-height: 200px; border-radius: 8px; border: 1px solid #2d2d42;">
                    </div>
                    <h3 style="color: #00f5d0; font-size: 20px; margin-top: 30px; margin-bottom: 10px;">Benefícios que você continua aproveitando:</h3>
                    <ul style="list-style-type: none; padding-left: 0;">
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Site institucional completo com SEO</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Formulário de orçamento e botão de WhatsApp flutuante</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Agendamento online integrado</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Design exclusivo e responsivo</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- SEO Avançado e Local SEO</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Hospedagem premium de 30GB SSD</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Domínio grátis (enquanto for assinante)</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Backup diário automático</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- 5 contas de e-mail profissional</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Manutenção e suporte grátis agendado via WhatsApp (prioridade alta)</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Ambiente de testes (staging)</li>
                    </ul>
                </div>
            @elseif($planName == 'price_1Rty1DATrxUtVNlscvduK7xW')
                <div style="margin-bottom: 30px;">
                    <p style="font-size: 16px; color: #ffffff; line-height: 1.7; margin-bottom: 20px;">
                        Ótimas notícias! O plano <strong style="color: #00f5d0;">AVANÇADO</strong> foi renovado com sucesso!
                    </p>
                    <div style="text-align: center; margin: 20px 0;">                        
                        <img src="{{asset('img/assinaturas/plano-avancado.png')}}" alt="Plano Avançado" style="max-height: 200px; border-radius: 8px; border: 1px solid #2d2d42;">
                    </div>
                    <h3 style="color: #00f5d0; font-size: 20px; margin-top: 30px; margin-bottom: 10px;">Benefícios que você continua aproveitando:</h3>
                    <ul style="list-style-type: none; padding-left: 0;">
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Loja virtual com até 50 produtos</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Criação de site prioritária (sujeito à disponibilidade)</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Design exclusivo e responsivo</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Integração com meios de pagamento e logística</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Hospedagem empresarial de 50GB SSD</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- 1 domínio grátis (enquanto for assinante)</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Manutenção e suporte grátis agendado via WhatsApp (prioridade urgente)</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Páginas ilimitadas</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Certificado SSL premium</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- SEO avançado</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Backup diário</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Suporte 24/6 (WhatsApp e e-mail)</li>
                    </ul>
                </div>
            @elseif($planName == 'price_1Rty2wATrxUtVNlslZP3DyEE')
                <div style="margin-bottom: 30px;">
                    <p style="font-size: 16px; color: #ffffff; line-height: 1.7; margin-bottom: 20px;">
                        Ótimas notícias! O plano <strong style="color: #00f5d0;">MASTER</strong> foi renovado com sucesso!
                    </p>
                    <div style="text-align: center; margin: 20px 0;">                        
                        <img src="{{asset('img/assinaturas/plano-master.png')}}" alt="Plano Master" style="max-height: 200px; border-radius: 8px; border: 1px solid #2d2d42;">
                    </div>
                    <h3 style="color: #00f5d0; font-size: 20px; margin-top: 30px; margin-bottom: 10px;">Benefícios que você continua aproveitando:</h3>
                    <ul style="list-style-type: none; padding-left: 0;">
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- E-commerce ilimitado e integrações com sistemas</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Aplicação web complexa (gestão de estoque, cotação online, etc.)</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Hospedagem dedicada de 100GB SSD</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Criação de site prioritária (sujeito à disponibilidade)</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- 5 domínios grátis (enquanto for assinante)</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Manutenção e suporte grátis agendado via WhatsApp (prioridade extrema)</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Sistema de gerenciamento de conteúdo</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Integração com APIs externas</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Segurança avançada</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Design exclusivo e responsivo</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- SEO completo</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Consultoria estratégica mensal</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Suporte 24/7 (WhatsApp e e-mail)</li>
                        <li style="font-size: 10px; color: #a0a0c0; line-height: 1.7; margin-bottom: 5px;">- Backup e recuperação de desastres (diário)</li>
                    </ul>
                </div>
            @endif

            @if($endsAt && $endsAt !== 'Data de término do ciclo não definida')
            <p style="font-size: 16px; color: #a0a0c0; line-height: 1.7; margin-bottom: 20px;">
                Sua próxima cobrança será em <strong style="color: #00f5d0;">{{ $endsAt }}</strong>.
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
