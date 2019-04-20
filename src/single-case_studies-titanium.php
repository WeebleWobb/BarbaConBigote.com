<?php get_header(); ?>

	<main role="main">
		<section class="casestudy-aspot">
			<div class="container">
				<div class="row mb-4">
                    <div class="col-12 col-md-2">
                        <a href="<?php echo get_site_url(null, '/work/'); ?>">Back to Work</a>
                    </div>
					<div class="col-12 col-md-8">
                        <h3><?php the_title(); ?></h3>
                        <h6 class="color-red">Website Redesign</h6>
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

        <section class="position__relative mb-md-12">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <figure>
                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/work/titanium/titanium-macbook.png" alt="">
                        </figure>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-12 col-md-5">
                        <div>
                            <?php the_field('project_detail'); ?>
                        </div>
                    </div>
                    <div class="map">
                        <figure class="map--img">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/work/titanium/map-overlay.jpg" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </section>
        <section class="container my-5">
            <div class="row">
                <div class="col-12 mb-3">
                    <h5>Color Balance</h5>
                </div>
            </div>
            <div class="row color-balance">
                <div class="col-12 col-md-6 mb-4">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/work/titanium/titanium-station.jpg" alt="">
                </div>
                <div class="col-12 col-md-6 mb-4">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/work/titanium/titanium-oil.jpg" alt="">
                </div>
                <div class="col-12 col-md-6">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/work/titanium/titanium-factory.jpg" alt="">
                </div>
                <div class="col-12 col-md-6">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/work/titanium/titanium-tank.jpg" alt="">
                </div>
                <div class="color-wheel">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/work/titanium/color-wheel.png" >
                </div>
            </div>
        </section>
		<section class="container my-5 py-3">
            <div class="row">
                <div class="col-12 mb-3">
                    <h5>Typography</h5>
                </div>
                <div class="col-12 col-md-3">
                    <div class="typography">
                        <div class="typography--items">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/work/titanium/brandon-regular.svg" alt="">
                        </div>
                        <div class="typography--items">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/work/titanium/brandon-bold.svg" alt="">
                        </div>
                        <div class="typography--items">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/work/titanium/brandon-black.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-9">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/work/titanium/typography-screen.png">
                </div>
            </div>
            <!-- Finish color pallete. Use flex box solution -->
            
        </section>
		<!-- End Main Content -->
	</main>

<?php get_footer(); ?>