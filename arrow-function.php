<?php

$cajero = 10;


//No funcionan para escribir en el ambito global
$add_cajero = fn($add) => $cajero += $add;

echo $add_cajero(20);

echo "\n";

echo $cajero;

echo "\n";


$edades = [5,1,50,9,18];

$mayores_de_edad = array_filter($edades, fn($edad) => $edad>=18);

print_r($mayores_de_edad);

//Pueden acceder a variable globales
//No pueden modificar el valor de dichas variables, solo leer