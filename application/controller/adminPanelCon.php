<?php 
require '../config/database.php';
require '../models/adminModel.php';
?>
<?php
if(isset($_GET['admin']))
{
    $student=adminModel::userDetails('student',$connection);
    $boarder=adminModel::userDetails('boarder',$connection);
    $boarding_owner=adminModel::userDetails('boardings_owner',$connection);
    $food_supplier=adminModel::userDetails('food_supplier',$connection);
    header('Location:../views/admin/adminPanel.php?student='.$student->num_rows.'&boarder='.$student->num_rows.'&boarding_owner='.$boarding_owner->num_rows.'&food_supplier='.$food_supplier->num_rows);
}

if(isset($_POST['block']))
{
    print_r($_POST);

    // $block=adminModel::blockUser()
}
?>