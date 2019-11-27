<?php

//To loop through the values of a PHP object

$countries = '{"France":"Paris", "England":"London", "Denmark":"Copenhagen", "Sweden":"Stockholm"}';

$obj = json_decode($countries, true);//'true' becomes optional because we have a loop

foreach ($obj as $key => $value) {
    echo $key . "=>" . $value . "<br>";
}

echo "<br>";

//About 'key' (from php-net)

$array = array(
    'fruit1' => 'apple',
    'fruit2' => 'orange',
    'fruit3' => 'grape',
    'fruit4' => 'apple',
    'fruit5' => 'apple',
    'fruit6' => 'grape');

// this cycle echoes all associative array
// key where value equals "apple"
while ($fruit_name = current($array)) {
    if ($fruit_name == 'grape') {
        echo key($array) .'<br />';
    }
    next($array);
}
