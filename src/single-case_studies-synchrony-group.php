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
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/work/sg/sg-sitemap.png">
					</figure>
					<figure class="col-md-5 casestudy--img">
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/work/sg/sg-userflow.png">
					</figure>
				</div>
				<!-- Image Row -->
				<div class="row">
					<figure class="col-12 col-md-4 casestudy--img">
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/work/sg/potential-hire.jpg">
					</figure>
					<figure class="col-12 col-md-4 offset-md-2 casestudy--img">
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/work/sg/potential-client.jpg">
					</figure>
					<figure class="col-12 col-md-5 offset-md-1 my-5">
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/work/sg/userflow-persona-1.png">
					</figure>
					<figure class="col-12 col-md-5 offset-md-1 my-5">
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/work/sg/userflow-persona-2.png">
					</figure>
				</div>
				<!-- Details -->
				<div class="row">
					<figure class="col-12 col-md-6 casestudy--img">
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/work/sg/sg-sitemap.png">
					</figure>
					<div class="col-12 col-md-5">
						<?php the_field('sitemap'); ?>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-md-5 offset-md-1">
						<?php the_field('wireframes'); ?>
					</div>
					<figure class="col-12 col-md-6">
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/work/sg/wireframes.png">
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
				<div class="row">
					<figure class="col-12 col-md-5 offset-md-1 casestudy--img">
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/work/sg/design-single.png">
					</figure>
					<figure class="col-md-5 casestudy--img">
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/work/sg/design-group.png">
					</figure>
				</div>
					<!-- Image Row -->
					<div class="row mt-4">
					<figure class="col-12 col-md-7">
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/work/sg/design-desktop.png">
					</figure>
					<figure class="col-md-5">
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/work/sg/design-branding.png">
					</figure>
				</div>
			</div>
			<!-- Design Carousel -->
			<div class="container-fluid casestudy--container">
				<div class="casestudy--carousel">
					<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/work/sg/sg-design-layouts.png">
				</div>
			</div>
			<!-- Mobile Design -->
			<div class="container casestudy--container">
				<div class="row">
					<figure class="col-12 col-md-4">
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/work/sg/mobile-company.jpg">
					</figure>
					<figure class="col-12 col-md-4">
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/work/sg/mobile-team.jpg">
					</figure>
					<figure class="col-12 col-md-4">
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/work/sg/mobile-nav.jpg">
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