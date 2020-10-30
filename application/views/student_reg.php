<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../resource/css/register.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap">
	<title>Registration Form</title>
	
</head>
<body class="body1">
	<div class="container">
	<div class="para">
			<h1><b>U</b>ser <b>R</b>egistration</h1>
			<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga doloremque sunt nam ipsam nihil quo quidem asperiores quisquam pariatur expedita ducimus, voluptatem nisi, dignissimos recusandae. </p>
	</div>
	<div class="register">
	   <?php
	   if(isset($_GET['param']))
	   {
		   $errors=$_GET['param'];
		   foreach($errors as $error)
		   {
			   echo '<p class="error"><b>'.$error.'</b></p>';
		   }
	   }
	 
	 ?>
		   <form action="../controller/registerCon.php" method="post">
		   <p>Password</p>
		   	<input type="password" name="password" placeholder="Enter Password">
		   	<p>Confirm Password</p>
		   	<input type="password" name="confirmpassword" placeholder="Confirm Password">
		   <div class="agreement">
                     <div class="term"><b>Term and condition</b></div> 
					<textarea name="aggrement" id="1" cols="10" rows="9">1. Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio repudiandae eveniet aut, quia ea labore,                                            2. Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio repudiandae eveniet aut, quia ea labore, quis
					</textarea>
            </div>
                            
            <div class="check">
                 <input id="check"  type="checkbox" name="check">
                 <div class="agree"> I am agree with term and condition</div> 
                 
            </div>
		   
		   	<input id="register" type="submit" name="register_student" value="Register">
		   </form>
	</div>
	</div>
	<script src="../resource/js/main.js"></script>
</body>
</html>