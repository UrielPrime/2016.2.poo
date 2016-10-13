<?php

class DiscoDuro
{
    private $marca;
    private $memoria;
    private $rpm;
    private $bus;
    private $tipo;

    public function __construct($marca, $memoria, $tipo)
    {
        $this->marca = $marca;
        $this->memoria = $memoria;
        $this->tipo = $tipo;
    }

}
