<?php

//function dengan argument/parameter
function sayHello($name){
    echo "Hello $name" . PHP_EOL;
}

SayHello("Giri");
SayHello("Dwi");


//Default argument/param value
//default argument value baiknya harus di blakang, bukan di depan
function hay($hay = "anonymous"){
    echo "Hello $hay" . PHP_EOL;
}

hay();


//type data declaration
// memebrikan tipe data pada argumen
function sum(int $first, int $last){
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}

sum("100", "100");
sum(100, 100);
sum(true, false);

//Variabel-length argument list

function sumAll(...$values){
    $total = 0;
    foreach ($values as $value){
        $total += $value;
    }
    echo "Total ". implode(" + ", $values) . " = $total" . PHP_EOL;
}

sumAll(10, 20, 30, 40);

//Apabila argument sudah memiliki nilai array maka, gunakan kode dibawah untuk bisa memberikan value ke dalam array nya
// $values = [];

// sumAll(...[10, 20, 30, 40]);

