$(document).ready(function() {
	$('.fade').slick({
		arrows: false,
		autoplay: true,
		atoplaySpeed: 10000,
		fade: true,
		speed: 1000
	});
	$('.zakaz').slick({
		arrows: false,
		dots: false,
		autoplay: true,
		atoplaySpeed: 10000,
		slidesToShow: 6,
		slidesToScroll: 1,
		variableWidth: true
	});
	function parallax() {
		var scrolled = $(window).scrollTop();
		$('.bg').css('top', -(scrolled * 0.2) + 'px');
	}
	$(window).scroll(function(e){
		parallax();
	});
});