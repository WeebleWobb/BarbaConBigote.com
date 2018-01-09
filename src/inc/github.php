<?php
$username = 'WeebleWobb';
$url = 'https://api.github.com/users/weeblewobb';
$process = curl_init($url);

curl_setopt($process, CURLOPT_USERAGENT, $username);
curl_setopt($process, CURLOPT_RETURNTRANSFER, 1);

$return = curl_exec($process);
$results = json_decode($return);

var_dump($results);

curl_close();


?>