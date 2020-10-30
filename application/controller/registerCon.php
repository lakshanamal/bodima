<?php   require_once ('../config/database.php');
        require_once ('../models/reg_user.php');
        require_once ('../config/email.php');
        session_start(); 
?>
<?php

// check the click submit and validation form
if(isset($_POST['submit']))
{
 $errors=array();            //create empty array
        if(!isset($_POST['first_name']) || strlen(trim($_POST['first_name']))<1)   //check if the username and password has been entered
                {
                 $errors[]='*First name required';
                }
        if(!isset($_POST['last_name']) || strlen(trim($_POST['last_name']))<1)
                {
                 $errors[]='*Last name required';
                }
        if(!isset($_POST['nic']) || strlen(trim($_POST['nic']))<1)
                 {
                 $errors[]='*NIC  required';
                 }

        else    {
                        if(strlen(trim($_POST['nic']))==12 || (strlen(trim($_POST['nic']))==10 && ($_POST['nic'][9]=='v' || $_POST['nic'][9]=='V')))
                        {
                              // 
                        }
                        else{
                                $errors[]="*NIC number is invalid";
                        }    
                }
        

        if(!isset($_POST['email']) || strlen(trim($_POST['email']))<1)
                {
                $errors[]='*Email address required';
               }
        elseif (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) 
               {
                   $errors[]='*Invalied email address ';
               } 

        if(empty($errors))
        {
                $user_email=reg_user::checkUser($_POST['email'],$connection);
                $email_arr=mysqli_fetch_assoc($user_email);  
                if(empty($email_arr))
                {
                  $_SESSION['email']=$_POST['email'];
                  $_SESSION['first_name']=$_POST['first_name'];
                  $_SESSION['last_name']=$_POST['last_name'];
                  $_SESSION['nic']=$_POST['nic'];
                  $_SESSION['level']=$_POST['level'];

                if($_POST['level']=="boardings_owner")
                {
                        header('Location:../views/boarding_owner_reg.php');
                }
                elseif($_POST['level']=="student")
                {
                        header('Location:../views/student_reg.php');
                }
                elseif($_POST['level']=="food_supplier")
                {
                        header('Location:../views/food_supplier_reg.php');
                }
                }
                else{
                        $errors[]='*Entered email alredy used ';
                        header('Location:../views/register.php?'.http_build_query(array('param'=>$errors)));
                }
                
        }
        else
        {
                header('Location:../views/register.php?'.http_build_query(array('param'=>$errors)));
        }
}

// check the click student register button and validation
if(isset($_POST['register_student']))
        {
                $errors=array();
                $password=mysqli_real_escape_string($connection,$_POST['password']);
                $confirmPassword=mysqli_real_escape_string($connection,$_POST['confirmpassword']);

                if(empty($password || $confirmPassword))                // validation of new password
                {
                    $errors[]="*Password requried";
                }
                elseif((strlen(trim($password))<6))
                {
                    $errors[]="*Minimum is 6 charactor ";
                }

                elseif($password != $confirmPassword)
                {
                    $errors[]="*Passwords do not match";
                }
              
                if(empty($errors))
                {

                        $token= bin2hex(random_bytes(50));
                        $email=$_SESSION['email'];
                        $first_name=$_SESSION['first_name'];
                        $last_name=$_SESSION['last_name'];
                        $nic=$_SESSION['nic'];
                        $level=$_SESSION['level'];
                        $hash=sha1($password);
                        unset($_SESSION['email']);
                        unset($_SESSION['first_name']);
                        unset($_SESSION['last_name']);
                        unset($_SESSION['nic']);
                        unset($_SESSION['level']);
                        session_destroy();
                        
                        reg_user::studentReg($email,$first_name,$last_name,$nic,$hash,$token,$connection);
                        sendRegUser($email,$token,$level);
                        header('Location:../views/emailVerify.php?email='.$email.'&token='.$token.'&level='.$level);  

                }else{
                        header('Location:../views/student_reg.php?'.http_build_query(array('param'=>$errors)));  
                }
        }


        // check the click food_supplier and boarding owner register button and validation
