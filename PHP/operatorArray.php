<?php

// $a + $b  
// $a == $b 
// $a === $b
// $a != $b
// $a !== $b

$first = [
    "first_name" => "giri"
];
$last = [
    "last_name" => "ndra"
];

//Operasi union
$full = $first + $last;
// var_dump($full); 

$a = [
    "first_name" => "giri",
    "last_name" => "ndra"
];

$b = [
    "last_name" => "ndra",
    "first_name" => "giri"
];
//operasi ==
$c = $a == $b;
var_dump($c);

//ada banyak operator untuk array, silahkan coba coba sendiri



