<?php

//operator penugasan

// $a += $b bermakna $a = $a + b
// $a -= $b bermakna $a = $a - b
// $a *= $b bermakna $a = $a * b
// $a /= $b bermakna $a = $a / b
// $a %= $b bermakna $a = $a % b

$total = 0;

$buah = 5000;
$ayam = 10000;
$jus = 8000;

//cara panjang
$total = $total + $buah;
$total = $total + $ayam;
$total = $total + $jus;

var_dump($total);

//bisa di sederhanakan
$total += $buah;
$total += $ayam;
$total += $jus;

var_dump($total);

