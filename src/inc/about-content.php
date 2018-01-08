<!-- Process Page Conditional -->
<?php if(is_single('process')) { ?>
	<!-- Process Content -->
	<?php if(have_posts()) : $number = 1; while(have_posts()) : the_post(); ?>
		<div class="row about-detail-content">
			<aside class="col-4 about-content-left is-process">
				<h5><?php echo "0" . $number++ . "."; ?></h5>
			</aside>
			<article class="col-8 about-content-right">
				<!-- Detail Custom Field Goes here -->
				<h5 class="color-red">Title</h5>
				<strong>Sub Title</strong>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				<strong>Sub Title</strong>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
			</article>
		</div>
	<?php endwhile; else : ?>
		<div class="col-12">
			<h4 class="text-center">Sorry, something went wrong and the content isn't showing up.</h4>
		</div>
	<?php endif; ?>
	<!-- End Process Content -->

<!-- Personal Page Conditional -->
<?php } elseif(is_single('personal')) { ?>
	<!-- Personal Content -->
	<div class="row my-3">
		<div class="col-12">
			<h6 class="color-red">Filter Check-Ins</h6>
		</div>
		<div class="form-group col-12 col-lg-4">
			<select class="form-control" id="exampleFormControlSelect1">
				<option>All Styles</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
			</select>
		</div>
		<div class="form-group col-12 col-lg-4">
			<select class="form-control" id="exampleFormControlSelect1">
				<option>All Breweries</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
			</select>
		</div>
		<div class="form-group col-12 col-lg-4">
			<select class="form-control" id="exampleFormControlSelect1">
				<option>All Ratings</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
			</select>
		</div>
  	</div>

	<div class="row about-detail-content">
		<div class="col-12 col-lg-9">
			<article class="brew">
				<header class="brew-head">
					<div class="media">
						<img class="mr-3 img-fluid" src="https://placehold.it/90x90">
						<div class="media-body">
							<h6 class="color-red">Rare Bourbon County Brand Stout (2010)</h6>
							<p>Goose Island Beer Co.</p>
							<p>Stout - American Imperial / Double</p>
						</div>
					</div>
				</header>
				<div class="brew-body">
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod sed diam nonummy. Lorem ipsum dolor sit amet.</p>
				</div>
				<footer class="brew-meta">
					<ul>
						<li>13% ABV</li>
						<li>60 IBU</li>
						<li>(5.00)</li>
						<li>Checked-in: 11/26/10</li>
					</ul>
				</footer>
			</article>
			<article class="brew">
				<header class="brew-head">
					<div class="media">
						<img class="mr-3 img-fluid" src="https://placehold.it/90x90">
						<div class="media-body">
							<h6 class="color-red">Rare Bourbon County Brand Stout (2010)</h6>
							<p>Goose Island Beer Co.</p>
							<p>Stout - American Imperial / Double</p>
						</div>
					</div>
				</header>
				<div class="brew-body">
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod sed diam nonummy. Lorem ipsum dolor sit amet.</p>
				</div>
				<footer class="brew-meta">
					<ul>
						<li>13% ABV</li>
						<li>60 IBU</li>
						<li>(5.00)</li>
						<li>Checked-in: 11/26/10</li>
					</ul>
				</footer>
			</article>
			<article class="brew">
				<header class="brew-head">
					<div class="media">
						<img class="mr-3 img-fluid" src="https://placehold.it/90x90">
						<div class="media-body">
							<h6 class="color-red">Rare Bourbon County Brand Stout (2010)</h6>
							<p>Goose Island Beer Co.</p>
							<p>Stout - American Imperial / Double</p>
						</div>
					</div>
				</header>
				<div class="brew-body">
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod sed diam nonummy. Lorem ipsum dolor sit amet.</p>
				</div>
				<footer class="brew-meta">
					<ul>
						<li>13% ABV</li>
						<li>60 IBU</li>
						<li>(5.00)</li>
						<li>Checked-in: 11/26/10</li>
					</ul>
				</footer>
			</article>
			<article class="brew">
				<header class="brew-head">
					<div class="media">
						<img class="mr-3 img-fluid" src="https://placehold.it/90x90">
						<div class="media-body">
							<h6 class="color-red">Rare Bourbon County Brand Stout (2010)</h6>
							<p>Goose Island Beer Co.</p>
							<p>Stout - American Imperial / Double</p>
						</div>
					</div>
				</header>
				<div class="brew-body">
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod sed diam nonummy. Lorem ipsum dolor sit amet.</p>
				</div>
				<footer class="brew-meta">
					<ul>
						<li>13% ABV</li>
						<li>60 IBU</li>
						<li>(5.00)</li>
						<li>Checked-in: 11/26/10</li>
					</ul>
				</footer>
			</article>
		</div>
		<aside class="col-3 brew-stats-container">
			<div class="brew-stats">
				<h6>120</h6>
				<p>Badges</p>
			</div>
			<div class="brew-stats">
				<h6>320</h6>
				<p>Friends</p>
			</div>
			<div class="brew-stats">
				<h6>1023</h6>
				<p>Unique Check-ins</p>
			</div>
			<div class="brew-stats">
				<h6>2045</h6>
				<p>Total Beers</p>
			</div>
			<div class="brew-stats">
				<h6>567</h6>
				<p>Photos</p>
			</div>
		</aside>
	</div>
	<!-- End About Content -->

<!-- Experience Page Conditional -->
<?php } elseif(is_single('skills')) { ?>
	<!-- Experience Content -->
	<div class="row my-3">
		<div class="form-group col-12 col-lg-4">
			<label for="exampleFormControlSelect1">Filter by Language</label>
			<select class="form-control" id="exampleFormControlSelect1">
				<option>All</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
			</select>
		</div>
		</div>
	<div class="row about-detail-content">
		<div class="col-6 col-lg-4">
			<figure class="skill">
				<img class="img-fluid" src="https://placehold.it/600x600">
				<figcaption class="skill-caption">
					<h6 class="color-red">Tree House Badge</h6>
					<p>Achieved Aug 8th 2017</p>
				</figcaption>
			</figure>
		</div>
		<div class="col-6 col-lg-4">
			<figure class="skill">
				<img class="img-fluid" src="https://placehold.it/600x600">
				<figcaption class="skill-caption">
					<h6 class="color-red">Tree House Badge</h6>
					<p>Achieved Aug 8th 2017</p>
				</figcaption>
			</figure>
		</div>
		<div class="col-6 col-lg-4">
			<figure class="skill">
				<img class="img-fluid" src="https://placehold.it/600x600">
				<figcaption class="skill-caption">
					<h6 class="color-red">Tree House Badge</h6>
					<p>Achieved Aug 8th 2017</p>
				</figcaption>
			</figure>
		</div>
		<div class="col-6 col-lg-4">
			<figure class="skill">
				<img class="img-fluid" src="https://placehold.it/600x600">
				<figcaption class="skill-caption">
					<h6 class="color-red">Tree House Badge</h6>
					<p>Achieved Aug 8th 2017</p>
				</figcaption>
			</figure>
		</div>
		<div class="col-6 col-lg-4">
			<figure class="skill">
				<img class="img-fluid" src="https://placehold.it/600x600">
				<figcaption class="skill-caption">
					<h6 class="color-red">Tree House Badge</h6>
					<p>Achieved Aug 8th 2017</p>
				</figcaption>
			</figure>
		</div>
		<div class="col-6 col-lg-4">
			<figure class="skill">
				<img class="img-fluid" src="https://placehold.it/600x600">
				<figcaption class="skill-caption">
					<h6 class="color-red">Tree House Badge</h6>
					<p>Achieved Aug 8th 2017</p>
				</figcaption>
			</figure>
		</div>
	</div>
	<!-- End About Content -->

<!-- Experience Page Conditional -->	
<?php } elseif('experience') { ?>

	<!-- Labels -->
	<div class="row about-detail-labels">
		<div class="col-4 text-right">
			<h6>Timeline</h6>
		</div>
		<div class="col-8 color-grey">
			<h6>Resum&eacute;</h6>
		</div>
	</div>
	<!-- End Labels -->

	<!-- About Content will be pulled from LinkedIn API -->
	<div class="row about-detail-content">
		<aside class="col-4 about-content-left">
			<p>Aug 2016 - Present</p>
			<p>1 yr 4 mos</p>
		</aside>
		<article class="col-8 about-content-right">
			<h6 class="color-red">Interactive Designer</h6>
			<p>Synchrony Group<br> West Chester, PA</p>
			<ul>
				<li>Manage and facilitate day to day digital operations</li>
				<li>Oversees digital projects and processes</li>
				<li>Design of interactive and digital projects: [Website Redesigns, Apps, Sales Training]</li>
				<li>Development in CMS [WordPress]</li>
				<li>Development in front-end languages and frameworks: [HTML, CSS, JS, Bootstrap, Foundation]</li>
				<li>Development in back-end languages and methodologies: [PHP, AJAX, JSON, ASP.NET]</li>
				<li>Management of digital projects and deliverables</li>
				<li>Understanding and implementation of User Experience techniques and best practices</li>
				<li>Facilitate client’s product visions by researching, conceiving, wireframing, sketching, prototyping, and mocking up user experiences for digital products.</li>
				<li>Identify design problems and devise elegant solutions.</li>
			</ul>
		</article>
	</div>
	<div class="row about-detail-content">
		<aside class="col-4 about-content-left">
			<p>Aug 2016 - Present</p>
			<p>1 yr 4 mos</p>
		</aside>
		<article class="col-8 about-content-right">
			<h6 class="color-red">Designer</h6>
			<p>QVC<br> West Chester, PA</p>
			<ul>
				<li>Manage and facilitate day to day digital operations</li>
				<li>Oversees digital projects and processes</li>
				<li>Design of interactive and digital projects: [Website Redesigns, Apps, Sales Training]</li>
				<li>Development in CMS [WordPress]</li>
				<li>Development in front-end languages and frameworks: [HTML, CSS, JS, Bootstrap, Foundation]</li>
				<li>Development in back-end languages and methodologies: [PHP, AJAX, JSON, ASP.NET]</li>
				<li>Management of digital projects and deliverables</li>
				<li>Understanding and implementation of User Experience techniques and best practices</li>
				<li>Facilitate client’s product visions by researching, conceiving, wireframing, sketching, prototyping, and mocking up user experiences for digital products.</li>
				<li>Identify design problems and devise elegant solutions.</li>
			</ul>
		</article>
	</div>
	<!-- End About Content -->
<?php } else { ?>
	
	<div class="row about-detail-content">
		<div class="col-12 col-md-10 offset-md-1">
			<?php if(have_posts()) : while(have_posts()) : the_post() ?>

				<?php the_content(); ?>
				
			<?php endwhile; else : ?>
				
			<?php endif; ?>
		</div>
	</div>

<?php } ?>