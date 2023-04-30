<?php

// $michi = "Que bonito michi";

// echo "<pre>";

//var_dump($GLOBALS);

// var_dump($_GET);

// echo "</pre>";

$michi = "un michi";

function local_scope() 
{
    echo $_GET["michi"];
    
}

local_scope();