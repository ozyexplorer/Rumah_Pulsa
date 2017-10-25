<!DOCTYPE html>
<html>
<head>
	<title>Masuk sistem</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<!-- <h1>LOGIN SISTEM</h1>
	<form action="masuk.php" method="post">
		<input type="text" name="user_member" placeholder="masukan user anda"><br>
		<input type="password" name="password_member" placeholder="masukan password anda"><br>

		<br><br>
		<input type="submit" name="login" value="LOGIN"s>
	</form> -->
	

<!-- Pen Title-->
<div class="pen-title">
  <h1>
     <span>Transaksi</span>RUMAH PULSA</h1><span> <i class='fa fa-paint-brush'></i> + <i class='fa fa-code'></i> by <a href='#'>Barrur Rhozi</a></span>
</div>
<!-- Portfolio--><a id="portfolio" href="#" title="View my portfolio!"><i class="fa fa-link"></i></a>
<!-- CodePen--><a id="codepen" href="#" title="Follow me!"><i class="fa fa-codepen"></i></a>
<!-- Container-->
<div class="container">
  <!-- Column-->
  <div class="col">
    <!-- Form Container-->
    <div class="form-container">
      <style type="text/css">
        .style-1 .header h1 {
          color: #33b5e5;
        }
        
        .style-1 .form-group input:valid,
        .style-1 .form-group input:focus {
          color: #33b5e5;
        }
        
        .style-1 .form-group input:valid ~ .line,
        .style-1 .form-group input:focus ~ .line {
          background: #33b5e5;
        }
        
        .style-1 .button {
          background: #33b5e5;
        }
        
      </style>
      <div class="form style-#{style}" style="width: #{width}">
        <header class="header">
          <h1 class="active">LOGIN</h1>
        </header>
        <form class="active" action="masuk.php" method="post">
          <div class="form-group">
            <input type="text" id="user_member" name="user_member" placeholder="Username" required="required"/>
            <label for="username">Username</label>
            <div class="line"></div>
          </div>
          <div class="form-group">
            <input type="password" id="password_member" name="password_member" placeholder="Password" required="required"/>
            <label for="password">Password</label>
            <div class="line"></div>
          </div>
          <button class="button" name="login">Login</button>
        </form>
        <footer class="footer"><a href="#">Forgot your password?</a></footer>
      </div>
    </div>
  </div>
  <!-- Colum-->
  <div class="col">
    <!-- Form Container-->
    <div class="form-container">
      <style type="text/css">
        .style-2 .header { 
          background: #2c3e50;
        }
        
        .style-2 .form-group input:valid,
        .style-2 .form-group input:focus {
          color: #2c3e50;
        }
        
        .style-2 .form-group input:valid ~ .line,
        .style-2 .form-group input:focus ~ .line {
          background: #2c3e50;
        }
        
        .style-2 .button {
          background: #2c3e50;
        }
        
      </style>
      <div class="form style-#{style}" style="width: #{width}">
        <header class="header">
          <h1 class="active">SIGN UP</h1>
          <h1>Sign Up</h1>
        </header>
        <form class="active">
          <div class="form-group">
            <input type="text" id="username" placeholder="Username" required="required"/>
            <label for="username">Username</label>
            <div class="line"></div>
          </div>
          <div class="form-group">
            <input type="password" id="password" placeholder="Password" required="required"/>
            <label for="password">Password</label>
            <div class="line"></div>
          </div>
          <button class="button">Login</button>
        </form>
        <form>
          <div class="form-group">
            <input type="text" id="username" placeholder="Username" required="required"/>
            <label for="username">Username</label>
            <div class="line"></div>
          </div>
          <div class="form-group">
            <input type="email" id="email" placeholder="Email Address" required="required"/>
            <label for="email">Email Address</label>
            <div class="line"></div>
          </div>
          <div class="form-group">
            <input type="password" id="password" placeholder="Password" required="required"/>
            <label for="password">Password</label>
            <div class="line"></div>
          </div>
          <button class="button">Login</button>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>