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
     <span>Transaksi</span>RUMAH PULSA</h1><span> <i class='fa fa-paint-brush'></i> + <i class='fa fa-code'></i> by <a href='http://andytran.me'>Barrur Rhozi</a></span>
</div>
<!-- Portfolio--><a id="portfolio" href="http://andytran.me/" title="View my portfolio!"><i class="fa fa-link"></i></a>
<!-- CodePen--><a id="codepen" href="https://codepen.io/andytran/" title="Follow me!"><i class="fa fa-codepen"></i></a>
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
          <h1 class="active">Sign In</h1>
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
        <footer class="footer"><a href="#">Forgot your password?</a></footer>
      </div>
      <p>Not registered? <a class="toggle" href="#">Sign up</a></p>
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
          <h1 class="active">Sign In</h1>
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
        <footer class="footer"><a href="#">Forgot your password?</a></footer>
      </div>
      <p>Not registered? <a class="toggle" href="#">Sign up</a></p>
    </div>
  </div>
</div>
<!-- Tip-->
<div id="tip">
  <h1>How to create a form?</h1>
  <p>It's really simple... If you have basic knowledge of Jade. Simple fill out the paramaters in the mixin below, drop it below this box, and watch as magic happens!</p><code>
    <h1>Jade</h1>
    <p> 
      Please note that these are case sensitive. <br>
      /* Mixin Guide<br>
      * Form Container Mixin<br>
      * +form-container<br>
      *<br>
      * Form Mixin<br>
      * +form('name', 'width', 'color', 'style')<br>
      *<br>
      * Input Mixin<br>
      * +input('type', 'name', 'placeholder', 'label')<br>
      *<br>
      * Button Mixin<br>
      * +button('label')<br>
      */<br><br>
    </p>
    <p><span>+form-container</span></p>
    <p><span>+form</span><span>.active</span>(<span>'name'</span>, <span>'width'</span>, <span>'color'</span>, <span>'style'</span>)</p>
    <p><span>+input</span>(<span>'type'</span>, <span>'name'</span>, <span>'placeholder'</span>, <span>'label'</span>)</p>
    <p><span>+input</span>(<span>'type'</span>, <span>'name'</span>, <span>'placeholder'</span>, <span>'label'</span>)</p>
    <p><span>+button</span>(<span>'label'</span>)</p>
    <p><span>+form</span>(<span>'name'</span>, <span>'width'</span>, <span>'color'</span>, <span>'style'</span>)</p>
    <p><span>+input</span>(<span>'type'</span>, <span>'name'</span>, <span>'placeholder'</span>, <span>'label'</span>)</p>
    <p><span>+input</span>(<span>'type'</span>, <span>'name'</span>, <span>'placeholder'</span>, <span>'label'</span>)</p>
    <p><span>+button</span>(<span>'label'</span>)</p>
    <P><span>p</span> Not registered? </P>
    <P><span>a</span><span>.toggle</span>(<span>href</span>='#') Sign up</P></code>
  <h1>Browser Support?</h1>
  <p>Tested on the latest versions of <b>Chrome</b>, <b>Firefox</b>, <b>Safari</b>, <b>Internet Explorer</b>, &amp; <b>Opera</b>.</p>
  <p>Best viewed in Chrome because... I said so.</p>
</div>
<!-- Portfolio--><a id="portfolio" href="http://andytran.me/" title="View my portfolio!"><i class="fa fa-link"></i></a>
<!-- CodePen--><a id="codepen" href="https://codepen.io/andytran/" title="Follow me!"><i class="fa fa-codepen"></i></a>
<!-- Scroll To Bottom--><a id="scrollToBottom" href="#tip" title="Check out the tutorial!"><i class="material-icons">&#xE313;</i></a>
</div>

	<script type="text/javascript" src="script.js"></script>
</body>
</html>