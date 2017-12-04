<!DOCTYPE html>
<html>
<head>
	<title>Masuk sistem</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="script.js"></script>
</head>
<body>

  <div class="wrapper">
  <form class="login" action="masuk.php" method="post">
    <p class="title">Member Area</p>
    <input type="text" placeholder="Username" name="user_member" autofocus/>
    <i class="fa fa-user"></i>
    <input type="password" placeholder="Password" name="password_member" />
    <i class="fa fa-key"></i>
    <a href="#">Lupa password?</a><br>
    <a href="public/member/daftar/daftar.php">Belum punya akun?</a>
    <button>
      <i class="spinner"></i>
      <span class="state">Masuk</span>
    </button>
  </form>
  </p>
</div>

</body>
</html>