<!-- Labels -->
<div class="row about-detail-labels">
	<div class="col-4 text-right">
		<h6>Timeline</h6>
	</div>
	<div class="col-8 color-grey">
		<h6>Resum&eacute;</h6>
	</div>
</div>
<!-- End Labels -->

<?php 
	
	$clientId = '782oiymnk1mkyj';
	$clientSecret = 'RTaXgbd3qEKu9QLH';
?>

<!-- About Content will be pulled from LinkedIn API -->
<?php if(have_rows('linkedin_content')) : while(have_rows('linkedin_content')) : the_row(); ?>

	<div class="row about-detail-content">
		<aside class="col-4 about-content-left">
			<?php the_sub_field('timeline'); ?>
		</aside>
		<article class="col-8 about-content-right">
			<?php the_sub_field('experience_content'); ?>
		</article>
	</div>
<?php endwhile; else : ?>
	<div class="col-12">
		<h4 class="text-center">Sorry, something went wrong and the content isn't showing up.</h4>
	</div>
<?php endif; ?> 
<!-- End About Content -->