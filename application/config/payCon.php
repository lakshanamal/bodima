<?php require_once ('../config/database.php'); ?>

<?php
print_r($_POST);
$merchant_id = $_POST['merchant_id'];
$order_id             = $_POST['order_id'];
$pay_amount = $_POST['payhere_amount'];
$pay_currency = $_POST['payhere_currency'];
$status_code  = $_POST['status_code'];
$md5sig   = $_POST['md5sig'];

$merchant_secret = '8WAPGBh6yJF4jtT5gGGQaG8MLffHrPyYI4JDDVvpFk3O'; // Replace with your Merchant Secret (Can be found on your PayHere account's Settings page)

$local_md5sig = strtoupper (md5 ( $merchant_id . $order_id . $pay_amount . $pay_currency . $status_code . strtoupper(md5($merchant_secret)) ) );

if (($local_md5sig === $md5sig) AND ($status_code == 2) ){
        $query="INSERT INTO order_details (marchent_id) VALUES('{$merchant_id}')";
        $result_set=mysqli_query($connection,$query);
        header('Location:../views/sucsses.php');
}
else{
        print_r($_POST);
}

?>