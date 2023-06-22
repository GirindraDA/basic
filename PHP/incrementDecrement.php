<?php

$a = 10;

$a++;
//$a++ memiliki nilai == $a = $a + 1
$a++;

//nilai yang tampil adalah 12, karena 10 + 1 = 11, lalu 11 + 1 = 12
var_dump($a);

//pre increment
$b = 10;
//memiliki nilai $b = $b + 1, nilai b ditambahkan terlebih dahulu
$c = ++$b;
//maka akan menampilkan nilai 11
var_dump($c);

//post increment
$d = 10;
//memiliki nilai $e = $d + 1, nilai disimpan dahulu dan akan ditambahkan setelahnya
$e = $d++;
//maka akan menampilkan nilai 10
var_dump($e);






