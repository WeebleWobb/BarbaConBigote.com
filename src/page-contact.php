<?php get_header(); ?>

<main role="main">
	<section class="container about-detail-aspot">
		<div class="row">
			<div class="col-12 col-md-8 offset-md-2">
				<div class="detail-aspot-content">
					<?php if(have_posts()) : while(have_posts()) : the_post() ?>

						<h2><?php the_title(); ?></h2>
						<hr>
						<?php the_content(); ?>

						<div class="contact mt-4">
							<h6 class="color-grey">Juan D. Bola&ntilde;os</h6>
							<a href="#">hola@barbaconbigote.com</a>
						</div>

					<?php endwhile; else : ?>
	
						<h4>Sorry, Something went wrong.</h4>

					<?php endif;?>
				</div>
			</div>
		</div>
	</section>

	<!-- Content -->
	<section class="container-fluid about-detail-container is_contact">
	<!-- About Content -->
		<div class="row my-3">
			<div class="col-12 col-md-9 offset-md-1">
				<?php 
					Ninja_Forms()->display( 1, false )
				?>
			</div>
		</div>
	</section>
	<!-- End Content -->
</main>

<?php get_footer(); ?>