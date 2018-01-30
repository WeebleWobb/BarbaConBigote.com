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

<?php 
	
	// Still considering utilizing LinkedIn API
		
	$url = 'https://api.linkedin.com/v1/people/~:(positions)?format=json';

	$clientId = '782oiymnk1mkyj';
	$clientSecret = 'RTaXgbd3qEKu9QLH';

	$auth = 'Authorization: Bearer AQUk7jorh-gaZ011mMy_gvi5TeNkqgIFogkVLLcRcDOPIv-c9hDwfYPVz711KoZ7aKd2zdhCtLfNe1AEXfZQDRNu15tZMARc27e1YUqkCRKtVuIRg4yf1KfE9TIRQK5GTS7N5hlpQ4VWxEBsy-4opaX8PGFUqBIQuNcbgPFWcasYpjbXe7wmNNe5klXTRkzvRTwdoAVL70rBMnskGt98ypAMdRiIyB90VNlnYSdAhEiddciiIokCBfv5XtkAsqQK2K1Vr-LUbmjF4O3K7JTnLsL_hBTMi0gsoQDp6vguErdghBlURf4Q0SmnJOjXCwMyByQMi_JE9y_IU5br-EJ6iNeduThc-Q';

	$process = curl_init($url);
	curl_setopt($process, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $auth ));
	curl_setopt($process, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($process, CURLOPT_RETURNTRANSFER, 1);

	$return = curl_exec($process);
	$results = json_decode($return, true);

	curl_close($process);
?>

<!-- About Content will be pulled from LinkedIn API -->
<?php if(have_rows('linkedin_content')) : while(have_rows('linkedin_content')) : the_row(); ?>

	<div class="row about-detail-content">
		<aside class="col-4 about-content-left">
			<?php the_sub_field('timeline'); ?>
		</aside>
		<article class="col-8 about-content-right">
			<?php the_sub_field('experience_content'); ?>
		</article>
	</div>
<?php endwhile; else : ?>
	<div class="col-12">
		<h4 class="text-center">Sorry, something went wrong and the content isn't showing up.</h4>
	</div>
<?php endif; ?> 
<!-- End About Content -->

