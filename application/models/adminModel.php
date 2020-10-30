<?php

class adminModel{
    public static function userDetails($level,$connection){
        $query="SELECT * FROM $level";
        $result=mysqli_query($connection,$query);
        return $result;
    }
  

    public static function searchStudent($id,$word,$connection){
    $query="SELECT * FROM student WHERE email LIKE '{$word}' 
            OR   first_name LIKE '{$word}'
            OR  last_name LIKE '{$word}'
            OR   address LIKE '{$word}'
            OR   NIC  LIKE '{$word}'
            OR   Reg_id LIKE $id";
        $result=mysqli_query($connection,$query);
        return $result;
    }
    public static function searchBoarder($id,$word,$connection){
        $query="SELECT * FROM boarder WHERE email LIKE '{$word}' 
                OR   first_name LIKE '{$word}'
                OR  last_name LIKE '{$word}'
                OR   address LIKE '{$word}'
                OR   NIC  LIKE '{$word}'
                OR   Bid LIKE $id";
            $result=mysqli_query($connection,$query);
            return $result;
        }
        public static function searchFood($id,$word,$connection){
            $query="SELECT * FROM food_supplier WHERE email LIKE '{$word}' 
                    OR   first_name LIKE '{$word}'
                    OR  last_name LIKE '{$word}'
                    OR   address LIKE '{$word}'
                    OR   NIC  LIKE '{$word}'
                    OR   FSid LIKE $id";
                $result=mysqli_query($connection,$query);
                return $result;
            }
            public static function searchBoarding($id,$word,$connection){
                $query="SELECT * FROM boardings_owner WHERE email LIKE '{$word}' 
                        OR   first_name LIKE '{$word}'
                        OR  last_name LIKE '{$word}'
                        OR   address LIKE '{$word}'
                        OR   NIC  LIKE '{$word}'
                        OR   BOid LIKE $id";
                    $result=mysqli_query($connection,$query);
                    return $result;
                }

    public static function foodPost($connection)
    {
        $query="SELECT * FROM food_post ";
        $result=mysqli_query($connection,$query);
        return $result;
    }
    public static function searchFoodPost($word,$connection)
    {
        $query="SELECT * FROM food_post WHERE ad_title LIKE '{$word}' ";
                        
                    $result=mysqli_query($connection,$query);
                    return $result;
    }

    public static function boardingPost($connection)
    {
        $query="SELECT * FROM boarding_post ";
        $result=mysqli_query($connection,$query);
        return $result;
    }
    public static function searchBoardingPost($word,$connection)
    {
        $query="SELECT * FROM boarding_post WHERE location LIKE '{$word}' ";
                        
        $result=mysqli_query($connection,$query);
        return $result;
    }
    
    public static function blockUser($level,$email,$connection)
    {
    $query="UPDATE $level SET user_accepted=2 WHERE email='{$email}'";
        $result=mysqli_query($connection,$query);
        return $result;
    }

}
?>