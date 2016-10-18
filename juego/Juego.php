<?php

include_once 'Escena.php';

$escena = new Escena (5);

echo 'Cargando escena 1... ', PHP_EOL;
$escena->cargarEscena1();

echo 'Cargando escena 2... ', PHP_EOL;
$escena->cargarEscena2();

echo 'Cargando escena 3... ', PHP_EOL;
$escena->cargarEscena3();

echo 'Cargando escena 4... ', PHP_EOL;
$escena->cargarEscena4();
?>

