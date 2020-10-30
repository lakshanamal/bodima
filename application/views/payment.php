
<html>
<body>
<form method="post" action="https://sandbox.payhere.lk/pay/checkout">   
    <input type="hidden" name="merchant_id" value="1215562">    <!-- Replace your Merchant ID -->
    <input type="hidden" name="return_url" value="http://localhost/mvc/application/views/sucsses.php">
    <input type="hidden" name="cancel_url" value="http://localhost/mvc/application/views/sucsses.php">
    <input type="hidden" name="notify_url" value="http://localhost/mvc/application/config/payCon.php">  
    <br><br>Item Details<br>
    <input type="text" name="order_id" value="ItemNo12345">
    <input type="text" name="items" value="siri niwasa"><br>
    <input type="text" name="currency" value="LKR">
    <input type="text" name="amount" value="100">  
    <br><br>Customer Details<br>
    <input type="text" name="first_name" value="Saman">
    <input type="text" name="last_name" value="Perera"><br>
    <input type="text" name="email" value="samanp@gmail.com">
    <input type="text" name="phone" value="0771234567"><br>
    <input type="text" name="address" value="No.1, Galle Road">
    <input type="text" name="city" value="Colombo">
    <input type="hidden" name="country" value="Sri Lanka"><br><br> 
    <input type="submit" value="Buy Now" name="value">   
</form> 
</body>
</html>