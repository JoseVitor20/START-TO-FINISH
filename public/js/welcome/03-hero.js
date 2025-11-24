export function initParticles() {
    if (!document.getElementById('particles-js')) return;

    // Configuração do Particles.js
    particlesJS('particles-js', {
        particles: {
            number: { value: 60, density: { enable: true, value_area: 700 } },
            color: { value: "#ffffff" },
            shape: { type: "circle" },
            opacity: { value: 0.3, random: true },
            size: { value: 5, random: true },
            line_linked: { enable: true, distance: 120, color: "#ffffff", opacity: .3, width: 1 },
            move: { enable: true, speed: 1 }
        },
        interactivity: {
            detect_on: "canvas",
            events: {
                onhover: { enable: true, mode: "grab" },
                onclick: { enable: false },
                resize: true
            }
        },
        retina_detect: true
    });
}

export function initTypedEffect() {
    const typedName = document.getElementById('typed-name');
    if (!typedName) return;

    const name = 'José Vitor';
    let i = 0;

    const typeWriter = () => {
        if (i < name.length) {
            typedName.textContent += name.charAt(i);
            i++;
            setTimeout(typeWriter, 100);
        }
    };

    setTimeout(typeWriter, 1200);
}