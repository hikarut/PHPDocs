<?php

class Calculation {
    
    public function sum(array $score) {
        $result = 0;
        foreach ($score as $value) {
            $result += $value;
        }

        return $result;
    }

    public static function average(array $score) {
        $result = 0;
        foreach ($score as $value) {
            $result += $value;
        }

        $result = $result / count($score);

        return $result;
    }
}

$calculation = new Calculation();
$myScore = [70, 90, 50];
$myScoreAverage = $calculation->average($myScore);
echo $myScoreAverage;

$myScore = Calculation::average($myScore);
echo $myScoreAverage;
