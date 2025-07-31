export default function dashboardHeader() {
    // === TEMA DARK E LIGHT ===
    const toggleButton = document.querySelector('.header-action--dark-mode');
    const icon = toggleButton.querySelector('i');
    const body = document.body;

    function enableDarkMode() {
        body.classList.add('light-mode');
        icon.classList.replace('fa-moon', 'fa-sun');
        localStorage.setItem('light-mode', 'enabled');
    }

    function disableDarkMode() {
        body.classList.remove('light-mode');
        icon.classList.replace('fa-sun', 'fa-moon');
        localStorage.setItem('light-mode', 'disabled');
    }

    // Estado inicial baseado no localStorage
    if (localStorage.getItem('light-mode') === 'enabled') {
        enableDarkMode();
    }

    toggleButton.addEventListener('click', () => {
        if (body.classList.contains('light-mode')) {
            disableDarkMode();
        } else {
            enableDarkMode();
        }
    });

    // Dropdown menu (opcional)
    const userProfile = document.getElementById('user-profile');
    const dropdownMenu = document.getElementById('dropdown-menu');

    userProfile.addEventListener('click', () => {
        dropdownMenu.classList.toggle('show');
    });

    // Fechar dropdown ao clicar fora
    window.addEventListener('click', (e) => {
        if (!userProfile.contains(e.target) && !dropdownMenu.contains(e.target)) {
            dropdownMenu.classList.remove('show');
        }
    });

    // Menu Mobile
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('active');
        // Alternar ícone do botão
        const icon = mobileMenuBtn.querySelector('i');
        if (mobileMenu.classList.contains('active')) {
            icon.classList.replace('fa-bars', 'fa-times');
        } else {
            icon.classList.replace('fa-times', 'fa-bars');
        }
    });

    // Fechar menu mobile ao clicar em um item
    const mobileMenuItems = document.querySelectorAll('.mobile-menu-item');
    mobileMenuItems.forEach(item => {
        item.addEventListener('click', () => {
            mobileMenu.classList.remove('active');
            mobileMenuBtn.querySelector('i').classList.replace('fa-times', 'fa-bars');
        });
    });

    // Fechar menu mobile ao redimensionar a tela para tamanho maior
    window.addEventListener('resize', () => {
        if (window.innerWidth > 768) {
            mobileMenu.classList.remove('active');
            mobileMenuBtn.querySelector('i').classList.replace('fa-times', 'fa-bars');
        }
    }); 
}