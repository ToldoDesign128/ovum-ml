
//Hamburger menu
jQuery("#hamburgerButton").click(function () {
    jQuery("#hamburgerButton").toggleClass("is-active");
    jQuery("#menu").toggleClass("hidden");
    jQuery("#menu").toggleClass("open");
  });