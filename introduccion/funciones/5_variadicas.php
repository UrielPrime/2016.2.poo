<?php


// Las funciones variadicas permiten tener, de forma dinámica,
// múltiples argumentos. 
// Nota: no se establecen argumentos en este tipo de funciones.
function sumatoria()
{
	// Obtener el total de parametros en una función
	$numeroParametros = func_num_args();

	// Obtener el arreglo de parametros
	$arregloParametros = func_get_args();

	$total = 0;

	for ($i = 0; $i < $numeroParametros; $i++) {
		$total += $arregloParametros[$i];
	}

	return $total;
}

var_dump(sumatoria(1, 'x'));	// el string 'x', valdría cero 
var_dump(sumatoria(1, 2, 3));
var_dump(sumatoria(1, 2, 3, 4));


// Para PHP7 es posible utilizar la siguiente construcción, 
// limitando el tipo de datos de los argumentos.
function sumatoria2(int ...$params)
{
	$total = 0;

	for ($i = 0; $i < count($params); $i++) {
		$total += $params[$i];
	}

	return $total;
}

var_dump(sumatoria2(1, 2));
var_dump(sumatoria2(1, 2, 3));
var_dump(sumatoria2(1, 2, 3, 4));
