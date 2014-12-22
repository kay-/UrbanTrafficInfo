$(function() {
    $('.slider').glide({
		arrows: '.slider',
		arrowRightText: '',
		arrowLeftText: '',
		animationDuration: 1500,
		autoplay: 3000,
		hoverpause: true,
		navigation: false
	});

	if(location.pathname != "/") {
		$('.menu-item a[href^="/' + location.pathname.split("/")[1] + '"]').addClass('active');
	}
});