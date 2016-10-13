<?php

class Laptop
{
    private $modelo;
    private $precio;

    public function __construct($modelo, $precio)
    {
        $this->modelo = $modelo;
        $this->precio = $precio;

        // Depedencia
        $this->discoDuro = new DiscoDuro('Samsung', '1 TB', 'SSD');
    }
}
