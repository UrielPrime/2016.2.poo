<?php

require_once '4_funciones.php';

function print_arreglo($arreglo) {
    echo "<pre>";
    var_dump($arreglo);
    echo "</pre>";
    echo '<br>';
}

// Definición de un array
$frutas = array('manzana', 'pera', 'uva');
// Impresión de un arreglo en el navegador
print_arreglo($frutas);

// Iniciar arreglo con un indice distinto a cero
echo 'Utilizar otro indice inicial en la construcción del arreglo', BR;
$frutas = array(2 => 'manzana', 'pera', 'uva');
print_arreglo($frutas);

// Metodos para agregar elementos
echo 'Agrear objetos al arreglo', BR;
$frutas[] = 'naranja';
array_push($frutas, 'piña');
print_arreglo($frutas);

// Actualizar valor
echo 'Actualizar posicion 1', BR;
$frutas[1] = 'sandia';
print_arreglo($frutas);

echo 'Arreglo con valores repetidos', BR;
$frutas[] = 'manzana';
$frutas[] = 'albaricoque';
print_arreglo($frutas);
echo 'Arreglo con valores únicos', BR;
$frutas = array_unique($frutas);
print_arreglo($frutas);

$frutas[7] = 'licha';
unset($frutas[7]);
print_arreglo($frutas);
// Conteo de elementos en un arreglo
echo 'Número de frutas: ', count($frutas), BR;

// Sumatoria
$numeros = array(1, 2, 3, 4, 5);
echo 'Suma del arreglo es: ', array_sum($numeros), BR;

// Busqueda de un elemento en un arreglo
echo 'Esta el valor 3 en el arreglo? ', array_search(3, $numeros), BR;

// Unir dos arreglos
echo 'Union de dos arreglos', BR;
$unidos = array_merge($frutas, $numeros);
print_arreglo($unidos);

// Map
echo 'Map en un arreglo', BR;

function cubo($num) {

    return pow($num, 3);
}

$cubos = array_map('cubo', $numeros);
print_arreglo($cubos);

$cubos = array_map(function($numero) {
    return pow($numero, 3);
}, $numeros);
print_arreglo($cubos);

// Reduce
echo 'Reducción de un arreglo', BR;

function producto($total, $item) {
    $total *= $item;
    return $total;
}

$valor = array_reduce($numeros, 'producto', 1);
echo 'Producto = ', $valor, BR;

// Filter
echo 'Filtro de arreglo', BR;

function esPar($numero) {
    return ($numero % 2 == 0);
}

$pares = array_filter($numeros, 'esPar');
print_arreglo($pares);

// Matriz combinada
$c = array_combine($numeros, $cubos);
print_arreglo($c);

//Desplazamiento de un arreglo
$dias = array('domingo', 'lunes', 'martes', 'miércoles', 'jueves', 'viernes');
echo 'Actual: ', current($dias), BR;
echo 'Siguiente: ', next($dias), BR;
echo 'Último: ', end($dias), BR;
echo 'Penúltimo: ', prev($dias), BR;
echo 'Principio: ', reset($dias), BR;

echo 'Eliminar un elemento de un arreglo', BR;
$numeros = array(10, 20, 30, 40, 50);
print_arreglo($numeros);
unset($numeros[2]);
print_arreglo($numeros);
var_dump($numeros[2]);
?>