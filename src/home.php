<?php 

	include('header.php'); 

?>
	<main role="main">
		<!-- Headline -->
		<section>
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-6 offset-md-3 mt-md-5">
						<h1 class="text-center color-charcoal py-4">Thoughts, Articles, and Writings.</h1>
					</div>
				</div>
			</div>
		</section>
		<!-- End Headline -->

		<!-- Main Content -->
		<section class="mb-5">
			<div class="container">
				<div class="row">
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
						<article class="col-12 col-md-6 py-2">
							<figure class="post">
								<div class="post-img">	
									<img class="img-fluid" src="<?php 
										$templateURL = get_template_directory_uri();
										if(has_post_thumbnail()) { 
											the_post_thumbnail_url(); 
										} else { 
											echo $templateURL . "/assets/blog-placeholder.jpg"; 
										} ?>" 
									alt="">
									<div class="post-hover">
										<a class="btn btn-primary" href="<?php the_permalink(); ?>">Read Article</a>
									</div>
								</div>
								<figcaption class="post-caption">
									<h5 class="color-red"><?php the_title(); ?></h5>
								</figcaption>
							</figure>
						</article>
					<?php endwhile; else : ?>
						<h4>Sorry, seems someone stole my aticles</h4>
					<?php endif; ?>	
				</div>
			</div>
		</section>
		<!-- End Main Content -->
	</main>
<?php

	include('footer.php');

?>