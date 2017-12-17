<?php

class Fighter {

    private $name = "Fighter";
    private $hp = 1300;
    
    public function attack() {
        $this->punch();
        echo "attack\n";
    }

    public function escape() {
        echo "escape\n";
    }
    
    private function punch() {
        echo "punch\n";
    }
}

