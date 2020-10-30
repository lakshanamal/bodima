<?php   require_once ('../config/database.php');
        require_once ('../models/reg_user.php'); 
        session_start();
?>

<?php
    
        if(isset($_GET['click1']))     // check the sign in button click
         {
                header('Location:../views/user_loging.php');    
         }
?>

<?php
        if(isset($_POST['submit']))
	{
         $errors=array();            //create empty array
                if(!isset($_POST['username']) || strlen(trim($_POST['username']))<1)   //check if the username and password has been entered
                        {
                         $errors[]='Username is Missing / Invalid';
                        }
                if(!isset($_POST['password']) || strlen(trim($_POST['password']))<1)
                        {
                         $errors[]='Password is Missing / Invalid';
                        }

            //check if there are any errors in the form
            if(empty($errors))
            {
              //save username and password into variables
              //protect the our database  becauses  can be change sql query in database
              $useremail=mysqli_real_escape_string($connection,$_POST['username']);
              $password=mysqli_real_escape_string($connection,$_POST['password']);
              $hash=sha1($password);
            
               //$user=new reg_user();

               $result=reg_user::loging($useremail,$hash,$connection);
               
               
          //prepare database query
        
          
          if($result)
          {
                  
            //query successful
            //check if the user is valid
            if(mysqli_num_rows($result)==1)
            {
                $record=mysqli_fetch_assoc($result);
                $_SESSION['email']=$record['email'];
                $_SESSION['level']=$record['level'];
                $_SESSION['first_name']=$record['first_name'];
                $_SESSION['last_name']=$record['last_name'];
                $_SESSION['address']=$record['address'];
                $ID=reg_user::getId($record['level'],$record['email'],$connection);
                $user_id=mysqli_fetch_assoc($ID);
                if($record['level']=="boarder")
                {
                        $_SESSION['Bid']=$user_id['Bid'];
                        header('Location:../index.php');
                }
                elseif($record['level']=="administrator")
                {
                        $_SESSION['a_id']=$user_id['a_id'];
                        header('Location:../index.php');
                }
                elseif($record['level']=="student")
                {
                       $_SESSION['Reg_id']=$user_id['Reg_id'];
                       header('Location:../index.php');
                }
                elseif($record['level']=="boardings_owner")
                {
                        $_SESSION['BOid']=$user_id['BOid'];
                        header('Location:../index.php');
                }
                elseif($record['level']=="food_supplier") 
                {
                       $_SESSION['FSid']=$user_id['FSid'];
                       header('Location:../index.php');
                }

               
            }
            else{
                header('Location:../views/user_loging.php?errors='.'errors');
            }

          }
          else{
                header('Location:../views/user_loging.php?errors='.'errors');
          }
                
        } else{
                header('Location:../views/user_loging.php?errors='.'errors');
        }    
        
}	

?>