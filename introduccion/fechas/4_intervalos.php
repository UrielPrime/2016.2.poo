<?php

// Los intervalos sirven para determinar el desplazamiento
// de tiempo de una fecha

$_1Semana = new DateInterval('P7D');
var_dump($_1Semana);
 
// Formato de DateInterval
echo $_1Semana->format('%R%d dias'), PHP_EOL;

// Es posible colocar intervalos complejos en la construcción del objeto.
// En el ejemplo 1 año, 2 meses, 3 días, 10 horas, 11 minutos y 12 segundos.
$complejo = new DateInterval('P1Y2M3DT10H11M12S');