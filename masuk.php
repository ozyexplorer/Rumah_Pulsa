<?php 
	include 'koneksi.php';
	
	$username = 37180;
	$password = 12345678;


	$query = mysqli_query($koneksi, "SELECT * FROM member WHERE user_member='$username' AND password_member='$password'");
	$cek = mysqli_num_rows($query);


?>

	<?php  
		require_once 'ceksaldo.php';
		echo "<br>"; 
		require_once 'daftar_harga.php';
	?>