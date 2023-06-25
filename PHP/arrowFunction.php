<?php

//Arrow function dan Anonymous function sebenarnya function yang sama. Cuma sedikit perbedaanya

$first = "girindra";
$last = "dwi";

//Sintax arrow function
$helloGiri = fn() => "Hello $first $last" . PHP_EOL;

echo $helloGiri();


//callback function

function sayHello(string $name, callable $filter){
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("giri", function($name){ return strtoupper($name); });
sayHello("giri", fn($name) => strtolower($name));
sayHello("giri", "strtoupper");
sayHello("giri", "strtolower");

