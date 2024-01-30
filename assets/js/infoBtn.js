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