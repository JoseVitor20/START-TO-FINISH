// Navbar scroll effect
window.addEventListener('scroll', function() {
    if (window.scrollY > 100) {
        document.querySelector('.navbar').classList.add('scrolled');
    } else {
        document.querySelector('.navbar').classList.remove('scrolled');
    }

    // Back to top button
    if (window.scrollY > 300) {
        document.querySelector('.back-to-top').classList.add('active');
    } else {
        document.querySelector('.back-to-top').classList.remove('active');
    }
});

// Back to top button
document.querySelector('.back-to-top').addEventListener('click', function(e) {
    e.preventDefault();
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

// Smooth scrolling for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        
        const targetId = this.getAttribute('href');
        if (targetId === '#') return;
        
        const targetElement = document.querySelector(targetId);
        if (targetElement) {
            window.scrollTo({
                top: targetElement.offsetTop - 70,
                behavior: 'smooth'
            });
            
            // Close mobile menu if open
            if (document.querySelector('.navbar-collapse').classList.contains('show')) {
                document.querySelector('.navbar-toggler').click();
            }
        }
    });
});

// Menu data
const menuItems = {
    entradas: [
        {
            name: 'Pão francês',
            price: 'R$ 1,10 por unidade',
            ingredients: 'farinha de trigo, água, fermento biológico e sal.',
            image: 'https://media.istockphoto.com/id/1372632835/pt/foto/mexican-french-bread.webp?a=1&b=1&s=612x612&w=0&k=20&c=R4eIL91Fcyxld555cM_WWoHPpoEzRvmlLZTTsP8qRzs='
        },
        {
            name: 'Pão Integral',
            price: 'R$ 2,70 por unidade',
            ingredients: 'farinha integral, farinha de trigo, água, fermento, sal e açúcar ou mel.',
            image: 'https://media.istockphoto.com/id/474679296/pt/foto/caseiras-org%C3%A2nico-de-p%C3%A3o-de-trigo-integral.webp?a=1&b=1&s=612x612&w=0&k=20&c=hzN7Fosz7XimxN0e2Zaqm_uUmIPWjHwBqtDeKEYjQik='
        },
        {
            name: 'Baguete',
            price: 'R$ 8,00 por unidade',
            ingredients: 'farinha de trigo, água ou leite, fermento, manteiga, açúcar e sal.',
            image: 'https://images.unsplash.com/photo-1568471173242-461f0a730452?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8QmFndWV0ZXxlbnwwfHwwfHx8MA%3D%3D'
        },
        {
            name: 'Ciabatta',
            price: 'R$ 6,00 por unidade',
            ingredients: 'farinha de trigo, água, fermento, azeite e sal',
            image: 'https://media.istockphoto.com/id/1440131516/pt/foto/freshly-baked-ciabatta-bread.webp?a=1&b=1&s=612x612&w=0&k=20&c=-pt2CBFGyQaC-8D7Qyf6GUV4y3CEPKYfpgxKkju1h_g='
        }
    ],
    principais: [
        {
            name: 'Croissant',
            price: 'R$ 9,00 por unidade',
            ingredients: 'farinha de trigo, manteiga, leite, fermento, açúcar e sal',
            image: 'https://media.istockphoto.com/id/1494437052/pt/foto/croissant-and-chocolate-bread-on-wooden-board.webp?a=1&b=1&s=612x612&w=0&k=20&c=-ckj4m5YvWS-I-BudThT6xT0qKPlt7Sq06GqeIcso40='
        },
        {
            name: 'Pain au Chocolat',
            price: 'R$ 7,00 por unidade',
            ingredients: 'massa de croissant e chocolate meio amargo',
            image: 'https://media.istockphoto.com/id/180824921/pt/foto/croissants-frescos-em-uma-placa-de-chocolate.webp?a=1&b=1&s=612x612&w=0&k=20&c=EL0HPneT-ds0UUyNHYdWvd3oGpP4kiMxUKhd_ed3XVc='
        },
        {
            name: 'Pão de Queijo',
            price: 'R$ 1,50 por unidade',
            ingredients: 'polvilho, queijo, leite, ovos e óleo',
            image: 'https://media.istockphoto.com/id/1917710961/pt/foto/brazilian-cheese-breads.webp?a=1&b=1&s=612x612&w=0&k=20&c=lAXcqzvIfnMRbYfyrLdet9G69MG5aQK0AaAzV_AYy3E='
        },
        {
            name: 'Pão Doce (rosquinha, com creme, coco)',
            price: 'R$ 3,00 por unidade',
            ingredients: 'farinha, leite, fermento, açúcar, ovos, manteiga e recheios',
            image: 'https://media.istockphoto.com/id/1233069742/pt/foto/mini-hot-dog-with-tomato-sauce-and-sausages-typical-food-for-childrens-birthday-party.webp?a=1&b=1&s=612x612&w=0&k=20&c=PHTisCxXyI7KLdObXMmqadTrDf_nNmvRkbswZg0ZOF8='
        }
    ],
    sobremesas: [
        {
            name: 'Bolo Simples (fubá, cenoura, chocolate)',
            price: 'R$ 15,00 por fatia',
            ingredients: 'farinha, açúcar, ovos, óleo, fermento e leite',
            image: 'https://media.istockphoto.com/id/1386132068/pt/foto/still-life-with-homemade-sponge-cake.webp?a=1&b=1&s=612x612&w=0&k=20&c=UJ6U9G_76gsm3LyBtHp7sQgLS2KP0e2tZ9gDKAml4Ic='
        },
        {
            name: 'Torta Doce (morango, limão, etc.)',
            price: 'R$ 157,00 inteira',
            ingredients: 'massa podre ou biscoito, creme e frutas',
            image: 'https://media.istockphoto.com/id/1366689178/pt/foto/pineapple-pie-with-coconut-on-wooden-background.webp?a=1&b=1&s=612x612&w=0&k=20&c=iMyDgH0Yy8oUOsRPaczguWFhVlrThUGnv_cf-Mb6s_k='
        },
        {
            name: 'Sonho',
            price: 'R$ 5,00 por unidade',
            ingredients: 'farinha, ovos, leite, fermento, açúcar e recheio (creme ou doce de leite)',
            image: 'https://media.istockphoto.com/id/1480064053/pt/foto/sonho-the-brazilian-donut.webp?a=1&b=1&s=612x612&w=0&k=20&c=UvJTyYJ9d8dVr9Q9ToPxHvNv_HnDyZqQJFpTGRyj2Sg='
        },
        {
            name: 'Esfiha Doce (com recheios doces)',
            price: 'R$ 6,00 por unidade',
            ingredients: 'massa de esfiha, recheios e doces variados',
            image: 'https://media.istockphoto.com/id/2190386347/pt/foto/serving-plate-of-pizza-coklat-keju-or-chocolate-cheese-pizza-dessert-food-menu.webp?a=1&b=1&s=612x612&w=0&k=20&c=6fN_QsRJzetKprrKxuZRp9RC-y_MLQldq_069OYu6Fk='
        }
    ],
    bebidas: [
        {
            name: 'Esfiha (carne, queijo, frango)',
            price: 'R$ 6,00 por unidade',
            ingredients: 'farinha, fermento, óleo, água e recheios salgados',
            image: 'https://media.istockphoto.com/id/1702545434/pt/foto/esfiha.webp?a=1&b=1&s=612x612&w=0&k=20&c=BzE9E6_lR1txccQOm3JSwG6BCoLBBt7Ehg41S9joXSY='
        },
        {
            name: 'Coxinha',
            price: 'R$ 10,00 por unidade',
            ingredients: 'massa (farinha, leite, caldo), recheio de frango, empanada e frita',
            image: 'https://media.istockphoto.com/id/1424050516/pt/foto/coxinha-de-frango-3.webp?a=1&b=1&s=612x612&w=0&k=20&c=eawULBt6taEAmpIspcXGDi9uAaRhQam1ov_WxFXSuNQ='
        },
        {
            name: 'Empada',
            price: 'R$ 8,00 por unidade',
            ingredients: 'farinha, manteiga, ovos, recheios (frango, palmito, camarão)',
            image: 'https://media.istockphoto.com/id/1326788748/pt/foto/typical-brazilian-cuisine-appetizer-called-empada-de-camar%C3%A3o.webp?a=1&b=1&s=612x612&w=0&k=20&c=TLcdQUQqdvuwARDjDDdxxNjqSbAkPomRIK4x-NFKKBg='
        },
        {
            name: 'Pizza de Padaria',
            price: 'R$ 12,00 por fatia',
            ingredients: 'massa de pão, molho de tomate, queijo, tomate, orégano',
            image: 'https://images.unsplash.com/photo-1612948928338-53dd61a5ad5d?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDh8fFBpenphJTIwZGUlMjBQYWRhcmlhfGVufDB8fDB8fHww'
        }
    ]
};

