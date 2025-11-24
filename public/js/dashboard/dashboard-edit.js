export default function editProfileDash() {
    // Toggle password visibility
    document.querySelectorAll('.toggle-password').forEach(button => {
        button.addEventListener('click', function() {
            const input = this.parentElement.querySelector('input');
            const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
            input.setAttribute('type', type);
            
            // Change icon
            const icon = this.querySelector('svg');
            if (type === 'text') {
                icon.innerHTML = '<path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24M1 1l22 22" stroke="var(--text-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>';
            } else {
                icon.innerHTML = '<path d="M1 12C1 12 5 4 12 4C19 4 23 12 23 12C23 12 19 20 12 20C5 20 1 12 1 12Z" stroke="var(--text-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="var(--text-sec-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>';
            }
        });
    });

    // Delete account confirmation
    const deleteBtn = document.getElementById('delete-account-btn');
    if (deleteBtn) {
        deleteBtn.addEventListener('click', function(e) {
            e.preventDefault();
            
            const modal = document.createElement('div');
            modal.className = 'modal-overlay active';
            modal.innerHTML = `
                <div class="modal-content">
                    <h3 class="modal-title">Confirmar Exclusão</h3>
                    <p class="modal-message">Tem certeza que deseja excluir sua conta permanentemente? Todos os seus dados serão removidos e esta ação não pode ser desfeita.</p>
                    <div class="modal-actions">
                        <button class="modal-cancel">Cancelar</button>
                        <button class="modal-confirm">Confirmar Exclusão</button>
                    </div>
                </div>
            `;
            
            document.body.appendChild(modal);
            
            modal.querySelector('.modal-cancel').addEventListener('click', function() {
                modal.classList.remove('active');
                setTimeout(() => {
                    modal.remove();
                }, 300);
            });
            
            modal.querySelector('.modal-confirm').addEventListener('click', function() {
                modal.querySelector('.modal-actions').innerHTML = '<p>Excluindo conta...</p>';
                document.querySelector('.delete-form').submit();
            });
        });
    } 
}