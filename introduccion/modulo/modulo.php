<?php

// Para llamar funciones es posible utilizar
// require o include.
include 'funcion.php';
echo sumar(13,2), PHP_EOL;

// También es posible para el caso que se retornen
// valores de arrays, objetos o constantes
$saludo = require 'variable.php';
echo $saludo, PHP_EOL;
