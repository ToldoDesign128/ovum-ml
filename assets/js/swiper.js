// Mobile Sroller
const swiperScroller = new Swiper('.swiperScroller', {

  loop: false,

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  }
});
// Mobile Sroller Pagina Chi siamo
const swiperScroller2 = new Swiper('.swiperScroller2', {

  loop: false,

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  }
});
// Mobile Sroller Single
const swiperScrollerSingle = new Swiper('.swiperScrollerSingle', {
  slidesPerView: "auto",
  spaceBetween: 20,

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  }
});
// Mobile Sroller Sponsor
const swiperScrollerSponsor = new Swiper('.swiperScrollerSponsor', {

  loop: true,

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
  // Optional parameters
  slidesPerView: "auto",
  spaceBetween: 20,

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  }
});
// Single Releated Post
const swiperReleatedPost = new Swiper('.swiperReleatedPost', {
  // Optional parameters
  slidesPerView: "auto",
  spaceBetween: 20,

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  }
});

// Single Home Mele
const swiperHomeMele = new Swiper('.swiperHomeMele', {
  slidesPerView: "auto",
  spaceBetween: 20,

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  }
});