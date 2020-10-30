<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../resource/css/register.css">
	<!-- <link rel="stylesheet" type="text/css" href="../resource/css/forgot1.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap">
	<title>Registration Form</title>
</head>
<body class="body6">
       <div class="container1">
        <div class="paragraph">
           <?php if(isset($_GET['resend']))
           {?>
                <div class="resend">
                <div class="right"><i class="fa fa-check fg-lg"></i></div>
                <div class="letter"><h4>Confirmation resent! Check your email again.</h4></div>
            </div>
          <?php }?>
            <h3><i class="fa fa-envelope-open"></i> You've got a mail</h3>
            <h2><b>C</b>heck <b>Y</b>our <b>E</b>mail </h2>
            <p> We just send a reset password link to <b><?php echo $_GET['email']; ?></b>  Verify your email address </p>
            <form action="../controller/forgotPasswordController.php" method="post">
            <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>" >
            <input type="hidden" name="token" value="<?php echo $_GET['token']; ?>" >
            <button type="submit" name="resend" id='resend' >Resend Confirmetion email <i class="fa fa-arrow-right"></i></button>
            </form>
        </div>
    </div>
</body>
</html>