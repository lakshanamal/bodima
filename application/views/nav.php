<div class="container" id="container">
        <div class="header">
            <div class="logo">
                <h1><b style="color: rgb(13, 13, 189)">B</b>odima<small style="font-size: 14px; color:rgb(13, 13, 189);">   Solution for many problem</small></h1>
            </div>
            <div class="sign">
                <?php if(!isset($_SESSION['email'])){echo '<a href="../controller/logingController.php?click1">Sign In <i class="fa fa-sign-in"></i></a>';}?>
                <?php if(isset($_SESSION['email'])){ 
                    if($_SESSION['level']=='administrator'){echo '<a href="../controller/adminPanelCon.php?admin"> Dash Board &nbsp</a>'; }
                    ?>

                    <div class="notification"><i class="fa fa-bell"></i></div>
                    <div class="profile"><a href="profile.php"> <i  class="fa fa-user-circle"></a></i></div>
                <?php
                    echo '<div class="user">Hi '.$_SESSION['first_name'].'</div>'; 
                    echo '<a href="../controller/logoutController.php">Sign out <i class="fa fa-sign-out"></i></a>';}
                ?> 
                
            </div>
        </div>
        <div class="nav">
            <ul class="nav_bar">
            <?php if(isset($_SESSION['email'])){echo  '<li class="nav_item" alt="Profile"><a href="../views/profilepage.php">
                    <i class="fa fa-bars" style="font-size: 1.5em; color: #E5E7E9;"></i></a></li>';} ?>
                <li class=" nav_item "><a href="../index.php"><i class=" fa fa-home"></i>Home</a></li>
                <li class="nav_item "><a href="boardings.php"><i class="fa fa-bed"></i> Boardings</a></li>
                <?php if(isset($_SESSION['email']))
                { 
                    if($_SESSION['level']=="food_supplier")
                    {
                       echo '<li class="nav_item "><a href="../controller/orderAcptCon.php?click"><i class="fa fa-clone"></i> Orders</a></li>';
                    }
                    if($_SESSION['level']=='boardings_owner')
                    {
                        echo '<li class="nav_item "><a href="request.php"><i class="fa fa-clone"></i> Request</a></li>';
                    }
                    // if($_SESSION['level']=="boarder"  || $_SESSION['level']=="boardings_owner" )
                     echo '<li class="nav_item "><a href="foodposts.php"><img style="height:17px; height:17px; " src="../resource/img/hamburger-solid.svg"></i> Order Foods</a></li>';
                }
                    ?>
                <li class="nav_item "><a href="../views/about.php "><i class="fa fa-address-card"></i> About us</a></li>
                <li class="nav_item "><a href="# "><i class="fa fa-address-book"></i> Contact Us</a></li>
                <?php if(!isset($_SESSION['email'])){ echo '<li style="background-color:#3f3941" class="nav_item "><a  href="../views/register.php"><i class="fa fa-user-plus"></i>  Register</a></li>'; }?>
            </ul>
        </div>