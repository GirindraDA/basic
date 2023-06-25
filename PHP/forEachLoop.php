<?php

//Kode tanpa for each
$names = ["giri", "dwi", "antara"];

for($i = 0; $i < count($names); $i++){
    echo "Hello data ke - $i = $names[$i]" . PHP_EOL;
}

//kode dengan for each
$namas = ["giri", "dwi", "antara"];

foreach ($namas as $nama){
    echo "Hello $nama" . PHP_EOL;
}

//Apabila array mirip map begini dan butuh mengambil index dan value nya
$person = [
    "first_name" => "giri",
    "mid_name" => "ndra",
    "last_name" => "dwi"
];

foreach($person as $key => $value){
    echo "$key : $value" . PHP_EOL;
}



