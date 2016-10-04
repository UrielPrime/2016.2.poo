<?php

$a = true;
$b = false;

// Operador AND
var_dump($a && $b);

// Operador OR
var_dump($a || $b);

// Operador NOT
var_dump(!$a);

// Existen tambien los operadores AND y OR
// Operador AND
var_dump($a AND $b);

// Operador OR
var_dump($a OR $b);

// El problema es que no tienen un nivel de precedencia adecuado
$f = false or true;
var_dump($f);

$f = false || true;
var_dump($f);
