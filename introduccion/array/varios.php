<?php

// Ordenar un array. Cambia las claves numéricas.
$frutas = ['pera', 'banana', 'uva', 'fresa', 'limón'];
sort($frutas);
print_r($frutas);

// Número de elementos en un array
$conteo = count ($frutas);
echo 'Numero de frutas: ', $conteo, PHP_EOL;

// Busqueda de una clave a través de su valor. Si no encuentra la clave retorna false.
$encontrado1 = array_search('uva', $frutas);
$encontrado2 = array_search('mandarina', $frutas);
echo 'La posición de la uva es: ', var_dump($encontrado1);
echo 'La posición mandarina es: ', var_dump($encontrado2);