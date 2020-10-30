<?php   require_once ('../config/database.php');
        require_once ('../models/reg_user.php');
        session_start(); 
?>
<?php 
    if(isset($_GET['click']))
    {
        header('Location:../views/cart.php');
    }
?>

<?php

// check and create cart 
if(isset($_POST['add']))
{
  if(isset($_SESSION['email'])&& isset($_SESSION['first_name']) && isset($_SESSION['last_name']))
  {
  if(isset($_SESSION['cart']))
  {
    $item_array_id=array_column($_SESSION['cart'],'product_id');
    if(!in_array($_GET['id'],$item_array_id))
    {
      $count=count($_SESSION['cart']);
      $item_array=array(
          'product_id'=>$_GET['id'],
          'item_name' =>$_POST['name'],
          'product_price'=>$_POST['price'],
          'item_quantity'=>$_POST['quantity']
      );
      $_SESSION['cart'][$count]=$item_array;
      echo '<script>window.location="../views/cart.php?id='.$_POST['FSid'].'"</script>';
    }else{
      echo '<script>alert("Product already added")</script>';
      echo '<script>window.location="../views/cart.php?id='.$_POST['FSid'].'"</script>';
    }
  }else{
    $item_array=array(
      'product_id'=>$_GET['id'],
      'item_name' =>$_POST['name'],
      'product_price'=>$_POST['price'],
      'item_quantity'=>$_POST['quantity']
  );
  $_SESSION['cart'][0]=$item_array;
  echo '<script>window.location="../views/cart.php?id='.$_POST['FSid'].'"</script>';
  }
}else{
  echo '<script>alert("Plase logging first")</script>';
  session_destroy();
  header('Location:../views/user_loging.php');
}
}

//if click remove button clear the cart
if(isset($_POST['remove']))
{
    if($_GET['action']=='remove')
    {
        foreach($_SESSION['cart'] as $key=>$value)
        {
          if($value['product_id']==$_GET['id']){
            unset($_SESSION['cart'][$key]);
            echo '<script>alert("Product has been  Removed")</script>';
            echo '<script>window.location="../views/cartItem.php"</script>';
          }
        }
    }
}


//
?>

