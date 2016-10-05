<?php

// Establecer zona horaria por defecto
include 'tegucigalpa.php';

// Para obtener un conjunto de fechas adaptadas
// según un intervalo establecido, tenemos a la clase DatePeriod.

$fechaInicial = new DateTime('2016-01-01');
$fechaFinal = new DateTime('2016-12-31');
$intervalo = new DateInterval('P3M');		// Cada 3 meses
$periodo = new DatePeriod($fechaInicial, $intervalo, $fechaFinal);

$i = 1;
foreach ($periodo as $fecha) {
	echo 'Fecha ', $i++, ' es ', $fecha->format('d/m/Y'), PHP_EOL;
}