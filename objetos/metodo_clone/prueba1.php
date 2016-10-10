<?php

include 'taza.class.php';
include 'liquido.class.php';

$te = new Liquido('té', 'amargo');
$taza = new Taza(5, $te);

$taza2 = $taza;
$taza2->capacidad = 3;

echo $taza, PHP_EOL;		// té amargo(3)
echo $taza2, PHP_EOL;		// té amargo(3)