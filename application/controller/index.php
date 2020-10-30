<?php   require_once ('../config/database.php ');
        require_once ('../models/reg_user.php');
        session_start();
        
?>
<?php
if(isset($_GET['tokenPassword']))
{
    $tokenPassword=$_GET['tokenPassword'];
    $result=reg_user::newPassword($tokenPassword,$connection);
    if($result)
    {
        if(mysqli_num_rows($result)==1)
        {
            $record=mysqli_fetch_assoc($result);
            $_SESSION['email']=$record['email'];
            $_SESSION['level']=$record['level'];
            header('Location:../views/new_password.php');  
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
    header('Location:../views/user_forgot_password.php');
}


?>