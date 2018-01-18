<?php 
		
		$url = 'https://teamtreehouse.com/weeblewobb.json';

		$process = curl_init($url);
		curl_setopt($process, CURLOPT_RETURNTRANSFER, 1);

		$return = curl_exec($process);
		$results = json_decode($return, true);

?>
<!-- Experience Content -->
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
<div id="points" class="row">
	<?php

		$points = $results["points"];
		$points = array_filter($points, function($val, $key) { 
						return $val !== 0 && $key !== 'total'; 
					},
					ARRAY_FILTER_USE_BOTH
				);

		foreach ($points as $cat => $num) {
			echo '<div class="col-3">'
	  				. '<div class="points">'
	  					. '<p><span class="circle"></span>' . $cat . '<span class="number">' . $num . '</span></p>'
	  				. '</div>'
  				. '</div>';
		}

	?>
</div>
<hr>
<div class="row about-detail-content mt-4">

	<?php

		$results = array_reverse($results["badges"], true);

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

		}

		curl_close($process);

	?>

</div>
<!-- End About Content -->