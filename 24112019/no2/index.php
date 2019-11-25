<?php

Class City {

public $name;
public $size;

function __construct($name, $size){

$this->name = $name;
$this->size = $size;

}

function get_name(){

return $this->name;
}

function get_size(){
    return $this->size;
}


}

$shanghai = New City("Shanghai", "10000000");

echo $shanghai->get_name();
echo "<br>";
echo $shanghai->get_size();
