// Dados dos produtos
const products = [
    { id: 1, name: "Arroz Integral", category: "mercearia", price: 12.90, oldPrice: 15.90, image: "https://imgs.search.brave.com/EOOMxeRiuWMxblNq5FQ_KdnWFLt4qAlQSccBYspyLQU/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9odHRw/Mi5tbHN0YXRpYy5j/b20vRF9RX05QXzJY/XzcwNDE1OC1NTEE3/NDc4MDAxODcxN18w/MjIwMjQtVi53ZWJw", offer: false },
    { id: 2, name: "Feijão Carioca", category: "mercearia", price: 8.50, oldPrice: 9.90, image: "https://imgs.search.brave.com/6GcT8VK-mTRz_mgoIqAQpdOmd5CepLIM_z_RzhGEWh4/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9odHRw/Mi5tbHN0YXRpYy5j/b20vRF9OUV9OUF83/NzExMzUtTUxVNzE3/MDUxMjIyMjNfMDky/MDIzLUYuanBn", offer: false },
    { id: 3, name: "Azeite de Oliva", category: "mercearia", price: 29.90, oldPrice: 34.90, image: "https://media.istockphoto.com/id/1206682746/pt/foto/pouring-extra-virgin-olive-oil-in-a-glass-bowl.webp?a=1&b=1&s=612x612&w=0&k=20&c=-XqNh1AvA-I5MF47VVkoPiTjLugps9e3KoomMHUReuw=", offer: true },
    { id: 4, name: "Leite Integral", category: "bebidas", price: 4.20, oldPrice: 4.80, image: "https://images.unsplash.com/photo-1550583724-b2692b85b150?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80", offer: false },
    { id: 5, name: "Café em Grãos", category: "mercearia", price: 18.90, oldPrice: 22.50, image: "https://images.unsplash.com/photo-1511920170033-f8396924c348?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80", offer: true },
    { id: 6, name: "Banana Prata", category: "hortifruti", price: 3.90, oldPrice: 4.50, image: "https://images.unsplash.com/photo-1571771894821-ce9b6c11b08e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=880&q=80", offer: false },
    { id: 7, name: "Maçã Fuji", category: "hortifruti", price: 7.90, oldPrice: 9.20, image: "https://images.unsplash.com/photo-1568702846914-96b305d2aaeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80", offer: false },
    { id: 8, name: "Sabão em Pó", category: "limpeza", price: 15.90, oldPrice: 18.90, image: "https://media.istockphoto.com/id/517747006/pt/foto/detergente-da-roupa-de-lavagem.webp?a=1&b=1&s=612x612&w=0&k=20&c=jb7xsALByjCEbzD2aHcxe-zzpNG8UbIAF13lswKxr00=", offer: true },
    { id: 9, name: "Desinfetante", category: "limpeza", price: 6.50, oldPrice: 7.90, image: "https://media.istockphoto.com/id/2162243254/pt/foto/young-man-cleaning-his-window-sill-at-home.webp?a=1&b=1&s=612x612&w=0&k=20&c=0Q3vK4i_vOIX6oQSgBg736L4TxpU7-0vzjIOds0ju74=", offer: false },
    { id: 10, name: "Água Mineral", category: "bebidas", price: 2.90, oldPrice: 3.50, image: "https://images.unsplash.com/photo-1595994195534-d5219f02f99f?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8JUMzJUExZ3VhJTIwbWluZXJhbHxlbnwwfHwwfHx8MA%3D%3D", offer: false },
    { id: 11, name: "Refrigerante", category: "bebidas", price: 7.50, oldPrice: 8.90, image: "https://images.unsplash.com/photo-1553456558-aff63285bdd1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80", offer: false },
    { id: 12, name: "Pão de Forma", category: "padaria", price: 9.90, oldPrice: 11.50, image: "https://images.unsplash.com/photo-1509440159596-0249088772ff?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1172&q=80", offer: true }
];

