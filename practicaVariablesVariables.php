<?php

$dog = "woof!";
$cat = "meow!";
$horse = "Ijiji soy un caballo!";

$option = 2;

switch ($option) {
    case 1:
        $var = "dog";
        break;
    case 2:
        $var = "horse";
        break;
}

echo $$var;
echo "\n";