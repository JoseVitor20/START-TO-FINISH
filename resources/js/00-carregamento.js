// Simula um carregamento assíncrono (substitua por sua lógica real)
setTimeout(() => {
    // Adiciona a classe que ativa as transições
    document.body.classList.add('content-loaded');
    
    // Opcional: Remove o overlay do DOM após a animação
    setTimeout(() => {
        const overlay = document.querySelector('.loading-overlay');
        if (overlay) overlay.remove();
    }, 800); // Tempo deve corresponder à transição CSS (0.8s)
}, 1000); // Tempo simulado de carregamento (3 segundos)
