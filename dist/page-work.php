<?php get_header(); ?>

<main role="main">
	<!-- Headline -->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 mt-md-5">
					<h1 class="text-center color-charcoal py-4">Case Studies and Other Works.</h1>
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
						'post_type'	=>	'case_studies',
						'posts_per_page'	=> -1,
						'orderby'	=>	'RAND'
					);

					$the_query = new WP_query($args);
				?>

				<?php if($the_query->have_posts()) : while($the_query->have_posts()) : $the_query->the_post(); ?>
					<div class="col-12 col-md-6 mb-3">
					<figure class="work">
						<div class="work-img">
							<?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']); ?>
							<div class="work-hover">
								<a class="btn btn-primary" href="<?php the_permalink(); ?>">View Case Study</a>
							</div>
						</div>
						<figcaption class="work-caption">
							<a href="<?php the_permalink(); ?>"><h6><?php the_title(); ?></h6></a>
						</figcaption>
					</figure>
					</div>
				<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php else : ?>
					<h3 class="align-center">Sorry, my case studies are gone.</h3>
				<?php endif; ?>
			</div>

		</div>
	</section>

	<!-- Other Work -->
	<section class="other-work container">

		<h3>Other Works and Repositories</h3>

		<ul class="nav nav-tabs" id="other-works" role="tablist">
			<li class="nav-item">
				<a href="#posters" class="nav-link active" id="posters-tab" data-toggle="tab" role="tab" aria-contols="posters" aria-selected="true">Posters</a>
			</li>
			<li class="nav-item">
				<a href="#infographics" class="nav-link" id="infographics-tab" data-toggle="tab" role="tab" aria-controls="infographics" aria-selected="false">Infographics</a>
			</li>
			<li class="nav-item">
				<a href="#branding" class="nav-link" id="branding-tab" data-toggle="tab" role="tab" aria-controls="branding" aria-selected="false">Branding</a>
			</li>
			<li class="nav-item">
				<a href="#repos" class="nav-link" id="repos-tab" data-toggle="tab" role="tab" aria-contols="repositories" aria-selected="false">Repositories</a>
			</li>
		</ul>
		
		<div class="tab-content" id="other-worksContent">
			<?php include('inc/otherworks/posters.php'); ?>
			<?php include('inc/otherworks/infographics.php'); ?>
			<?php include('inc/otherworks/branding.php'); ?>
			<?php include('inc/otherworks/github.php'); ?>
		</div>
		
	</section>

</main>

<?php get_footer(); ?>