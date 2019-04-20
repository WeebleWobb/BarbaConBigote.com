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

        <section class="container mb-5">
            <div class="row">
                <div class="col-12 col-md-6">
                    <figure>
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/work/lcti/lcti-macbook.png" alt="">
                    </figure>
                </div>
                <div class="col-12 col-md-6">
                    <figure class="casestudy--img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/work/lcti/explore-screen.jpg" alt="">
                    </figure>
                </div>
                <div class="col-12 col-md-6">
                    <?php the_field('project_detail'); ?>
                </div>
                <div class="col-12 col-md-6">
                    <figure class="casestudy--img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/work/lcti/program-screen.jpg" alt="">
                    </figure>
                </div>
            </div>
        </section>
        <section class="container my-5">
            <div class="row">
                <div class="col-12 mb-3">
                    <h5>Iconography</h5>
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <figure class="casestudy--img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/work/lcti/arts-icons.jpg" alt="">
                    </figure>
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <figure class="casestudy--img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/work/lcti/business-icons.jpg" alt="">
                    </figure>
                </div>
                <div class="col-12 col-md-6">
                    <figure class="casestudy--img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/work/lcti/health-icons.jpg" alt="">
                    </figure>
                </div>
                <div class="col-12 col-md-6">
                    <figure class="casestudy--img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/work/lcti/engineering-icons.jpg" alt="">
                    </figure>
                </div>
            </div>
        </section>
		<section class="flex__full my-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h5>Typography and Color</h5>
                    </div>
                    <div class="col-12 col-md-5">
                        <div class="typography">
                            <div class="typography--items">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/work/lcti/proxima-regular.svg" alt="">
                            </div>
                            <div class="typography--items">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/work/lcti/proxima-bold.svg" alt="">
                            </div>
                            <div class="typography--items">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/work/lcti/proxima-black.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="color">
                        <div class="color--cell color__arts">
                            <p>Arts &amp; <br>Humanities <br>#29A0F4</p>
                        </div>
                        <div class="color--cell color__manufacturing">
                            <p>Manufacturing <br>#2C406F</p>
                        </div>
                        <div class="color--cell color__industrial">
                            <p>Industrial <br>Technology <br>#BA5FE2</p>
                        </div>
                        <div class="color--cell color__construction">
                            <p>Construction <br>#662F74</p>
                        </div>
                        <div class="color--cell color__engineering">
                            <p>Engineering <br>#F64F25</p>
                        </div>
                        <div class="color--cell color__transportation">
                            <p>Transportation <br>#C34949</p>
                        </div>
                        <div class="color--cell color__equipment">
                            <p>Heavy <br>Equipment <br>#FFA53A</p>
                        </div>
                        <div class="color--cell color__business">
                            <p>Business <br>Communications <br>#29A0F4</p>
                        </div>
                        <div class="color--cell color__health">
                            <p>Health &amp; <br>Human Services <br>#79C223</p>
                        </div>
                        <div class="color--cell color__mechanics">
                            <p>Mechanics <br>#7C9456</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Finish color pallete. Use flex box solution -->
            
        </section>
		<!-- End Main Content -->
	</main>

<?php get_footer(); ?>