<?php

Class Car {
    protected $name;
    protected $color;

    public function __construct($name, $color){
        $this->name = $name;
        $this->color =$color;

    }
            protected function message(){
                echo "I am a {$this->name} with the color of {$this->color} and a weight about{$this->weight} kg";
            }

}

Class Tesla extends Car {

    public function __construct($name, $color, $weight){
        $this->name = $name;
        $this->color = $color;
        $this->weight= $weight;
    }
    public function intro() {
        echo "I am a Tesla or a car. ";
        $this->message();
    }
}

$tesla = new Tesla("Tesla", "Red", "3000");

$tesla->intro();
echo "<br>";
//$tesla->message();