<?php

require_once "./Human.php";

class Hero extends Human {

    public function attack() {
        $this->swordAttack();
        echo "attack\n";
    }

    private function swordAttack() {
        echo "swordAttack\n";
    }
}

$heroName = "aa";
$heroHp = 1000;
$hero = new Hero($heroName, $heroHp);
$hero->attack();
