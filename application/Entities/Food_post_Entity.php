<?php


class Food_post_Entity 
{
    public $F_post_id;
    public $FSid;
    public $ad_title;
    public $description;
    public $address;
    public $location;
    public $type;
    public $rating;
    public $ordering_time_deadline;
    public $lifespan;
    public $post_amount;
    public $image;
    

    function __construct($F_post_id, $FSid, $ad_title, $description, $address, $location, $type, $rating, $ordering_time_deadline,$lifespan,$post_amount,$image) {
       
    $this->F_post_id     = $F_post_id;
    $this->FSid          = $FSid;
    $this->ad_title      = $ad_title;
    $this->description   = $description;
    $this->address       = $address;
    $this->location      = $location;
    $this->type          = $type;
    $this->rating        = $rating;
    $this->ordering_time_deadlinem     = $ordering_time_deadline;
    $this->lifespan      = $lifespan;
    $this->post_amount   = $post_amount;
    $this->image         = $image;
   
    }

}

?>

