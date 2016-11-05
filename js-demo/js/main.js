jQuery(document).ready(function($) {
	$('.hamburger').click(function (e) {
			$(this).toggleClass('close').next().slideToggle();
	});
});

