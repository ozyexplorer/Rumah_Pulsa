<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<nav>
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Transaksi</a>
				<ul>
					<li><a href="#">Pulsa</a></li>
					<li><a href="#">Token PLN</a></li>
					<li><a href="#">Paket Data</a></li>
					<li><a href="#">Voucher Game</a></li>
				</ul>
			</li>
			<li><a href="#">Daftar Harga</a>
				<ul>
					<li><a href="percobaan.php">Pulsa</a></li>
					<li><a href="#">Token PLN</a></li>
					<li><a href="#">Paket Data</a></li>
					<li><a href="#">Voucher Game</a></li>
				</ul>
			</li>
		</ul>
	</nav>
	<header>
		<h1 class="judul">DAFTAR HARGA PULSA</h1>
	</header>



<?php 
	$link = "http://localhost/rumah_pulsa/daftar_harga.php";
	$json = file_get_contents($link);
	$a = json_decode($json);

	/*foreach ($a as $r) {
		echo $r->nama. " Harga : " . $r->harga;
		echo "<br>";
	}*/

/*
	print_r($a);
	*/
	for ($i=0; $i < 69 ; $i++) { 
		echo $a[$i]->nama . " = " . $a[$i]->harga;
		echo "<br>";
	}

	echo "<br>";


	


	
 ?>
</body>
</html>