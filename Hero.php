<?php

class Hero {

    private $name = "Hero";
    private $hp = 1000;
    
    public function attack() {
        $this->swordAttack();
        echo "attack\n";
    }

    public function escape() {
        echo "escape\n";
    }
    
    private function swordAttack() {
        echo "swordAttack\n";
    }
}

$hero = new Hero();
$hero->attack();
$hero->name = "Ghost"; // error
$hero->swordAttack(); // error
