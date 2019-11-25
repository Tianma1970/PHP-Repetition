<?php

Class City {
    public $name;
    public $size;
    

    function set_name($name){
        $this->name=$name;
    }
    function get_name() {
        return $this->name;
    }
    function set_size($size){
        $this->size=$size;
    }
    function get_size(){
        return $this->size;
    }

}

$shanghai = New City();
$shanghai->set_name("Shanghai");
$shanghai->set_size("10000000");

$malmo = New City();
$malmo->set_name("Malmö");
$malmo->set_size("350000");

echo $shanghai->get_name();
echo "<br>";
echo $shanghai->get_size();
echo"<hr>";
echo $malmo->get_name();
echo"<br>";
echo $malmo->get_size();

var_dump($shanghai instanceof City);


