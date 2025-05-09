// Anima a entrada e desaparece após 4 segundos
document.addEventListener("DOMContentLoaded", () => {
  const msg = document.getElementById('success-message');
  if (msg) {
    msg.classList.add('show');
    setTimeout(() => {
      msg.classList.remove('show');
      msg.classList.add('hide');
    }, 4000);
  }
});