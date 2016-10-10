<?php

class TazaClon {
    private $capacidad;
    private $liquido;

    public function __construct($capacidad, $liquido)
    {
        $this->capacidad = $capacidad;
        $this->liquido = $liquido;
    }

    public function __get($atributo)
    {
        if (property_exists($this, $atributo))
            return $this->$atributo;
    }
 
    public function __set($atributo, $valor)
    {
        if (property_exists($this, $atributo))
            $this->$atributo = $valor;
    }

    public function __toString()
    {
        return $this->liquido . '(' . $this->capacidad . ')';
    }

    public function __clone()
    {
        $this->liquido = clone $this->liquido;
    }
}