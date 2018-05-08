<?php
header('Content-Type: application/json');

	$url = 'http://widedictionary.gigfa.com/wideDictionary/public/index.php/api/customer/word';
	# An HTTP GET request example
	$json = file_get_contents($url);
	$data = json_decode($json);
	echo $data;

?>