<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../resource/css/login.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap">
	<title>Login form</title>
	
</head>
<body>
	<div class="image"><img src="../resource/img/login.svg" alt=""></div>
	<div class="container">
		<div class="para">
		<h1><b>U</b>ser <b>L</b>ogin</h1>
		</div>
	<div class="login">
	<img src="../resource/img/new1.png" class="profile">
	   <h1>Login Here</h1>
		   <form action="../controller/logingController.php" method="post">
		   	<?php if(isset(($_GET['errors'])))
		   	{
		   		echo "<p class='error'>Invalid Username / Password</p>";
		   	} ?>
		   
		   	<p>Username</p>
		   	<!-- amal methana bn type eka email enna one-->
		   	<input type="text" name="username" placeholder="Enter Email Address" >
		   	<p>Password</p>
		   	<input type="password" name="password" placeholder="Enter Password">
		   	<input type="submit" name="submit" value="login">
		   	<a href="user_forgot_password.php">Forget Password</a></br>
		   	<a href="register.php">Don't have an account?</a>

		   </form>

		
	</div>
	</div>
</body>
</html>