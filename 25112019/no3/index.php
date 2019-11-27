<?php
//1. json_encode with asscoative array
$city = ["Hamburg" =>"BRD", "Copenhagen"=>"Denmark", "Stockholm"=>"Sweden"];

echo json_encode($city);
echo "<br>";

//2.json_encode with index array
$city = ["Hamburg", "Copenhagen", "Stockholm"];

echo json_encode($city);
echo "<br>";

//3. json_decode to a PHP object
$city = '{"Hamburg": "BRD", "Copenhagen": "Denmark", "Stockholm": "Sweden"}';

var_dump(json_decode($city, true)); //true as a second parameter converts an object to an array
echo "<br>";

//4. How to access the values from a PHP object
$city = '{"Hamburg": "BRD", "Copenhagen": "Denmark", "Stockholm": "Sweden" }';

$obj = json_decode($city);

echo $obj->Hamburg;
echo "<br>";
echo $obj->Copenhagen;
echo "<br>";
echo $obj->Stockholm;
echo "<br>";

//5. How to access values from an associative array in PHP

$staff = '{
    "Peter": 45, 
    "Olivia": 46, 
    "Arndt": 35, 
    "Lisa": 26
}';

$arr = json_decode($staff, true);

echo $arr["Peter"];
echo "<br>";
echo $arr["Olivia"];
echo "<br>";
echo $arr["Arndt"];
echo "<br>";
echo $arr["Lisa"];
echo "<br>";