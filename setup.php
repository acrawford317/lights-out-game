
<?php

$lights_on = [];

$rows = $_GET["rowsNum"];
$columns = $_GET["columnsNum"];
$total = $_GET["columnsNum"] * $_GET["rowsNum"];

// <!-- SOURCES USED:  https://stackoverflow.com/questions/17778723/generating-random-numbers-without-repeats -->

function randomGen($min, $max, $quantity) {
    $numbers = range($min, $max);
    shuffle($numbers);
    return array_slice($numbers, 0, $quantity);
}

if($total<5){
    $lights_on = randomGen(1, $total, $total);
} else{
    $lights_on = randomGen(1, $total, 5);
}

$lights["positions"]=$lights_on;
$json = json_encode($lights);
$t = gettype($json);

echo $json;

?>