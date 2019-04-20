<section class="container about-detail-aspot">
	<div class="row">
		<div class="col-12 col-md-8 offset-md-2">
			<div class="detail-aspot-content">
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
						<h2><br><?php the_title(); ?></h2>
						<hr>
						<?php the_content(); ?>
				<?php endwhile; else : ?>
					<div class="col-12">
						<h4 class="text-center">Sorry, something went wrong and the content isn't showing up.</h4>
					</div>
				<?php endif; ?>
				<a href="<?php bloginfo('url')?>/about"><i class="fas fa-long-arrow-alt-left"></i> Back</a>
			</div>
		</div>
	</div>
</section>