<!-- Process Page Conditional -->
<?php if(is_single('process')) { ?>
	<!-- Process Content -->
	<?php if(have_rows('process_content')) : $number = 1; while(have_rows('process_content')) : the_row(); ?>
		<div class="row about-detail-content">
			<aside class="col-4 about-content-left is-process">
				<h5><?php echo "0" . $number++ . "."; ?></h5>
			</aside>
			<article class="col-8 about-content-right">

				<!-- Detail ACF Goes here -->
				<?php the_sub_field('process_detail'); ?>
				
			</article>
		</div>
	<?php endwhile; else : ?>
		<div class="col-12">
			<h4 class="text-center">Sorry, something went wrong and the content isn't showing up.</h4>
		</div>
	<?php endif; ?>
	<!-- End Process Content -->

<!-- Personal Page Conditional -->
<?php } elseif(is_single('personal')) { ?>

	<?php include('untappd.php'); ?>

<!-- Experience Page Conditional -->
<?php } elseif(is_single('skills')) { ?>

	<?php include('treehouse.php'); ?>

<!-- Experience Page Conditional -->	
<?php } elseif('experience') { ?>
	
	<?php include('linkedin.php'); ?>

<?php } else { ?>
	
	<div class="row about-detail-content">
		<div class="col-12 col-md-10 offset-md-1">
			<?php if(have_posts()) : while(have_posts()) : the_post() ?>

				<?php the_content(); ?>
				
			<?php endwhile; else : ?>
				
			<?php endif; ?>
		</div>
	</div>

<?php } ?>