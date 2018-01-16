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

	<?php 
		
		$url = 'https://teamtreehouse.com/weeblewobb.json';

		$process = curl_init($url);
		curl_setopt($process, CURLOPT_RETURNTRANSFER, 1);

		$return = curl_exec($process);
		$results = json_decode($return, true);

		// echo $results["badges"][0]["name"];

		foreach ($results["badges"] as $skill) {

			$date = new DateTime($skill["earned_date"]);

			echo '<div class="col-6 col-lg-4">'
					. '<figure class="skill">'
						. '<img class="img-fluid" src="' . $skill["icon_url"] . '">'
						. '<figcaption class="skill-caption">'
							. '<h6 class="color-red">' . $skill["name"] . '</h6>'
							. '<p>' . $date->format('m-d-Y') . '</p>'
						. '</figcaption>'
					. '</figure>'
				. '</div>';

		}

		curl_close($process);

	?>

</div>
<!-- End About Content -->