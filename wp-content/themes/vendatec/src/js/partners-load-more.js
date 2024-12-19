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

const productLinks = document.querySelectorAll('.products-for-partner-items--item--link');

document.body.insertAdjacentHTML(
    'beforeend',
    `<div id="product-modal" class="modal">
        <div class="modal-content">
            <button id="modal-close">&times;</button>
            <div id="modal-image" style="margin-bottom: 10px;"></div>
            <div class="content">
                <div id="modal-title"></div>
                <div id="modal-description" style="margin-bottom: 10px;"></div>
            </div>
            <div id="modal-link" style="margin-top: 10px; text-align: center;"></div>
        </div>
    </div>`
);

const modal = document.getElementById('product-modal');
const modalTitle = document.getElementById('modal-title');
const modalImage = document.getElementById('modal-image');
const modalDescription = document.getElementById('modal-description');
const modalLink = document.getElementById('modal-link');
const modalClose = document.getElementById('modal-close');

function openModal(title, imageUrl, description, fileUrl) {
    modalTitle.textContent = title;
    modalImage.innerHTML = '';
    if (imageUrl) {
        const img = document.createElement('img');
        img.src = imageUrl;
        img.alt = title;
        img.style.maxWidth = '100%';
        img.style.height = '350px';
        modalImage.appendChild(img);
    } else {
        modalImage.textContent = 'Imagem não disponível';
    }

    modalDescription.textContent = description || 'Sem descrição';

    if (fileUrl) {
        modalLink.innerHTML = `<a href="${fileUrl}" target="_blank" style="overflow:hidden;" class="link-button">Baixar material</a>`;
    } else {
        modalLink.textContent = 'Link não disponível';
    }

    modal.style.display = 'block';
}

productLinks.forEach((link) => {
    link.addEventListener('click', (event) => {
        event.preventDefault();

        const productItem = link.closest('.products-for-partner-items--item');
        const title = productItem.querySelector('.title h3')?.textContent.trim();
        const descriptionElement = productItem.querySelector('.desc');
        const description = descriptionElement?.textContent.trim();
        const image = productItem.querySelector('img')?.getAttribute('src');
        const fileUrl = productItem.querySelector('.link-button')?.getAttribute('href');

        if (descriptionElement) {
            descriptionElement.style.display = 'none';
        }

        openModal(title, image, description, fileUrl);
    });
});

modalClose.addEventListener('click', () => {
    modal.style.display = 'none';
});

modal.addEventListener('click', (event) => {
    if (event.target === modal) {
        modal.style.display = 'none';
    }
});


