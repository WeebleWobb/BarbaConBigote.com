<?php 
	
	// Untappd App Information
	$clientId = 'B443B328112B2CE689823416FBBE03353B9497F0';
	$clientSecret = 'F6C3122C0EE5975CC3535EDCB908319116651F5D';
	$url1 = 'https://api.untappd.com/v4/user/checkins/WeebleWobb?client_id=' . $clientId . '&client_secret=' . $clientSecret;
	$url2 = 'https://api.untappd.com/v4/user/info/WeebleWobb?client_id=' . $clientId . '&client_secret=' . $clientSecret;

	// Creates the cURL init
	$process1 = curl_init($url1);
	$process2 = curl_init($url2);

	// Sets up cURL options
	curl_setopt($process1, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($process2, CURLOPT_RETURNTRANSFER, 1);

	// Creates the multi cURL init and add the handles
	$mh = curl_multi_init();

	curl_multi_add_handle($mh,$process1);
	curl_multi_add_handle($mh,$process2);

	// Exucutes the multi cURL request
	$active = null;

	do {
		$return = curl_multi_exec($mh, $active);
	} while ($active);

	// Removes and closes the handles and request
	curl_multi_remove_handle($mh, $process1);
	curl_multi_remove_handle($mh, $process2);
	curl_multi_close($mh);

	// Gets content and decodes
	$return1 = curl_multi_getcontent($process1);
	$return2 = curl_multi_getcontent($process2);

	$results1 = json_decode($return1, true);
	$results2 = json_decode($return2, true);

	$total = $results1["response"]["checkins"]["count"];
	$checkins = $results1["response"]["checkins"]["items"];
	$stats = $results2["response"]["user"]["stats"];
	
	//print_r($results2);
?>

<div class="row about-detail-content">
	<div class="col-12 mb-3">
		<h5 class="color-red">Latest Check-ins from <a href="https://untappd.com/" target="_blank">Untappd</a></h5>
	</div>
	<div class="col-12 col-lg-9">

		<?php
			
			$i = 0;

			foreach($checkins as $checkin) {

				// Checks to see if there is an image with the Check-in, if not uses placeholder
				if(empty($checkin["media"]["items"])) {
					$photo = get_template_directory_uri() . '/assets/beer-placeholder.png';
				} else {
					$photo = $checkin["media"]["items"][0]["photo"]["photo_img_sm"];
				}

				$date = new DateTime($checkin["created_at"]);

				echo '<article class="brew">'
					.	'<header class="brew-head">'
					.		'<div class="media">'
					.			'<img class="mr-3 img-fluid" src="' . $photo .  '">'
					.			'<div class="media-body">'
					.				'<h6 class="color-red">' . $checkin["beer"]["beer_name"] . '</h6>'
					.				'<p>' . $checkin["brewery"]["brewery_name"] . '</p>'
					.				'<p>' . $checkin["beer"]["beer_style"] . '</p>'
					.			'</div>'
					.		'</div>'
					.	'</header>'
					.	'<div class="brew-body">'
					.		'<p>' . $checkin["checkin_comment"] . '</p>'
					.	'</div>'
					.	'<footer class="brew-meta">'
					.		'<ul>'
					.			'<li>' . $checkin["beer"]["beer_abv"] . '% ABV</li>'
					.			'<li>Rating: ' . $checkin["rating_score"] . '/5</li>'
					.			'<li> Checked-in at: ' . $date->format('M d, Y') . '</li>'
					.		'</ul>'
					.	'</footer>'
					. '</article>';

				$i++;
				if($i == 6) break;

			}

		?>
	</div>

	<aside class="col-3 brew-stats-container">
		<div class="brew-stats">
			<h6><?php echo $stats["total_badges"] ?></h6>
			<p>Badges</p>
		</div>
		<div class="brew-stats">
			<h6><?php echo $stats["total_friends"] ?></h6>
			<p>Friends</p>
		</div>
		<div class="brew-stats">
			<h6><?php echo $stats["total_checkins"] ?></h6>
			<p>Unique <br>Check-ins</p>
		</div>
		<div class="brew-stats">
			<h6><?php echo $stats["total_beers"] ?></h6>
			<p>Total Beers</p>
		</div>
		<div class="brew-stats">
			<h6><?php echo $stats["total_photos"] ?></h6>
			<p>Photos</p>
		</div>
	</aside>

</div>
<!-- End About Content -->