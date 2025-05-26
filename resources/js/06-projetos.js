const categorias = [
    {
        nome: "Restaurantes",
        desc: "Encontre layouts para Restaurantes",
        icon: "https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
    },
    {
        nome: "Mercados",
        desc: "Encontre layouts para Mercado",
        icon: "https://images.unsplash.com/photo-1578916171728-46686eac8d58?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fG1lcmNhZG98ZW58MHx8MHx8fDA%3D"
    },
    {
        nome: "Panificadoras",
        desc: "Encontre layouts para Panificadoras",
        icon: "https://images.unsplash.com/photo-1509440159596-0249088772ff?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
    },
    {
        nome: "Salões de Beleza",
        desc: "Encontre layouts para Salões de Beleza",
        icon: "https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
    },
    {
        nome: "Farmácias",
        desc: "Encontre layouts para Farmácias",
        icon: "https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
    },
    {
        nome: "Lojas de Roupas",
        desc: "Encontre layouts para Lojas de Roupas",
        icon: "https://images.unsplash.com/photo-1489987707025-afc232f7ea0f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
    },

    {
        nome: "Consultório Psicológico",
        desc: "Encontre layouts para Consultório Psicológico",
        icon: "https://media.istockphoto.com/id/2174235368/pt/foto/in-therapists-office-woman-shares-and-counselor-takes-notes.webp?a=1&b=1&s=612x612&w=0&k=20&c=3s9YazVALzgH0xrzolEoLCCRrj3bqt2zagY4-AghVd4="
    },

    {
        nome: "Lojas de móveis",
        desc: "Encontre layouts para Lojas de móveis",
        icon: "https://media.istockphoto.com/id/2191392441/pt/foto/kitchen-showroom-exploration-with-modern-island-features.webp?a=1&b=1&s=612x612&w=0&k=20&c=YdTWncFsm5aY8KfOdM0anh0MBAwugNBAMabCNRR_umQ="
    }
];

const container = document.querySelector('.categorias-container');

// Adiciona as categorias ao container
categorias.forEach(categoria => {
    const card = document.createElement('div');
    card.className = 'categoria-card';
    card.innerHTML = `
        <div class="categoria-single">
            <img src="${categoria.icon}" alt="${categoria.nome}" class="categoria-icon">
            <div class="categoria-info">
                <h3 class="categoria-nome">${categoria.nome}</h3>
                <p class="categoria-desc">${categoria.desc}</p>
            </div>
        </div>
    `;
    
    // Adiciona evento de clique
    card.addEventListener('click', function() {
        // Mapeia cada categoria para uma página diferente
        const paginas = {
            "Restaurantes": "restaurantes",
            "Mercados": "mercados",
            "Panificadoras": "panificadoras",
            "Salões de Beleza": "salao-beleza",
            "Farmácias": "farmacias",
            "Lojas de Roupas": "lojas-roupas",
            "Consultório Psicológico": "psicologico",
            "Lojas de móveis": "lojas-moveis",
        };
        
        window.location.href = paginas[categoria.nome];
    });
    
    container.appendChild(card);
});
