const swiper = new Swiper(".swiper-container", {
  slidesPerView: 1,
  loop: true,
  autoplay: {
    delay: 1000,
    disableOnInteraction: false,
  },
  speed: 1000, // Duration of transition between slides (in ms)
  effect: "fade", // Change effect to fade
});
