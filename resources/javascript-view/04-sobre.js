document.querySelectorAll('[data-filter]').forEach(button => {
    button.addEventListener('click', function() {
        // Ativa o botão selecionado
        document.querySelectorAll('[data-filter]').forEach(btn => {
            btn.classList.remove('active');
        });
        this.classList.add('active');
        
        const filter = this.getAttribute('data-filter');
        const skillItems = document.querySelectorAll('.skill-item');
        
        skillItems.forEach(item => {
            if (filter === 'all' || item.getAttribute('data-category') === filter) {
                item.style.display = 'block';
                setTimeout(() => {
                    item.style.opacity = '1';
                }, 50);
            } else {
                item.style.opacity = '0';
                setTimeout(() => {
                    item.style.display = 'none';
                }, 300);
            }
        });
        
        // Força a animação das barras ao filtrar
        if (document.querySelector('#tecnico-tab.active')) {
            animateSkillBars();
        }
    });
});

// Função para animar as barras de habilidade
function animateSkillBars() {
    const levelBars = document.querySelectorAll('.level-bar');
    levelBars.forEach(bar => {
        const width = bar.style.width;
        bar.style.width = '0';
        setTimeout(() => {
            bar.style.width = width;
        }, 100);
    });
}

// Anima as barras quando a aba é mostrada
document.getElementById('tecnico-tab').addEventListener('shown.bs.tab', animateSkillBars);

// Anima as barras se a aba estiver ativa no carregamento
if (document.querySelector('#tecnico-tab.active')) {
    animateSkillBars();
} 