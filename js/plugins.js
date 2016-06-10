//load in jQuery plugin dependencies (eg. flexslider, smoothScroll etc.) in this file

//smoothscroll

$('a').click(function(){
    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 500);
    return false;
});