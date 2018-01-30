<!-- Github API -->
<?php
	$user = 'WeebleWobb';
	$login = 'WeebleWobb:The#1man14';
	$url = 'https://api.github.com/user/repos?affiliation=owner&sort=updated';

	$process = curl_init($url);
	curl_setopt($process, CURLOPT_USERAGENT, $user);
	curl_setopt($process, CURLOPT_USERPWD, $login);
	curl_setopt($process, CURLOPT_RETURNTRANSFER, 1);

	$return = curl_exec($process);
	$results = json_decode($return, true);

	// print_r($results);

	curl_close($process);

	echo '<div class="row mb-3">'
		.	 '<div class="col-12 col-md-6">'
		.		 '<h3>Current Repositories (' . count($results) . ')</h3>'
		.	 '</div>'
		.	'<div class="col-12 col-md-6 text-right align-self-center">'
		.		'<a href="https://github.com/WeebleWobb" target="_blank">View GitHub Profile</a>'
		.	'</div>'
		. '</div>'
		. '<div id="repoContainer" class="row">';

		$i = 0;

		foreach($results as $repo) {
			echo '<div class="col-4 repo-flex">'
				. 	'<article class="repos-post">'
				. 		'<a href="'. $repo["html_url"] .'" target="_blank"><h6>' . $repo["name"] . '</h6></a>'
				. 		'<p>' . $repo["description"] . '</p>'
				. 		'<div class="repos-post-meta">' . $repo["language"] . '</div>'
				. 	'</article>'
				. '</div>';

			$i++;
			if($i == 6) break;
		}
		
	echo '</div>';

?>


