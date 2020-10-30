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
               <button onclick="window.location='boardingPostAdmin.php';" type="button">Show All</button>
               <div class="search-bar">
                   <form action="../../views/admin/boardingPostAdmin.php" method="post">
                       <input name="word" type="text" placeholder="Search">
                       <button name="search" type="submit"><i class="fa fa-search fa-lg"></i></button>
                   </form>
               </div>
            </div>
            <div class="table">
                <table>
                    <tr>
                        <th>Boarding Post Id</td>
                        <th>BOid</td>
                        <th>Category</td>
                        <th>Girl or boy</th>
                        <th>Person count</th>
                        <th>Cost per person</th>
                        <th>Rating</th>
                        <th>House Number</th>
                        <th>location</th>
                        <th>Life span</th>
                        <th>Key money</th>
                        <!-- <th>Number of item</th> -->
                    </tr>
                    <?php if(isset($_POST['search']))
                    {
                        $word=$_POST['word'];
                        $id=intval($_POST['word']);
                        $word.='%';
                        
                        $result=adminModel::searchBoardingPost($word,$connection);
                        while($row=mysqli_fetch_assoc($result)){
                            ?> 
                       <?php include 'pop.php' ?>
                          <tr>
                              <td><?php echo $row['B_post_id']; ?></td>
                              <td><?php echo $row['BOid']; ?></td>
                              <td><?php echo $row['category']; ?></td>
                              <td><?php echo $row['girlsBoys']; ?></td>
                              <td><?php echo $row['person_count']; ?></td>
                              <td><?php echo $row['cost_per_person']; ?></td>
                              <td><?php echo $row['rating']; ?></td>
                              <td><?php echo $row['location']; ?></td>
                              <td><?php echo $row['lifespan']; ?></td>
                              <td><?php echo $row['keymoney']; ?></td>
                              <td><a style="color: red; cursor: pointer;" onclick="popBlock();" >Block</a></td>
                          </tr>
                          <?php
                         }
                    }
                    else{ $result=adminModel::boardingPost($connection);
                     
                    while($row=mysqli_fetch_assoc($result)){        
                       ?> 
                  <?php include 'pop.php' ?>
                     <tr>
                     <td><?php echo $row['B_post_id']; ?></td>
                              <td><?php echo $row['BOid']; ?></td>
                              <td><?php echo $row['category']; ?></td>
                              <td><?php echo $row['girlsBoys']; ?></td>
                              <td><?php echo $row['person_count']; ?></td>
                              <td><?php echo $row['cost_per_person']; ?></td>
                              <td><?php echo $row['rating']; ?></td>
                              <td><?php echo $row['location']; ?></td>
                              <td><?php echo $row['lifespan']; ?></td>
                              <td><?php echo $row['keymoney']; ?></td>
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

