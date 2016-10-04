<?php

function duplicarValor($parametro)
{
	$parametro *= 2;
}

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

