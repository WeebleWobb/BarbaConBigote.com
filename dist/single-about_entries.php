<?php get_header(); ?>

<main role="main">
	
	<?php include('inc/about-aspot.php'); ?>

	<?php rewind_posts(); ?>

	<!-- Content -->
	<section class="container-fluid about-detail-container <?php 
		if(is_single('personal')) {
			echo "is_personal";
		} elseif(is_single('skills')) {
			echo "is_skills";
		} 
	?>">

		<?php include('inc/about-content.php'); ?>

	</section>
	<!-- End Content -->
</main>

<?php get_footer(); ?>