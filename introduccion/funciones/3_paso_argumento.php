<?php

// Esta función es como normalmente funcionan
// los argumentos, sin cambiar, fuera del ámbito
// al argumento utilizado.
function duplicarValor($parametro)
{
	$parametro *= 2;
}

// La función pasada por referencia modifica
// fuera del ámbito de función a los argumentos
// pasados en dicha función.
function duplicarReferencia(& $parametro)
{
	$parametro *= 2;
}

$a = 10;
duplicarValor($a);
var_dump($a);

$b = 50;
duplicarReferencia($b);
var_dump($b);

