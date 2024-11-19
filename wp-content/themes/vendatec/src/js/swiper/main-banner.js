const swiperElement = document.querySelector(".main-banner .swiper-container");
const swiperWrapper = swiperElement.querySelector(".swiper-wrapper");

const swiperSlides = swiperElement.querySelectorAll(".swiper-slide");
swiperSlides.forEach((slide,_) => {
  const clonedSlide = slide.cloneNode(true);
  swiperWrapper.appendChild(clonedSlide);
});

const swiper = new Swiper(swiperElement, {
  slidesPerView: 1,
  spaceBetween: 0,
  autoplay: {
    delay: 7000,
  },
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev"
  },
});

const swiperElementPartner = document.querySelector(".feature-partner-home .swiper-container");
const swiperPartner = new Swiper(swiperElementPartner, {
  slidesPerView: 'auto',
  spaceBetween: 20,    
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev"
  },
  breakpoints: {
    640: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1280: {
      slidesPerView: 2.5,
    },
  },
});

// Função para ajustar a altura de todos os slides ao maior elemento
function equalizeHeights() {
  const slides = document.querySelectorAll(".feature-partner-home .swiper-slide .content");
  
  // Encontra a altura máxima
  let maxHeight = 0;
  slides.forEach(slide => {
    const height = slide.offsetHeight;
    if (height > maxHeight) maxHeight = height;
  });

  // Define a altura máxima em todos os slides
  slides.forEach(slide => {
    slide.style.height = `${maxHeight}px`;
  });
}

// Chama a função após o carregamento do swiper e quando a janela é redimensionada
window.addEventListener("load", equalizeHeights);
window.addEventListener("resize", equalizeHeights);