export function initContato() {
    const msg = document.querySelector('.CONTATO-mensagem--sucesso');
    if (!msg) return;

    msg.classList.add('CONTATO-mensagem--show');
    setTimeout(() => {
        msg.classList.remove('CONTATO-mensagem--show');
        msg.classList.add('CONTATO-mensagem--hide');
    }, 4000);
}