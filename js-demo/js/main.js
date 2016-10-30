jQuery(document).ready(function($) {
	$('.hamburger').click(function (e) {
		// body...
			$(this).toggleClass('close').next().slideToggle();
	});

});