if(isset($_POST['register']) )
{
                $errors=array();
                $password=mysqli_real_escape_string($connection,$_POST['password']);
                $confirmPassword=mysqli_real_escape_string($connection,$_POST['confirmpassword']);
                 $address=mysqli_real_escape_string($connection,$_POST['address']);
                 $link=mysqli_real_escape_string($connection,$_POST['link']);

                if(!isset($address) || strlen(trim($address))<1)
                {
                 $errors[]='*Address required';
                }
                if(!isset($link) || strlen(trim($link))<1)
                {
                 $errors[]='*Location Link required';
                }
                if(empty($password || $confirmPassword))                // validation of new password
                {
                    $errors[]="*Password requried";
                }
                elseif((strlen(trim($password))<6))
                {
                    $errors[]="*Minimum is 6 charactor ";
                }

                elseif($password != $confirmPassword)
                {
                    $errors[]="*Passwords do not match";
                }
              
                if(empty($errors))
                {

                        $token= bin2hex(random_bytes(50));
                        $email=$_SESSION['email'];
                        $first_name=$_SESSION['first_name'];
                        $last_name=$_SESSION['last_name'];
                        $nic=$_SESSION['nic'];
                        $level=$_SESSION['level'];
                        $hash=sha1($password);
                        unset($_SESSION['email']);
                        unset($_SESSION['first_name']);
                        unset($_SESSION['last_name']);
                        unset($_SESSION['nic']);
                        unset($_SESSION['level']);
                        session_destroy();
                        reg_user::userReg($email,$first_name,$last_name,$nic,$hash,$token,$level,$address,$link,$connection);
                        sendRegUser($email,$token,$level);
                        header('Location:../views/emailVerify.php?email='.$email.'&token='.$token.'&level='.$level);  

                }else{
                        if($level=='boardings_owner'){header('Location:../views/boardings_owner_reg.php?'.http_build_query(array('param'=>$errors)));}
                        else   header('Location:../views/food_supplier_reg.php?'.http_build_query(array('param'=>$errors)));
                }
        
 }
 //resend
if(isset($_POST['resend']))
{
        sendRegUser($_POST['email'],$_POST['token'],$_POST['level']);
        header('Location:../views/emailVerify.php?resend&email='.$_POST['email'].'&token='.$_POST['token'].'&level='.$_POST['level']);  
}

      // check email details and save database 
if(isset($_GET['token']) && isset($_GET['email']) && isset($_GET['level']))
        {
                $email=$_GET['email'];
                $level=$_GET['level'];
                $token=$_GET['token'];
                
                $result=reg_user::getUser($level,$token,$email,$connection);
                if($result)
                {
                       if(mysqli_num_rows($result)==1)
                       {
                        $newtoken= bin2hex(random_bytes(50));
                        $accept=reg_user::setApt($email,$level,$newtoken,$connection);
                                if($accept)
                                {
                                        $records=mysqli_fetch_assoc($result);
                                        $_SESSION['email']=$records['email'];
                                        $_SESSION['first_name']=$records['first_name'];
                                        $_SESSION['last_name']=$records['last_name'];
                                        $_SESSION['level']=$records['level'];
                                                if($records['level']=="student")
                                                {
                                                        $_SESSION['Reg_id']=$records['Reg_id'];
                                                        // $_SESSION['address']=$records['address'];
                                                        header('Location:../views/welcome.php');
                                                }
                                                elseif($records['level']=="boardings_owner")
                                                {
                                                        $_SESSION['BOid']=$records['BOid'];
                                                        $_SESSION['address']=$records['address'];
                                                        header('Location:../views/welcome.php');
                                                }
                                                elseif($records['level']=="food_supplier") 
                                                {
                                                        $_SESSION['FSid']=$records['FSid'];
                                                        $_SESSION['address']=$records['address'];
                                                        header('Location:../views/welcome.php');
                                                }
                                }
                                else
                                {
                                        header('Location:../views/expired.php');
                                }
                        }else
                        {
                                header('Location:../views/expired.php');
                        }
                }else
                {
                        header('Location:../views/expired.php');
                }
        }






?>
