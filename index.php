<?php

class Movie {

    public $title="";
    public $year = "";
   
    function __construct($title_value, $year_value){
           $this->title = $title_value;
           $this->year = $year_value;
    }

    function getTitle(){
        return $this->title;
    }

    function getYear(){
        return $this->year;
    }

    function setTitle($newTitle){
        $this->title = $newTitle;
    }

    function setYear($newYear){
        $this->year=$newYear;
    }

};


$newMovie = new Movie("New Movie 1", 2021); 
$newMovie1 = new Movie("New Movie 2", 2022); 


echo $newMovie->getTitle() . "<br>";
echo $newMovie->getYear() . "<br>";
echo $newMovie1->getTitle() . "<br>";
echo $newMovie1->getYear() . "<br>";

var_dump($newMovie);
var_dump($newMovie1);

?>