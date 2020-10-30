<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../resource/css/register.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  
	<title>Registration Form</title>
	
</head>
<body class="body0">

	<div class="container">
	<div class="para">
			<h1><b>U</b>ser <b>R</b>egistration</h1>
			<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga doloremque sunt nam ipsam nihil quo quidem asperiores quisquam pariatur expedita ducimus, voluptatem nisi, dignissimos recusandae. </p>
	</div>
	<div class="register">
	<!--<img src="img/new1.png" class="registerProfile">-->
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
		   	<p>First Name</p>
		   	<input type="text" name="first_name" placeholder="Enter First Name">

		   	<p>Last Name</p>
		   	<input type="text" name="last_name" placeholder="Enter Last Name">

            <p>NIC</p>
		   	<input type="text" name="nic" placeholder="Enter NIC">

		   	<p>Email Address</p>
			   <input type="email" name="email" placeholder="Enter Email Address">

			<p>Register as</p>
			   <div class="radio">
					<input type="radio" name="level" value="student" checked="checked" id="1">
					<label  for="1">Student</label>
				</div>
				<div class="radio">
					<input type="radio" name="level" value="boardings_owner" id="2">
					<label  for="2">Boarding owner</label>
				</div>
				<div class="radio">
					<input type="radio" name="level" value="food_supplier" id="3">
					<label for="3">food supplier</label>
				</div>
		   	<input type="submit" name="submit" value="Next">
		   </form>
	</div>
</div>
</body>
</html>