<?php

//Factorial Loop
function factorialLoop(int $value){
    $total = 1;
    for ($i = 1; $i <= $value; $i++){
        $total *= $i;
        //$total = $total * $i; Memiliki arti yang sama
    }
    return $total;
}

//Hasil nya adalah 5 * 4 * 3 * 2 * 1 = 120
var_dump(factorialLoop(5));


//Recursive Loop
//Function yang memanggil dirinya sendiri
function factorialRecursive(int $nilai): int{
    if ($nilai == 1){
        return 1;
    } else {
        return $nilai * factorialRecursive($nilai - 1);
    }
}

//Memiliki output yang sama seperti factorial loop, namun syntax lebih simple
var_dump(factorialRecursive(5));












