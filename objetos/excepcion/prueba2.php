<?php

include 'cuenta.class.php';

// Objeto a probar
$cuenta1 = new Cuenta(500000);

try {
 	$cuenta1->retirar(11000);
} catch(SaldoException $e) {
	echo $e->mostrarError();
} catch(Exception $e) {
	echo $e->getMessage();
} finally {
	echo PHP_EOL;
}
?>