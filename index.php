<?php

class Movie {

    public $title,$year;
   
    function __construct($title_value="", $year_value=0){
           $this->title = $title_value;
           $this->year = $year_value;
    }

    function one_value_construct($title_value){
        $this->title = $title_value;
        $this->year = 0;
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

    function MovieAndYear(){
        return $this->title . " " . $this->year . "<br>";
    }

    public function __toString()
    {
        return "{$this->title} {$this->year}" . "<br>";
    }

};


$newMovie = new Movie("New Movie 1", 2025); 
$newMovie1 = new Movie("New Movie 2", 2022); 
$newMovie3 = new Movie("", 2022); 

// echo $newMovie->getTitle() . "<br>";
// echo $newMovie->getYear() . "<br>";
// echo $newMovie1->getTitle() . "<br>";
// echo $newMovie1->getYear() . "<br>";

// var_dump($newMovie);
// var_dump($newMovie1);

// echo $newMovie->MovieAndYear();
// echo $newMovie1->MovieAndYear();
echo "{$newMovie}";
echo "{$newMovie1}";
echo "{$newMovie3}";
var_dump($newMovie3);

?>