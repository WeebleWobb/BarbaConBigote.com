<?php get_header(); ?>

<main role="main">
	<section class="index-content">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6">
					<div class="aspot-content">
						<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

							<?php the_content(); ?>
							
						<?php endwhile; else : ?>
							<h4>Sorry, something seems to have gone wrong.</h4>
						<?php endif; ?>
					</div>
				</div>

				<!-- Featured Work Carousel -->
				<div class="aspot-carousel">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/home/macbook.png" alt="" class="macbook">
					<div id="featuredWork" class="carousel slide" data-ride="carousel" data-interval="6000">
						<div class="carousel-inner">

							<!-- Create Custom Post Type for IMGs -->
							<div class="carousel-item <?php echo $class; ?>">
								<div class="work-img">
									<img class="d-block w-100" src="<?php the_post_thumbnail_url(); ?>" alt="">
									<div class="work-hover">
										<a class="btn btn-primary" href="<?php echo get_post_permalink(); ?>">View Work</a>
									</div>
								</div>
							</div>
							<!-- /End -->
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>