<?php

class Dummy
{
    public $un_valor = "Cualquier cosa";
}

function suma(Dummy $n1): void
{
    echo $n1->un_valor;
}

echo suma(new Dummy, 2);

echo "\n";
