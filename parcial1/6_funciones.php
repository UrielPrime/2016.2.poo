<?php
 
function suma($a, $b)
{
  return $a + $b;
}
 
function sumaEnteros(int $a, int $b): int
{
  return $a + $b;
}


var_dump(suma(2, 3.6));
var_dump(sumaEnteros(2, 3));