// Carrinho de compras
let cart = [];

// Função para exibir produtos
function displayProducts(productsToShow, container) {
    const containerElement = document.querySelector(container);
    containerElement.innerHTML = '';
    
    if (productsToShow.length === 0) {
        containerElement.innerHTML = '<div class="col-12 text-center py-5"><h4>Nenhum produto encontrado</h4><p>Tente ajustar seus filtros de busca</p></div>';
        return;
    }
    
    productsToShow.forEach(product => {
        const productCard = document.createElement('div');
        productCard.className = 'col';
        productCard.innerHTML = `
            <div class="card product-card h-100">
                <div class="product-img-container">
                    <img src="${product.image}" class="card-img-top product-img" alt="${product.name}">
                    ${product.offer ? '<div class="product-badge">OFERTA</div>' : ''}
                </div>
                <div class="card-body">
                    <h5 class="card-title">${product.name}</h5>
                    <p class="card-text">${product.category.charAt(0).toUpperCase() + product.category.slice(1)}</p>
                    <div class="d-flex align-items-center mb-3">
                        <span class="product-price me-2">R$ ${product.price.toFixed(2)}</span>
                        ${product.oldPrice ? `<span class="product-old-price text-muted">R$ ${product.oldPrice.toFixed(2)}</span>` : ''}
                    </div>
                    <button class="btn btn-market w-100 btn-add-to-cart" data-id="${product.id}">
                        <i class="fas fa-cart-plus me-2"></i>Adicionar
                    </button>
                </div>
            </div>
        `;
        containerElement.appendChild(productCard);
    });
    
    // Adiciona event listeners aos botões
    document.querySelectorAll('.btn-add-to-cart').forEach(button => {
        button.addEventListener('click', addToCart);
    });
}

// Função para adicionar ao carrinho
function addToCart(e) {
    const productId = parseInt(e.target.getAttribute('data-id'));
    const product = products.find(p => p.id === productId);
    
    // Verifica se o produto já está no carrinho
    const existingItem = cart.find(item => item.id === productId);
    
    if (existingItem) {
        existingItem.quantity += 1;
    } else {
        cart.push({
            id: product.id,
            name: product.name,
            price: product.price,
            image: product.image,
            quantity: 1
        });
    }
    
    updateCart();
    showToast(`${product.name} adicionado ao carrinho`);
}

