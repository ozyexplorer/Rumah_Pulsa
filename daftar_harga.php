<?php  
	include 'public/koneksi/koneksi.php';
	$query = mysqli_query($koneksi, "SELECT * FROM member");
	$row = mysqli_fetch_array($query);
	$id=37180; //ID Member hanya angka
	$key=$row['key_api']; //KEY 
	$api=$row['secret_api']; //API
	$url = "https://xp.sindonesia.net/api/daftar_harga.php";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POSTFIELDS, "id=".$id."&key=".$key."&api=".$api);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$output = curl_exec($ch);
	curl_close($ch);

	echo $output;
?>