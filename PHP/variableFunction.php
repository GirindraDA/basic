<?php

function foo(){
    echo "Fooo" . PHP_EOL;
}

function bar(){
    echo "Barr" . PHP_EOL;
}

$functionFoo = "foo";
$functionFoo();

$functionBar = "bar";
$functionBar();

//penggunaan variabel function yang lebih umum
function sayHello(string $name, $filter){
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

//contoh sample yang digunakan
function sample(string $name): string{
    return "sample $name";
}

sayHello("giri", "sample");//argumen kedua adalah variabel function

sayHello("giri", "strtolower");
sayHello("giri", "strtoupper");


