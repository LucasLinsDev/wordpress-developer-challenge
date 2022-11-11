var swiper = new Swiper(".swiper-container", {
  slidesPerView: "auto",
  spaceBetween: 20,
  grabCursor: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    type: "progressbar",
  },
  navigation: {
    nextEl: ".button-next",
    prevEl: ".button-prev",
  },
});
