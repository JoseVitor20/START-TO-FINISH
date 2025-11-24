export function initServicoHover() {
    // Função para alternar a descrição (versão otimizada)
    document.querySelectorAll('.toggle-description').forEach(button => {
        button.addEventListener('click', function() {
            const card = this.closest('.pricing-card');
            const description = card.querySelector('.card-description');
            const icon = this.querySelector('i');
            const span = this.querySelector('span');
            
            description.classList.toggle('expanded');
            
            if (description.classList.contains('expanded')) {
                span.textContent = 'Ver menos';
                icon.classList.replace('fa-chevron-down', 'fa-chevron-up');
            } else {
                span.textContent = 'Ver mais';
                icon.classList.replace('fa-chevron-up', 'fa-chevron-down');
            }
        });
    });
    
    // Função para alternar a lista de benefícios (versão otimizada)
    document.querySelectorAll('.toggle-benefits').forEach(button => {
        button.addEventListener('click', function() {
            const card = this.closest('.pricing-card');
            const benefitsList = card.querySelector('.benefits-list');
            const icon = this.querySelector('i');
            
            benefitsList.classList.toggle('expanded');
            icon.classList.toggle('fa-chevron-up');
            icon.classList.toggle('fa-chevron-down');
        });
    });
    
    // Controle do modal (versão completa e corrigida)
    const modal = document.getElementById("contractModal");
    if (modal) {
        const modalPlanIdInput = document.getElementById("modalPlanId");
        const acceptCheckbox = document.getElementById("acceptCheckbox");
        const acceptBtn = document.getElementById("acceptBtn");
        const denyBtn = document.getElementById("denyBtn");
        const closeModal = document.querySelector(".close-modal");

        // Abrir modal
        document.querySelectorAll('.btn-trigger-modal').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const planId = this.getAttribute('data-plan');
                if (modalPlanIdInput) modalPlanIdInput.value = planId;
                modal.classList.add('active');
                document.body.style.overflow = 'hidden'; // Bloqueia scroll
            });
        });

        // Fechar modal
        if (closeModal) {
            closeModal.addEventListener('click', () => {
                modal.classList.remove('active');
                document.body.style.overflow = ''; // Restaura scroll
            });
        }

        // Fechar ao clicar fora
        modal.addEventListener('click', (event) => {
            if (event.target === modal) {
                modal.classList.remove('active');
                document.body.style.overflow = ''; // Restaura scroll
            }
        });

        // Controle do checkbox
        if (acceptCheckbox && acceptBtn && denyBtn) {
            acceptCheckbox.addEventListener('change', function() {
                acceptBtn.disabled = !this.checked;
                denyBtn.disabled = this.checked;
                
                // Atualiza o valor do campo hidden
                document.getElementById('acceptedInput').value = this.checked ? '1' : '0';
            });
        }

        // Configuração inicial dos botões
        if (denyBtn) {
            denyBtn.addEventListener('click', function() {
                document.getElementById('acceptedInput').value = '0';
            });
        }
    }
}