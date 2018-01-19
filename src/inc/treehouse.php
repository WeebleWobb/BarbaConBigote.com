<?php 
			
	$url = 'https://teamtreehouse.com/weeblewobb.json';

	$process = curl_init($url);
	curl_setopt($process, CURLOPT_RETURNTRANSFER, 1);

	$return = curl_exec($process);
	$results = json_decode($return, true);

?>
<!-- Life Long Learner Content -->
<div id="total" class="row my-3">
	<div class="col-6">
		<div class="total-points">
			<h5><span class="color-red">Total Points</span><br>
				<?php 

					$points = $results;
					$totalPoints = array_column($points, 'total');

					foreach($totalPoints as $total ) {
							echo $total;
					}
				?>
			</h5>
		</div>
	</div>
</div>
<hr>

<!-- Course Points -->
<div id="points" class="row">
	<?php

		function rand_color() {
		    return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
		}

		$points = $results["points"];

		$points = array_filter($points, function($val, $key) { 
						return $val !== 0 && $key !== 'total'; 
					},
					ARRAY_FILTER_USE_BOTH
				);

		arsort($points);


		foreach ($points as $cat => $num) {
			echo '<div class="col-3">'
	  				. '<div class="points">'
	  					. '<p><span style="background-color:' . rand_color() . ';" class="circle"></span>' . $cat . '<span class="number">' . $num . '</span></p>'
	  				. '</div>'
  				. '</div>';
		}

	?>
</div>
<hr>

<!-- Treehouse Badges -->
<div class="row about-detail-content mt-4">
	<div class="col-6 mb-3">
		<h5 class="color-red">Latest Badges</h5>
	</div>
	<div class="col-6 text-right">
		<?php

			echo '<a class="btn-scondary" href="' . $results["profile_url"] . '">View Full Profile <i class="fas fa-long-arrow-alt-right"></i></a>'

		?>
	</div>

	<?php

		$results = array_reverse($results["badges"], true);

		$i = 0;

		foreach ($results as $skill) {

			$date = new DateTime($skill["earned_date"]);

			if($skill["courses"] != null) {
				$skillCat = '<p class="small-detail">' . $skill["courses"][0]["title"] . '</p>';
			} else {
				$skillCat = '';
			}

			echo '<div class="col-md-6">'
					. '<figure class="skill">'
						. '<figcaption class="skill-caption">'
							. '<p>Achievement</p>'
							. '<h6 class="color-red">' . $skill["name"] . '</h6>'
							. $skillCat
							. '<p>Achieved</p>'
							. '<p class="small-detail">' . $date->format('M d, Y') . '</p>'
						. '</figcaption>'
						. '<div class="skill-img">'
							. '<img class="img-fluid" src="' . $skill["icon_url"] . '">'
						. '</div>'
					. '</figure>'
				. '</div>';

			$i++;

			if($i == 10) break;

		}

		curl_close($process);

	?>

</div>
<!-- End Life Long Learner Content -->