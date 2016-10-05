<?php

class Prueba
{
	public function __call($nombre, $argumentos)
	{
		echo 'Llamado de __call', PHP_EOL;
	}
}

$prueba = new Prueba();
$prueba->noExiste();