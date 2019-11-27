<?php

$countries = '{"France":"Paris", 
                "England":"London", 
                "Denmark":"Copenhagen", 
                "Sweden":"Stockholm"
            }';

$obj = json_decode($countries, true);//'true' is required

echo $obj["France"];
echo "<br>";
echo $obj["England"];
echo "<br>";
echo $obj["Denmark"];
echo "<br>";
echo $obj["Sweden"];
echo "<br>";

//'$obj' becomes an array
print_r($obj);
echo "<br>";
//'$countries' is json
print_r($countries);
