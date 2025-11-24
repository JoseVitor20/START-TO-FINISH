export default function dashboardMain() {
    // Paginação das assinaturas canceladas
    const groups = document.querySelectorAll('.subscription-group');
    const dots = document.querySelectorAll('.page-dot');
    const prevButton = document.querySelector('.prev-button');
    const nextButton = document.querySelector('.next-button');
    let currentPage = 0;
    const totalPages = groups.length;

    function updatePagination() {
        // Esconde todos os grupos e mostra apenas o atual
        groups.forEach(group => group.classList.remove('active'));
        groups[currentPage].classList.add('active');
        
        // Atualiza os dots de paginação
        dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === currentPage);
        });
        
        // Atualiza estado dos botões
        if(prevButton) prevButton.disabled = currentPage === 0;
        if(nextButton) nextButton.disabled = currentPage === totalPages - 1;
    }

    // Eventos para os dots
    dots.forEach(dot => {
        dot.addEventListener('click', function() {
            currentPage = parseInt(this.dataset.page);
            updatePagination();
        });
    });

    // Eventos para os botões de navegação
    if(prevButton) {
        prevButton.addEventListener('click', function() {
            if(currentPage > 0) {
                currentPage--;
                updatePagination();
            }
        });
    }

    if(nextButton) {
        nextButton.addEventListener('click', function() {
            if(currentPage < totalPages - 1) {
                currentPage++;
                updatePagination();
            }
        });
    }
    
}