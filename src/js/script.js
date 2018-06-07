/*!
* Barba con Bigote v1.0
* @license MIT licensed
*
* Copyright (C) 2017 barbaconbigote.com - A project by Juan D. Bolaños
*/

jQuery(document).ready(function($) {


	// --------------------- 01. Navigation --------------------- //
	var menu = $('#menu');
	var header = $('header');

	// 1.1 Menu Button function
	menu.on('click', function() {

		var nav = $('#mainNav');
		var body = $('body');
		var navItems = $('#mainNav .nav-item, #mainNav .contact');

		// Adds transitions to navigation when clicked
		nav.toggleClass('is-open');

		navItems.toggleClass('is-open');
		menu.toggleClass('is-open');

		// Prevents site scrolling when navigation is open
		if(nav.hasClass('is-open')) {
			body.css({'overflow': 'hidden'});
		} else {
			body.css({'overflow': 'auto'});
		}
	});

	// 1.2 About detail nav scroll function
	$(window).scroll(function() {

		var windowTop = $(window).scrollTop();
		var aboutNav = $('header.is_about_detail');

		if( header.hasClass('is_about_detail') && windowTop >= 100) {
			aboutNav.addClass('is_scrolled');
		} else if(windowTop == 0) {
			aboutNav.removeClass('is_scrolled');
		}

	});

	// --------------------- 02. Work and Blog --------------------- //
	var postIMG = $('.work-img, .post-img');
	var moreRepos = $('#more-repos');

	// 2.1 Work and Blog Thumbnail hover
	postIMG.hover(function() {
		$(this).toggleClass('hover');
	});

	// 2.2 View more Repos Functions
	moreRepos.click(function(e) {

		e.preventDefault();
		
		var githubAPI = 'https://api.github.com/users/WeebleWobb/repos'
		var githubOptions = {
			type: "owner",
			sort: "created"
		}

		function showRepos(data) {
			var repoContainer = $('#repoContainer');
			repoHTML = '';

			$.each(data, function(i, repo) {
				repoHTML += '<div class="col-4 repo-flex">';
				repoHTML += '<article class="repos-post">';
				repoHTML += '<a href="' + repo.html_url + '" target="_blank"><h6>' + repo.name + '</h6></a>';
				repoHTML += '<p>' + repo.description + '</p>';
				repoHTML += '<div class="repos-post-meta">' + repo.language + '</div>';
				repoHTML += '</article>';
				repoHTML += '</div>';
			});

			repoContainer.html(repoHTML);

		}

		$.getJSON(githubAPI, githubOptions, showRepos);

		$(this).hide();

	});

	// 2.3 Case Studies Disclaimer Function
	window.onload = function() {

		var $disclaimer = $('#js-disclaimer');
		var $agree = $('.js-agree');

		if($disclaimer.length) {
			$disclaimer.addClass('disclaimer-show');
		}

		$agree.click(function(e) {
			e.preventDefault();
			$disclaimer.removeClass('disclaimer-show');
		});
		
	}

	// --------------------- 03. About --------------------- //

	// // 3.1 Treehouse API Ajax function
	// var url = 'https://teamtreehouse.com/weeblewobb.json';

	// show_badges(url);

	// function show_badges(url) {

	// 	$.getJSON(url, function(data) {

	// 		console.log(data);

	// 	});

	// }


});

