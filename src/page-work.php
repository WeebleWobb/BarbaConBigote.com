<?php 

	include('header.php');

?>

<main role="main">
	<!-- Headline -->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6 offset-md-3 mt-md-5">
					<h1 class="text-center color-charcoal py-4">Case Studies and Repositories.</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- End Headline -->

	<!-- Featured Work -->
	<section>
		<div class="container">
			<div class="row">

				<?php 
					$args = array(
						'post_type'		=>		'case_studies'
					);

					$the_query = new WP_Query($args);
				?>

				<?php if($the_query->have_posts()) : ?>

					<?php while($the_query->have_posts()) : $the_query->the_post(); ?>
						<div class="col-12 col-md-6 py-2">
							<figure class="work">
								<div class="work-img">	
									<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid" />
									<div class="work-hover">
										<a class="btn btn-primary" href="<?php echo get_post_permalink(); ?>">View Work</a>
									</div>
								</div>
								<figcaption class="work-caption">
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
								</figcaption>
							</figure>
						</div>
					<?php endwhile; ?>
				<?php else : ?>
					<div class="col-12">
						<h4 class="text-center">Sorry, something went wrong and my case studies are showing up.</h4>
					</div>
				<?php endif; ?>
				
			</div>
		</div>
	</section>
	<!-- End Featured Work -->

	<!-- Repositories -->
	<section class="repos container">
		<div class="row">
			<div class="col-12 mb-3">
				<h3>Current Repositories (15)</h3>
			</div>
		</div>
		<div class="row">

			<!--*************************************************
				Will be pulled from Git Hub API 
			**************************************************-->

			<div class="col-4">
				<article class="repos-post">
					<a href="#"><h6>NarcolepsyLink-Email</h6></a>
					<p>Email development for Narcolepsy link</p>
					<div class="repos-post-meta">HTML</div>
				</article>
			</div>
			<div class="col-4">
				<article class="repos-post">
					<a href="#"><h6>Synchrony-Email-Signatures</h6></a>
					<p>A microsite that allows Synchrony employees to easily create their email signatures.</p>
					<div class="repos-post-meta">HTML</div>
				</article>
			</div>
			<div class="col-4">
				<article class="repos-post">
					<a href="#"><h6>Synchrony-Registration-Platform</h6></a>
					<p>Event registration platform built by Synchrony Group</p>
					<div class="repos-post-meta">HTML</div>
				</article>
			</div>
			<div class="col-4">
				<article class="repos-post">
					<a href="#"><h6>SynchronyGroup.com</h6></a>
					<p>Website Redesign for SynchronyGroup.com</p>
					<div class="repos-post-meta">HTML</div>
				</article>
			</div>
			<div class="col-4">
				<article class="repos-post">
					<a href="#"><h6>XYREM-AgencyOfChange-Emails</h6></a>
					<p>XYREM Agency of Change Digital Campaign</p>
					<div class="repos-post-meta">HTML</div>
				</article>
			</div>
			<div class="col-4">
				<article class="repos-post">
					<a href="#"><h6>CSL-Behring</h6></a>
					<p>Sharepoint SCP site for CSL Behring</p>
					<div class="repos-post-meta">HTML</div>
				</article>
			</div>
		</div>
	</section>
	<!-- End of Repositories -->
</main>

<?php

	include('footer.php');

?>