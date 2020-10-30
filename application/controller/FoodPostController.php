<?php

require ("../models/FoodPostModel.php");

class FoodPostController {
    
    function CreateTypeDropdownList() {
        $FoodPostModel = new FoodPostModel();
        $result = "<form action = '' method = 'post' width = '300px'>
                    Please select a category: 
                    <select name = 'categories' >
                        <option value = '%' >All</option>
                        " . $this->CreateOptionValues($FoodPostModel->GetFoodPostTypes()) .
                "</select>
                     <input type = 'submit' value = 'Search' />            
                    </form>";

        return $result;
    }

    public function CreateFoodPostTables($types) {
        $FoodPostModel = new FoodPostModel();
        $FoodPostArray = $FoodPostModel->GetFoodPostbyType($types);
        $result = "";
        
        //Generate a Boarding_post for each BoardingPostEntity in array
        foreach ($FoodPostArray as $key => $food_post) 
        {
            $result = $result .
                    "<a class='divtable' href='../views/cart.php?id=$food_post->F_post_id'>
                    <table class = 'foodPostTable'>
                        <tr>
                            
                            <th rowspan='6' width = '200px' >
                            <div class='f_img_outbox'>
                            <img runat = 'server' src = '$food_post->image' /></div></th>
                            
                            <td colspan='2' style='font-size:30px;'>$food_post->ad_title</td>
                        </tr>
                        
                        <tr>
                            <th>Address: </th>
                            <td>$food_post->address</td>
                        </tr>
                       
                        
                        <tr>
                            <td colspan='2' >$food_post->description</td>
                        </tr> 
                        
                     </table></a>";
        }        
        return $result;
        
    }




function CreateOptionValues(array $valueArray) {
        $result = "";

        foreach ($valueArray as $value) {
            $result = $result . "<option value='$value'>$value</option>";
        }

        return $result;
    }
    
    



    } 
    
  