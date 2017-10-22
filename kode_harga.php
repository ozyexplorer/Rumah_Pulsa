<?php 
	$link = "http://localhost/rangga/masuk.php";
	$json = file_get_contents($link);
	$a = json_decode($json, true);
	$data = $a[0]['kode'];

	echo $data;

?>