<?php

require ("../Entities/Boarding_post_Entity.php");

class BoardingPostModel {
    
    
    //get distinct boarding categories from boadring_post table in database
    function GetBoardingCategories() {
        require '../config/database.php';

        //$dbserver,$dbuser,$dbpass,$dbname
        //Open connection and Select database.   
        $link= mysqli_connect($dbserver, $dbuser, $dbpass) or die(mysqli_error($query ));
        mysqli_select_db($link,$dbname);
        $result = mysqli_query($link,"SELECT DISTINCT category FROM boarding_post") or die(mysqli_error($query ));
        $categories = array();

        //Get data from database.
        while ($row = mysqli_fetch_array($result)) {
            array_push($categories, $row[0]);
        }
        mysqli_close($link);
        return $categories;
    }
    
    
    function GetBoardingbyCategory($category) {
        require '../config/database.php';

        //Open connection and Select database.     
        $conn=mysqli_connect($dbserver, $dbuser, $dbpass) or die(mysqli_error($query ));
        mysqli_select_db($conn,$dbname);

// , $girlsBoys, $person_count, $cost_per_person, $rating, $image, $house_num,$lane,$city,$postal_code,$district,$description,$location,$lifespan,$post_amount,$review,$keymoney

        $query = "SELECT B_post_id, category, girlsBoys, person_count, cost_per_person, rating, image, house_num, lane, city, district, description, location, lifespan, post_amount, review, keymoney FROM boarding_post WHERE category LIKE '$category'";
        $result = mysqli_query($conn,$query) or die(mysqli_error($query ));
        $boardingPostArray = array();
        

        //Get data from database.
        while ($row = mysqli_fetch_array($result)) {
            
            $B_post_id   =$row[0]; 
            $category    =$row[1];
            $girlsBoys   =$row[2];
            $person_count=$row[3];
            $cost_per_person=$row[4];
            $rating      =$row[5];
            $image       =$row[6];
            $house_num   =$row[7];
            $lane        =$row[8];
            $city        =$row[9];
            $district    =$row[10];
            $description =$row[11];
            $location    =$row[12];
            $lifespan    =$row[13];
            $post_amount =$row[14];
            $review      =$row[15];
            $keymoney    =$row[16];

            //Create coffee objects and store them in an array.
            $boarding_post = new Boarding_post_Entity($B_post_id, $category, $girlsBoys, $person_count, $cost_per_person, $rating, $image, $house_num,$lane,$city,$district,$description,$location,$lifespan,$post_amount,$review,$keymoney);
            array_push($boardingPostArray, $boarding_post);
        }
        //Close connection and return result
        mysqli_close($conn);
        return $boardingPostArray;
    }


    function GetBoardingDetailsToDisplay($id) {
        require '../config/database.php';

        //Open connection and Select database.     
        $conn=mysqli_connect($dbserver, $dbuser, $dbpass) or die(mysqli_error($query ));
        mysqli_select_db($conn,$dbname);

        $query = "SELECT B_post_id, category, girlsBoys, person_count, cost_per_person, rating, image, house_num, lane, city, district, description, location, lifespan, post_amount, review, keymoney FROM boarding_post WHERE B_post_id LIKE '$id'";
        $result = mysqli_query($conn,$query) or die(mysqli_error($query));
        $boardingPostArray = array();

        //Get data from database.
        while ($row = mysqli_fetch_array($result)) {
            
            $B_post_id   =$row[0]; 
            $category    =$row[1];
            $girlsBoys   =$row[2];
            $person_count=$row[3];
            $cost_per_person=$row[4];
            $rating      =$row[5];
            $image       =$row[6];
            $house_num   =$row[7];
            $lane        =$row[8];
            $city        =$row[9];
            $district    =$row[10];
            $description =$row[11];
            $location    =$row[12];
            $lifespan    =$row[13];
            $post_amount =$row[14];
            $review      =$row[15];
            $keymoney    =$row[16];

            //Create coffee objects and store them in an array.
            $boarding_post = new Boarding_post_Entity($B_post_id, $category, $girlsBoys, $person_count, $cost_per_person, $rating, $image, $house_num,$lane,$city,$district,$description,$location,$lifespan,$post_amount,$review,$keymoney);
            array_push($boardingPostArray, $boarding_post);
        }
        //Close connection and return result
        mysqli_close($conn);
        return $boardingPostArray;
    }

}

?>