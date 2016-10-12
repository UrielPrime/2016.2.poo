<?php

error_reporting(E_ALL & ~E_ERROR);

try {

	// Warning: Division by zero in...
	$valor = 1 / 0;

	$arreglo = array();

	// Notice: Undefined offset: 0 in...
	echo $arreglo[0];

	// Fatal error: require(): Failed opening required 'no_existe_archivo.php'
	require('no_existe_archivo.php');
} catch(Exception $e) {
	echo $e->getMessage();
} finally {
	echo PHP_EOL;
}

echo '**** FIN DE SCRIPT ****', PHP_EOL;