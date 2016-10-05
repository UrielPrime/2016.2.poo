<?php
 
function suma($a, $b)
{
  return $a + $b;
}
 
// Definición de una función en PHP7. Los argumentos
// se les puede indicar qué tipo serán admitidos y
// el retorno de la función también (separada por dos puntos)
// En este caso, la función sumaEnteros admite
// solamente dos parametros de tipo entero y
// devolverá un entero.
function sumaEnteros(int $a, int $b): int
{
  return $a + $b;
}

// Prueba del código
var_dump(suma(2, 3.6));
var_dump(sumaEnteros(2, 3));