// Load menu items
function loadMenuItems(category) {
    const container = document.querySelector(`#${category} .row`);
    container.innerHTML = '';
    
    menuItems[category].forEach(item => {
        const col = document.createElement('div');
        col.className = 'col-md-6';
        col.innerHTML = `
            <div class="menu-item h-100">
                <div class="menu-item-img">
                    <img src="${item.image}" alt="${item.name}" class="img-fluid">
                </div>
                <div class="menu-item-content">
                    <div class="d-flex justify-content-between mb-3">
                        <h5 class="menu-item-title mb-0">${item.name}</h5>
                        <span class="menu-item-price">${item.price}</span>
                    </div>
                    <p class="menu-item-ingredients mb-0">${item.ingredients}</p>
                </div>
            </div>
        `;
        container.appendChild(col);
    });
}

// Initialize menu
document.querySelectorAll('#menu-tab .nav-link').forEach(tab => {
    tab.addEventListener('shown.bs.tab', function(e) {
        const target = e.target.getAttribute('data-bs-target').replace('#', '');
        loadMenuItems(target);
    });
});

// Load first tab content
loadMenuItems('entradas');

// Gallery modal
const galleryModal = document.getElementById('galleryModal');
if (galleryModal) {
    galleryModal.addEventListener('show.bs.modal', function(e) {
        const trigger = e.relatedTarget;
        const imgSrc = trigger.getAttribute('data-img');
        document.getElementById('galleryModalImg').setAttribute('src', imgSrc);
    });
}

// Form submissions
document.getElementById('contactForm')?.addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Mensagem enviada com sucesso! Entraremos em contato em breve.');
    this.reset();
});

document.getElementById('reservationForm')?.addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Pedido confirmado! Aguardamos sua visita.');
    this.reset();
    bootstrap.Modal.getInstance(document.getElementById('reservationModal')).hide();
});

// Initialize testimonials carousel
new bootstrap.Carousel(document.getElementById('testimonialsCarousel'), {
    interval: 5000,
    pause: 'hover'
});