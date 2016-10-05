<?php

// Establecer zona horaria por defecto
include 'tegucigalpa.php';

// DateTime es una clase que nos permite manipular las fechas.


/*
	CONSTRUCTORES
*/

// Constructor por defecto, crea el instante actual.
$fecha1 = new DateTime();
var_dump($fecha1);

// Se puede crear un objeto fecha utilizando el formato predefinido.
$fecha2 = new DateTime('2016-05-01');	// 01 de mayo de 2016
var_dump($fecha2);

// Tambien se puede crear a partir de cualquier formato.
$fecha3 = DateTime::createFromFormat('d/m/Y', '15/09/2015');
var_dump($fecha3);

/*
	COMPARACIONES
*/

// Es posible comparar objetos DateTime
if ($fecha1 < $fecha2)
	echo 'El objeto $fecha1 es menor a $fecha2';
else if ($fecha1 == $fecha2)
	echo 'El objeto $fecha1 igual a $fecha2';
else
	echo 'El objeto $fecha1 es mayor a $fecha2';

echo PHP_EOL;

/*
	DEVOLVER STRING
*/

// Formatear la salida del DateTime, devuelve un string
echo 'Formato (d/m/Y): ', $fecha1->format('d/m/Y'), PHP_EOL;
echo 'Formato (Y-m-d): ', $fecha1->format('Y-m-d'), PHP_EOL;
