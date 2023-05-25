$(function () {
	if (window.pageYOffset == 0) {
		$('.navbar').addClass('grow-menu');
	}
	$(window).scroll(function () {
		var top_offset = $(window).scrollTop();
		if (top_offset == 0) {
			$('.navbar').addClass('grow-menu navbar-dark bg-dark bg-opacity-50');
			$('.navbar').removeClass('navbar-light bg-white');
			$('.nav-link').addClass('text-white');
			$('.nav-link').removeClass('text-dark');
		} else {
			$('.navbar').removeClass('grow-menu navbar-dark bg-dark bg-opacity-50');
			$('.navbar').addClass('navbar-light bg-white');
			$('.nav-link').removeClass('text-white');
			$('.nav-link').addClass('text-dark');
		}
	});

	if (window.pageYOffset <= 800) {
		$('header').addClass('top-menu');
	}
	$(window).scroll(function () {
		var top_offset = $(window).scrollTop();
		if (top_offset <= 800) {
			$('header').addClass('top-menu');
		} else {
			$('header').removeClass('top-menu');
		}
	});

	if (window.pageYOffset <= 800) {
		$('.special-offers-link').removeClass('top order');
		$('.offers-link-hover').removeClass('order-3');
		$('.offers-link-hover').addClass('order-1');
	}
	$(window).scroll(function () {
		var top_offset = $(window).scrollTop();
		if (top_offset <= 800) {
			$('.special-offers-link').removeClass('top');
			$('.offers-link-hover').removeClass('order-3');
			$('.offers-link-hover').addClass('order-1');
		} else {
			$('.special-offers-link').addClass('top');
			$('.offers-link-hover').removeClass('order-1');
			$('.offers-link-hover').addClass('order-3');
		}
	});
});
setInterval(function() {
	$('.opacity-0').toggleClass('opacity-100')
}, 5000);