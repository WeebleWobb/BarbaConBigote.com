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
			<!-- Discovery and UX -->
			<div class="container casestudy--container">
				<!-- Intro -->
				<div class="row">
					<div class="col-2 col-md-1 offset-md-3">
						<div class="casestudy--number">
							<h3>01.</h3>
						</div>
					</div>
					<div class="col-10 col-md-7">
						<div class="casestudy--content">
							<?php the_field('discovery_ux'); ?>
						</div>
					</div>
				</div>
				<!-- Image Row -->
				<div class="row">
					<figure class="col-12 col-md-5 offset-md-1 casestudy--img">
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/work/rems/rems-sitemap.png">
					</figure>
					<figure class="col-md-5 casestudy--img">
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/work/rems/rems-userflow.png">
					</figure>
				</div>
				<!-- Image Row -->
				<div class="row my-5">
					<figure class="col-12 col-md-6 my-5">
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/work/rems/new-prescriber-flow.png">
					</figure>
					<figure class="col-12 col-md-6 my-5">
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/work/rems/adults-pediatris-flow.png">
					</figure>
					<figure class="col-12 col-md-6 my-5">
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/work/rems/treating-adults-flow.png">
					</figure>
					<figure class="col-12 col-md-6 my-5">
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/work/rems/caregiver-flow.png">
					</figure>
				</div>
				<!-- Details -->
				<div class="row mb-5">
					<figure class="col-12 col-md-6 casestudy--img">
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/work/rems/rems-sitemap.png">
					</figure>
					<div class="col-12 col-md-5">
						<?php the_field('sitemap'); ?>
					</div>
				</div>
				<div class="row mb-5">
					<div class="col-12 col-md-5 offset-md-1">
						<?php the_field('wireframes'); ?>
					</div>
					<figure class="col-12 col-md-6">
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/work/rems/rems-wires.png">
					</figure> 
				</div>
			</div>
			<!-- Design and Development -->
			<div class="container casestudy--container">
				<!-- Intro -->
				<div class="row">
					<div class="col-2 col-md-1 offset-md-3">
						<div class="casestudy--number">
							<h3>02.</h3>
						</div>
					</div>
					<div class="col-10 col-md-7">
						<div class="casestudy--content">
							<?php the_field('design_dev'); ?>
						</div>
					</div>
				</div>
				<!-- Image Row -->
				<div class="row mb-5">
					<figure class="col-12 col-md-5 offset-md-1">
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/work/rems/design-prescriber.png">
					</figure>
					<figure class="col-md-5">
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/work/rems/design-patients.png">
					</figure>
				</div>
                <!-- Image Row -->
                <div class="row mt-4">
					<figure class="col-12">
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/work/rems/rems-design-layouts.png">
					</figure>
				</div>
			</div>
		</section>
        <!-- End Main Content -->
        <!-- <section class="casestudy-pagination">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="casestudy-pagination--prev">
                            <h6>Case Study Title</h6>
                            <a href="#"><i class="fas fa-long-arrow-alt-left"></i>View Case Study</a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="casestudy-pagination--next">
                            <h6>Case Study Title</h6>
                            <a href="#">View Case Study <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
	</main>

<?php get_footer(); ?>