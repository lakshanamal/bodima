<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
      <link rel="stylesheet" type="text/css" href="../resource/Styles/StyleSheet.css" />

      <link rel="stylesheet" href="../resource/css/card1.css">
    <link rel="stylesheet" href="../resource/css/nav.css">
    <link rel="stylesheet" href="../resource/css/footer.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $title; ?></title>
        
    </head>
    <body>
      <?php include 'nav.php' ?>
         
           <!--  <div class="header"> 
              <div class="row">
                <div class="header_title">
                    <h1>Bodima.lk</h1>
                </div> -->
              <!--  <div class="user_signin_login">-->

                <!-- <div class="user_block">
                   <div class="profile">
                     <img src="../resource/Images/profile_img2.jpg" alt="Profile Image" class="prof_img"><br/>
                     <div class="profile_dropdown">
                        <button class="dropbtn">profile</button>
                        <div class="profile_dropdown-content">
                          <a href="../index.php">Go to profile</a>
                          <a href="#">Edit profile</a>
                          <a href="#">Post New Ads</a>
                          <a href="#">My Ads</a>
                          <a href="foodposts.php">Order food</a>
                          <a href="#">Logout</a>
                        </div>
                      </div> -->
                     
                  <!-- <button class="button_signUp">Sign Up</button> 
                  <button class="button_logIn">Log In</button>  -->
                <!--</div>-->
                  <!--  </div>
                </div>
                <div class="icon_block">
                    <span class="material-icons">notification_important</span>
                     <span class="material-icons">reorder</span> 
                     <span class="material-icons">analytics</span>
                </div>
              </div>
            </div>
            
            <nav class="menu_bar">
                <ul class="menu">
                    <li><a href="../bodima/new/home_page">Home</a></li>
                    <li><a href="Boardings.php">Boarding</a></li>
                    <li><a href="AboutUs.php">About Us</a></li> -->
                    <!-- comment after testing -->
                    <!-- <li><a href="BoardingPage.php">boarding page</a></li> -->
                    <!-- ********************* -->
                    <!-- <div class="search-container">
                        <form action="/action_page.php">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </ul>
            </nav> -->
             
<div class="row">
    
  <div class="col-9 col-s-9 content">
      
               <?php echo $content; ?>
  </div>
</div>
        
        
<?php include 'footer.php'?>
<script src="../resource/js/home1.js"></script>
<script src="../resource/js/jquery.js"></script>
    </body>
</html>

