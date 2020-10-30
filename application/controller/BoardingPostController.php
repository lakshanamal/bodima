<?php

require ("../models/BoardingPostModel.php");

class BoardingPostController {
    
    function CreateCategoryDropdownList() {
        $BoardingPostModel = new BoardingPostModel();
        $result = "<div class='search'><form action = '' method = 'post' width = '100%'>
                    <div class='search-item'>
                        <h2>Please select a category:</h2> 
                        <select name = 'categories' >
                            <option value = '%' >All</option>
                            " . $this->CreateOptionValues($BoardingPostModel->GetBoardingCategories()) .
                        "</select>
                        <input type = 'submit' value = 'Search'>  
                     </div>          
                    </form></div>";

        return $result;
    }

    public function CreateBoardingTables($types) {
        $BoardingPostModel = new BoardingPostModel();
        $BoardingPostArray = $BoardingPostModel->GetBoardingbyCategory($types);
        $result = "";
        
        //Generate a Boarding_post for each BoardingPostEntity in array
        foreach ($BoardingPostArray as $key => $boarding_post) 
        {
            $result = $result .
                    "<a class='divtable' href='http://localhost:1234/application/views/BoardingPage.php?id=$boarding_post->B_post_id'>
                    <table class = 'boardingPostTable'>
                        <tr>
                            <th rowspan='6' width = '150px' ><img runat = 'server' src = '$boarding_post->image' /></th>
                            <th width = '75px' >location: </th>
                            <td>$boarding_post->city</td>
                        </tr>
                        
                        <tr>
                            <th>category: </th>
                            <td>$boarding_post->category</td>
                        </tr>
                        
                        <tr>
                            <th>Price: </th>
                            <td>$boarding_post->cost_per_person</td>
                        </tr>
                        
                        <tr>
                            <th>gender: </th>
                            <td>$boarding_post->girlsBoys</td>
                        </tr>
                       
                        
                        <tr>
                            <td colspan='2' >$boarding_post->description</td>
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
    
    
/*function CreateBoardingTables($types)
    {
        $BoardingPostModel = new BoardingPostModel();
        $BoardingPostArray = $BoardingPostModel->GetBoardingbyCategory($types);
        $result = "";
        
        //Generate a Boarding_post for each BoardingPostEntity in array
        foreach ($BoardingPostArray as $key => $boarding_post) 
        {
            $result = $result .
                    "<table class = 'boardingPostTable'>
                        <tr>
                            <th rowspan='6' width = '150px' ><img runat = 'server' src = '$boarding_post->image' /></th>
                            <th width = '75px' >location: </th>
                            <td>$boarding_post->city</td>
                        </tr>
                        
                        <tr>
                            <th>category: </th>
                            <td>$boarding_post->category</td>
                        </tr>
                        
                        <tr>
                            <th>Price: </th>
                            <td>$boarding_post->cost_per_person</td>
                        </tr>
                        
                        <tr>
                            <th>gender: </th>
                            <td>$boarding_post->girlsBoys</td>
                        </tr>
                       
                        
                        <tr>
                            <td colspan='2' >$boarding_post->description</td>
                        </tr>                      
                     </table>";
        }        
        return $result;
      */ 

public function CreateBoardingPages($id) {
        $BoardingPostModel = new BoardingPostModel();
        $BoardingPostArray = $BoardingPostModel->GetBoardingDetailsToDisplay($id);
        $result = "";
        
        //Generate a Boarding_post for each BoardingPostEntity in array
        foreach ($BoardingPostArray as $key => $boarding_post) 
        {
            $result = $result .
                    "
                     <table class = 'boardingPostpage'>

                        <tr>
                            <th rowspan='3' width = '150px' ><img runat = 'server' src = '$boarding_post->image' /></th>
                            <th width = '75px' >location: </th>
                            <td>$boarding_post->city</td>
                        </tr>
                        
                        <tr>
                            <th>category: </th>
                            <td>$boarding_post->category</td>
                        </tr>

                        <tr>
                            <th>description:   </th>
                            <td>$boarding_post->description</td>
                            
                        </tr> 
                        
                        <tr>
                            <th> </th>
                            <td></td>
                        </tr>
                        
                        

                        </table>

                        <div class='price tag'>
                             <div class='T_Header'>
                             Price (per person):
                            </div>
                            <div class='T_Define'>
                             $boarding_post->cost_per_person
                            </div>
                        </div>

                        <div class='Address tag'>
                             <div class='T_Header'>
                             gender:
                            </div>
                            <div class='T_Define'>
                             $boarding_post->girlsBoys
                            </div>
                        </div>
                       
                        <div class='Address tag'>
                            <div class='T_Header'>
                             Address:
                            </div>
                            <div class='T_Define'>
                             No $boarding_post->house_num, $boarding_post->lane, $boarding_post->city.

                            </div>
                        </div>

                       <i class='fas fa-location'></i>
                       

                        <button class='button location'><i class='fas fa-map-marker-alt'></i> See the location</button>
                        

                    <div class='requestBlock'>
                        <hr/>
                        <div class='requestInner'>
                    
                            request this boarding place :  
                         <button class='button request'>Request</button>
                        </div>
                    </div>
                    
                        "

                     ;
        }        
        return $result;
        
    }



    } 
    
  