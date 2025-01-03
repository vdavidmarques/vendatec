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

window.addEventListener("load", equalizeHeights);
window.addEventListener("resize", equalizeHeights);