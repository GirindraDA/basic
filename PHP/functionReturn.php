<?php

//Function Return Value
function sum(int $first, int $second){
    $total = $first + $second;
    return $total;
}

$result = sum(10, 10);
var_dump($result);

$result = sum(20, 20);
var_dump($result);


function getFinalNilai(int $nilai){    
    if ($nilai >= 80){
        return "A";
    } else if ($nilai >= 70) {
        return "B";
    } else if ($nilai >= 60) {
        return "C";
    } else if ($nilai >= 50) {
        return "D";
    } else {
        return "E";
    }
    echo "UUps" . PHP_EOL;
}

$finalNilai = getFinalNilai(30);
var_dump($finalNilai);