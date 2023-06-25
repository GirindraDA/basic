<?php

$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];


$mapFunction = fn(int $value) => $value * 10;
var_dump(array_map($mapFunction, $data));

rsort($data);
var_dump($data);


$person = [
    "firstName" => "Girindra",
    "lastName" => "Dwi"
];

var_dump(array_keys($person));
var_dump(array_values($person));