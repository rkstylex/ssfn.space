/* THEME SWICHER */

document.getElementById('switchTheme').addEventListener('click', function() {
    let htmlClasses = document.querySelector('html').classList;
    if(localStorage.theme == 'dark') {
        htmlClasses.remove('dark');
        localStorage.removeItem('theme')
    } else {
        htmlClasses.add('dark');
        localStorage.theme = 'dark';
    }
});

if (localStorage.theme === 'dark' || (!'theme' in localStorage && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    document.querySelector('html').classList.add('dark')
} else if (localStorage.theme === 'dark') {
    document.querySelector('html').classList.add('dark')
}

/* END THEME SWICHER */

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