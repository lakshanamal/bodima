
<!DOCTYPE html>
<html>
<head>
	<title>Bodima</title>
</head>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../resource/css/forgot1.css">
<body >
<div class="image"><img src="../resource/img/happy1.svg" alt=""></div>
 <div class="container">
	 <div class="para">
	     <h1><b>N</b>ew <b>P</b>assword</h1>
	 </div>
	 <div class="new">
    <div class="header-wrapper">
		<div class="head"><h1>Reset your password </h1></div>
	</div>
	<div >
			<form  action="../controller/newPasswordCon.php" method="POST" class="feild-pa">
			<?php 
			if(isset($_GET['param']))
				{
					$errors=$_GET['param'];
					foreach($errors as $error)
					{
						echo '<p  class="error"> <b>'.$error.'</b></p>';
					}
                }
			?>
			<label for="password">Password :</label>
			<input type="password" name="password" id="password" placeholder="Password" >
            <label for="Confirm Password">Confirm Password :</label>
            <input type="Password" name="confirmpassword" id="password" placeholder="Password" >	
			<input type="submit" name="submit" value=" Save Changes ">
		</form>
	</div>
</div>


</body>
</html>