<?php

class Liquido 
{
    private $nombre;
    private $sabor;

    public function __construct($nombre, $sabor)
    {
        $this->nombre = $nombre;
        $this->sabor = $sabor;
    }

    public function darSabor($sabor) 
    {
        $this->sabor = $sabor;
    }

    public function __toString()
    {
        return $this->nombre . ' ' . $this->sabor;
    }
}