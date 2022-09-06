jQuery(document).ready(function () {
    if(localStorage.getItem('cookieConsent') !== '1'){
        jQuery("#cookie-popup").delay(10).fadeIn(1000);
        localStorage.setItem('cookieConsent','1');
    }

    jQuery('#close-popup').click(function() {
        jQuery('#cookie-popup').fadeOut(1000);
    });
});