<?php 
	include 'public/koneksi/koneksi.php';
	
	$username = $_POST['user_member'];
	$password = $_POST['password_member'];


	$query = mysqli_query($koneksi, "SELECT * FROM member WHERE user_member='$username' AND password_member='$password'");
	$cek = mysqli_num_rows($query);


?>

	<?php  
		require_once 'public/cek_saldo/ceksaldo.php';
		echo "<br>"; 
		require_once 'public/daftar_harga/daftar_harga.php';
	?>