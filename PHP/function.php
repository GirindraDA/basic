<?php

//Function biasa
// function sayHello(){
//     echo "Hello Function" . PHP_EOL;
// }


$buat = false;

if($buat){
    function sayHello(){
        echo "Hello Function" . PHP_EOL;
    } 
} else {
    function sayGood(){
        echo "Good Bye" . PHP_EOL;
    }
}

sayGood();
sayGood();
