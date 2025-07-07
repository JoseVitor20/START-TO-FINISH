// Dados dos projetos (simulando um banco de dados)
const projetos = [
    {
        id: 1,
        nome: "Restaurante Gourmet",
        descricao: "Site especializado para restaurantes gourmet com design sofisticado e funcionalidades exclusivas.",
        imagem: "https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
        link: "restaurante",
        categorias: ["alimentacao"]
    },
    {
        id: 2,
        nome: "Super Mercado",
        descricao: "Solução digital completa para supermercados com foco em usabilidade e gestão de produtos.",
        imagem: "https://media.istockphoto.com/id/1414488671/pt/foto/we-always-find-everything-we-need-in-this-supermarket.webp?a=1&b=1&s=612x612&w=0&k=20&c=S0O_tjiE4CFeU__GiBWhdYvapjSCoJcN_7FVNCVu_Gk=",
        link: "mercado",
        categorias: ["alimentacao"]
    },
    {
        id: 3,
        nome: "Salão de Beleza",
        descricao: "Plataforma elegante para salões de beleza com destaque para serviços e experiência do cliente.",
        imagem: "https://images.unsplash.com/photo-1675034743339-0b0747047727?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTZ8fFNhbCVDMyVBM28lMjBkZSUyMGJlbGV6YXxlbnwwfHwwfHx8MA%3D%3D",
        link: "salao-beleza",
        categorias: ["beleza"]
    },
    {
        id: 4,
        nome: "Farmácia Popular",
        descricao: "Sistema otimizado para farmácias populares com gestão de estoque e atendimento.",
        imagem: "https://plus.unsplash.com/premium_photo-1661769786626-8025c37907ae?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTN8fGZhcm0lQzMlQTFjaWF8ZW58MHx8MHx8fDA%3D",
        link: "farmacia",
        categorias: ["saude"]
    },
    {
        id: 5,
        nome: "Padaria Artesanal",
        descricao: "Site personalizado para padarias artesanais com destaque para produtos frescos e especiais.",
        imagem: "https://images.unsplash.com/photo-1509440159596-0249088772ff?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
        link: "panificadora",
        categorias: ["alimentacao"]
    },
    {
        id: 6,
        nome: "Clínica Médica",
        descricao: "Plataforma profissional para clínicas médicas com foco em agendamentos e informações aos pacientes.",
        imagem: "https://plus.unsplash.com/premium_photo-1661602361702-bc7437dbbd1d?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8Q2xpbmljYSUyMG0lQzMlQTlkaWNhfGVufDB8fDB8fHww",
        link: "clinica",
        categorias: ["saude"]
    },
    {
        id: 7,
        nome: "Hotel Resort",
        descricao: "Solução completa para hotéis resort com ênfase em experiência visual e reservas.",
        imagem: "https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8aG90ZWx8ZW58MHx8MHx8fDA%3D",
        link: "hotel",
        categorias: ["repouso"]
    },
    {
        id: 8,
        nome: "Agência de Turismo",
        descricao: "Plataforma dinâmica para agências de turismo com destaque para destinos e pacotes.",
        imagem: "https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
        link: "turismo",
        categorias: ["turismo"]
    },
    {
        id: 9,
        nome: "Loja de Roupas",
        descricao: "E-commerce especializado para lojas de roupas com vitrine virtual e catálogo organizado.",
        imagem: "https://media.istockphoto.com/id/2157490868/pt/foto/black-woman-looking-at-clothes-in-a-store.webp?a=1&b=1&s=612x612&w=0&k=20&c=LJhnsgTGRThYClPeyXB3AaHt0NV9pMgk15uj97oLG9k=",
        link: "loja-roupas",
        categorias: ["beleza"]
    },
    {
        id: 10,
        nome: "Consultório Odontológico",
        descricao: "Site profissional para consultórios odontológicos com gestão de agendamentos e serviços.",
        imagem: "https://media.istockphoto.com/id/2153871515/pt/foto/dentist-performing-a-checkup-on-patient.webp?a=1&b=1&s=612x612&w=0&k=20&c=VZg8ZpQzYQ9G5bVhm9rJ6EXOe-rWLYZVBqXGLqXu1Oc=",
        link: "odonto",
        categorias: ["saude"]
    },
    {
        id: 11,
        nome: "Cafeteria Artesanal",
        descricao: "Site acolhedor para cafeterias artesanais com cardápio digital e eventos especiais.",
        imagem: "https://images.unsplash.com/photo-1445116572660-236099ec97a0?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60",
        link: "cafeteria",
        categorias: ["alimentacao"]
    },
    {
        id: 12,
        nome: "Pousada Charmosa",
        descricao: "Plataforma encantadora para pousadas charmosa com galeria de ambientes e reservas.",
        imagem: "https://media.istockphoto.com/id/1341543167/pt/foto/porch-country-house-with-folding-canvas-deckchairs.webp?a=1&b=1&s=612x612&w=0&k=20&c=aYahNriFeB0fKh7_Q0IrIANRryrFuaiKj7ttGt1C7Ss=",
        link: "pousada",
        categorias: ["turismo", "repouso"]
    },
    {
        id: 13,
        nome: "Barbearia",
        descricao: "Site moderno para barbearias com agendamento online e portfólio de serviços.",
        imagem: "https://media.istockphoto.com/id/1973194125/pt/foto/hairdresser-shaping-eyebrows-of-man-client-using-razor-in-barbershop.webp?a=1&b=1&s=612x612&w=0&k=20&c=FhDaOg4zCymutZW8I8x0x7jyoN9NsJI58ZXNbYtcAAQ=",
        link: "barbearia",
        categorias: ["beleza"]
    },
    {
        id: 13,
        nome: "Parque Aquático",
        descricao: "Site interativo para parques aquáticos com informações de atrações e ingressos.",
        imagem: "https://media.istockphoto.com/id/177132940/pt/foto/parque-aqu%C3%A1tico-e-piscina.webp?a=1&b=1&s=612x612&w=0&k=20&c=9NhyBd5PVc73haObOUy27lCTT32YPjUr8kNTFgUYnH0=",
        link: "park-aquatico",
        categorias: ["repouso"]
    },
    {
        id: 14,
        nome: "Centro Cultural",
        descricao: "Plataforma informativa para centros culturais com programação e espaços disponíveis.",
        imagem: "https://images.unsplash.com/photo-1591109789335-3c54ff5fec7e?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fGNlbnRybyUyMGN1bHR1cmFsfGVufDB8MHwwfHx8MA%3D%3D",
        link: "centro-cultural",
        categorias: ["turismo"]
    }
];

