<?php session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="../resource/css/home.css">  -->
    <link rel="stylesheet" href="../resource/css/sidebar.css">
    <link rel="stylesheet" href="../resource/css/mypayments.css">
    <link rel="stylesheet" href="../resource/css/nav.css">
    <link rel="stylesheet" href="../resource/css/profilepage.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
     <script src="https://kit.fontawesome.com/a076d05399.js"></script>
     <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   
</head>

    <body>
    	
    	<div class="header">
            <div class="logo">
                <h1><b style="color: rgb(13, 13, 189)">B</b>odima<small style="font-size: 14px; color:rgb(13, 13, 189);">   Solution for many problem</small></h1>
            </div>
            <div class="sign">
                <?php if(!isset($_SESSION['email'])){echo '<a href="controller/logingController.php?click1">Sign In <i class="fa fa-sign-in"></i></a>';}?>
                <?php if(isset($_SESSION['email'])){ 
                    ?>
                    <div class="notification"><i class="fa fa-bell"></i></div>
                    <div class="profile"><a href="views/profile.php"> <i  class="fa fa-user-circle"></a></i></div>
                <?php
                    echo '<div class="user">Hi '.$_SESSION['first_name'].'</div>'; 
                    echo '<a href="controller/logoutController.php">Sign out <i class="fa fa-sign-out"></i></a>';}
                ?> 
                
            </div>
        </div>


<?php require "sidebar.php"?>


<div class="bg_profile">
	<div class="nav">
		<div class="nav_topic">
			
		</div>
	</div>
</div>

<div class="content_template">
<div class="content_container" >
 
   <div class="new-order">
        <h5>My Payments</h5>
    </div>
    <div class="pro_inner">
    <div class="item-wrap">
        <h3>Keymoney Payment</h3>
    
    <form action="../controller/orderAcptCon.php" method="post">
      <div class="cart-item">
                        <div class="detail">
                           <div class="product-details">
                            <h5>Amount :</h5>
                            <h5>6000</h5>
                            </div>
                            <div class="product-details">
                            <h5>Reciever : </h5>
                            <h5>Rohani Wickramanayaka</h5>
                                                    </div>
                            <div class="product-details">
                            <h5>Payment mode : </h5>
                            <h5>Online</h5>
                            </div>
                         </div>  
                         <div class="datetime">
                            <div class="date_cont">
                            Date: 2020/05/24
                            </div>
                            <div class="time_cont">
                            Time: 09:10:48
                            </div>
                         </div>
          </div>
      </form>
                    
                </div>
            </div>


  <div class="pro_inner">
    <div class="item-wrap">
        <h3>Rent Payment- September</h3>
    
    <form action="../controller/orderAcptCon.php" method="post">
      <div class="cart-item">
                        <div class="detail">
                           <div class="product-details">
                            <h5>Amount :</h5>
                            <h5>8000</h5>
                            </div>
                            <div class="product-details">
                            <h5>Reciever : </h5>
                            <h5>Rohani Wickramanayaka</h5>
                                                    </div>
                            <div class="product-details">
                            <h5>Payment mode : </h5>
                            <h5>Handover</h5>
                            </div>
                         </div>  
                         <div class="datetime">
                            <div class="date_cont">
                            Date: 2020/09/10
                            </div>
                            <div class="time_cont">
                            Time: 16:30:04
                            </div>
                         </div>
                  </div>
                </form>    
      </div>
    </div>







            </div>
    </div>
  </div>



</body>
</html>