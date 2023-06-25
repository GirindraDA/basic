<?php

//Break : untuk memaksa berhenti perulangan, bila menemui kondisi yang tidak terpenuhi
$counter = 1;

while(true){
    echo "Hello for Loop ke -$counter " . PHP_EOL;
    $counter++;

    if($counter > 10){
        break;
    }
}

//Continue
for($counter = 1; $counter <= 100; $counter++){
    if($counter % 2 == 0){
        continue;
    }
    echo "Counter : $counter" .PHP_EOL;
}