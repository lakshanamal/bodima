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
               <div class="title"><h3>Boarding Owner</h3></div> 
               <button onclick="window.location='boardingOwner.php';" type="button">Show All</button>
               <div class="search-bar">
                   <form action="../../views/admin/boardingOwner.php" method="post">
                       <input name="word" type="text" placeholder="Search">
                       <button name="search" type="submit"><i class="fa fa-search fa-lg"></i></button>
                   </form>
               </div>
            </div>
            <div class="table">
                <table>
                    <tr>
                        <th>BO Id</td>
                        <th>First Name</td>
                        <th>Last Name</td>
                        <th>Email</td>
                        <th>NIC</th>
                        <th>Address</th>
                        <th>Is_accepted</th>
                        <th>Block user</th>
                    </tr>
                    <?php if(isset($_POST['search']))
                    {
                        $word=$_POST['word'];
                        $id=intval($_POST['word']);
                        $word.='%';
                        
                        $result=adminModel::searchBoarding($id,$word,$connection);
                        while($row=mysqli_fetch_assoc($result)){
                            ?> 
                        <?php include 'pop.php' ?>
                          <tr>
                              <td><?php echo $row['BOid']; ?></td>
                              <td><?php echo $row['first_name']; ?></td>
                              <td><?php echo $row['last_name']; ?></td>
                              <td><?php echo $row['email']; ?></td>
                              <td><?php echo $row['NIC']; ?></td>
                              <td><?php echo $row['address']; ?></td>
                              <td><?php echo $row['user_accepted']; ?></td>
                              <td><a style="color: red;cursor:pointer;" onclick='popBlock(<?php echo $row["BOid"]; ?>,"<?php echo $row["email"]; ?>");'">Block</a></td>
                          </tr>
                          <?php
                         }
                    }
                    else{ $result=adminModel::userDetails('boardings_owner',$connection);
                    while($row=mysqli_fetch_assoc($result)){
                       ?> 
                   <?php include 'pop.php' ?>
                     <tr>
                         <td><?php echo $row['BOid']; ?></td>
                         <td><?php echo $row['first_name']; ?></td>
                         <td><?php echo $row['last_name']; ?></td>
                         <td><?php echo $row['email']; ?></td>
                         <td><?php echo $row['NIC']; ?></td>
                         <td><?php echo $row['address']; ?></td>
                         <td><?php echo $row['user_accepted']; ?></td>
                         <td><a style="color: red;cursor:pointer;" onclick='popBlock(<?php echo $row["BOid"]; ?>,"<?php echo $row["email"]; ?>");'>Block</a></td>
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
  
    <script src="../../resource/js/admin.js"></script>
    <script src="../../resource/js/jquery.js"></script>
    <script>
          function popBlock(id,email)
        {
       
            document.querySelector('.block').style.display='block';
            // document.querySelector('div:not(.block)').style.filter='blur(6px)';
            document.getElementById('id').innerHTML='User Id :'+id;
            document.getElementById('email').innerHTML='User email :'+email;
            document.getElementById('level').innerHTML='User type :'+id;
        }
        function popBack()
        {
            document.querySelector('.block').style.display='none';
            // document.querySelector('div:not(.block)').style.filter='blur(0px)';
        }
    </script>
</body>
</html>