// Função para atualizar o carrinho
function updateCart() {
    const cartItemsContainer = document.querySelector('.cart-items-container');
    const cartCount = document.querySelector('.cart-count');
    const cartSubtotal = document.querySelector('.cart-subtotal');
    const cartTotal = document.querySelector('.cart-total');
    const checkoutButton = document.querySelector('.btn-checkout');
    const emptyCartMessage = document.querySelector('.empty-cart-message');
    
    // Atualiza contador
    const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
    cartCount.textContent = totalItems;
    
    if (cart.length === 0) {
        cartItemsContainer.innerHTML = '';
        emptyCartMessage.classList.remove('d-none');
        checkoutButton.disabled = true;
        cartSubtotal.textContent = 'R$ 0,00';
        cartTotal.textContent = 'R$ 0,00';
        return;
    }
    
    emptyCartMessage.classList.add('d-none');
    checkoutButton.disabled = false;
    
    // Limpa o container
    cartItemsContainer.innerHTML = '';
    
    // Adiciona itens
    let subtotal = 0;
    
    cart.forEach(item => {
        const itemTotal = item.price * item.quantity;
        subtotal += itemTotal;
        
        const cartItem = document.createElement('div');
        cartItem.className = 'cart-item';
        cartItem.innerHTML = `
            <div class="row align-items-center">
                <div class="col-3 col-md-2">
                    <img src="${item.image}" class="cart-item-img" alt="${item.name}">
                </div>
                <div class="col-5 col-md-4">
                    <h6>${item.name}</h6>
                    <p class="mb-0">R$ ${item.price.toFixed(2)}</p>
                </div>
                <div class="col-2 col-md-3">
                    <div class="quantity-control">
                        <div class="quantity-btn btn-decrease" data-id="${item.id}">-</div>
                        <input type="text" class="quantity-input" value="${item.quantity}" readonly>
                        <div class="quantity-btn btn-increase" data-id="${item.id}">+</div>
                    </div>
                </div>
                <div class="col-2 col-md-2 text-end">
                    <p class="mb-0 fw-bold">R$ ${itemTotal.toFixed(2)}</p>
                </div>
                <div class="col-12 col-md-1 text-end mt-2 mt-md-0">
                    <button class="btn btn-sm btn-danger btn-remove" data-id="${item.id}">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            </div>
        `;
        cartItemsContainer.appendChild(cartItem);
    });
    
    // Calcula totais
    const delivery = subtotal >= 100 ? 0 : 15;
    const discount = 0; // Poderia implementar cupons de desconto
    const total = subtotal + delivery - discount;
    
    // Atualiza totais
    cartSubtotal.textContent = `R$ ${subtotal.toFixed(2)}`;
    cartTotal.textContent = `R$ ${total.toFixed(2)}`;
    document.querySelector('.cart-delivery').textContent = delivery === 0 ? 'Grátis' : `R$ ${delivery.toFixed(2)}`;
    document.querySelector('.cart-discount').textContent = discount === 0 ? '- R$ 0,00' : `- R$ ${discount.toFixed(2)}`;
    
    // Adiciona event listeners
    document.querySelectorAll('.btn-increase').forEach(btn => {
        btn.addEventListener('click', increaseQuantity);
    });
    
    document.querySelectorAll('.btn-decrease').forEach(btn => {
        btn.addEventListener('click', decreaseQuantity);
    });
    
    document.querySelectorAll('.btn-remove').forEach(btn => {
        btn.addEventListener('click', removeFromCart);
    });
    
    checkoutButton.addEventListener('click', checkout);
}

// Funções para manipular quantidade
function increaseQuantity(e) {
    const productId = parseInt(e.target.getAttribute('data-id'));
    const item = cart.find(item => item.id === productId);
    item.quantity += 1;
    updateCart();
}

function decreaseQuantity(e) {
    const productId = parseInt(e.target.getAttribute('data-id'));
    const item = cart.find(item => item.id === productId);
    
    if (item.quantity > 1) {
        item.quantity -= 1;
        updateCart();
    } else {
        removeFromCart(e);
    }
}

function removeFromCart(e) {
    const productId = parseInt(e.target.getAttribute('data-id'));
    cart = cart.filter(item => item.id !== productId);
    updateCart();
    showToast('Item removido do carrinho');
}

// Função para finalizar compra
function checkout() {
    showLoading();
    
    // Simula um processamento
    setTimeout(() => {
        hideLoading();
        showToast('Compra finalizada com sucesso!', 'success');
        
        // Limpa o carrinho
        cart = [];
        updateCart();
        
        // Redireciona para home
        document.querySelector('.nav-link[href="#home"]').click();
    }, 2000);
}

// Função para mostrar toast
function showToast(message, type = 'success') {
    const toast = document.querySelector('.toast-notification');
    const toastBody = toast.querySelector('.toast-body');
    
    toast.className = `toast-notification toast align-items-center text-white bg-${type} border-0`;
    toastBody.textContent = message;
    
    // Mostra o toast
    toast.classList.remove('d-none');
    
    // Esconde após 3 segundos
    setTimeout(() => {
        toast.classList.add('d-none');
    }, 3000);
}

// Funções para loading
function showLoading() {
    document.querySelector('.loading-spinner').classList.remove('d-none');
}

function hideLoading() {
    document.querySelector('.loading-spinner').classList.add('d-none');
}

