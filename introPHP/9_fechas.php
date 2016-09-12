<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Fecha actual en formato string
var_dump(date('Y-m-D h:MM'));
echo '<br>';

// Fecha actual: tipo DateTime
var_dump(date_create());
echo '<br>';

// Crear un objeto de tipo DateTime
$cadena = '2016-02-29';
$obj1 = date_create_from_format('Y-m-d', $cadena);
var_dump($obj1);

echo '<br>';

// El objeto no puede comportarse como una cadena, debe transformase
//echo $obj1;
$formato_salida = 'd-m-y';
$cadena_fecha = date_format($obj1, $formato_salida);
var_dump($cadena_fecha);

echo '<br>';

//Utilizando metodos del objeto DateTime
$cadena_fecha = $obj1->format('d/m/Y');
var_dump($cadena_fecha);

echo '<br>';

// Usando zona horaria
$zona_horaria = new DateTimeZone('Europe/Moscow');
$obj2 = new DateTime('now', $zona_horaria);
var_dump($obj2);

echo '<br>';

$fecha = date('Y-m-d H', strtotime('+10 months'));
echo 'La fecha en 10 mes sera: ', $fecha;
