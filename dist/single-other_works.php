<?php get_header(); ?>

	<main role="main">
		<section class="container">
			<div class="row mt-5">
				<?php $title_subhead = get_field('title_subhead'); ?>

				<div class="col-12 text-center">
					<h2><?php echo $title_subhead['project_title'] ?></h2>
				</div>
				<div  class="col-12 text-center">
					<h6><?php echo $title_subhead['project_subhead'] ?></h6>
				</div>
			</div>
		</section>

        <section class="otherwork">
			<!-- Section 1 -->
			<div class="container otherwork--container">
				<?php

					$id = get_the_ID(); 
					$terms = get_the_terms($id, 'project_type');
					
					foreach($terms as $term)

						if($term->slug === 'ux-ui') {

							include('inc/otherworks/ux-ui-content.php');

						} elseif($term->slug === 'posters') {
						
							include('inc/otherworks/posters-content.php');

						} elseif($term->slug === 'infographics') { 

							include('inc/otherworks/infographics-content.php');	

						} elseif($term->slug === 'branding') {
							
							include('inc/otherworks/branding-content.php');
							
						} 

				?>

			</div>
        </section>
	</main>

<?php get_footer(); ?>