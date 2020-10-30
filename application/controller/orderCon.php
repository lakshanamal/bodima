<?php 
 require_once ('../config/database.php');
 require_once ('../models/reg_user.php');
    session_start ();
?>

<?php
if(isset($_GET['click1']))
{
    //print_r($_SESSION);
    if(isset($_SESSION['cart']))
    {
       $email=$_SESSION['email'];
       $first_name=$_SESSION['first_name'];
       $last_name=$_SESSION['last_name'];
       $address=$_SESSION['address'];
       $products=$_SESSION['cart'];
       $order_id=time().mt_rand($email);
       $total=$_SESSION['total'];
       $_SESSION['order_id']=$order_id;
    //    print_r($products);
       foreach($products as $product)
       {
        reg_user::food_request($email,$address,$first_name,$last_name,$product['item_name'],$product['item_quantity'],$order_id,$total,$connection);
       }
       $_SESSION['isdisable']=1;
      header('Location:../views/cartItem.php');
}
}


?>