<?php

class Bat {

    private $name = "";
    private $hp = 500;
    
    public function attack() {
        $this->fly();
        echo "a\n";
    }
    
    private function fly() {
        echo "a\n";
    }
}

$bat = new Bat();
$bat->attack();
$bat->name = "Ghost"; // error
$bat->fly(); // error
