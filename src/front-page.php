<?php 

	include('header.php'); 

?>

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

				<div class="col-12 col-md-5 offset-md-1">
					<div id="featuredWork" class="carousel slide" data-ride="carousel" data-interval="6000">
						<?php 
							$args = array(
								'post_type'		=>		'case_studies',
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
								  		<img class="d-block w-100" src="<?php the_post_thumbnail_url(); ?>" alt="">
										<div class="carousel-caption">
											<h5 class="color-red"><?php the_title(); ?></h5>
											<ul class="color-brown project-roles">
												<?php 
													$post_id = get_the_id();
													$terms = get_the_terms($post_id, 'project_role');

													foreach ($terms as $term) {
														echo '<li class="role">' . $term->name . '</li>';
													}
												?>
											</ul>
										</div>
									</div>
								<?php endwhile; ?>
								
								<?php wp_reset_postdata(); ?>

							</div>

							<!-- Pagination -->
							<ol class="carousel-indicators">
								<?php foreach($posts as $post) {
									$current++;	
									if($current == 1) {
										$class = 'active';
									} else {
										$class = '';
									}	
									echo '<li data-target="#featuredWork" data-slide-to="' . $number++ . '" class="<?php echo $class; ?>"></li>';	
								} ?>
							</ol>

						<?php else : ?>
							<h6>Sorry, there seems to be an error.</h6>
						<?php endif; ?>

					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php 
	include('footer.php');
?>