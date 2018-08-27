<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Juan D. Bolaños: UX/UI Designer, Avid Developer, Analytics Enthusiast, User Experience Advocate</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="I’m Juan and I’m passionate about User Centric design and experiences. As an UX/UI Designer I strive in providing the best possible experience for users that both help and enhance their daily lives and make the internet a better place.">
	<link rel="icon" href="<?php echo get_template_directory_uri() ?>/assets/favicon-16x16.png" sizes="16x16">
	<link rel="icon" href="<?php echo get_template_directory_uri() ?>/assets/favicon-32x32.png" sizes="32x32">
	<link rel="icon" href="<?php echo get_template_directory_uri() ?>/assets/favicon-96x96.png" sizes="96x96">

	<?php wp_head(); ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-84491972-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-84491972-1');
	</script>
</head>
<body 
	<?php 
		if(is_front_page()) {
			$pageClass = "is_home";
		} else if(is_page('about')) {
			$pageClass =  "is_not_home about-index"; 
		} else {
			$pageClass = "is_not_home";
		}
		body_class($pageClass);
	?> 
>
<header role="banner" class="nav-container<?php if(is_singular('about_entries')) { echo ' is_about_detail '; } ?>">
	<div id="navBar" class="container py-3">
		<div class="row align-items-center">
			<div class="col-6">
				<a href="<?php echo site_url();?>"><img id="logo" class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/barba-logo.png" alt="Barba con Bigote"></a>
			</div>
			<div class="col-6">
				<div id="menu" class="menu">
					<div class="line"></div>
					<div class="line"></div>
					<div class="line"></div>
				</div>
			</div>
		</div>
	</div>
	<nav role="navigation" id="mainNav" class="main-nav">
		<?php 
			$args = array(
				'menu'			=>	'Main Nav',
				'menu_class'	=>	'nav flex-column',
				'container'		=>	'ul',
				'walker'		=>	new barba_walker()
			);

			wp_nav_menu($args);
		?>
		<div class="contact">
			<h5 class="color-grey">Get in Touch</h5>
			<a href="mailto:hola@barbaconbigote.com">hola@barbaconbigote.com</a>
		</div>
	</nav>
</header>