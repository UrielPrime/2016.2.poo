<?php

include 'cuenta.class.php';

// Objeto a probar
$cuenta1 = new Cuenta(500);

try {
 	$cuenta1->retirar(1000);
} catch(Exception $e) {
	echo $e->mostrarError(), PHP_EOL;
}
?>