export function initSkillFilter() {
    document.querySelectorAll('[data-filter]').forEach(button => {
        button.addEventListener('click', function() {
            document.querySelectorAll('[data-filter]').forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            const filter = this.getAttribute('data-filter');
            const skillItems = document.querySelectorAll('.skill-item');
            
            skillItems.forEach(item => {
                if (filter === 'all' || item.getAttribute('data-category') === filter) {
                    item.style.display = 'block';
                    setTimeout(() => item.style.opacity = '1', 50);
                } else {
                    item.style.opacity = '0';
                    setTimeout(() => item.style.display = 'none', 300);
                }
            });
            
            if (document.querySelector('#tecnico-tab.active')) {
                animateSkillBars();
            }
        });
    });

    function animateSkillBars() {
        const levelBars = document.querySelectorAll('.level-bar');
        levelBars.forEach(bar => {
            const width = bar.style.width;
            bar.style.width = '0';
            setTimeout(() => bar.style.width = width, 100);
        });
    }

    const tecnicoTab = document.getElementById('tecnico-tab');
    if (tecnicoTab) {
        tecnicoTab.addEventListener('shown.bs.tab', animateSkillBars);
        if (tecnicoTab.classList.contains('active')) animateSkillBars();
    }
}