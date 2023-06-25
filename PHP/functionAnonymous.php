<?php

$sayHello = function(string $name){
    echo "Hello $name" . PHP_EOL;
};

$sayHello("giri");
$sayHello("antara");


function sayGoodBye(string $name, $filter){
    $finalName = $filter($name);
    echo "Good Bye $finalName" . PHP_EOL;
}

sayGoodBye("Giri", function(string $name): string{
    return strtoupper($name);
});

//Memiliki output yg sama dengan fungsi diatas
$filterFunction = function(string $name): string{
    return strtoupper($name);
};
   
sayGoodBye("Giri", $filterFunction);








