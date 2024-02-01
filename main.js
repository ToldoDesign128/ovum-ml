
//Hamburger menu
jQuery("#hamburgerButton").click(function () {
    jQuery("#hamburgerButton").toggleClass("is-active");
    jQuery("#menu").toggleClass("hidden");
    jQuery("#menu").toggleClass("open");
  });
var btn = jQuery('#ScrollTopBtn');

btn.on('click', function(e) {
  e.preventDefault();
  jQuery('html, body').animate({scrollTop:0}, '300');
});
var scroll_offset = 300;

jQuery(window).scroll(function () {
    var selettore = jQuery(window);
    if (jQuery('#infoBtn').length) {
        if (selettore.scrollTop() > scroll_offset) {
            jQuery('#infoBtn').addClass('revealed');
        } else {
            jQuery('#infoBtn').removeClass('revealed');
        }
    }
});
// Attivo il primo box
function activeAccordion() {
    jQuery('.accordion-item:first-child').addClass('accordion-active');
};
// Attivo la prima immagine
function activeAccordionImage() {
    jQuery('.image-box-item:first-child').addClass('image-active');
};
// Attivo i box al click
jQuery(".accordion-item").click(function accordionToggle() {
    jQuery(".accordion-item").removeClass('accordion-active');
    jQuery(this).addClass('accordion-active');
});

let accordionBtnUno = jQuery('.accordion-item:first-child');
let accordionBtnDue = jQuery('.accordion-item:nth-child(even)');
let accordionBtnTre = jQuery('.accordion-item:last-child');

let accordionImgUno = jQuery('.image-box-item:first-child');
let accordionImgDue = jQuery('.image-box-item:nth-child(even)');
let accordionImgTre = jQuery('.image-box-item:last-child');

// Attivo le immagini al click per il primo
accordionBtnUno.click(function imageUnoToggle() {
    jQuery(".image-box-item").removeClass('image-active');
    accordionImgUno.addClass('image-active');
});

// Attivo le immagini al click per il secondo
accordionBtnDue.click(function imageDueToggle() {
    jQuery(".image-box-item").removeClass('image-active');
    accordionImgDue.addClass('image-active');
});

// Attivo le immagini al click per il terzo
accordionBtnTre.click(function imageTreToggle() {
    jQuery(".image-box-item").removeClass('image-active');
    accordionImgTre.addClass('image-active');
});

// Avvio le funzioni a documento caricato
jQuery(document).ready(function () {
    activeAccordion();
    activeAccordionImage();
    accordionToggle();
    imageUnoToggle();
    imageDueToggle();
    imageTreToggle();
});

const swiper = new Swiper('.swiper', {
    // Optional parameters
    loop: true,
    
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    }
  });