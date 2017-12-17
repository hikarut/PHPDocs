<?php

$name = 'Yamada';
$ageInt = 30;
$ageSting = '30';
$weight = 62.56;
$isLiar = false;

echo 'My name is' . $name;
echo 'My age is' . $ageInt;
echo 'My age is' . $ageSting;
echo 'My weight is' . $weight;

$myAge = 30;
if ($myAge >= 20) {
    echo '';
} else {
    echo '';
}

$score = 70;

if ($score === 100) {
    echo 'Perfect!';
} elseif ($score < 100 && $score > 80) {
    echo 'Good!';
} else {
    echo 'Bad';
}

$score = 100;

if ($score === 100) {
    echo 'Perfect!';
}

if ($isLiar) {
    echo '';
}
if ($isLiar === true) {
    echo '';
}

if (!$isLiar) {
    echo '';
}
if ($isLiar !== true) {
    echo '';
}




$i = 0;
$myAge = 30;

while ($i < 5) {
    $i++;
    $myAge = $myAge + 1;
}

echo $myAge;

$myAge = 30;

for ($i = 0; $i < 5; $i++) {
    $myAge = $myAge + 1;
}

echo $myAge;

$score = 70;

switch ($score) {
case 100:
    echo 'Perfect!';
    break;
case ($score < 100 && $score > 80):
    echo 'Good!';
    break;
default:
    echo 'Bad';
}

$myScore = [70, 90, 50];

foreach ($myScore as $score) {
    echo 'My score is ' . $score . "\n";
}

$personalScore = ['Yamada' => 70,
                  'Sato' => 90,
                  'Suzuki' => 50];

foreach ($personalScore as $name => $score) {
    echo $name . ' score is ' . $score . "\n";
}

$myScore = array(70, 90, 50);
$myScore = [70, 90, 50];

function average(array $score) {
    $result = 0;
    foreach ($score as $value) {
        $result += $value;
    }

    $result = $result / count($score);

    return $result;
}

$myScoreAverage = average($myScore);
echo $myScoreAverage;

$myScore = 80;
$myScoreAverage = average($myScore);
