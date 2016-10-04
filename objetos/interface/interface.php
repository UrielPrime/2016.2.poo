<?php

// Creacion de interface
interface IVolar
{
    public function volando();
}


interface INadar
{
    public function nadando();
}

//----------------------------------------------

abstract class Ave
{
    protected $nombre;
}


class Aguila extends Ave implements IVolar
{
    public function __construct()
    {
        $this->nombre = __CLASS__;
    }

    public function volando()
    {
        echo $this->nombre, ': volando', PHP_EOL;
    }
}


class Pinguino extends Ave implements INadar
{
    public function __construct()
    {
        $this->nombre = __CLASS__;
    }

    public function nadando()
    {
        echo $this->nombre, ': Nada en ambientes templados', PHP_EOL;
    }
}


// Especie de Herencia Múltiple
class Pato extends Ave implements IVolar, INadar
{
    public function __construct()
    {
        $this->nombre = __CLASS__;
    }

    public function volando()
    {
        echo $this->nombre, ': volando largas distancias', PHP_EOL;
    }

    public function nadando()
    {
        echo $this->nombre, ': Nada en el estanque', PHP_EOL;
    }
}

$pato = new Pato();
$pato->volando();
$pato->nadando();

var_dump($pato instanceof INadar);