// Filtros e ordenação
function filterAndSortProducts() {
    const searchTerm = document.querySelector('.search-input').value.toLowerCase();
    const activeCategories = Array.from(document.querySelectorAll('.form-check-input:checked')).map(cb => cb.value);
    const sortOption = document.querySelector('.dropdown-toggle').getAttribute('data-sort') || 'relevance';
    
    let filteredProducts = products.filter(product => {
        const matchesSearch = product.name.toLowerCase().includes(searchTerm);
        const matchesCategory = activeCategories.includes(product.category);
        return matchesSearch && matchesCategory;
    });
    
    // Ordenação
    switch (sortOption) {
        case 'price-asc':
            filteredProducts.sort((a, b) => a.price - b.price);
            break;
        case 'price-desc':
            filteredProducts.sort((a, b) => b.price - a.price);
            break;
        case 'name-asc':
            filteredProducts.sort((a, b) => a.name.localeCompare(b.name));
            break;
        case 'name-desc':
            filteredProducts.sort((a, b) => b.name.localeCompare(a.name));
            break;
        default:
            // Relevância (mantém ordem original)
            break;
    }
    
    return filteredProducts;
}

// Navegação entre seções
document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', (e) => {
        e.preventDefault();
        
        // Atualiza navbar
        document.querySelectorAll('.nav-link').forEach(navLink => {
            navLink.classList.remove('active');
        });
        link.classList.add('active');
        
        // Esconde todas as seções
        document.querySelectorAll('section').forEach(section => {
            section.classList.remove('active-section');
            section.classList.add('d-none');
        });
        
        // Mostra a seção clicada
        const targetSection = document.querySelector(link.getAttribute('href'));
        targetSection.classList.remove('d-none');
        targetSection.classList.add('active-section');
        
        // Rolagem suave para o topo da seção
        window.scrollTo({
            top: targetSection.offsetTop - 20,
            behavior: 'smooth'
        });
        
        // Carrega conteúdo específico se necessário
        if (link.getAttribute('href') === '#produtos') {
            const filteredProducts = filterAndSortProducts();
            displayProducts(filteredProducts, '.products-container');
        } else if (link.getAttribute('href') === '#ofertas') {
            const offers = products.filter(p => p.offer);
            displayProducts(offers, '.offers-container');
        } else if (link.getAttribute('href') === '#home') {
            const featuredProducts = products.slice(0, 4);
            displayProducts(featuredProducts, '.featured-products');
        }
    });
});

// Event listeners para filtros
document.querySelectorAll('.form-check-input').forEach(checkbox => {
    checkbox.addEventListener('change', () => {
        const filteredProducts = filterAndSortProducts();
        displayProducts(filteredProducts, '.products-container');
    });
});

document.querySelector('.search-input').addEventListener('input', () => {
    const filteredProducts = filterAndSortProducts();
    displayProducts(filteredProducts, '.products-container');
});

document.querySelectorAll('.sort-option').forEach(option => {
    option.addEventListener('click', (e) => {
        e.preventDefault();
        const sortOption = e.target.getAttribute('data-sort');
        const dropdownToggle = document.querySelector('#sortDropdown');
        
        dropdownToggle.textContent = `Ordenar por: ${e.target.textContent}`;
        dropdownToggle.setAttribute('data-sort', sortOption);
        
        const filteredProducts = filterAndSortProducts();
        displayProducts(filteredProducts, '.products-container');
    });
});

// Inicialização
document.addEventListener('DOMContentLoaded', () => {
    // Carrega produtos em destaque na home
    const featuredProducts = products.slice(0, 4);
    displayProducts(featuredProducts, '.featured-products');
    
    // Carrega todos os produtos na página de produtos
    displayProducts(products, '.products-container');
    
    // Carrega ofertas
    const offers = products.filter(p => p.offer);
    displayProducts(offers, '.offers-container');
    
    // Atualiza carrinho
    updateCart();
});