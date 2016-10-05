<?php

// Los arrays en PHP son estructuras utilizadas en múltiples situaciones.

// Arreglo vacío
$arreglo = array();

// Arreglo vacío, versión 2
$arreglo = [];

// Declarar un arreglo con índices números
$arreglo = array('uno', 'dos', 'tres');
var_dump($arreglo);


// Declarar un arreglo con claves y valores
// Los valores pueden contener cualquier tipo de dato
$arreglo = array('uno' => true, 'dos' => 2, 'tres' => array(3));
var_dump($arreglo);

// Con la función print_r() se puede imprimir un arreglo
print_r($arreglo);

/*
	INSERTAR VALORES
*/

// Utilizando una clave, si la clave existe se sobreescribe.
$arreglo[0] = 1;
$arreglo[0] = 10;	// Sobreescrito el elemento con índice cero.

// Sin utilizar clave. En caso de no existir el arreglo, se crea.
$frutas[] = 'uva';			// array $frutas creado, insertado uva en índice cero.
$frutas[] = 'manzana';		// en índice uno insertado manzana.

// Utilizando la función array_push(), el array debe estar inicializado.
$paises = array();
array_push($paises, 'Honduras');

// Utilizando array_unshift().
$dias = array();
array_unshift($dias, 'domingo', 'lunes');


/*
	ELIMINAR VALORES
*/

// utilizar unset(): Eliminar el valor en el índice 2.
$numeros = [1, 2, 3, 4];
unset($numeros[2]);

// array_shift(). Quita un elemento al inicio, devolviendolo y reordena el arreglo.
$paises = ['Honduras', 'Guatemala', 'El Salvador'];
$eliminado = array_shift($paises);
var_dump($eliminado);
var_dump($paises);

// array_pop(). Elimina y devuelve el último elemento.
$paises = ['Honduras', 'Guatemala', 'El Salvador'];
$eliminado = array_pop($paises);
var_dump($eliminado);
var_dump($paises);


/*
	RECORRER UN ARRAY
*/

$paises = ['hn' => 'Honduras', 'jp' => 'Japón', 'ru' => 'Rusia', 'es' => 'España'];

// Mediante un foreach
foreach ($paises as $clave => $valor) {
	echo 'Clave: ', $clave, PHP_EOL, 'Valor: ', $valor, PHP_EOL, PHP_EOL;
}

// Mediante cursores
$dias = array('domingo', 'lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado');
echo 'Actual: ', current($dias), PHP_EOL;
echo 'Siguiente: ', next($dias), PHP_EOL;
echo 'Último: ', end($dias), PHP_EOL;
echo 'Penúltimo: ', prev($dias), PHP_EOL;
echo 'Principio: ', reset($dias), PHP_EOL;