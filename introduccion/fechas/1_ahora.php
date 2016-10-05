<?php

// Llamar al archivo que corresponde a la zona horaria por defecto.
// En caso de no tenerlo, se genera un 'warning', al ejecutar un archivo.
include 'tegucigalpa.php';

// Devolver un string con el instante actual
$ahoraString = date('Y-m-d');

echo $ahoraString, PHP_EOL;

// Devolver un arreglo con datos relevantes del instante actual
$ahoraArray = getdate();
var_dump($ahoraArray);