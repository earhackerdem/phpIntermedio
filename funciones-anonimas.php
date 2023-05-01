<?php

// $numbers = [1, 2, 3, 4];

// $multiplicar = function ($current) {
//     return $current * 2;
// };

// $multiplicando = fn ($number) => $number * 4;

// $numbers_by_2 = array_map($multiplicar, $numbers);

// $numbers_by_3 = array_map(function ($current) {
//     return $current * 3;
// }, $numbers);

// $numbers_by_4 = array_map($multiplicando, $numbers);

// $numbers_by_5 = array_map(fn ($number) => $number * 5, $numbers);

// print_r($numbers_by_2);
// print_r($numbers_by_3);
// print_r($numbers_by_4);
// print_r($numbers_by_5);

$michi = "Mr. Michi";

$change_michi_name = function () use ($michi) {
    echo $michi;
};

echo $change_michi_name();

echo "\n";
