$(window).scroll(function() {
    if ($(document).scrollTop() > 50) {
        $('.kaznav').addClass('shrink');
    } else {
        $('.kaznav').removeClass('shrink');
    }
});


function myFunction(x) {
    if (x.matches) { // If media query matches
        $('.kaznav').removeClass('sticky-top');
    } else {
        $('.kaznav').addClass('sticky-top');
    }
}

var x = window.matchMedia("(max-width: 768px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes
