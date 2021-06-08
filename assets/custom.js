jQuery(function () {
    // carusels //
    $('.owl-carousel').owlCarousel({
        'items': 1,
        'autoHeight': true,
        nav: true,
        dots: false,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        autoplay: true,
        autoplayHoverPause: true,
        autoplayTimeout: 5000,
        autoplaySpeed:  800,
    });
});