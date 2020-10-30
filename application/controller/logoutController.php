<?php 
session_start();
unset($_SESSION["email"]);
unset($_SESSION["level"]);
unset($_SESSION["first_name"]);
unset($_SESSION["last_name"]);
unset($_SESSION["address"]);
unset($_SESSION["NIC"]);
    session_destroy();
    header('Location:../index.php');


?>