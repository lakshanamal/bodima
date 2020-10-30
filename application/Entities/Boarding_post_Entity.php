<?php


class Boarding_post_Entity 
{
    public $B_post_id;
    public $category;
    public $girlsBoys;
    public $person_count;
    public $cost_per_person;
    public $rating;
    public $image;
    public $house_num;
    public $lane;
    public $city;
    public $district;
    public $description;
    public $location;
    public $lifespan;
    public $post_amount;
    public $review;
    public $keymoney;
    
    function __construct($B_post_id, $category, $girlsBoys, $person_count, $cost_per_person, $rating, $image, $house_num,$lane,$city,$district,$description,$location,$lifespan,$post_amount,$review,$keymoney) {
       
    $this->B_post_id     = $B_post_id;
    $this->category      = $category;
    $this->girlsBoys     = $girlsBoys;
    $this->person_count  = $person_count;
    $this->cost_per_person= $cost_per_person;
    $this->rating        = $rating;
    $this->image         = $image;
    $this->house_num     = $house_num;
    $this->lane          = $lane;
    $this->city          = $city;
    $this->district      = $district;
    $this->description   = $description;
    $this->location      = $location;
    $this->lifespan      = $lifespan;
    $this->post_amount   = $post_amount;
    $this->review        = $review;
    }

}

?>

