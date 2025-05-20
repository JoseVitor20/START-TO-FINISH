//  === TEMA DARK E LIGHT ===
    const toggleButton = document.querySelector('.header__action--dark-mode');
    const icon = toggleButton.querySelector('i');
    const body = document.body;

    function enableDarkMode() {
        body.classList.add('light-mode');
        icon.classList.replace('fa-sun', 'fa-moon');
        localStorage.setItem('light-mode', 'enabled');
    }

    function disableDarkMode() {
        body.classList.remove('light-mode');
        icon.classList.replace('fa-moon', 'fa-sun');
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

// === MENU MOBILE ===
const menuBtn = document.getElementById('menuBtn');
const headerContainer = document.querySelector('div.header__container');
const headerOpacidade = document.querySelector('div.header__opacidade');
const headerNavItems = document.querySelectorAll('li.header__nav-item');
const headerNavItemsLinks = document.querySelectorAll('a.header__nav-link');
const actionMenu = document.getElementById('hidden');
const buttonDarkMode = document.querySelector('button.header__action--dark-mode');

function toggleMenu() {
    menuBtn.classList.toggle('active');
    headerContainer.classList.toggle('ativo');
    headerOpacidade.classList.toggle('opacidade-ativa');
    actionMenu.classList.toggle('opacidade-action');
    
    // Aplica display: flex important apenas uma vez no container
    headerContainer.style.setProperty('display', 'flex', 'important');
    
    // Alterna classe para todos os itens de navegação
    headerNavItems.forEach(item => {
        item.classList.toggle('opacidade-link');
    });
}

// Evento de clique no botão do menu
menuBtn.addEventListener('click', toggleMenu);

// Evento de clique fora do menu (na opacidade)
headerNavItemsLinks.forEach(item => {
    item.addEventListener('click', toggleMenu)
});

headerOpacidade.addEventListener('click', toggleMenu);

buttonDarkMode.addEventListener('click', toggleMenu);

// === MATER O ÚLTIMO ELEMENTO ATIVO MESMO QUE A PÁGINA SEJA ATUALIZADA ===    
    // Ativar links
    const VALID_HASHES = [
      '#inicio',
      '#sobre',
      '#projetos',
      '#depoimentos',
      '#contato',
    ];

    function updateSelectedNavItem () {
      const currentHash = window.location.hash;

      document.querySelectorAll('.selected').forEach(item =>
        item.classList.remove('selected')
      );

      if (VALID_HASHES.includes(currentHash)) {
        // Pode repetir esse mesmos sistema para outras estruturas que usem os mesmos links
          const link = document.querySelector(
            `.header__nav-item a[href="${currentHash}"]`
          );
          link?.closest('.header__nav-item')?.classList.add('selected');
      }
    }

    updateSelectedNavItem()

    window.addEventListener('hashchange', updateSelectedNavItem);

    document.addEventListener('click', e => {
        // Pode repetir esse mesmos sistema para outras estruturas que usem os mesmos links
          const link = e.target.closest('.header__nav-item a[href^="#"]');
          if (link) {
            updateSelectedNavItem();
          }
    });