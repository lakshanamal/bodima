<?php
     function sentAccept($email,$first_name,$address,$total)
     {
         $subject="Accepted your order";
         $headers  = 'MIME-Version: 1.0' . "\r\n";
         $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
         $from="Bodima";
     // Create email headers
         $headers .= 'From: '.$from."\r\n".
         'Reply-To: '.$from."\r\n" .
         'X-Mailer: PHP/' . phpversion();
      
         $message='
        
<html lang="en">
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap">
	
    <style>
		*{
			padding: 0;
			margin: 0;
			font-family: "Poppins",sans-serif;
        }
        body{
            background-color: #8EE48f;
        }
    .container{
        width: 70%;
        margin: 0 auto;
        background-color:#5cdb95;
    }

    

        .price-details{
      height: 35%;
      width: 40%;
      margin: 0 auto;
      margin-bottom: 20px;
      padding: 20px;
      padding-bottom: 25px;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      border-radius: 5px;
      background: white;
  }
  .total{
    border-bottom: 1px solid gray;
  }

  .details{
    padding-top: 10px;
    height: 150px;
    align-items: center;
  }

  .details h5{
    padding-bottom: 10px;
  }

  .details h4{
    border-top: 1px solid gray;
    padding-top: 10px;
  }

  .left-item{
      padding-left: 100px;
      color: orangered;
  }
  
  .left-item1{
    padding-left: 45px;
    color: orangered;
}
.method{
    padding-top: 20px;
    display: flex;
    justify-content: space-around;
}


.btn3{
  padding:7px;
  background-color: rgb(255, 30, 30);
  color: white;
  background-image: url(../img/credit-card-solid.svg);
  background-repeat: no-repeat;
  background-size: 40px 40px;
  background-position: 5px;
  font-size: 18px;
  border: none;
  border-radius: 5px;
  margin-top: 10px;
  cursor: pointer;
}

.btn5{
  padding:7px;
  background-color: rgb(1, 151, 56);
  background-image: url(../img/money-bill-wave-solid.svg);
  background-repeat: no-repeat;
  background-size: 40px 40px;
  background-position: 5px;
  color: white;
  font-size: 18px;
  border: none;
  border-radius: 5px;
  margin-top: 10px;
  cursor: pointer;
}

.header{
    padding: 30px;
}
.wrapper{
    background-color: #379683;
}
.header h2{
    color: white;
}

.header h3{
    text-align: center;
    font-size: 32px;
    border-bottom: 2px solid black;

}
.content{
    padding:0 100px ;
    text-align: center;
    margin: 0 auto;
}
p{
    margin: 0 auto;
}
.footer{
    background-color: black;
    color: white;
    text-align: center;
    padding: 20px 0;
}
.para{
    margin: 0 auto;
    /* width: 600px; */
    padding-top: 40px;
    padding-bottom: 40px;
    font-size: 18px;
}



	</style>
</head>
<body>
    <div class="container">
        <div class="wrapper">
        <div class="header">
            <h2>Bodima </h2>
            <h4>Hi '.$first_name.'</h4>
            <h3>Your order is accepted </h3>
        </div>
        </div>
        <div class="content">
           <div class="para"> <p>Thanks for your order. We prepare your order and  we will delivery you mentioned address <b>['.$address.']</b>. First follwing the instruction for payment for order.   </p></div>
            <div class="price-details">
                <div class="total">
                    <h3>Payment method</h3>
                </div>
                <div class="details">
                    <h5>Total payment <span class="left-item">Rs '.$total.'</span></h5>
                    <h4>Select payment method </h4>
                    <form method="post" action="https://sandbox.payhere.lk/pay/checkout">
                        <button id="request" type="button" class="btn5" >Pay with cash </button>
                        <button id="request" class="btn3" id="btn3" >Pay with card </button>
                        <input type="hidden" name="merchant_id" value="1215562">    <!-- Replace your Merchant ID -->
                        <input type="hidden" name="return_url" value="http://localhost/mvc/application/views/sucsses.php">
                        <input type="hidden" name="cancel_url" value="http://localhost/mvc/application/views/sucsses.php">
                        <input type="hidden" name="notify_url" value="http://localhost/mvc/application/config/payCon.php">  
                        <input type="hidden" name="order_id" value="<?php echo "OrderNo".+time().rand(); ?>">
                        <input type="hidden" name="items" value="Bodima"><br>
                        <input type="hidden" name="currency" value="LKR">
                        <input type="hidden" name="amount" value="'.$total.'">  
                        <input type="hidden" name="first_name" value="'.$first_name.'">
                        <input type="hidden" name="last_name" value="<?php echo $_SESSION["last_name"];?>"><br>
                        <input type="hidden" name="email" value="'.$address.'">
                        <input type="hidden" name="phone" value="0771234567"><br>
                         <input type="hidden" name="address" value="'.$address.'"> 
                         <input type="hidden" name="city" value="Colombo">
                         <input type="hidden" name="country" value="Sri Lanka"><br><br> 
                    </form>
                </div>
             </div>
        </div>
        <div class="footer">
        <h4>Bodima @2020 all right received </h4>
    </div>
    </div>
    
</body>
</html>';
     
     mail($email,$subject,$message,$headers);
     }
?>