/*!
* Barba con Bigote v1.0
* @license MIT licensed
*
* Copyright (C) 2017 barbaconbigote.com - A project by Juan D. Bolaños
*/

$(document).ready(function() {


	// --------------------- 01. Navigation --------------------- //
	$('#menu').on('click', function() {

		var $nav = $('#mainNav')
		var $body = $('body')


		// Adds transitions to navigation when clicked
		$nav.toggleClass('is-open');
		$('#mainNav .nav-item, #mainNav .contact').toggleClass('is-open');
		$('#menu').toggleClass('is-open');

		// Prevents site scrolling when navigation is open
		if($nav.hasClass('is-open')) {
			$body.css({'overflow': 'hidden'});
		} else {
			$body.css({'overflow': 'auto'});
		}
	});

	// --------------------- 02. Work and Blog --------------------- //
	$('.work-img, .post-img').hover(function() {

		$(this).toggleClass('hover');

	});


});

