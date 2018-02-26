<?php
$bmw = [
    'model' => 'X5',
    'speed' => 120,
    'doors' => 5,
    'year' => '2015'
];

$toyota = [
    'model' => 'RAV4',
    'speed' => 130,
    'doors' => 4,
    'year' => '2016'
];

$opel = [
    'model' => 'Zafira',
    'speed' => 125,
    'doors' => 4,
    'year' => '2013'
];

$cars['bmw'] = $bmw;
$cars['toyota'] = $toyota;
$cars['opel'] = $opel;

foreach ($cars as $key => $value) {
    echo "CAR $key <br>";
    foreach ($value as $v) {
        echo $v . ' ';
    }
    echo '<br><br>';
}

echo '<pre>';
echo '$cars:<br>';
print_r($cars);
echo '</pre>';
