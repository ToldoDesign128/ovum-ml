// Arrow slider animation
jQuery('.swiper-button-prev').hover(function () {
  var arrowAnimation = jQuery(this).closest('.arrow-container').find('#arrowAnimation');
  arrowAnimation.toggleClass('prev-animation').toggleClass('left-[41px]');
});

jQuery(document).ready(function() {

  ScrollReveal().reveal('.animationReveal', { distance: '100px', duration: 600, easing: 'cubic-bezier(.215, .61, .355, 1)', interval: 200});

})