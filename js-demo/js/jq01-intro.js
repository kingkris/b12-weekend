jQuery(document).ready(function($) {
	$('.site-links > li > a').click(function(e) {
			e.preventDefault();
			$('.site-links > li').removeClass('active');
			$(this).parent().addClass('active');
			$('.modal').show();
	});
	$('.modal .close').click(function(e) {
			$('.modal').hide();
	});

});

/*

jQuery('#page-title');
jQuery('p');
jQuery('.main-link');

$('#page-title');
$('p');
$('.main-link');


document.getElementById('page-title');
document.getElementsByTagName('p');
document.getElementsByClassName('main-link')


*/