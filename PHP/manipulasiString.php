<?php

$nama = "Girindra Dwi Antara";

//untuk memnambahkan array, untuk saat ini lebih baik menggunakan
// DOT(.). Walau bisa dengan PLUS(+), tapi dot lebih baik
echo "Nama : " .$nama .PHP_EOL;
echo "Value : " . 100 .PHP_EOL;

//mengubah number ke string
$valueString = (string)100;
var_dump($valueString);

//mengubah string, ke integer
$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"1.02";
var_dump($valueFloat);

//G = index ke- 0, I = index ke- 1, R = index ke- 2
$giri = "GIR";
echo $giri[0] . PHP_EOL;
echo $giri[1] . PHP_EOL;
echo $giri[2] . PHP_EOL;






