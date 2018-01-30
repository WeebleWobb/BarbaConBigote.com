<!-- Github API -->
<?php
	$user = 'WeebleWobb';
	$login = 'WeebleWobb:The#1man14';
	$url = 'https://api.github.com/user/repos?affiliation=owner&sort=created&per_page=6';

	$process = curl_init($url);
	curl_setopt($process, CURLOPT_USERAGENT, $user);
	curl_setopt($process, CURLOPT_USERPWD, $login);
	curl_setopt($process, CURLOPT_RETURNTRANSFER, 1);

	$return = curl_exec($process);
	$results = json_decode($return);

	echo '<div class="row">'
		.	 '<div class="col-12 mb-3">'
		.		 '<h3>Current Repositories (' . count($results) . ')</h3>'
		.	 '</div>'
		. '</div>'
		. '<div id="repoContainer" class="row">';

		foreach($results as $repo) {
			echo '<div class="col-4 repo-flex">'
				. 	'<article class="repos-post">'
				. 		'<a href="'. $repo->html_url .'" target="_blank"><h6>' . $repo->name . '</h6></a>'
				. 		'<p>' . $repo->description . '</p>'
				. 		'<div class="repos-post-meta">' . $repo->language . '</div>'
				. 	'</article>'
				. '</div>';
		}
		
	echo '</div>';

	curl_close($process);
?>


