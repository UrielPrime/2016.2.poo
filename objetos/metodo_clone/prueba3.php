<?php

include 'taza_clon.class.php';
include 'liquido.class.php';

$te = new Liquido('té', 'amargo');
$taza = new TazaClon(5, $te);

$taza2 = clone $taza;
$taza2->capacidad = 3;
$taza2->liquido->darSabor('dulce');

echo $taza, PHP_EOL;
echo $taza2, PHP_EOL;