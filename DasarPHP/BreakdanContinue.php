<?php

$counter = 1;

while(true){
    echo "Ini Adalah For while ke : $counter". PHP_EOL;
    $counter++;

    if($counter > 10){
        break;
    }
}

for($counter = 0; $counter <= 100; $counter++){

    if($counter % 2 == 0){
        continue;
    }

    echo "Hello Continue" . $counter . PHP_EOL;
}