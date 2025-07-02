//  === Iniciar Particles.js ===
const initParticles = () => {
    if(!document.getElementById('particles-js')) return;
    
    // Configuração mínima recomendada para performance
    particlesJS('particles-js', {
        particles: {
            number: { value: 60, density: { enable: true, value_area: 700 } },
            color: { value: "#ffffff" },
            shape: { type: "circle" },
            opacity: { value: 0.3, random: true },
            size: { value: 3, random: true },
            line_linked: { enable: true, distance: 120, color: "#ffffff", opacity: 0.2, width: 1 },
            move: { enable: true, speed: 1 }
        },
        interactivity: {
            detect_on: "canvas",
            events: {
                onhover: { enable: true, mode: "grab" },
                onclick: { enable: false }, // Desabilitado para melhor performance
                resize: true
            }
        },
        retina_detect: true
    });
};

// Verifica se o Particles.js já está carregado
if(window.particlesJS) {
    initParticles();
} else {
    // Fallback caso o CDN falhe
    const particlesScript = document.createElement('script');
    particlesScript.src = 'https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js';
    particlesScript.onload = initParticles;
    document.head.appendChild(particlesScript);
}

// Efeito de digitação (opcional)
const typedName = document.getElementById('typed-name');
if(typedName) {
    const name = 'José Vitor'; // Ou data-attribute
    let i = 0;
    
    const typeWriter = () => {
        if (i < name.length) {
            typedName.textContent += name.charAt(i);
            i++;
            setTimeout(typeWriter, 100);
        }
    };
    
    // Inicia após um pequeno delay para a animação de fadeIn
    setTimeout(typeWriter, 1200);
}
    