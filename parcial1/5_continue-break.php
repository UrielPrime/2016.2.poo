<?php

for ($i = 0; $i < 3; $i++) {
	for ($j = 0; $j < 3; $j++) {
		for ($k = 0; $k < 3; $k++) {
			$valor = $i + $j + $k;

			echo PHP_EOL, 'Valor = ', $valor, '(', $i, ',', $j, ',', $k, ')', PHP_EOL;

			if ($valor % 2 == 0) {
				//continue 2;
				break 3;
			}

			echo $valor, PHP_EOL;
		}
	}
}