// Efeito hover nos cards
const cards = document.querySelectorAll('.preco-card');
cards.forEach(card => {
    card.addEventListener('mouseenter', () => {
        cards.forEach(c => {
            if (c !== card) {
                c.style.opacity = '0.7';
                c.style.transform = 'scale(0.95)';
            }
        });
    });
    
    card.addEventListener('mouseleave', () => {
        cards.forEach(c => {
            c.style.opacity = '1';
            c.style.transform = 'scale(1)';
        });
    });
});