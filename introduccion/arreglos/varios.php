<?php

// Ordenar un array. Cambia las claves numéricas.
$frutas = ['pera', 'banana', 'uva', 'fresa', 'limón'];
sort($frutas);
print_r($frutas);

// Número de elementos en un array
$conteo = count ($frutas);
echo 'Numero de frutas: ', $conteo, PHP_EOL;

// Busqueda de un valor a través de la clave
$encontrado1 = array_search(2, $frutas);
$encontrado2 = array_search(10, $frutas);
echo 'La posición 2 de las frutas es: ', $encontrado1, PHP_EOL;
echo 'La posición 10 de las frutas es: ', $encontrado2, PHP_EOL;