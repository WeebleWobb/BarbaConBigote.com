<?php 

	include('header.php'); 

?>

<main role="main">
	<section class="index-content">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6">
					<div class="aspot-content">
						<h1 class="color-grey">Barba con Bigote.</h1>
						<h5 class="color-grey">(Beard and Mustache)</h5>
						<hr>
						<h6 class="color-brown">Interactive Designer | Avid Developer | Analytics Enthusiast | User Experience Advocate</h6>
						<p class="color-brown">UX, Design, and Development are skills that require sharpening through out our career. As an Interactive Designer I strive in providing the best possible experience for users that both help and enhance their daily lives.</p>
						<h6 class="color-brown">This is a collection of my <a href="#">work</a>, <a href="#">process</a>, and <a href="#">writings</a>.</h6>
					</div>
				</div>
				<div class="col-12 col-md-5 offset-md-1">
					<div id="featuredWork" class="carousel slide" data-ride="carousel" data-interval="6000">
						<ol class="carousel-indicators">
							<li data-target="#featuredWork" data-slide-to="0" class="active"></li>
							<li data-target="#featuredWork" data-slide-to="1"></li>
							<li data-target="#featuredWork" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<!-- Write wp_query loop to pull 3 case studies -->
							<div class="carousel-item active">
						  		<img class="d-block w-100" src="https://placehold.it/600x400" alt="First slide">
								<div class="carousel-caption">
									<h5 class="color-red">Synchrony Group</h5>
									<p class="color-brown">Web | User Experience | Design | Development</p>
								</div>
							</div>
							<div class="carousel-item">
						  		<img class="d-block w-100" src="https://placehold.it/600x400" alt="Second slide">
						  		<div class="carousel-caption">
									<h5 class="color-red">Synchrony Group</h5>
									<p class="color-brown">Web | User Experience | Design | Development</p>
								</div>
							</div>
							<div class="carousel-item">
						  		<img class="d-block w-100" src="https://placehold.it/600x400" alt="Third slide">
						  		<div class="carousel-caption">
									<h5 class="color-red">Synchrony Group</h5>
									<p class="color-brown">Web | User Experience | Design | Development</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php 
	include('footer.php');
?>