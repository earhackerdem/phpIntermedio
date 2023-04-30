<?php

function get_country_name($country)
{
    $name = "";

    switch ($country) {
        case 'MX':
            $name = "México";
            break;
        case 'COL':
            $name = "Colombia";
            break;
        case 'EU';
            $name = "Estados Unidos";
            break;
        default:
            $name = "ZZ";
            break;
    }

    return $name;
}

echo get_country_name("mX");

function get_country_name_match($country)
{
    return match($country){
        "MXN" => "México",
        "COL" => 'Colombia',
        "EUA" => 'Estados Unidos',
         default => 'ZZ'
    };
}

echo get_country_name_match("MXN");

echo "\n";