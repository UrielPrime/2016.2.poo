<?php

/*
En este caso probará que además del comportamiento habitual
del break y del continue, tambien podemos establecer cuántos
bucles saltarán. En este caso el break saltará 3 bucles, 
mientras que el continue dos.
*/

for ($i = 0; $i < 10; $i++) {
	for ($j = 0; $j < 10; $j++) {
		for ($k = 0; $k < 10; $k++) {
			$valor = $i + $j + $k;

			echo PHP_EOL, 'Valor = ', $valor, '(', $i, ',', $j, ',', $k, ')', PHP_EOL;

			if ($valor % 2 == 0) {
				echo 'Ejecutado el continue', PHP_EOL;
				continue 2;
			}

			if ($valor > 10) {
				echo 'Ejecutado el break', PHP_EOL;
				break 3;
			}

			echo $valor, PHP_EOL;
		}
	}
}
