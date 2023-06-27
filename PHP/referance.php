<?php

$name = "Girindra";

$otherName = &$name;

$otherName = "Rinda";

//expexted output adalah "Rinda"
echo "$name" . PHP_EOL;


function increment(int &$value){
    $value++;
}

$counter = 1;
increment($counter);

echo $counter . PHP_EOL;