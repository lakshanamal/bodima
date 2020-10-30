<?php   require_once ('../config/database.php');
        require_once ('../models/reg_user.php');
        session_start(); 
?>
<?php    
    if(isset($_POST['submit']))
                    {
                        $errors=array();
                        $password=$_POST['password'];
                        $confirmPassword=$_POST['confirmpassword'];

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
                                $hashPassword=sha1($password);
                                $email=$_SESSION['email'];
                                $level=$_SESSION['level'];
                                session_destroy();
                                $newtoken= bin2hex(random_bytes(50));
                                $user=new reg_user();
                                $result=$user->savePassword( $newtoken,$email,$hashPassword,$level,$connection);          
                               
                                            if($result){
                                                header('Location:../views/user_loging.php');
                                            }else{
                                                header('Location:../views/new_password.php');
                                            }
                                        
                            }
                            else
                            {
                                header('Location:../views/new_password.php?'.http_build_query(array('param'=>$errors)));
                            }
                    }
                
?>