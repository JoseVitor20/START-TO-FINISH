// Importações existentes
import { initDarkMode, initMenuMobile, initHashNavigation } from './02-navbar.js';
import { initParticles, initTypedEffect } from './03-hero.js';
import { initSkillFilter } from './04-sobre.js';
import { initProjetos } from './05-projetos.js';
import { initContato } from './06-contato.js';
import { initServicoHover } from './07-serviço.js';

// Inicialização quando o DOM estiver pronto
document.addEventListener('DOMContentLoaded', () => {
    // Inicializações existentes
    initDarkMode();
    initMenuMobile();
    initHashNavigation();
    initParticles();
    initTypedEffect();
    initSkillFilter();
    initProjetos();
    initContato();
    initServicoHover();
});

// Carrega Particles.js se necessário (opcional)
if (!window.particlesJS && document.getElementById('particles-js')) {
    const script = document.createElement('script');
    script.src = 'https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js';
    script.onload = () => initParticles();
    document.head.appendChild(script);
}