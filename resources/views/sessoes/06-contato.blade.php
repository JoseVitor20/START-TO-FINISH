@if(session('email-enviado'))
    <div class="CONTATO-mensagem CONTATO-mensagem--sucesso">
        <i class="fas fa-check-circle"></i>
        Mensagem enviada com sucesso!
    </div>
@endif

<div class="CONTATO py-3" id="contato" data-aos="zoom-in-down" data-aos-duration="2000">
    <h2 class="text-center mt-lg-5 mt-3 display-4 fw-bold">Entre em <span class="text-gradient">Contato</span></h2>
    <div class="CONTATO-divider"></div>
    <div class="CONTATO-container">

        <!-- Lado Esquerdo: Mapa + Botões -->
        <div class="CONTATO__lado CONTATO__lado--esquerdo">
            {{-- https://maps.google.com/maps?q=LATITUDE,LONGITUDE&z=15&output=embed --}}
            <iframe src="https://maps.google.com/maps?q=-22.212167,-54.7336421&z=15&output=embed" width="100%" height="300" style="border:0; border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            <hr class="CONTATO__separador">
            <p class="CONTATO__texto CONTATO__texto--centralizado CONTATO__texto--negrito">Ou entre em contato com...</p>
            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=josevitordonascimentolopes@gmail.com" target="_blank" class="btn CONTATO__botao CONTATO__botao--acao btn-lg">
                <i class="fab fa-google me-2"></i> Gmail do Google
            </a>

            <a href="https://wa.me/556798722284" target="_blank" class="btn CONTATO__botao CONTATO__botao--acao btn-lg">
                <i class="fab fa-whatsapp me-2"></i>Entrar com WhatsApp
            </a>

            <a href="https://t.me/Jose_Vitor_Nascimento_Lopes" target="_blank" class="btn CONTATO__botao CONTATO__botao--acao btn-lg">
                <i class="fab fa-telegram-plane me-2"></i> Entrar com Telegram
            </a>

            <p class="CONTATO__alerta">
                Os e-mails recebidos por este canal de contato serão respondidos após todos os e-mails <strong>comerciais</strong> forem atendidos.
            </p>
        </div>
        
        <!-- Lado Direito: Formulário -->
        <div class="CONTATO__lado CONTATO__lado--direito">
            <h2 class="CONTATO__titulo">Contato <strong class="text-gradient">Comercial</strong></h2>
            <span class="CONTATO__subtitulo">Este canal de atendimento é dedicado a assuntos comercias.</span>
            <form class="CONTATO__formulario" action="{{ route('contato.enviar') }}" method="POST">
                @csrf

                <div class="CONTATO__campo">
                    <label for="nome" class="CONTATO__etiqueta">Nome completo:</label>
                    <input type="text" name="nome" class="CONTATO__entrada form-control" id="nome" placeholder="Digite seu nome">
                </div>
                <div class="CONTATO__campo">
                    <label for="email" class="CONTATO__etiqueta">E-mail</label>
                    <input type="email" name="email" class="CONTATO__entrada form-control" id="email" placeholder="Digite seu e-mail">
                </div>
                <div class="CONTATO__campo">
                    <label for="message" class="CONTATO__etiqueta">Mensagem</label>
                    <textarea name="mensagem" class="CONTATO__entrada form-control" id="message" rows="5"
                        placeholder="Digite sua mensagem"></textarea>
                </div>
                <button type="submit" class="btn py-2 CONTATO__botao CONTATO__botao--acao" tabindex="-1">Fazer contato <span>business</span></button>
                <!-- Alerta -->
                <p class="CONTATO__alerta">
                    O contato <strong>comercial</strong> é encaminhado diretamente ao nosso sistema de e-mail principal, garantindo que sua mensagem seja recebida em primeira mão.
                </p>
            </form>
        </div>
    </div>
</div>
