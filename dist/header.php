<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Juan D. Bolaños | Barba con Bigote</title>
	<meta name="description" content="UX/UI Designer, Avid Developer, Analytics Enthusiast, User Experience Advocate">
	<link rel="icon" href="<?php echo get_template_directory_uri() ?>/assets/favicon-16x16.png" sizes="16x16">
	<link rel="icon" href="<?php echo get_template_directory_uri() ?>/assets/favicon-32x32.png" sizes="32x32">
	<link rel="icon" href="<?php echo get_template_directory_uri() ?>/assets/favicon-96x96.png" sizes="96x96">

	<!-- Schema.org markup for Google+ -->
	<meta itemprop="name" content="Juan D. Bolaños | Barba con Bigote">
	<meta itemprop="description" content="UX/UI Designer, Avid Developer, Analytics Enthusiast, User Experience Advocate">
	<meta itemprop="image" content="http://www.example.com/image.jpg">

	<!-- Twitter Card data -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@bolanosjd">
	<meta name="twitter:title" content="Juan D. Bolaños | Barba con Bigote">
	<meta name="twitter:description" content="UX/UI Designer, Avid Developer, Analytics Enthusiast, User Experience Advocate">
	<meta name="twitter:creator" content="@bolanosjd">
	<!-- Twitter summary card with large image must be at least 280x150px -->
	<meta name="twitter:image:src" content="<?php echo get_template_directory_uri() ?>/assets/Metadata-Image.png">

	<!-- Open Graph data -->
	<meta property="og:title" content="Juan D. Bolaños | Barba con Bigote" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="http://barbaconbigote.com/" />
	<meta property="og:image" content="<?php echo get_template_directory_uri() ?>/assets/Metadata-Image.png" />
	<meta property="og:description" content="UX/UI Designer, Avid Developer, Analytics Enthusiast, User Experience Advocate" />
	<meta property="og:site_name" content="Barba con Bigote" />
	<meta property="article:published_time" content="2018-09-17T05:59:00+01:00" />
	<meta property="article:modified_time" content="2018-09-16T19:08:47+01:00" />
	<meta property="article:section" content="Article Section" />
	<meta property="article:tag" content="Article Tag" />
	<meta property="fb:admins" content="Facebook numberic ID" />

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
	<div class="navBar">
		<a href="<?php echo site_url();?>"><img id="logo" class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/barba-logo.png" alt="Barba con Bigote"></a>
		<div id="menu" class="menu">
			<span class="menu--text">Men&uacute;</span>
			<div class="line-container">
				<div class="line"></div>
				<div class="line"></div>
				<div class="line"></div>
			</div>
		</div>
	</div>
	<nav role="navigation" id="mainNav" class="main-nav">
		<div id="mainNav-js" class="main-nav--menu">
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
				<a href="mailto:bolanosjd@gmail.com">hola@barbaconbigote.com</a>
			</div>
		</div>
		<div class="main-nav--casestudies">
			<h6>Explore Case Studies</h6>
			<hr>
			<?php 
				$args = array(
					'post_type'	=>	'case_studies',
					'posts_per_page'	=> -1,
					'order'	=>	'DESC'
				);

				$the_query = new WP_query($args);
			?>

			<?php if($the_query->have_posts()) : while($the_query->have_posts()) : $the_query->the_post(); ?>
				<article>
					<a href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5></a>
					<p><?php the_field('excerpt'); ?></p>
				</article>
			<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
			<?php else : ?>
				<h3 class="align-center">Sorry, my case studies are gone.</h3>
			<?php endif; ?>
		</div>
		<div class="main-nav--social">
			<ul class="nav">
				<li class="nav-item"><a href="https://www.linkedin.com/in/bolanosjd/" target="_blank" class="nav-link">LinkedIn</a></li>
				<li class="nav-item"><a href="https://github.com/WeebleWobb" target="_blank" class="nav-link">GitHub</a></li>
				<li class="nav-item"><a href="https://twitter.com/BolanosJD" target="_blank" class="nav-link">Twitter</a></li>
				<li class="nav-item"><a href="https://www.instagram.com/weeblewobb/" target="_blank" class="nav-link">Instagram</a></li>
			</ul>
		</div>
	</nav>
</header>