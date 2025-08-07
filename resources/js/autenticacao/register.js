const AppConfig = {
    debugMode: true,
    particleDensity: 30
};

// Classe principal para gerenciamento do tema
document.addEventListener('DOMContentLoaded', function() {
    const themeToggle = document.getElementById('REGISTRO-theme-toggle');
    const themeIcon = document.getElementById('REGISTRO-theme-icon');
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
        this.passwordToggles = document.querySelectorAll('.REGISTRO-form__password-toggle');
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
            const inputWrapper = toggle.closest('.REGISTRO-form__input-wrapper');
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

// Verificador de força de senha
document.addEventListener('DOMContentLoaded', function() {
    const passwordInput = document.getElementById('REGISTRO-password');
    if (passwordInput) {
        // Criar elementos do medidor de força
        const strengthContainer = document.createElement('div');
        strengthContainer.className = 'REGISTRO-form__password-strength';
        
        const strengthMeter = document.createElement('div');
        strengthMeter.className = 'REGISTRO-form__strength-meter';
        
        const strengthMeterFill = document.createElement('div');
        strengthMeterFill.className = 'REGISTRO-form__strength-meter-fill REGISTRO-form__strength-meter-fill--0';
        strengthMeter.appendChild(strengthMeterFill);
        
        const strengthText = document.createElement('span');
        strengthText.className = 'REGISTRO-form__strength-text REGISTRO-form__strength-label--0';
        strengthText.textContent = 'Muito fraca';
        
        strengthContainer.appendChild(strengthMeter);
        strengthContainer.appendChild(strengthText);
        
        // Criar lista de requisitos
        const requirementsList = document.createElement('ul');
        requirementsList.className = 'REGISTRO-form__password-requirements';
        requirementsList.innerHTML = `
            <li data-requirement="length">Mínimo de 8 caracteres</li>
            <li data-requirement="uppercase">Pelo menos 1 letra maiúscula</li>
            <li data-requirement="number">Pelo menos 1 número</li>
            <li data-requirement="special">Pelo menos 1 caractere especial</li>
        `;
        
        // Inserir após o input de senha
        passwordInput.parentNode.parentNode.appendChild(strengthContainer);
        passwordInput.parentNode.parentNode.appendChild(requirementsList);
        
        // Verificar força da senha em tempo real
        passwordInput.addEventListener('input', function() {
            const password = this.value;
            const strength = calculatePasswordStrength(password);
            updateStrengthMeter(strength, strengthMeterFill, strengthText);
            updateRequirementsList(password, requirementsList);
        });
    }
    
    function calculatePasswordStrength(password) {
        let strength = 0;
        
        // Comprimento
        if (password.length >= 8) strength++;
        if (password.length >= 12) strength++;
        
        // Variedade de caracteres
        if (/[A-Z]/.test(password)) strength++;
        if (/[0-9]/.test(password)) strength++;
        if (/[^A-Za-z0-9]/.test(password)) strength++;
        
        return Math.min(strength, 4);
    }
    
    function updateStrengthMeter(strength, meter, text) {
        // Atualizar classes do medidor
        meter.className = 'REGISTRO-form__strength-meter-fill REGISTRO-form__strength-meter-fill--' + strength;
        text.className = 'REGISTRO-form__strength-text REGISTRO-form__strength-label--' + strength;
        
        // Atualizar largura do medidor
        meter.style.width = ['20%', '40%', '60%', '80%', '100%'][strength];
        
        // Atualizar texto
        const strengthLabels = ['Muito fraca', 'Fraca', 'Média', 'Forte', 'Muito forte'];
        text.textContent = strengthLabels[strength];
    }
    
    function updateRequirementsList(password, list) {
        const requirements = {
            length: password.length >= 8,
            uppercase: /[A-Z]/.test(password),
            number: /[0-9]/.test(password),
            special: /[^A-Za-z0-9]/.test(password)
        };
        
        Array.from(list.children).forEach(item => {
            const requirement = item.getAttribute('data-requirement');
            if (requirements[requirement]) {
                item.classList.add('requirement-met');
            } else {
                item.classList.remove('requirement-met');
            }
        });
    }
});

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
