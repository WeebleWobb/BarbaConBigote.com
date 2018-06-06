<?php get_header(); ?>

	<main role="main">
		<section class="casestudy-aspot">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-3 offset-md-1">
						<?php the_field('project_detail'); ?>
					</div>
					<div class="col-12 col-md-8">
						<?php the_field('project_intro'); ?>
					</div>
				</div>
			</div>
			<div id="js-disclaimer" class="disclaimer">Confidential. For Internal Discussion Purposes Only. Do Not Duplicate or Distribute. &nbsp;<a href="#" class="js-agree">I Agree</a></div>
		</section>

		 <section class="casestudy">
			<!-- Content Section -->
			<?php if(have_rows('case_study_content_2')) : $number = 1; ?>
				<div class="container casestudy--container">
					<?php while(have_rows('case_study_content_2')) : the_row();

						$content = get_sub_field('content');

					?>
						<div class="row">
							<div class="col-2 col-md-1 offset-md-3">
								<div class="casestudy--number">
									<h3><?php echo "0" . $number++ . ".";?></h3>
								</div>
							</div>
							<div class="col-10 col-md-7">
								<div class="casestudy--content">
									<?php echo $content; ?>
								</div>
							</div>
						</div>
						<!-- Image Row -->
						<?php if(have_rows('project_images')) : ?>
							<div class="row">
								<?php while(have_rows('project_images')) : the_row(); 
								
								$image_info = get_sub_field('image');
								
								?>
									<figure class="<?php echo $image_info['column_span'] ?> casestudy--img">
										<figcaption>
											<p><?php echo $image_info['caption'] ?></p>
										</figcaption>
										<img class="img-fluid" src="<?php echo $image_info['image'] ?>">
									</figure>
								<?php endwhile; ?>
							</div>
						<?php endif; ?>
						<!-- End Image Row -->
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		<!-- End Main Content -->
	</main>

<?php get_footer(); ?>