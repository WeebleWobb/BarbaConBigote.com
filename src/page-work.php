<?php get_header(); ?>

<main role="main">
	<!-- Headline -->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6 offset-md-3 mt-md-5">
					<h1 class="text-center color-charcoal py-4">Case Studies and Repositories.</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- End Headline -->

	<!-- Featured Work -->
	<section>
		<div class="container">
			<div class="row">

				<?php 
					$args = array(
						'post_type'		=>		'case_studies'
					);

					$the_query = new WP_Query($args);
				?>

				<?php if($the_query->have_posts()) : ?>

					<?php while($the_query->have_posts()) : $the_query->the_post(); ?>
						<div class="col-12 col-md-6 py-2">
							<figure class="work">
								<div class="work-img">	
									<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid" />
									<div class="work-hover">
										<a class="btn btn-primary" href="<?php the_permalink(); ?>">View Work</a>
									</div>
								</div>
								<figcaption class="work-caption">
									<a href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5></a>
									<ul class="color-brown project-roles">
										<?php 
											$post_id = get_the_id();
											$terms = get_the_terms($post_id, 'project_role');

											foreach ($terms as $term) {
												echo '<li class="role">' . $term->name . '</li>';
											}
										?>
									</ul>
								</figcaption>
							</figure>
						</div>
					<?php endwhile; ?>

					<?php wp_reset_postdata(); ?>

				<?php else : ?>
					<div class="col-12">
						<h4 class="text-center">Sorry, something went wrong and my case studies are showing up.</h4>
					</div>
				<?php endif; ?>
				
			</div>

		</div>
	</section>
	<!-- End Featured Work -->

	<?php include('inc/github.php'); ?>

</main>

<?php get_footer(); ?>