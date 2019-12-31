<?php get_header(); ?>

	<main role="main" class="pb-md-5">
		<section class="casestudy-aspot">
			<div class="container">
				<div class="row mb-4">
                    <div class="col-12 col-md-2">
                        <a href="<?php echo get_site_url(null, '/work/'); ?>">Back to Work</a>
                    </div>
					<div class="col-12 col-md-8">
                        <h3><?php the_title(); ?></h3>
                        <h6 class="color-red">Website Design</h6>
					</div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-2 offset-md-2">
                        <h5>Contribution</h5>
                        <?php
                            $roles = get_the_terms(get_the_ID(), 'project_role' );

                            foreach($roles as $role) {
                                echo '<p><strong>' . $role->name . '</p></strong>';
                            }
                        ?>
                    </div>
                    <div class="col-12 col-md-6">
                        <?php the_field('project_intro'); ?>
                    </div>
                </div>
			</div>
		</section>

        <section class="container mb-5">
            <div class="row">
                <div class="col-12 col-md-6">
                    <figure>
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/work/ibsd/ibsd-macbook.png" alt="">
                    </figure>
                    <div class="mb-2">
                        <?php the_field('project_detail'); ?>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/work/ibsd/ibsd-body.png" alt="">
                    </figure>
                </div>
            </div>
        </section>
		<section class="py-md-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-4">
                        <h5>User Experience</h5>
                    </div>
                    <div class="col-12 col-md-6 mb-2">
                        <h6>Planning for Scale</h6>
                        <p>Throughout the lifespan of IBS-D, it was expected that the platform would grow and extend to the consumer audience. Planning for scale and how these two experience would come together to provide the proper solutions for both target audiences, while feeling as one cohesive experience, was crucial.</p>
                    </div>
                    <div class="col-12 col-md-6 mb-3">
                        <figure class="casestudy--img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/work/ibsd/overall-sitemap.jpg" alt="">
                        </figure>
                    </div>
                    <div class="col-12 col-md-6">
                        <figure class="casestudy--img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/work/ibsd/patient-sitemap.jpg" alt="">
                        </figure>
                    </div>
                    <div class="col-12 col-md-6">
                        <figure class="casestudy--img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/work/ibsd/hcp-sitemap.jpg" alt="">
                        </figure>
                    </div>
                </div>
            </div>  
        </section>
        <section class="py-5 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-5">
                        <h5>Rapid Prototyping and Iterations</h5>
                    </div>
                    <div class="col-12 col-md-6 mb-3">
                        <figure class="casestudy--img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/work/ibsd/wire-v1.jpg" alt="">
                        </figure>
                    </div>
                    <div class="col-12 col-md-6 mb-3">
                        <figure class="casestudy--img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/work/ibsd/wire-v2.jpg" alt="">
                        </figure>
                    </div>
                    <div class="col-12 col-md-6">
                        <figure class="casestudy--img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/work/ibsd/wire-v3.jpg" alt="">
                        </figure>
                    </div>
                    <div class="col-12 col-md-6">
                        <figure class="casestudy--img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/work/ibsd/wire-v4.jpg" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </section>
		<!-- End Main Content -->
	</main>

<?php get_footer(); ?>