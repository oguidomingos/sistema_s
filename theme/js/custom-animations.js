document.addEventListener('DOMContentLoaded', function () {
    const diagnosticoModal = document.getElementById('diagnostico-modal');
    const openModalButtons = document.querySelectorAll('.open-diagnostico-modal');

    function openDiagnosticoModal() {
        if (diagnosticoModal) {
            diagnosticoModal.classList.remove('hidden');
            setTimeout(() => {
                diagnosticoModal.classList.remove('opacity-0');
                diagnosticoModal.querySelector('.glass-card-lg').classList.remove('-translate-y-4', 'opacity-0');
            }, 10); // Pequeno atraso para permitir a transição
        }
    }

    window.closeDiagnosticoModal = function() {
        if (diagnosticoModal) {
            diagnosticoModal.classList.add('opacity-0');
            diagnosticoModal.querySelector('.glass-card-lg').classList.add('-translate-y-4', 'opacity-0');
            setTimeout(() => {
                diagnosticoModal.classList.add('hidden');
            }, 300); // Tempo da transição CSS
        }
    }

    openModalButtons.forEach(button => {
        button.addEventListener('click', openDiagnosticoModal);
    });

    // Fechar modal ao clicar fora
    if (diagnosticoModal) {
        diagnosticoModal.addEventListener('click', (e) => {
            if (e.target === diagnosticoModal) {
                closeDiagnosticoModal();
            }
        });
    }
});