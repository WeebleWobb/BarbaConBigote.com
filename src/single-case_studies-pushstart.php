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
                        <h6 class="color-red">Personal Project</h6>
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
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/work/pushstart/pushstart-macbook.png" alt="">
                    </figure>
                </div>
                <div class="col-12 col-md-6">
                    <figure class="casestudy--img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/work/pushstart/persona-casual.jpg" alt="">
                    </figure>
                </div>
                <div class="col-12 col-md-6 mb-2">
                    <?php the_field('project_detail'); ?>
                </div>
                <div class="col-12 col-md-6">
                    <figure class="casestudy--img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/work/pushstart/userflow-goal2.jpg" alt="">
                    </figure>
                </div>
            </div>
        </section>
        <section class="container my-md-5">
            <div class="row">
                <div class="col-12 mb-3">
                    <h5>Discovery and Research</h5>
                </div>
                <div class="col-12 mb-5">
                    <h6 class="discovery-subhead">E-sports is a growing market with potential for investment.</h6>
                </div>
                <div class="col-12 col-md-5 mb-3">
                    <figure class="bar-graph">
                        <figcaption class="mb-4"><strong>E-Sports Revenue Growth | Global</strong></figcaption>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/work/pushstart/revenue-growth.png" alt="">
                    </figure>
                </div>
                <div class="col-12 col-md-6 offset-md-1 mb-3">
                    <figure class="casestudy--img">
                    <figcaption class="mb-4"><strong>2018 E-Sports Revenue Streams | Global</strong></figcaption>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/work/pushstart/circle-graph.jpg" alt="">
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
                        <h6>Creating Empathy</h6>
                        <p>The UX process is centered around two main principles, Empathy and Design Thinking. The main objective isn't to just create a platform but to build a story that is centered around each intended user, identify the gaps, and provide them with an experience that is both desirable and viable.</p>
                    </div>
                    <div class="col-12 col-md-6 mb-3">
                        <div id="persona" class="carousel slide" data-ride="carousel" data-interval="6000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <figure class="casestudy--img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/work/pushstart/content-creators.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="carousel-item">
                                    <figure class="casestudy--img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/work/pushstart/nace-directors.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="carousel-item">
                                    <figure class="casestudy--img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/work/pushstart/persona-casual.jpg" alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <figure class="casestudy--img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/work/pushstart/userflow-goal1.jpg" alt="">
                        </figure>
                    </div>
                    <div class="col-12 col-md-6">
                        <figure class="casestudy--img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/work/pushstart/sitemap.jpg" alt="">
                        </figure>
                    </div>
                </div>
            </div>  
        </section>
        <section class="py-5 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-5">
                        <h5>Brand and Visual Design</h5>
                    </div>
                    <div class="col-12 col-md-5">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/work/pushstart/branding-logo.png" alt="">
                        <div class="push-type">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/work/pushstart/gotham-black.svg" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/work/pushstart/gotham-medium.svg" alt="">
                        </div>
                    </div>
                    <div class="col-6 col-md-2 offset-md-1">
                        <div class="swatch swatch__charcoal">
                            <div class="swatch--color swatch--color__charcoal">
                            </div>
                            <p>#323232</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="swatch swatch__red">
                            <div class="swatch--color swatch--color__red">
                            </div>
                            <p>#D2493B</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="swatch">
                            <div class="swatch--color swatch--color__dark-red">
                            </div>
                            <p>#B33E31</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<!-- End Main Content -->
	</main>

<?php get_footer(); ?>