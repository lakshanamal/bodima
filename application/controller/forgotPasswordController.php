<?php   require_once ('../config/database.php');
        require_once ('../models/reg_user.php');
        require_once ('../config/email.php');
        session_start(); 
?>
<?php
if (isset($_POST['submit']))
    {	
	                                                                                    //check validaty of email
        $errors=array();
        if(!isset($_POST['email']) || strlen(trim($_POST['email']))<1)
        {
            $errors[]='*Email address requried ';
        }
        elseif (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) 
        {
            $errors[]='*Invalied email address ';
        } 

        if(empty($errors))
        {
            $email=mysqli_real_escape_string($connection,$_POST['email']);

            $user=new reg_user();
            $result_set=$user->forgotPassword($email,$connection);
           print_r($result_set);
            if($result_set)
            {
                if(mysqli_num_rows($result_set)==1){ 
                    $user=mysqli_fetch_assoc($result_set);
                    $userEmail=$user['email'];
                    $token=$user['token'];
                    sendResetLink($userEmail,$token);
                    header('Location:../views/user_verify.php?email='.$userEmail.'&token='.$token);
                }else{
                    $errors[]="*You dont have an account in this email address";
                    header('Location:../views/user_forgot_password.php?'.http_build_query(array('param'=>$errors)));
                }
            }else{
                $errors[]="*You dont have an account in this email address";
                header('Location:../views/user_forgot_password.php?'.http_build_query(array('param'=>$errors)));
            }
        }
        else{
            header('Location:../views/user_forgot_password.php?'.http_build_query(array('param'=>$errors)));
        }
    }

    if(isset($_POST['resend']))
{
 
        sendResetLink($_POST['email'],$_POST['token']);
        header('Location:../views/emailVerify.php?resend&email='.$_POST['email'].'&token='.$_POST['token']);  

}

?>