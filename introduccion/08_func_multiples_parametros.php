<?php

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

var_dump(sumatoria(1, 'x'));
var_dump(sumatoria(1, 2, 3));
var_dump(sumatoria(1, 2, 3, 4));


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
