<?php
class Goodbye{
    const MESSAGE = "We like to test";

    public function hello(){
        echo self::MESSAGE;
    }
}

$goodbye = New Goodbye;
$goodbye->hello();

//echo Goodbye::MESSAGE;

die();

class Goodbye {
    const LEAVING_MESSAGE = " Thank you for visiting W3Schools.com!";
}

echo Goodbye::LEAVING_MESSAGE;

//die();

Class Goodby {

    const MESSAGE = " we are ready for today.";
}

echo Goodby::MESSAGE;
//const are case sensitive
