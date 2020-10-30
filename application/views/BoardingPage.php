<?php

require '../controller/BoardingPostController.php';

$BoardingPostController = new BoardingPostController();


//Output page data
$pid=$_GET['id'];
$title = 'Boarding Pages';
echo $pid;
$content = $BoardingPostController->CreateBoardingPages($pid);


include 'Template.php';

?>