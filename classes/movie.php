<?php

class Movie {
    public $title;
    public $year;
    public $price;
    public $genre;

    function __construct($_title, $_year, $_price, $_genre)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->price = $_price;
        $this->genre = $_genre;
    }

    public function getDiscount($_eta) 
    {
        if ($_eta > 45) {
            $finalPrice = $this->price - $this->price*0.10;
            return $finalPrice; 
        }
    }
}