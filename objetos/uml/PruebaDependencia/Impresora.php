<?php

class Impresora
{
    public function __construct()
    {
    }

    private $modelo;
    private $tipoTinta;

    public function imprimir(Papel $papel)
    {
        echo $papel->getTexto(), PHP_EOL;
    }
}
