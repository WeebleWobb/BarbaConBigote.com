<?php 

	include('header.php'); 

?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	<main role="main">
		<!-- Headline -->
		<section>
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-6 offset-md-3 mt-md-5">
						<h1 class="text-center color-charcoal py-4"><?php the_title(); ?></h1>
					</div>
				</div>
			</div>
		</section>
		<!-- End Headline -->

		<!-- Main Content -->
		<section>
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-10 offset-md-1">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</section>
		<!-- End Main Content -->
	</main>
<?php endwhile; else : ?>
	<div class="col-12 col-md-10 offset-md-1">
		<h4>Sorry, it seems as there was a mistake.</h4>
		<h6>I don't have any content to show here.</h6>
	</div>
<?php endif?>

<?php

	include('footer.php');

?>