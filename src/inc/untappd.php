<?php 
	
	$clientId = 'B443B328112B2CE689823416FBBE03353B9497F0';
	$clientSecret = 'F6C3122C0EE5975CC3535EDCB908319116651F5D';
	$url = 'https://api.untappd.com/v4/user/checkins/WeebleWobb?client_id=' . $clientId . '&client_secret=' . $clientSecret;

	$process = curl_init($url);

	curl_setopt_array($process, array(
		CURLOPT_RETURNTRANSFER => 1,
	));

	$return = curl_exec($process);
	$results = json_decode($return, true);

	$total = $results["response"]["checkins"]["count"];
	$checkins = $results["response"]["checkins"]["items"];

	// var_dump($checkins);
?>

<div class="row about-detail-content">
	<div class="col-12 col-lg-9">

		<?php

			foreach($checkins as $checkin) {

				$date = new DateTime($checkin["created_at"]);

				echo '<article class="brew">'
					.	'<header class="brew-head">'
					.		'<div class="media">'
					.			'<img class="mr-3 img-fluid" src="' . $checkin["beer"]["beer_label"] .  '">'
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
					.			'<li>' . $checkin["beer"]["beer_abv"] . '</li>'
					.			'<li>' . $checkin["rating_score"] . '</li>'
					.			'<li> Check-in at: ' . $date->format('M d, Y') . '</li>'
					.		'</ul>'
					.	'</footer>'
					. '</article>';

			}

		?>
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

<?php

	curl_close($process);

?>

<!-- Personal Content -->
</div>
<!-- End About Content -->