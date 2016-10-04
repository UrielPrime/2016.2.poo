<?php

interface IConstante
{
    const VALOR = 'Es un valor constante';
}

class Prueba implements IConstante
{
    public function __construct()
    {
        echo IConstante::VALOR, PHP_EOL;
    }
}

$prueba = new Prueba();
?>
