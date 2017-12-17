<?php

class Wizard {

    private $name = "Wizard";
    private $hp = 800;
    
    public function attack() {
        $this->magic();
        echo "attack\n";
    }

    public function escape() {
        echo "escape\n";
    }
    
    private function magic() {
        echo "magic\n";
    }
}

