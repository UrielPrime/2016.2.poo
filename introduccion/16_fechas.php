<?php

define ('BR', '<BR>');

/* ---------------------------------------------------------------------
 *
 *                           Clase DateTime
 *
 * ---------------------------------------------------------------------*/
// Establecer la zona horaria por defecto
date_default_timezone_set('America/Tegucigalpa');

// Fecha actual en formato string
echo 'Fecha (string): ';
var_dump(date('Y-M-d h:i'));
echo BR;

// Fecha actual: tipo DateTime
echo 'Fecha (DateTime): ';
var_dump(date_create());
echo BR;

// Otra opcion: utilizar el constructor del DateTime
echo 'Utilizando constructor de DateTime', BR;
$fecha = new DateTime('2016-09-09');
var_dump($fecha);

// Una opción más: Crear un objeto DateTime, utilizando una funcion
echo 'Utilizando funcion date_create_from_format()', BR;
$cadena = '2016-03-29';
$obj1 = date_create_from_format('Y-m-d', $cadena);
var_dump($obj1);

// Formatear la salida del DateTime, devuelve un string
$cadena_fecha = $obj1->format('d/m/Y');
echo 'Formato (d/m/Y): ', $cadena_fecha, BR;
$cadena_fecha = $obj1->format('Y-m-d');
echo 'Formato (Y-m-d): ', $cadena_fecha, BR;

/* ---------------------------------------------------------------------
 *
 *                           Clase DateTimeZone
 *
 * ---------------------------------------------------------------------*/

// Usando zona horaria
$zona_horaria = new DateTimeZone('Europe/Moscow');
$obj2 = new DateTime('now', $zona_horaria);
var_dump($obj2);


/* ---------------------------------------------------------------------
 *
 *                           Clase DateInterval
 *
 * ---------------------------------------------------------------------*/

$fecha = date('Y-m-d H', strtotime('+10 months'));
echo 'La fecha en 10 mes sera: ', $fecha;
