<?php 
 require_once ('../config/database.php');
 require_once ('../models/reg_user.php');
 require_once('../config/acceptReq.php');
    session_start ();
?>

<?php
if(isset($_GET['click']))
{
  header('Location:../views/orders.php');
}


if(isset($_POST['accept']))
{
   $order_id=$_POST['order_id'];
   $address=$_POST['address'];
   $email=$_POST['email'];
   $total=$_POST['total'];
   $first_name=$_POST['first_name'];
   $last_name=$_POST['last_name'];
   $result=reg_user::accept($order_id,$connection);
   // email order is accepted
   // echo $total;
   // print_r($_SESSION);
   sentAccept($email,$first_name,$address,$total);
   header('Location:../views/orders.php');
}
?>