export function initCarregamento() {
    // Simula um carregamento assíncrono
    setTimeout(() => {
        if(document.querySelector('div.CARREGAMENTO__overlay')){
            document.querySelector('div.CARREGAMENTO__overlay').classList.add('CARREGAMENTO--loaded');
        }
        
        setTimeout(() => {
            const overlay = document.querySelector('.CARREGAMENTO__overlay');
            if (overlay) overlay.remove();
        }, 800);
    }, 1000);
}