// Variáveis de controle
const projetosPorPagina = 8;
let paginaAtual = 1;
let categoriaAtual = 'todos';
let projetosFiltrados = [...projetos];
let totalPaginas = Math.ceil(projetosFiltrados.length / projetosPorPagina);

// Elementos DOM
const projetosContainer = document.getElementById('projetos-container');
const paginationContainer = document.getElementById('pagination');
const filterButtons = document.querySelectorAll('.filter-btn');

// Função para filtrar projetos por categoria
function filtrarProjetos(categoria) {
    categoriaAtual = categoria;
    
    if (categoria === 'todos') {
        projetosFiltrados = [...projetos];
    } else {
        projetosFiltrados = projetos.filter(projeto => 
            projeto.categorias.includes(categoria)
        );
    }
    
    paginaAtual = 1;
    totalPaginas = Math.ceil(projetosFiltrados.length / projetosPorPagina);
    
    mostrarProjetos(paginaAtual);
    atualizarPaginacao();
}

// Função para exibir os projetos da página atual
function mostrarProjetos(pagina) {
    projetosContainer.innerHTML = '';
    
    const inicio = (pagina - 1) * projetosPorPagina;
    const fim = inicio + projetosPorPagina;
    const projetosPagina = projetosFiltrados.slice(inicio, fim);
    
    if (projetosPagina.length === 0) {
        projetosContainer.innerHTML = `
            <div class="col-12 text-center py-5">
                <i class="fas fa-box-open fa-3x mb-3" style="color: #ccc;"></i>
                <h4>Nenhum projeto encontrado nesta categoria</h4>
                <p>Tente selecionar outra categoria ou verifique novamente mais tarde.</p>
            </div>
        `;
        return;
    }
    
    projetosPagina.forEach(projeto => {
        const projetoHTML = `
            <div class="categoria-card">
                <a href="${projeto.link}">
                    <img src="${projeto.imagem}" alt="${projeto.nome}" class="categoria-icon">
                    <div class="categoria-info">
                        <h3 class="categoria-nome">${projeto.nome}</h3>
                        <p class="categoria-desc">${projeto.descricao}</p>
                        <div class="mt-2">
                            ${projeto.categorias.map(cat => 
                                `<span class="badge bg-secondary me-1">${formatarCategoria(cat)}</span>`
                            ).join('')}
                        </div>
                    </div>
                </a>
            </div>
        `;
        projetosContainer.innerHTML += projetoHTML;
    });
}

// Função para formatar o nome da categoria
function formatarCategoria(categoria) {
    const formatos = {
        'alimentacao': 'Alimentação',
        'saude': 'Saúde',
        'turismo': 'Turismo',
        'repouso': 'Repouso',
        'beleza': 'Serviços'
    };
    return formatos[categoria] || categoria;
}

// Função para atualizar a paginação
function atualizarPaginacao() {
    paginationContainer.innerHTML = '';
    
    if (totalPaginas <= 1) return;
    
    // Botão anterior
    if (paginaAtual > 1) {
        const prevBtn = document.createElement('div');
        prevBtn.className = 'page-btn';
        prevBtn.innerHTML = '<i class="fas fa-chevron-left"></i>';
        prevBtn.addEventListener('click', () => {
            paginaAtual--;
            mostrarProjetos(paginaAtual);
            atualizarPaginacao();
        });
        paginationContainer.appendChild(prevBtn);
    }
    
    // Números das páginas (mostra até 5 páginas)
    const inicioPaginas = Math.max(1, paginaAtual - 2);
    const fimPaginas = Math.min(totalPaginas, paginaAtual + 2);
    
    for (let i = inicioPaginas; i <= fimPaginas; i++) {
        const pageBtn = document.createElement('div');
        pageBtn.className = `page-btn ${i === paginaAtual ? 'active' : ''}`;
        pageBtn.textContent = i;
        pageBtn.addEventListener('click', () => {
            paginaAtual = i;
            mostrarProjetos(paginaAtual);
            atualizarPaginacao();
        });
        paginationContainer.appendChild(pageBtn);
    }
    
    // Botão próximo
    if (paginaAtual < totalPaginas) {
        const nextBtn = document.createElement('div');
        nextBtn.className = 'page-btn';
        nextBtn.innerHTML = '<i class="fas fa-chevron-right"></i>';
        nextBtn.addEventListener('click', () => {
            paginaAtual++;
            mostrarProjetos(paginaAtual);
            atualizarPaginacao();
        });
        paginationContainer.appendChild(nextBtn);
    }
}

// Event listeners para os botões de filtro
filterButtons.forEach(button => {
    button.addEventListener('click', () => {
        filterButtons.forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');
        filtrarProjetos(button.dataset.category);
    });
});

// Inicializar
mostrarProjetos(paginaAtual);
atualizarPaginacao();