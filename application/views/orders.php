<?php   require_once ('../config/database.php');
        require_once ('../models/reg_user.php');
        require_once ('../config/email.php');
        session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resource/css/order1.css">
    <link rel="stylesheet" href="../resource/css/nav.css">
    <link rel="stylesheet" href="../resource/css/footer.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <?php include 'nav.php' ?>

<div class="container">
    <div class="new-order">
        <h5>New Orders</h5>
    </div>
<?php
 $order_ids=reg_user::getOrdId($connection);
 $ids=array();
 while($record=mysqli_fetch_assoc($order_ids))
 {
     $ids[]=$record['order_id'];
 }

 $i=0;
foreach($ids as $id)
{
    $i=0;
    $results=reg_user::getOrder($connection,$id); ?>
    <div class="item-wrap">
        <h3>Order Id :<?php echo $id?></h3>
    <div class="cart-item">
    <form action="../controller/orderAcptCon.php" method="post">
   <?php while($row=mysqli_fetch_assoc($results)){
       $i++;
        ?>
                        <div class="product-details">
                            <h5><?php echo $i.'.'.$row['product_name']; ?></h5>
                            <h5>Quantity :<span><?php echo $row['quantity']; ?></span></h5>
                            <?php $address=$row['address'];
                                  $email=$row['email'];
                                  $first_name=$row['first_name'];
                                  $last_name=$row['last_name'];
                                  $total=$row['total'];
                            ?>
                        </div>
                <?php }?>
                            <h4>Order address :<span><?php echo $address; ?></span></h4>
                            <div class="btn1">
                                <input type="hidden" name='order_id' value="<?php echo $id; ?>">
                                <input type="hidden" name='total' value="<?php echo $total; ?>">
                                <input type="hidden" name='address' value="<?php echo $address; ?>">
                                <input type="hidden" name='email' value="<?php echo $email; ?>">
                                <input type="hidden" name='first_name' value="<?php echo $first_name; ?>">
                                <input type="hidden" name='last_name' value="<?php echo $last_name; ?>">
                                <button class="btn5" name="accept" type="submit">Accept</button>
                                <button class="btn2" name="remove" type="submit">cancel</button>
                            </div>
                        
                    </div>
                </div>
            </form>
            <?php
}
?>
</div>
<?php include 'footer.php'?>
<script src="../resource/js/cart.js"></script>
<script src="../resource/js/home1.js"></script>
<script src="../resource/js/jquery.js"></script>
</body>

</html>