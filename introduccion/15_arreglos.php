<?php

define('BR', '<BR>');

function print_arreglo($arreglo) {
    echo '<pre>';
    var_dump($arreglo);
    echo '</pre>', BR;
}

//---------------------------------------------------------------------------
// Definición de un array
$frutas = array('manzana', 'pera', 'uva');
// Impresión de un arreglo en el navegador
print_arreglo($frutas);

//---------------------------------------------------------------------------
// Iniciar arreglo con un indice distinto a cero
echo 'Utilizar otro indice inicial en la construcción del arreglo', BR;
$frutas = array(2 => 'manzana', 'pera', 'uva');
print_arreglo($frutas);

//---------------------------------------------------------------------------
// Metodos para agregar elementos
echo 'Agregar objetos al arreglo', BR;
$frutas[] = 'naranja';
array_push($frutas, 'piña');
print_arreglo($frutas);

//---------------------------------------------------------------------------
// Actualizar valor
echo 'Actualizar posicion 1', BR;
$frutas[1] = 'sandia';
print_arreglo($frutas);

//---------------------------------------------------------------------------
echo 'Arreglo con valores repetidos', BR;
$frutas[] = 'manzana';
$frutas[] = 'albaricoque';
print_arreglo($frutas);
echo 'Arreglo con valores únicos', BR;
$frutas = array_unique($frutas);
print_arreglo($frutas);

//---------------------------------------------------------------------------
// Conteo de elementos en un arreglo
echo BR, 'count', BR;
echo 'Número de frutas: ', count($frutas), BR;
//---------------------------------------------------------------------------
// Sumatoria
echo BR, 'array_sum', BR;
$numeros = array(1, 2, 3, 4, 5);
echo 'Suma del arreglo es: ', array_sum($numeros), BR;

//---------------------------------------------------------------------------
// Busqueda de un elemento en un arreglo
echo BR, 'array_search', BR;
echo 'Esta el valor 3 en el arreglo? ', array_search(3, $numeros), BR;

//---------------------------------------------------------------------------
// Unir dos arreglos
echo BR, 'array_merge', BR;
$unidos = array_merge($frutas, $numeros);
print_arreglo($unidos);

//---------------------------------------------------------------------------
// Map
echo BR, 'array_map', BR;
function cubo($num) {
    return pow($num, 3);
}
$cubos = array_map('cubo', $numeros);
print_arreglo($cubos);
$cubos = array_map(function($numero) {
    return pow($numero, 3);
}, $numeros);
print_arreglo($cubos);
//---------------------------------------------------------------------------
// Reduce
echo BR, 'array_reduce', BR;
function producto($total, $item) {
    $total *= $item;
    return $total;
}
$valor = array_reduce($numeros, 'producto', 1);
echo 'Producto = ', $valor, BR;

//---------------------------------------------------------------------------
// Filter
echo BR, 'array_filter', BR;
function esPar($numero) {
    return ($numero % 2 == 0);
}
$pares = array_filter($numeros, 'esPar');
print_arreglo($pares);

//---------------------------------------------------------------------------
// Matriz combinada
echo BR, 'array_combine', BR;
$combinacion = array_combine($numeros, $cubos);
print_arreglo($combinacion);

//---------------------------------------------------------------------------
// Desplazamiento de un arreglo
echo BR, 'Desplazamiento de arreglo', BR;
$dias = array('domingo', 'lunes', 'martes', 'miércoles', 'jueves', 'viernes');
echo 'Actual: ', current($dias), BR;
echo 'Siguiente: ', next($dias), BR;
echo 'Último: ', end($dias), BR;
echo 'Penúltimo: ', prev($dias), BR;
echo 'Principio: ', reset($dias), BR;

//---------------------------------------------------------------------------
// Borrar elementos
echo BR, 'unset', BR;
echo 'Eliminar un elemento de un arreglo', BR;
$numeros = array(10, 20, 30, 40, 50);
print_arreglo($numeros);
unset($numeros[2]);
print_arreglo($numeros);
//var_dump($numeros[2]);

//---------------------------------------------------------------------------
// Interseccion de dos arrays
echo BR, 'array_intersect', BR;
$array1 = array('uno' => 1, 'dos' => 2, 'tres' => 3);
$array2 = array('uno' => 1, 'dos' => 2, 'cuatro' => 4);
// Interseccion de elementos entre dos array
$interseccion = array_intersect($array1, $array2);
print_arreglo($interseccion);

//---------------------------------------------------------------------------
// Reverso de un array
echo BR, 'array_reverse', BR;
$array1 = array('uno' => 1, 'dos' => 2, 'tres' => 3);
$reves = array_reverse($array1);
print_arreglo($reves);

//---------------------------------------------------------------------------
//Quita un elemento al inicio de un array
echo BR, 'array_shift', BR;
$elemento = array_shift($array1);
echo 'Elemento quitado: ', $elemento, BR;
print_arreglo($array1);

//---------------------------------------------------------------------------
//Agrega elementos al inicio de un array
echo BR, 'array_unshift', BR;
$array2 = ['dos', 'tres'];
array_unshift($array2, 'cero', 'uno');
print_arreglo($array2);

//---------------------------------------------------------------------------
// Verificar si existe una clave
echo BR, 'array_key_exists', BR;
if (array_key_exists('dos', $array1)) {
    echo 'Hay una clave "dos"', BR;
} else {
    echo 'No hay clave "dos"', BR;
}

//---------------------------------------------------------------------------
// Extrae un elemento del final del arreglo
echo BR, 'array_pop', BR;
$array2 = ['dos', 'tres'];
$elemento = array_pop($array2);
print_arreglo($array2);

//---------------------------------------------------------------------------
// Agrega un elemento al final del arreglo
echo BR, 'array_push', BR;
$array2 = ['dos', 'tres'];
$elemento = array_push($array2, 'cuatro');
print_arreglo($array2);

//---------------------------------------------------------------------------
// Ordenar un arreglo
echo BR, 'sort', BR;
echo 'Desorden...', BR;
print_arreglo($frutas);
echo 'Ordenar...', BR;
sort($frutas);
print_arreglo($frutas);
