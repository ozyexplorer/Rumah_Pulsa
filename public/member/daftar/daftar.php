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
    <p class="title">DAFTAR MEMBER</p>
    <input type="text" placeholder="Username" name="user_member" autofocus/>
    <i class="fa fa-user"></i>
    <input type="password" placeholder="Password" name="password_member" />
    <i class="fa fa-key"></i>
    <input type="email" placeholder="Email" name="Email" />
    <i class="fa fa-email"></i>
    <input type="text" placeholder="Key API" name="Key" />
    <i class="fa fa-key"></i>
    <input type="email" placeholder="Secret API" name="Secret" />
    <i class="fa fa-secret"></i>
    <button>
      <i class="spinner"></i>
      <span class="state">DAFTAR</span>
    </button>
  </form>
  </p>
</div>

</body>
</html>