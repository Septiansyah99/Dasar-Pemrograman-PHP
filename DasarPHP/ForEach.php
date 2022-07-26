<?php

$names = ['Dasep','Septian','Septiansyah'];

foreach($names as $name){

    echo "Hello $name". PHP_EOL;
}

$person = [
    'first_name' => 'Dasep',
    'last_name' => 'Septian'
];

foreach($person as $key => $value){
    echo "$key : $value" . PHP_EOL;
}