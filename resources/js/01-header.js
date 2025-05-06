const toggleButton = document.querySelector('.header__action--dark-mode');
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
