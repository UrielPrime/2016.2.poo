<?php

$a = 0;
$b = false;

// Retorna TRUE, tienen el mismo valor
var_dump(0 == false);

// Retorna FALSE, pues no son del mismo tipo
var_dump(0 === false);

// Retorna FALSE, pues tienen el mismo valor
var_dump(0 != false);

// Retorna TRUE, pues tienen el mismo valor pero distinto tipo
var_dump(0 !== false);

// $cadena tendrá como resultado: 'hola mundo'
$cadena = 'hola ' . 'mundo';
var_dump($cadena);

// Si la $revisar no esta inicializada entonces $valor tendrá valor de diez
$valor = $revisar ?? 10;
var_dump($valor);

$uno = 1;
$diez = 10;
$cien = 100;

// Retorna -1, $uno es menor que $diez
var_dump($uno <=> $diez);

// Retorno 0, son iguales
var_dump($uno <=> $uno);

// Retorna 1, $cien es mayor que $diez
var_dump($cien <=> $diez);
