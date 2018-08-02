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
				<div class="col-12 col-md-8 offset-md-2">
					<div class="casestudy--form-container">
						<h4>Request Case Studies</h4>
						<p class="mb-2">If you are interested in viewing my detail design process and casestudies, please complete and submit the form to request. Feel free to view my other work below.</p>
						<hr>
						<?php 
							Ninja_Forms()->display( 5, false )
						?>
					</div>
				</div>
				
			</div>

		</div>
	</section>

	<!-- Other Work -->
	<section class="other-work container">

		<h3>Other Works and Repositories</h3>

		<ul class="nav nav-tabs" id="other-works" role="tablist">
			<li class="nav-item">
				<a href="#uxui" class="nav-link active" id="uxui-tab" data-toggle="tab" role="tab" aria-contols="uxui" aria-selected="true">UX/UI</a>
			</li>
			<li class="nav-item">
				<a href="#posters" class="nav-link" id="posters-tab" data-toggle="tab" role="tab" aria-contols="posters" aria-selected="false">Posters</a>
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
			
				<?php include('inc/otherworks/ux-ui.php'); ?>
				<?php include('inc/otherworks/posters.php'); ?>
				<?php include('inc/otherworks/infographics.php'); ?>
				<?php include('inc/otherworks/branding.php'); ?>
				<?php include('inc/otherworks/github.php'); ?>

		</div>
		
	</section>

</main>

<?php get_footer(); ?>