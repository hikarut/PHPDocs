<?php

class Fighter extends Human{

    public function attack() {
        $this->punch();
        echo "attack\n";
    }

    private function punch() {
        echo "punch\n";
    }
}

