<?php

class Papel
{
    private $medida;
    private $color;
    private $fabricante;
    private $texto;

    public function __construct($texto)
    {   
        $this->setTexto($texto);
        $this->color = 'blanco';
        $this->medida = 'carta';
    }

    public function setTexto($texto)
    {
        $this->texto = $texto;
    }

    public function getTexto():string
    {
        return $this->texto;
    }
}
