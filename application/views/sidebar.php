<!-- <div class="sidebar">
      <div class="profile_info">
        <img src="../resource/Images/a.jpg" class="profile_image" alt="">
        
        <?php// echo '<h4><div class="name_title">'.$_SESSION["first_name"].'</div></h4>';?> 
      </div>
      <li class='side_element'>
        <a href="views/Boardings.php"><i class="fas fa-home"></i><span>Home</span></a>
      </li>

      <li class='side_element'>
        <a href="#"><i class="fas fa-edit"></i><span>Edit Profile</span></a>
      </li>

      <li class='side_element'>
        <a href="#"><i class="fas fa-dollar-sign"></i><span>My Payments</span></a>
      </li>

      <li class='side_element'>
        <a href="#"><i class="fas fa-arrow-circle-left"></i><span>My Requests</span></a>
      </li>

      <li class='side_element'>
        <a href="views/foodposts.php"><span class="material-icons">room_service</span><span>Order Food</span></a>
      </li>

      <li class='side_element'>
        <a href="#"><i class="fas fa-comment"></i><span>Chat</span></a>
      </li>
      <!-- <a href="#"><i class="fas fa-chart-bar"></i><span>Reports</span></a> -->
      <!-- <li class='side_element'>
        <a href="#"><span>Logout</span></a>
      </li>
    </div> -->
 



    <?php if(isset($_SESSION['email']))
                { ?>
                  <div class="sidebar">
                      <div class="profile_info">
                          <img src="../resource/Images/a.jpg" class="profile_image" alt="">
                           <?php echo '<h4><div class="name_title">'.$_SESSION['first_name'].'</div></h4>';?>
                      </div>

                      <li class='side_element'>
                        <a href="../index.php"><i class="fas fa-home"></i><span>Home</span></a>
                      </li>

                      <li class='side_element'>
                        <a href="editprofile.php"><i class="fas fa-edit"></i><span>Edit Profile</span></a>
                      </li>

                  <?php  if($_SESSION['level']=="boarder")
                    {
                       echo '<li class="side_element">
                                <a href="mypayments.php"><i class="fas fa-dollar-sign"></i><span>My Payments</span></a>
                              </li>';

                        echo '<li class="side_element">
                                <a href="myrequests.php"><i class="fas fa-arrow-circle-left"></i><span>My Requests</span></a>
                               </li>';

                        echo '<li class="side_element">
                                <a href="foodposts.php"><span class="material-icons">room_service</span><span>Order Food</span></a>
                              </li>';

                        echo '<li class="side_element">
                                <a href="#"><i class="fas fa-comment"></i><span>Chat</span></a>
                              </li>';

                    }?>

                    <?php  if($_SESSION['level']=="boardings_owner")
                    {
                       echo '<li class="side_element">
                                <a href="#"><i class="fas fa-dollar-sign"></i><span>Post New Ads</span></a>
                              </li>';

                        echo '<li class="side_element">
                                <a href="#"><i class="fas fa-arrow-circle-left"></i><span>My Ads</span></a>
                               </li>';

                         echo '<li class="side_element">
                                <a href="views/foodposts.php"><i class="fas fa-users"></i><span>My Boarders</span></a>
                              </li>';      

                        echo '<li class="side_element">
                                <a href="foodposts.php"><span class="material-icons">room_service</span><span>Order food</span></a>
                              </li>';

                        echo '<li class="side_element">
                                <a href="#"><i class="fas fa-comment"></i><span>Reports</span></a>
                              </li>';

                    }?>


                    <?php  if($_SESSION['level']=="food_supplier")
                    {
                       echo '<li class="side_element">
                                <a href="#"><i class="fas fa-dollar-sign"></i><span>Post New Ads</span></a>
                              </li>';

                        echo '<li class="side_element">
                                <a href="#"><i class="fas fa-arrow-circle-left"></i><span>My Ads</span></a>
                               </li>';

                        echo '<li class="side_element">
                                <a href="foodposts.php"><span class="material-icons">room_service</span><span>Orders</span></a>
                              </li>';

                        echo '<li class="side_element">
                                <a href="#"><i class="fas fa-history"></i><span>Order History</span></a>
                              </li>';

                    }?>


                    <?php 
                      echo '<li class="side_element"><a href="controller/logoutController.php">Logout </a></li>';?>

         
                </div>
           <?php   }?>