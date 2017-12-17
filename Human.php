<?php

class Human {

    private $name;
    private $hp;

    public function __construct($name, $hp) {
        $this->name = $name;
        $this->hp = $hp;
    }
    
    public function attack() {
        echo "attack\n";
    }

    public function escape() {
        echo "escape\n";
    }
}

$name = "aa";
$hp = 100;
$human = new Human($name, $hp);
