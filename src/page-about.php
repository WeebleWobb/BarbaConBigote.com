<?php 

	include('header.php');

?>
<main role="main" class="content">
	<!-- About Entries -->
	<section class="container-fluid">
		<div class="row">

			<?php 
				$args = array(
					'post_type'	=>	'about_entries'
				);

				$the_query = new WP_Query($args);
			?>

			<?php if($the_query->have_posts()) : $number = 1;?>

				<?php while($the_query->have_posts()) : $the_query->the_post(); ?>
					
					<div class="col-12 col-md-3 no-padding">
						<section class="about-category">
							<div class="about-category-content">
								<h3><?php echo "0" . $number++ . ".";?>
									<br><?php the_title(); ?>
								</h3>
								<div>
									<hr>
									<?php the_content(); ?>
									<a href="<?php the_permalink(); ?>">Learn More <i class="fas fa-long-arrow-alt-right"></i></a>
								</div>
							</div>
						</section>
					</div>

				<?php endwhile; ?>
				
				<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<div class="col-12">
					<h4 class="text-center">Sorry, something went wrong and about is showing up.</h4>
				</div>
			<?php endif; ?>

		</div>

	</section>
	<!-- End About Entries -->
</main>

<?php 

	include('footer.php');

?>