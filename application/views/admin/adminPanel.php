<?php require_once ('../../config/database.php');
      require_once ('../../models/adminModel.php');
session_start(); ?>
<?php 
$userCount=$_GET['student']+$_GET['boarding_owner']+$_GET['boarder']+$_GET['food_supplier'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../resource/css/admin.css">
    <link rel="stylesheet" href="../../resource/css/all.css">
    <title>Document</title>
   <?php include 'chart.php' ?>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo"><img src="../../resource/img/logo.svg" alt=""></div>
            <div class="sign">
            <a href="../../controller/logoutController.php"><i style="color: white; padding-right:20px" class="fa fa-sign-out"></i></a>
            </div>
        </div>
        <div class="wrapper">
     <?php include 'slide-bar.php' ?>
      
        <div class="content">
           <div class="background">
           <h3>Dash Board</h3>
            <div class="numbers">
                <div class="num1">
                    <h2>Users</h2>
                    <h4><?php echo $userCount; ?></h4>
                </div>
                <div class="num2">
                    <h2>Boarding Posts</h2>
                    <h4><?php echo $userCount; ?></h4>
                </div>
                <div class="num3">
                    <h2>Food posts</h2>
                    <h4><?php echo $userCount; ?></h4>
                </div>
                <div class="num4">
                    <h2>Complaint</h2>
                    <h4><?php echo $userCount; ?></h4>
                </div>
                </div>
            </div>
            <div class="charts">
                <div class="chart1">
                    <h3><i class="fa fa-chart-pie"></i> Users</h3>
                    <div id="chart1" style="width: 400px; height: 200px;background-color:white;"></div>
                </div>
                <div class="chart2">
                    <h3><i class="fa fa-chart-bar"></i> Users Traffic</h3>
                    <div id="chart2" style="width: 100%; height: 200px;"></div>
                </div>
            </div>
            <div class="charts-2">
                 <div class="chart3">
                    <h3><i class="fa fa-chart-bar"></i> Boarding Requests</h3>
                    <div id="chart3" style="width: 100%; height: 100px;"></div>
                </div>
                <div class="chart3">
                    <h3><i class="fa fa-chart-bar"></i> Food orders</h3>
                    <div id="chart4" style="width: 100%; height: 100px;"></div>
                </div>
                <div class="chart3">
                    <h3><i class="fa fa-chart-bar"></i> xxxxxxxx</h3>
                    <div id="chart5" style="width: 100%; height: 100px;"></div>
                </div>
            </div>
          
           
        </div>
        </div>
    </div>
    
</body>
<script src="../../resource/js/admin.js"></script>
    <script src="../../resource/js/jquery.js"></script>
</html>

