// === Dark Mode ===
export function initDarkMode() {
    const toggleButton = document.querySelector('.navbar__dark-mode');
    if (!toggleButton) return;

    const icon = toggleButton.querySelector('.navbar__dark-icon');
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
}

// === Menu Mobile ===
export function initMenuMobile() {
    const menuBtn = document.getElementById('navbarMenuBtn');
    if (!menuBtn) return;

    const navbarContainer = document.querySelector('.navbar__container');
    const navbarOverlay = document.querySelector('.navbar__overlay');
    const navbarItems = document.querySelectorAll('.navbar__item');
    const navbarLinks = document.querySelectorAll('.navbar__link');
    const navbarActions = document.getElementById('navbarHidden');
    const darkModeButton = document.querySelector('.navbar__dark-mode');

    function toggleMenu() {
        menuBtn.classList.toggle('navbar__menu-hamburguer--active');
        navbarContainer.classList.toggle('navbar__container--active');
        navbarOverlay.classList.toggle('navbar__overlay--active');
        navbarActions.classList.toggle('navbar__actions--visible');
        navbarContainer.style.setProperty('display', 'flex', 'important');
        
        navbarItems.forEach(item => {
            item.classList.toggle('navbar__item--visible');
        });
    }

    menuBtn.addEventListener('click', toggleMenu);
    navbarLinks.forEach(item => item.addEventListener('click', toggleMenu));
    navbarOverlay?.addEventListener('click', toggleMenu);
    darkModeButton?.addEventListener('click', toggleMenu);
}

// === Navegação com Hash ===
export function initHashNavigation() {
    const VALID_HASHES = ['#inicio', '#sobre', '#projetos', '#depoimentos', '#contato', '#precos'];

    function updateSelectedNavItem() {
        const currentHash = window.location.hash;
        document.querySelectorAll('.navbar__item--selected').forEach(item => item.classList.remove('navbar__item--selected'));

        if (VALID_HASHES.includes(currentHash)) {
            const link = document.querySelector(`.navbar__item a[href="${currentHash}"]`);
            link?.closest('.navbar__item')?.classList.add('navbar__item--selected');
        }
    }

    updateSelectedNavItem();
    window.addEventListener('hashchange', updateSelectedNavItem);
    document.addEventListener('click', (e) => {
        const link = e.target.closest('.navbar__item a[href^="#"]');
        if (link) updateSelectedNavItem();
    });
}