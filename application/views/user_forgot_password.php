
<!DOCTYPE html>
<html>
<head>
	<title>Bodima</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../resource/css/forgot1.css">
<body >
<div class="container">
<div class="image"><img src="../resource/img/undraw_authentication_fsn5.svg" alt=""></div>
    <div class="para">
		<h1> <b>F</b>orgot <b>P</b>assword</h1>
	</div>
	<div class="forget">
	<div class="header-wrapper">
		<div class="head"><h1>Forgot your password ?</h1></div>
	</div>
	
	<div class="discription">
		<h4>Fill out your email address, and we'll send you link to reset your password.</h4>
	</div>
	
	<div >
		<form  action="../controller/forgotPasswordController.php" method="post" class="feild">
			<label for="email">Email Address :</label>
			<?php 
				if(isset($_GET['param']))
				{
					$errors=$_GET['param'];
					foreach($errors as $error)
					{
						echo '<p class="error"> <b>'.$error.'</b></p>';
					}
				}
			    
            ?>   
            <input type="text" name="email" id="email"  placeholder='e.g.lakshanamal100@gmail.com' >
			<input type="submit" name="submit" value="Sent code to mail ">
		</form>
	</div>
	<!-- <div class="sign"><a href="#">Sign In</a></div> -->
</div>
</div>
</body>
</html>