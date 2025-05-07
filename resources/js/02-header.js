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
const buttonRegistro = document.querySelector('a.header__action--register');

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

buttonRegistro.addEventListener('click', toggleMenu)

// === MATER O ÚLTIMO ELEMENTO ATIVO MESMO QUE A PÁGINA SEJA ATUALIZADA ===    
    // Função para remover a classe 'selected' de todos os itens e deixar apenas um elemento ativo como destaque
    headerNavItemsLinks[0].classList.add('selected')
    function clearSelection() {
      document.querySelectorAll('a.header__nav-link').forEach(item => {
        item.classList.remove('selected');
      });
    }

    // Ao carregar a página, aplica a seleção salva (se clique)
      // const savedId = localStorage.getItem('lastClickedId');
      // if (savedId) {
      //   const savedElement = document.getElementById(savedId);
      //   if (savedElement) {
      //     savedElement.classList.add('selected');
      //   }
      // }

      // Adiciona eventos de clique em cada item
      document.querySelectorAll('a.header__nav-link').forEach(item => {
        item.addEventListener('click', () => {
          clearSelection();
          item.classList.add('selected');
          localStorage.setItem('lastClickedId', item.id);
        });
      });
