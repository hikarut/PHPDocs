<?php

require_once "./Monster.php";

class Ghost implements Monster {

    private $name = "";
    private $hp = 300;
    
    public function attack() {
        $this->disappear();
        echo "a\n";
    }

    private function disappear() {
        echo "b\n";
    }
}

$ghost = new Ghost();
$ghost->attack();
