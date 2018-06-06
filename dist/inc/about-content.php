<!-- Process Section -->
<?php if(is_single('process')) { ?>
	<!-- Process Content -->
	<?php if(have_rows('process_content')) : $number = 1; while(have_rows('process_content')) : the_row(); ?>
		<div class="row about-detail-content">
			<aside class="col-4 about-content-left is-process">
				<h5><?php echo "0" . $number++ . "."; ?></h5>
			</aside>
			<article class="col-8 about-content-right">

				<?php the_sub_field('process_detail'); ?>
				
			</article>
		</div>
	<?php endwhile; else : ?>
		<div class="col-12">
			<h4 class="text-center">Sorry, something went wrong and the content isn't showing up.</h4>
		</div>
	<?php endif; ?>
	<!-- End Process Content -->

<!-- Personal Section -->
<?php } elseif(is_single('personal')) {

		include('untappd.php');

?>

<!-- Skills Section -->
<?php } elseif(is_single('skills')) {

	include('treehouse.php'); 

?>

<!-- Experience Section -->	
<?php } elseif('experience') { 
	
	include('linkedin.php'); 

?>

<!-- Standard About Section -->
<?php } else { ?>
	
	<div class="row about-detail-content">
		<div class="col-12 col-md-10 offset-md-1">

			<?php if(have_posts()) : while(have_posts()) : the_post() ?>

				<?php the_content(); ?>
				
			<?php endwhile; else : ?>
				<h4>Sorry, seems something went wrong.</h4>
			<?php endif; ?>

		</div>
	</div>

<?php } ?>