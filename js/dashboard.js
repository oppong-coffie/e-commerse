  var swiper = new Swiper(".swiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    speed: 400,
    preventClicks: true,
    freeMode: false,
    navigation: {
      nextEl: ".next",
      prevEl: ".prev", // Corrected from 'pre' to 'prev'
    },
    breakpoints: {
      550: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      950: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      1200: {
        slidesPerView: 4,
        spaceBetween: 30,
      },
    },
  });
