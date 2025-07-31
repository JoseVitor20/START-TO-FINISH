// Configurações globais
const AppConfig = {
    debugMode: true,
    particleDensity: 30
};

// Classe principal para gerenciamento do tema
document.addEventListener('DOMContentLoaded', function() {
    const themeToggle = document.getElementById('theme-toggle');
    const themeIcon = document.getElementById('theme-icon');
    const body = document.body;

    // Verificar tema salvo
    const savedTheme = localStorage.getItem('theme') || 'dark';
    
    // Aplicar tema inicial
    if (savedTheme === 'light') {
        enableLightMode();
    } else {
        enableDarkMode();
    }

    // Alternar tema
    themeToggle.addEventListener('click', function() {
        if (body.classList.contains('light-mode')) {
            enableDarkMode();
        } else {
            enableLightMode();
        }
    });

    function enableLightMode() {
        body.classList.add('light-mode');
        themeIcon.classList.remove('fa-moon');
        themeIcon.classList.add('fa-sun');
        localStorage.setItem('theme', 'light');
    }

    function enableDarkMode() {
        body.classList.remove('light-mode');
        themeIcon.classList.remove('fa-sun');
        themeIcon.classList.add('fa-moon');
        localStorage.setItem('theme', 'dark');
    }

    function initParticles() {
        if (!document.getElementById('particles-js')) return;

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
                    onclick: { enable: false },
                    resize: true
                }
            },
            retina_detect: true
        });
    }

    // Chamada da função ao carregar a página
    initParticles();

});

// Restante do seu código JavaScript permanece igual...

// Classe para gerenciamento de senhas
class PasswordManager {
    constructor() {
        this.passwordToggles = document.querySelectorAll('.LOGIN__password-toggle');
        this.init();
    }

    init() {
        if (!this.passwordToggles.length) {
            this.logError('Nenhum toggle de senha encontrado');
            return;
        }

        this.setupToggles();
    }

    setupToggles() {
        this.passwordToggles.forEach(toggle => {
            const icon = toggle.querySelector('i') || this.createIcon(toggle);
            toggle.addEventListener('click', () => this.togglePassword(toggle, icon));
        });
    }

    createIcon(toggle) {
        const icon = document.createElement('i');
        icon.className = 'fas fa-eye';
        toggle.appendChild(icon);
        this.logDebug('Ícone criado para toggle de senha');
        return icon;
    }

    togglePassword(toggle, icon) {
        try {
            const inputWrapper = toggle.closest('.LOGIN__input-wrapper');
            if (!inputWrapper) throw new Error('Input wrapper não encontrado');
            
            const input = inputWrapper.querySelector('input');
            if (!input) throw new Error('Input não encontrado');
            
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.replace('fa-eye', 'fa-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.replace('fa-eye-slash', 'fa-eye');
            }
        } catch (error) {
            this.logError(error.message);
        }
    }

    logError(message) {
        console.error(`[PasswordManager] ${message}`);
    }

    logDebug(message) {
        if (AppConfig.debugMode) {
            console.debug(`[PasswordManager] ${message}`);
        }
    }
}

// Classe para efeitos visuais
class VisualEffects {
    static initParticles() {
        try {
            const container = document.querySelector('.particles') || this.createParticlesContainer();
            const count = window.innerWidth < 768 ? AppConfig.particleDensity / 2 : AppConfig.particleDensity;
            
            for (let i = 0; i < count; i++) {
                container.appendChild(this.createParticle());
            }
        } catch (error) {
            console.error('[VisualEffects] Erro ao criar partículas:', error);
        }
    }

    static createParticlesContainer() {
        const container = document.createElement('div');
        container.className = 'particles';
        document.body.appendChild(container);
        return container;
    }

    static createParticle() {
        const particle = document.createElement('div');
        particle.className = 'particle';
        
        particle.style.cssText = `
            width: ${Math.random() * 10 + 5}px;
            height: ${Math.random() * 10 + 5}px;
            left: ${Math.random() * window.innerWidth}px;
            top: ${Math.random() * window.innerHeight}px;
            animation-delay: ${Math.random() * 15}s;
            animation-duration: ${Math.random() * 15 + 10}s;
            opacity: ${Math.random() * 0.3 + 0.1};
        `;
        
        return particle;
    }
}

// Inicialização da aplicação
new PasswordManager();
VisualEffects.initParticles();
