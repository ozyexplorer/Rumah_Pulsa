<?php 
	include 'public/koneksi/koneksi.php';
	
	$username = $_POST['user_member'];
	$password = $_POST['password_member'];


	$query = mysqli_query($koneksi, "SELECT * FROM member WHERE user_member='$username' AND password_member='$password'");
	$cek = mysqli_num_rows($query);


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
		include 'public/cek_saldo/ceksaldo.php';
	?>
	<nav>
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Transaksi</a></li>
			<li><a href="#">Contact Us</a></li>
			<li><a href="#">Saldo anda : <?php echo $data ?></a></li>
		</ul>
	</nav>

	<?php
		
		require_once 'public/daftar_harga/daftar_harga.php';		
	?>

	

</body>
</html>
	