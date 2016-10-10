<?php

include 'taza.class.php';
include 'liquido.class.php';

$te = new Liquido('té', 'amargo');
$taza = new Taza(5, $te);

$taza2 = clone $taza;
$taza2->capacidad = 3;

// Objeto Liquido inyectado en objeto Taza: clonación superficial
$taza2->liquido->darSabor('dulce');

echo $taza, PHP_EOL; 	// té dulce(5)
echo $taza2, PHP_EOL;	// té dulce(3)