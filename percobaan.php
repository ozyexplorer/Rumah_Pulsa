<?php 
	$link = "http://localhost/portal/daftar_harga.php";
	$json = file_get_contents($link);
	$a = json_decode($json, true);
	//$data = $a[0]['kode'];

	foreach ($a as $r) {
		echo "Kode : ".$r['kode']." Harga : ".$r['harga']." Nama : ".$r['nama']."<br>";
	}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<select>
 		<option value="Axis">Axis</option>
 		<option value="XL">XL</option>
 		<option value="Isat">Indosat</option>
 		<option value="Tri">Tri</option>
 		<option value="Tsel">Telkomsel</option>
 	</select>
 </body>
 </html>