$(function(){

	// console.log("It's working");
	skrollr.init({
		forceHeight:false
	});

	$(".hamburger").on("click", function(){
		$(".main-nav ul").toggleClass("show");
	});

	$(".hamburger").on("click", function(){
		$(".hamburger").toggleClass("close");
	});
});