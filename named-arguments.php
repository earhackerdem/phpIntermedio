<?php

function get_person_info($name, $age, $country)
{
    echo "Tengo la información de $name, tiene $age años y vive en $country";
}



get_person_info(
    age:18,
    country:"Mexico",
    name:"Saul"
);