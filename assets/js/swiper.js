const swiper = new Swiper('.swiper', {
  // Optional parameters
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  }
});
// Mobile Sroller
const swiperScroller = new Swiper('.swiperScroller', {
  // Optional parameters
  loop: false,

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  }
});
// Mobile Sroller Single
const swiperScrollerSingle = new Swiper('.swiperScrollerSingle', {
  // Optional parameters
  loop: false,

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  }
});
// Mobile Sroller Sponsor
const swiperScrollerSponsor = new Swiper('.swiperScrollerSponsor', {
  // Optional parameters
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  }
});
// Testimonial
const swiperTestimonial = new Swiper('.swiperTestimonial', {
  // Optional parameters
  loop: false,

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  }
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
  spaceBetween: 10,

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  }
});
// Single Repeater
const swiperRepeater = new Swiper('.swiperRepeater', {
  // Optional parameters
  loop: false,
  slidesPerView: 3,

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  }
});