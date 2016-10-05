<?php

// Es posible establecer ciertas operaciones útiles entre fechas.
// Por ejemplo, obtener la diferencia entre dos fechas.
include 'tegucigalpa.php';

$fechaInicial = new DateTime('2010-03-14');
$fechaFinal = new DateTime('2015-10-27');

// La función diff(), obtiene un DateInterval.
$diferencia1 = $fechaInicial->diff($fechaFinal);
$diferencia2 = $fechaFinal->diff($fechaInicial);

// Dias transcurridos en el intervalo
var_dump($diferencia1->days); 	// 2053
var_dump($diferencia2->days);	// 2053

// Dias con el signo específico.
var_dump($diferencia1->format('%R%a dias'));		// +2053 dias
var_dump($diferencia2->format('%R%a dias'));		// -2053 dias