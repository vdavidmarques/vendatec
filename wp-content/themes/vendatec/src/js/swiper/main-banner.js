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
//   autoplay: {
//     delay: 7000,
//   },
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev"
  },
});