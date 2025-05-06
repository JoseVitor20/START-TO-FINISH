const toggleButton = document.querySelector('.header__action--dark-mode');
const icon = toggleButton.querySelector('i');
const body = document.body;

function enableDarkMode() {
  body.classList.add('dark-mode');
  icon.classList.replace('fa-moon', 'fa-sun');
  localStorage.setItem('dark-mode', 'enabled');
}

function disableDarkMode() {
  body.classList.remove('dark-mode');
  icon.classList.replace('fa-sun', 'fa-moon');
  localStorage.setItem('dark-mode', 'disabled');
}

// Estado inicial baseado no localStorage
if (localStorage.getItem('dark-mode') === 'enabled') {
  enableDarkMode();
}

toggleButton.addEventListener('click', () => {
  if (body.classList.contains('dark-mode')) {
    disableDarkMode();
  } else {
    enableDarkMode();
  }
});
