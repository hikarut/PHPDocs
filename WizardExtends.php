<?php

class Wizard extends Human{
    
    public function attack() {
        $this->magic();
        echo "attack\n";
    }

    private function magic() {
        echo "magic\n";
    }
}

