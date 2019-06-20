<?php
$url = "https://php.net/releases/?json";

$result = file_get_contents($url);
print_r($result);

$c = curl_init($url);
curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
$fact = curl_exec($c);

print_r($fact);