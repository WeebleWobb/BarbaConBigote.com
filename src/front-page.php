<?php get_header(); ?>

<main role="main">
	<section class="index-content">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-6 col-xxl-5">
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
					<div class="aspot-carousel--container">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/home/macbook.png" alt="" class="aspot-carousel--macbook">
							<div id="featuredWork" class="aspot-carousel--images carousel slide" data-ride="carousel" data-interval="6000">
								<?php 
									$args = array(
										'post_type'		=>		'other_works',
										'tax_query'		=>		array(
											array(
												'taxonomy'	=>	'project_type',
												'field'		=>	'slug',
												'terms'		=>	'ux-ui'
											),
										),
										'posts_per_page'		=>		3
									);
	
									$the_query = new WP_Query($args);
									$posts = $the_query->posts;
									$current = 0;
									$class = '';
								?>
	
								<?php if($the_query->have_posts()) : $number = 0; ?>
	
									<div class="carousel-inner">
	
										<?php while($the_query->have_posts()) : $the_query->the_post(); $current++; ?> 
											<!-- Write wp_query loop to pull 3 case studies -->
											<?php
												if($current == 1) {
													$class = 'active';
												} else {
													$class = '';
												}
											?>
											<div class="carousel-item <?php echo $class; ?>">
												<div class="aspot-carousel--img">
													<img class="d-block w-100" src="<?php the_post_thumbnail_url(); ?>" alt="">
													<div class="work-hover">
														<a class="btn btn-primary" href="<?php echo get_post_permalink(); ?>">View Work</a>
													</div>
												</div>
											</div>
										<?php endwhile; ?>
										
										<?php wp_reset_postdata(); ?>
	
									</div>
	
								<?php else : ?>
									<h6>Sorry, there seems to be an error.</h6>
								<?php endif; ?>
							</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>