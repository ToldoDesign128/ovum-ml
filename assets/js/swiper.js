// Mobile Sroller
const swiperScroller = new Swiper('.swiperScroller', {

  slidesPerView: 1,
  spaceBetween: 20,

  breakpoints: {
    768: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
  },

  loop: false,

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  }
});
// Mobile Sroller Pagina Chi siamo
const swiperScroller2 = new Swiper('.swiperScroller2', {
  slidesPerView: 1,
  spaceBetween: 20,

  breakpoints: {
    768: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
  },

  loop: false,

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  }
});
// Mobile Sroller Single
const swiperScrollerSingle = new Swiper('.swiperScrollerSingle', {
  slidesPerView: 1,
  spaceBetween: 20,

  breakpoints: {
    768: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
  },

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  }
});
// Mobile Sroller Sponsor
const swiperScrollerSponsor = new Swiper('.swiperScrollerSponsor', {

  slidesPerView: 1,
  spaceBetween: 20,

  breakpoints: {
    768: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
  },

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  }
});
// Testimonial

const swiperTestimonial = new Swiper(".swiperTestimonial", {

  loop: true,

  grabCursor: true,

  touchEventsTarget: "container",

  effect: "fade",

  fadeEffect: {

    crossFade: true,

  },

  navigation: {

    nextEl: ".swiper-button-next",

    prevEl: ".swiper-button-prev",

  },

});
// Single Gallery
const swiperGallery = new Swiper('.swiperGallery', {
  // Optional parameters
  loop: false,

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  }
});
// Single Gallery Video
const swiperGallery2 = new Swiper('.swiperGallery2', {
  // Optional parameters
  slidesPerView: "auto",
  spaceBetween: 30,

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  }
});
// Single Repeater
const swiperRepeater = new Swiper('.swiperRepeater', {
  slidesPerView: 1,
  spaceBetween: 20,

  breakpoints: {
    768: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    1280: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  }
});
// Single Releated Post
const swiperReleatedPost = new Swiper('.swiperReleatedPost', {
  slidesPerView: 1,
  spaceBetween: 20,

  breakpoints: {
    768: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    1280: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  }
});

// Single Home Mele
const swiperHomeMele = new Swiper('.swiperHomeMele', {
  slidesPerView: 1,
  spaceBetween: 20,

  breakpoints: {
    768: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    1280: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  }
});