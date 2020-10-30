<?php   require_once ('../config/database.php');
        require_once ('../models/reg_user.php');
        session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../resource/css/card1.css">
    <link rel="stylesheet" href="../resource/css/nav.css">
    <link rel="stylesheet" href="../resource/css/footer.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
<?php include 'nav.php' ?>
<?php 
   if(isset($_SESSION['order_id']))
   {
    $order_records=reg_user::getOrder($connection,$_SESSION['order_id']);
    $order_record=mysqli_fetch_assoc($order_records);
    if($order_record['is_accepted']==1){
        $_SESSION['isdisable']=0;
    }
   }
?>
                 <!-- button disable and enable function -->
<script>  function disBtn()
                    {
                        document.addEventListener("DOMContentLoaded", function(event) {
                        document.querySelector(".btn3").disabled = true;
                        document.querySelector(".btn5").disabled = true;
                        document.querySelector('.btn3').style.backgroundColor="gray";
                        document.querySelector('.btn5').style.backgroundColor="gray";
                    <?php   if(isset($_SESSION['isdisable']))
                        { 
                             if($_SESSION['isdisable']==1)
                                 {
                               ?>
                                    document.querySelector(".request").disabled = true;
                                    document.querySelector('.request').style.backgroundColor="gray";
                                    document.querySelector('.request').innerHTML="Pending";
                     <?php   }else{
                         ?>         document.querySelector(".request").disabled = true;
                                    document.querySelector('.request').style.backgroundColor="green";
                                    document.querySelector('.request').innerHTML="Accepted";
                                    document.querySelector(".btn3").disabled = false;
                                    document.querySelector(".btn5").disabled = false;
                                    document.querySelector('.btn5').style.backgroundColor="rgb(1, 151, 56)";
                                    document.querySelector('.btn3').style.backgroundColor="rgb(255, 30, 30)";
                         <?php
                     }
                    }else{
                        ?>
                    <?php
                    }?>

                }  
            ); 
        }
    // call the script function
disBtn();
</script>
    
                                    <!-- header-bar -->
<div class="cart-wrap">
<h2 >Product Card</h2>
  <div class="cart-icon">
    <?php 
   
      if(isset($_SESSION['cart']))
      {
        $count=count($_SESSION['cart']);
        echo '<a href="cartItem.php"><img  src="../resource/img/cart-plus-solid.svg" alt=""> Cart <span id="cart-count" class="count">'.$count.'</span></a>
        ';
      }
    ?>
   </div>
   <div class="cart-icon">
    <?php 
   
      if(isset($_SESSION['cart']))
      {
        $count=count($_SESSION['cart']);
        echo '<a href="cartItem.php">Total <span id="cart-count" class="count">'.$count.'</span></a>
        ';
      }
    ?>
   </div>
</div>
                                <!-- product-cart and product order deatils -->
 <div class="grid-item">
 <div class="mycart">
    <h5>My Cart</h5>
<?php 
$total=0;
 if(isset($_SESSION['cart']))
 {
    $result=reg_user::getProduct($connection);
    $product_id=array_column($_SESSION['cart'],'product_id'); //create array
    $amount=0;
         while($row=mysqli_fetch_assoc($result))
         {
             foreach($product_id as $id)
             {
                 if($row['id']==$id)
                 {
           ?>
                   <form action="../controller/cartCon.php?action=remove&id=<?php echo $row['id'];?>" method="post">
                   
                     <div class="item-wrap">
                         <div class="cart-item">
                             <img src="<?php echo $row['image']?>" alt="">
                                 <div class="product-details">
                                     <h4><?php echo $row['product_name'];?></h4>
                                     <p><small>Lorem ipsum dolor sit amet .</small></p>
                                     <h3><?php echo $row['price'];?></h3>
                
                                     <div class="item-count">
                                         
                                        <button class="btn4" type="button" onclick="quan.decrease('<?php echo $row['id'];?>')" >-</button>
                                            <p><h4 ><a id="<?php echo $row['id'];?>">1</a></h4></p>
                                        <button  class="btn4" type="button" onclick="quan.increse('<?php echo $row['id'];?>')" >+</button>
                                        <button class="btn2" name="remove" type="submit">cancel</button>

                                     </div>
                                     
                                 </div>
                            
                         </div>
                     </div>
                   
                   </form>
           <?php
           $total=$total+$row['price'];
                 }
             }
         }
 }
      ?>
 </div> 
                                         <!-- order price details -->

      <?php $count=count($_SESSION['cart']); 
            $_SESSION['total']=$total;
      ?>
     <div class="payment">
     <div class="price-details">
        <div class="total">
            <h3>Price details</h3>
        </div>
        <div class="details">
            <h5>price (<?php echo $count ?>) item<span class="left-item">Rs <?php echo $total; ?></span></h5>
            <h5>delivery Charges <span style="color: green;" class="left-item">Free</span></h5>
            <h4>Amount payable<span class="left-item1">Rs <?php echo $total; ?></span> </h4>
            <button type="button" id="request" onclick="window.location='../controller/orderCon.php?click1';" class="btn6 request">Request </button>
        </div>
     </div>
                                             <!-- payment method -->
     <div class="price-details">
        <div class="total">
            <h3>Payment method</h3>
        </div>
        <div class="details">
            <h5>Total payment <span class="left-item">Rs <?php echo $total; ?></span></h5>
            <h4>Select payment method </h4>
            <form method="post" action="https://sandbox.payhere.lk/pay/checkout">
                <button id="request" type="button" class="btn5" disabled>Pay with cash(<?php echo $count ?>) </button>
                <button id="request" class="btn3" id="btn3" disabled>Pay with card(<?php echo $count ?>) </button>
                <input type="hidden" name="merchant_id" value="1215562">    <!-- Replace your Merchant ID -->
                <input type="hidden" name="return_url" value="http://localhost/mvc/application/views/sucsses.php">
                <input type="hidden" name="cancel_url" value="http://localhost/mvc/application/views/sucsses.php">
                <input type="hidden" name="notify_url" value="http://localhost/mvc/application/config/payCon.php">  
                <input type="hidden" name="order_id" value="<?php echo "OrderNo".+time().rand(); ?>">
                <input type="hidden" name="items" value="siri niwasa"><br>
                <input type="hidden" name="currency" value="LKR">
                <input type="hidden" name="amount" value="<?php echo $total; ?>">  
                <input type="hidden" name="first_name" value="<?php echo $_SESSION['first_name'];?>">
                <input type="hidden" name="last_name" value="<?php echo $_SESSION['last_name'];?>"><br>
                <input type="hidden" name="email" value="<?php echo $_SESSION['email'];?>">
                <input type="hidden" name="phone" value="0771234567"><br>
                 <input type="hidden" name="address" value="No.1, Galle Road"> 
                 <input type="hidden" name="city" value="Colombo">
                 <input type="hidden" name="country" value="Sri Lanka"><br><br> 
            </form>
        </div>
     </div>
     </div>
     
    </div>
    <?php include 'footer.php'?>
        <script src="../resource/js/cart1.js"></script>
        <script src="../resource/js/home1.js"></script>
<script src="../resource/js/jquery.js"></script>
</body>
</html> 