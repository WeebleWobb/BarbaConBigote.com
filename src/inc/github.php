
<!-- Github API -->
<?php
	
	$user = 'WeebleWobb';
	$login = 'WeebleWobb:The#1man14';
	$url = 'https://api.github.com/user/repos?affiliation=owner';

	$process = curl_init($url);
	curl_setopt($process, CURLOPT_USERAGENT, $user);
	curl_setopt($process, CURLOPT_USERPWD, $login);
	curl_setopt($process, CURLOPT_RETURNTRANSFER, 1);

	$return = curl_exec($process);
	$results = json_decode($return);

	foreach($results as $repo) {
		echo '<div class="col-4">';
		echo '<article class="repos-post">';
		echo '<a href="'. $repo->html_url .'" target="_blank"><h6>' . $repo->name . '</h6></a>';
		echo '<p>' . $repo->description . '</p>';
		echo '<div class="repos-post-meta">' . $repo->language . '</div>';
		echo '</article>';
		echo '</div>';
	}

	curl_close($process);

