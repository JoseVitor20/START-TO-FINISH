export function initCarregamento() {
        // Esta função esconde a overlay
        function hideLoadingOverlay() {
            const loadingOverlay = document.getElementById('loading-overlay');
            if (loadingOverlay) {
                loadingOverlay.classList.add('hidden');
            }
        }

        // 1. Usa o evento 'load' (ideal para a maioria dos casos)
        // Isso garante que todo o conteúdo estático da página seja carregado.
        window.addEventListener('load', function() {
            // 2. Adiciona um atraso mínimo de 1.5 segundos após o evento 'load'.
            // Isso previne que a overlay desapareça muito rápido se o site estiver em cache.
            // O tempo de 1.5s é um bom valor para dar tempo para a animação da logo,
            // e para que o navegador processe a renderização final.
            setTimeout(hideLoadingOverlay, 500); 
        });

        // 3. Adiciona uma medida de segurança para o caso de o evento 'load'
        // não ser disparado corretamente (cenários raros, mas possíveis).
        // Isso esconde a overlay após um tempo máximo (ex: 5 segundos),
        // garantindo que o usuário não fique preso na tela de carregamento.
        setTimeout(hideLoadingOverlay, 1000); 
}