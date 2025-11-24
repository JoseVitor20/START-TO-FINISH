// Menu Mobile
const navToggle = document.getElementById('navToggle');
const navMenu = document.getElementById('navMenu');

navToggle.addEventListener('click', () => {
    navMenu.classList.toggle('active');
    navToggle.innerHTML = navMenu.classList.contains('active') ? 
        '<i class="fas fa-times"></i>' : '<i class="fas fa-bars"></i>';
});

// Fechar menu ao clicar em um link
const navLinks = document.querySelectorAll('.nav-link');
navLinks.forEach(link => {
    link.addEventListener('click', () => {
        navMenu.classList.remove('active');
        navToggle.innerHTML = '<i class="fas fa-bars"></i>';
    });
});

// Header scroll effect
window.addEventListener('scroll', () => {
    const header = document.getElementById('header');
    header.classList.toggle('scrolled', window.scrollY > 50);
});

// Testimonials slider
const testimonialItems = document.querySelectorAll('.testimonial-item');
const sliderDots = document.querySelectorAll('.slider-dot');

sliderDots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
        // Remove active class from all items and dots
        testimonialItems.forEach(item => item.classList.remove('active'));
        sliderDots.forEach(d => d.classList.remove('active'));
        
        // Add active class to clicked dot and corresponding item
        dot.classList.add('active');
        testimonialItems[index].classList.add('active');
    });
});

// Auto slider
let currentSlide = 0;
function autoSlide() {
    testimonialItems.forEach(item => item.classList.remove('active'));
    sliderDots.forEach(d => d.classList.remove('active'));
    
    currentSlide = (currentSlide + 1) % testimonialItems.length;
    
    testimonialItems[currentSlide].classList.add('active');
    sliderDots[currentSlide].classList.add('active');
}

setInterval(autoSlide, 5000);

// Form submission
const appointmentForm = document.getElementById('appointmentForm');
appointmentForm.addEventListener('submit', (e) => {
    e.preventDefault();
    alert('Agendamento enviado com sucesso! Entraremos em contato para confirmação.');
    appointmentForm.reset();
});