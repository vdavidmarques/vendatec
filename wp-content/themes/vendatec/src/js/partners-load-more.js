document.addEventListener('DOMContentLoaded', function() {
    const loadMoreButtons = document.querySelectorAll('.load-more');

    loadMoreButtons.forEach(button => {
        button.addEventListener('click', function() {
            const partnerId = button.getAttribute('data-partner-id');
            const partnerContainer = document.querySelector(`.highlighted-partners--item[data-partner-id="${partnerId}"]`);
            const hiddenItems = partnerContainer.querySelectorAll('.products-for-partner-items--item[style*="display:none"]');

        
            for (let i = 0; i < 4 && i < hiddenItems.length; i++) {
                hiddenItems[i].style.display = '';
            }

        
            if (hiddenItems.length <= 4) {
                button.style.display = 'none';
            }
        });
    });
});