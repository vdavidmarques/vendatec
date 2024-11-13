document.addEventListener('DOMContentLoaded', function() {
    const loadMoreButtons = document.querySelectorAll('.load-more');

    loadMoreButtons.forEach(button => {
        button.addEventListener('click', function() {
            const partnerId = button.getAttribute('data-partner-id');
            const partnerContainer = document.querySelector(`.highlighted-partners--item[data-partner-id="${partnerId}"]`);
            const hiddenItems = partnerContainer.querySelectorAll('.products-for-partner-items--item[style*="display:none"]');

            // Mostra até 3 itens escondidos
            for (let i = 0; i < 3 && i < hiddenItems.length; i++) {
                hiddenItems[i].style.display = '';
            }

            // Se restam menos de 3 itens escondidos, esconda o botão "load more"
            if (hiddenItems.length <= 3) {
                button.style.display = 'none';
            }
        });
    });
});
