<?php

class IncrementoEstatico
{
    private static $id = 0;

    public function __construct()
    {
        // El llamado a un atributo o metodo estatico
        // es utilizando self::
        self::$id++;
        echo 'ID= ', self::$id, PHP_EOL;
    }
}

// Implementacion de la clase
$inc1 = new IncrementoEstatico();
$inc2 = new IncrementoEstatico();
$inc3 = new IncrementoEstatico();

?>