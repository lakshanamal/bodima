<?php session_start(); ?>

<?php
require '../controller/FoodPostController.php';

$FoodPostController = new FoodPostController();

// if(isset($_POST['categories']))
// {
//     //Fill page with category of the selected type
//     $BoardingPostTables = $BoardingPostController->CreateBoardingTables($_POST['categories']);
// }
// else 
// {
//     //Page is loaded for the first time, no type selected -> Fetch all types
//     $BoardingPostTables = $BoardingPostController->CreateBoardingTables('%');
// }

//Output page data
$title = 'Food Posts';
// $content = $BoardingPostController->CreateCategoryDropdownList(). $BoardingPostTables;
$content =$FoodPostController->CreateFoodPostTables('%');
include 'Template.php';

?>