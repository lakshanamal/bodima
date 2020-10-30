<?php
require_once ('../../config/database.php');
      require_once ('../../models/adminModel.php');
session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../resource/css/admin.css">
    <link rel="stylesheet" href="../../resource/css/all.css">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="header">
            <div class="logo"><img src="../../resource/img/logo.svg" alt=""></div>
        </div>
        <div class="wrapper">
        <?php include 'slide-bar.php' ?>
      
        <div class="content">
            <div class="search">
               <div class="title"><h3>Student</h3></div> 
               <button onclick="window.location='foodPost.php';" type="button">Show All</button>
               <div class="search-bar">
                   <form action="../../views/admin/foodPost.php" method="post">
                       <input name="word" type="text" placeholder="Search">
                       <button name="search" type="submit"><i class="fa fa-search fa-lg"></i></button>
                   </form>
               </div>
            </div>
            <div class="table">
                <table>
                    <tr>
                        <th>Food Post Id</td>
                        <th>FSid</td>
                        <th>Post Name</td>
                        <th>Block Post</th>
                        <!-- <th>Number of item</th> -->
                    </tr>
                    <?php if(isset($_POST['search']))
                    {
                        $word=$_POST['word'];
                        $id=intval($_POST['word']);
                        $word.='%';
                        
                        $result=adminModel::searchFoodPost($word,$connection);
                        while($row=mysqli_fetch_assoc($result)){
                            ?> 
                       <?php include 'pop.php' ?>
                          <tr>
                              <td><?php echo $row['F_post_id']; ?></td>
                              <td><?php echo $row['FSid']; ?></td>
                              <td><?php echo $row['ad_title']; ?></td>
                              <td><a style="color: red; cursor: pointer;" onclick="popBlock();" >Block</a></td>
                          </tr>
                          <?php
                         }
                    }
                    else{ $result=adminModel::foodPost($connection);
                     
                    while($row=mysqli_fetch_assoc($result)){        
                       ?> 
                  <?php include 'pop.php' ?>
                     <tr>
                         <td><?php echo $row['F_post_id']; ?></td>
                         <td><?php echo $row['FSid']; ?></td>
                         <td><?php echo $row['ad_title']; ?></td>
                         <td><a style="color: red; cursor: pointer;" onclick="popBlock();" >Block</a></td>
                     </tr>
                     <?php
                    }
                }
                    ?>
                </table>
            </div>
        </div>
        </div>
    </div>
   <!-- <div class="block">
       <div class="title1">
           <h3><i class="fa fa-user-lock"></i> Block user </h3>
           <i   class="fa fa-window-close fa-lg" onclick="popBack()"></i>
       </div>
       <div class="block-contain">
       <div class="para">
           <p>
               Select the following reason for user block
           </p>
           <form action="#" method="post">
               
               <div class="con">
                    <input type="checkbox" name="condition1" id="1">
                    <label for="1">Breaks user aggreement</label>
                </div>
                <div class="con">
                    <input type="checkbox"  name="condition2" id="2">
                    <label for="2">Complain about post</label>
                </div>
                <div class="con">
                    <input type="checkbox"  name="condition3" id="3">
                    <label for="3">Complaine about profile</label>
                </div>
                <div class="con">
                    <input type="checkbox"  name="condition4" id="4">
                    <label for="4">Unauthorised sales</label>
                </div>
                <div class="con">
                    <input type="checkbox" name="condition5" id="5">
                    <label for="5">Vialate user condition</label>
                </div>
                    <h4>Other write the following feild</h4>
                <div class="con">
                    <input placeholder="Other condition" type="text" name="condition6" id="6">
                </div>
                <div class="btn"><button type="submit" name="block"><i class="fa fa-ban"></i> Block</button></div>
           </form>
       </div>
       <div class="details">
           <h3>User Id    : 5</h3>
           <h3>User Email : lakshanamal100@gmail.com</h3>
           <h3>User Type  : Student</h3>
       </div>
       </div>

   </div> -->
</body>
    <script src="../../resource/js/admin.js"></script>
    <script src="../../resource/js/jquery.js"></script>
    <script>
        function popBlock()
        {
            document.querySelector('.block').style.display='block';
            // document.querySelector('div:not(.block)').style.filter='blur(6px)';
        }
        function popBack()
        {
            document.querySelector('.block').style.display='none';
            // document.querySelector('div:not(.block)').style.filter='blur(0px)';
        }
    </script>
</html>

