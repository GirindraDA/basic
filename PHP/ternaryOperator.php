<?php

//Mereka berdua punya cara baca yang sama !!!

$gender = "pria";
$hi = null;

if($gender == "pria"){
    $hi = "Hai bor";
} else {
    $hi = "Hai nona";
}

//hasil yang keluar adalah Hai bor karena nilai="pria"
echo $hi . PHP_EOL;


//Ternery Operator dibawah:
$kelamin = "wanita";
$hallo = $kelamin == "wanita" ? "Halo neng" : "Hi, Brok";

echo $hallo . PHP_EOL;







