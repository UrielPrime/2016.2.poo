<?php

// Con las transformaciones se puede realizar adaptaciones o crear nuevos arreglos
// Utilizando funciones que nos lo permitan

// Funciones auxiliares
function cubo($numero)
{
    return pow($numero, 3);
}
 
function esPar($numero)
{
    return ($numero % 2 == 0);
}

// Arreglo original 
$numeros = [1, 2, 3, 4, 5];
 
echo 'La sumatoria es: ', array_sum($numeros), PHP_EOL;
echo 'La producto es: ', array_product($numeros), PHP_EOL;
 
// Llamado a la funcion cubo para crear un nuevo array
$cubos = array_map('cubo', $numeros);
echo 'Obtener el cubo de cada elemento con array_map():', PHP_EOL;
print_r($cubos);
 
// Llamado a una funcion que filtra elementos de un array
$pares = array_filter($numeros, 'esPar');
echo 'Filtrado elementos pares con array_filter():', PHP_EOL;
print_r($pares);
 
// Reducir un array utilizando array_reduce()
// Nota: Es posible colocar la funcion de forma anonima
// en las funciones array_map(), array_filter(), array_reduce()
$sumatoria = array_reduce($numeros, function($total, $item) {
    $total += $item;
    return $total;
});