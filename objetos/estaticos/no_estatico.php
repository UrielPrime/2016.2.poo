<?php

class IncrementoNoEstatico
{
    private $id = 0;

    public function __construct()
    {
    	$this->id++;
    	echo 'ID= ', $this->id, PHP_EOL;
    }
}

// Implementacion de la clase
$inc1 = new IncrementoNoEstatico();
$inc2 = new IncrementoNoEstatico();
$inc3 = new IncrementoNoEstatico();

?>