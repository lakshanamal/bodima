<?php session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="resource/css/home.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
   
    </head>

<body >
    <div class="container" id="container">
        <div class="header">
            <div class="logo">
                <h1><b style="color: rgb(13, 13, 189)">B</b>odima<small style="font-size: 14px; color:rgb(13, 13, 189);">   Solution for many problem</small></h1>
            </div>
            <div class="sign">
                
                <?php if(!isset($_SESSION['email'])){echo '<a href="controller/logingController.php?click1">Sign In <i class="fa fa-sign-in"></i></a>';}?>
                <?php if(isset($_SESSION['email'])){ 
                    if($_SESSION['level']=='administrator'){echo '<a href="controller/adminPanelCon.php?admin"> Dash Board &nbsp</a>'; }
                    ?>
                    
                    <div class="notification"><i class="fa fa-bell"></i></div>
                    <div class="profile"><a href="views/profilepage.php"> <i  class="fa fa-user-circle"></a></i></div>
                <?php
                    echo '<div class="user">Hi '.$_SESSION['first_name'].'</div>'; 
                    echo '<a href="controller/logoutController.php">Sign out <i class="fa fa-sign-out"></i></a>';}
                ?> 
                
            </div>
        </div>
        <div class="nav">
            <ul class="nav_bar">
            <?php if(isset($_SESSION['email'])){echo  '<li class="nav_item" alt="Profile"><a href="views/profilepage.php">
                    <i class="fa fa-bars" style="font-size: 1.5em; color: #E5E7E9;"></i></a></li>';} ?>
                <li class=" nav_item "><a href="# "><i class=" fa fa-home"></i>Home</a></li>
                <li class="nav_item "><a href="views/boardings.php"><i class="fa fa-bed"></i> Boardings</a></li>
                <?php if(isset($_SESSION['email']))
                { 
                    if($_SESSION['level']=="food_supplier")
                    {
                       echo '<li class="nav_item "><a href="controller/orderAcptCon.php?click"><i class="fa fa-clone"></i> Orders</a></li>';
                    }
                    if($_SESSION['level']=='boardings_owner')
                    {
                        echo '<li class="nav_item "><a href="views/request.php"><i class="fa fa-clone"></i> Request</a></li>';
                    }
                    // if($_SESSION['level']=="boarder"  || $_SESSION['level']=="boardings_owner" )
                     echo '<li class="nav_item "><a href="views/foodposts.php"><img style="height:17px; height:17px; " src="resource/img/hamburger-solid.svg"></i> Order Foods</a></li>';
                }
                    ?>
                <li class="nav_item "><a href="views/about.php"><i class="fa fa-address-card"></i> About us</a></li>
                <li class="nav_item "><a href="# "><i class="fa fa-address-book"></i> Contact Us</a></li>
                <?php if(!isset($_SESSION['email'])){ echo '<li style="background-color:#3f3941" class="nav_item "><a  href="views/register.php"><i class="fa fa-user-plus"></i>  Register</a></li>'; }?>
            </ul>
        </div>
        <div class="container_warper1">
            <div class="para1">
                <h1><img src="./resource/img/hand-point-right-solid.svg" alt=""></i> Are you Still looking for a boarding ?</h1>
                <h1><img src="./resource/img/hand-point-right-solid.svg" alt=""></i> Couldn't find a suitable place ? </h1>
                <h1><img src="./resource/img/hand-point-right-solid.svg" alt=""></i> Was it a waste of money and time ?</h1>
                <h1 class="reg">Try Our Solution</h1>
                <?php if(!isset($_SESSION['email'])) 
                    echo '<div class="btn1"> <a href="views/register.php"><i class="fa fa-user-plus"></i> Register</a></div>';
                else
                    echo '<div class="btn1"> <a href="views/boardings.php"><i class="fa fa-bed"></i> Search </a></div>';
                     ?>
            </div>
            <div class="para2">
               <!-- <img src="./img/test4.jpg" alt=""> -->
                
            </div>
        </div>
        <div class="container_warper2">
            <div class="para3">
                <!-- <img class="img2-apper" src="./img/test4.jpg" alt=""> -->
            </div>
            <div class="para4">
                <h1><img src="./resource/img/hand-point-right-solid.svg" alt=""> Want to increase the number of food orders at your restaurant ?</h1>
                <h1><img src="./resource/img/hand-point-right-solid.svg" alt=""> Is it possible to deliver food orders ?</h1>
                <h1 class="reg">We have solution !</h1>
                <?php if(!isset($_SESSION['email'])) 
                    echo '<div class="btn1"> <a href="views/register.php"><i class="fa fa-user-plus"></i> Register</a></div>';
                else
                    echo '<div class="btn1"> <a href="views/boardings.php"><i class="fa fa-buysellads"></i> Add post</a></div>';
                     ?>
            </div>
        </div>
        <div class="container_warper3">
            <div class="para5">
                <h1><img src="./resource/img/hand-point-right-solid.svg" alt=""> Looking for a lease on board ?</h1>
                <h1><img src="./resource/img/hand-point-right-solid.svg" alt=""> Was it useless to publish advertisements ? </h1>
                <!-- <h1><img src="./resource/img/hand-point-right-solid.svg" alt=""> Not found ?</h1> -->
                <h1 class="reg">We have solution !</h1>
                <?php if(!isset($_SESSION['email'])) 
                    echo '<div class="btn1"> <a href="views/register.php"><i class="fa fa-user-plus"></i> Register</a></div>';
                else
                    echo '<div class="btn1"> <a href="views/boardings.php"><i class="fa fa-buysellads"></i> Add post</a></div>';
                     ?>
            </div>
            <div class="para6">

            </div>
        </div>
    </div>
    <div class="footer">

        <div class="grid-container">
            <div class="grid-item">
            <h3>Project Bodima</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi ab sed recusandae possimus adipisci nobis reiciendis dicta placeat? Eos.
            </p>
            </div>
            <div class="grid-item">
                <h3>Contact Us</h3>
                <ul>
                    <li><i style="color: blue;" class="fa fa-map-marker fa-lg"></i>  UCSC Building Complex, 35 Reid Ave, Colombo 7</li>
                    <li><i style="color: blue;" class="fa fa-phone fa-lg"></i>  +94 0119999999</li>
                    <li><i style="color: blue;" class="fa fa-paper-plane fa-lg"></i>  Projectbodima4group12@gmail.com</li>
                </ul>
            </div>
            <div class="grid-item">
                <h3>About Us</h3>
                <ul>
                    <li><i style="color: blue;" class="fa fa-user fa-lg"> </i>  Anuki alwis</li>
                    <li><i style="color: blue;" class="fa fa-user fa-lg"> </i>  Ishan resmika</li>
                    <li><i style="color: blue;" class="fa fa-user fa-lg"> </i>  Nimasha Supunpaba</li>
                    <li><i style="color: blue;" class="fa fa-user fa-lg"> </i>  Amal lakshan</li>
                </ul>
            </div>

        </div>
        <div class="follow">
            <h2>Follow Us</h2>
           <div class="social">
            <a href="index.php"><i class="fa fa-linkedin fa-2x"></i></a>
            <a href="index.php"><i class="fa fa-facebook-f fa-2x"></i></a>
            <a href="index.php"><i class="fa fa-twitter fa-2x"></i></a>
            <a href="index.php"><i class="fa fa-whatsapp fa-2x"></i></a>
           </div>
        </div>
        <div class="copyright">
            <h2>© 2020 copyright all right reserved</h2>
        </div>
    </div>

</body>
<script src="resource/js/home1.js"></script>
<script src="resource/js/jquery.js"></script>
</html>

