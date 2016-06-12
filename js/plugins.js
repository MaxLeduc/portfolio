//load in jQuery plugin dependencies (eg. flexslider, smoothScroll etc.) in this file
$(function(){
//smoothscroll

$('a').click(function(){
    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 500);
    return false;
});

//scroll counter

$(window).scroll(function (event) {
    var scroll = $(window).scrollTop();
    // Do something
   // console.log(scroll)
	   var navAnchor = $('ul.menu li').children();
	   // console.log(navAnchor);
   if(scroll > 836){
   // console.log('works')
   		// $(navAnchor).css('color', '#333');
   		// $(navAnchor).css('font-weight', 'bold');
   		$('#menu-main-menu').css('background', 'rgba(51, 51, 51, 0.8)')
   }else{
   		$('#menu-main-menu').css('background','none')
   }
});

//scroll reveal

window.sr = ScrollReveal();

sr.reveal('.project');

});