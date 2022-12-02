jQuery(window).on('load', function () {
    jQuery( ".site_preloader" ).animate({
        opacity: "0"
    }, {
        duration: +sp_params.timeout,
        easing : 'linear',
        done: function() {
            jQuery( ".site_preloader" ).hide();
        }
    });
});