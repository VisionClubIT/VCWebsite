$(document).ready(function () {
    var logoSlider = $('.logo-slider');
    var logos = $('.logo');

    setInterval(function () {
        var currentLogo = logos.filter(':visible');
        var nextLogo = currentLogo.next().length ? currentLogo.next() : logos.first();
        currentLogo.fadeOut(1000);
        nextLogo.fadeIn(1000);
    }, 3000); // Change logo every 3 seconds
});
