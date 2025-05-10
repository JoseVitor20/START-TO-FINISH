@if(session('success'))
    <span class="sucesso animate-sucesso">{{ session('success') }}</span>
@endif

<div class="contact py-3" id="contato" data-aos="zoom-in-down" data-aos-duration="1000">
    <h2 class=" text-center mt-lg-5 mt-3 display-4 fw-bold">Entre em <span class="text-gradient">Contato</span></h2>
    <div class="container contact-wrapper d-flex flex-wrap">

        <!-- Lado Esquerdo: Mapa + Botões -->
        <div class="contact-left col-md-5">
            {{-- https://maps.google.com/maps?q=LATITUDE,LONGITUDE&z=15&output=embed --}}
            <iframe src="https://maps.google.com/maps?q=-22.385945,-54.508502&z=15&output=embed" width="100%" height="300" style="border:0; border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            <hr class="my-4">
            <p class="text-center fw-bold">Ou entre em contato com...</p>
            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=josevitordonascimentolopes@gmail.com" target="_blank" class="btn contato-cta btn-lg">
                <i class="fab fa-google me-2"></i> Gmail do Google
            </a>

            <a href="https://wa.me/556798722284" target="_blank" class="btn contato-cta btn-lg">
                <i class="fab fa-whatsapp me-2"></i>Entrar com WhatsApp
            </a>

            <a href="https://t.me/Jose_Vitor_Nascimento_Lopes" target="_blank" class="btn contato-cta btn-lg">
                <i class="fab fa-telegram-plane me-2"></i> Entrar com Telegram
            </a>

            <p class="alert-box">
                Os e-mails recebidos por este canal de contato serão respondidos após todos os e-mails <strong>comerciais</strong> forem atendidos.
            </p>

        </div>
        <!-- Lado Direito: Formulário -->
        <div class="contact-right col-md-7">
            <h2 class="mb-2">Contato <strong class="text-gradient">Comercial</strong></h2>
            <span>Este canal de atendimento é dedicado a assuntos comercias.</span>
            <form class="mt-5" action="{{ route('contato.enviar') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nome" class="form-label">Nome completo:</label>
                    <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite seu nome">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Digite seu e-mail">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Mensagem</label>
                    <textarea name="mensagem" class="form-control" id="message" rows="5"
                        placeholder="Digite sua mensagem"></textarea>
                </div>
                <button type="submit" class="btn py-2 contato-cta" tabindex="-1">Fazer contato <span>business</span></button>
                <!-- Alerta -->
                <p class="alert-box">
                    O contato <strong>comercial</strong> é encaminhado diretamente ao nosso sistema de e-mail principal, garantindo que sua mensagem seja recebida em primeira mão.
                </p>
            </form>
        </div>
    </div>
</div>