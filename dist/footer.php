<?php if(is_page('work') || is_home() || is_singular(array('case_studies', 'other_works'))) { ?>
 
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-5">
					<h3 class="color-grey">Get in touch, and let’s talk about <span class="rwd-line">your project.</span></h3>
				</div>
				<div class="col-md-7 footer-nav">
					<ul class="nav justify-content-end">
						<?php 
							$menu_items = wp_get_nav_menu_items('Main Nav');

							foreach($menu_items as $menu_item) {
								$title = $menu_item->title;
								$url = $menu_item->url;

								$link = '<li class="nav-item">';
								$link .= '<a class="nav-link" href="' . $url . '">' . $title . '</a>';
								$link .= '</li>';

								echo $link;
							}
						?>
					</ul>
				</div>
			</div>
			<div class="row signoff">
				<div class="col-12 col-md-6">
					<a href="mailto:hola@barbaconbigote.com"><h6>hola@barbaconbigote.com</h6></a>
				</div>
				<div class="col-12 col-md-6">
					<p class="color-grey copyright">&copy; Copyright Juan D. Bolaños <?php echo date('Y'); ?></p>
				</div>
			</div>
		</div>
	</footer>

<?php } ?>

<!-- JS Scripts -->
<?php wp_footer(); ?>
</body>
</html>