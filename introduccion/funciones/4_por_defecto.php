<?php

// Valores por defecto:
// En este caso el argumento $transporte
// Tiene como valor por defecto el string 'a pie' 
function viajar($transporte = 'a pie')
{
  echo 'Viajaré... ', $transporte, PHP_EOL;
}

// Prueba
viajar('en tren.'); // Viajaré... en tren
viajar(); // Viajaré... a pie


// En este caso, se ha dispuesto, erroneamente,
// el argumento $tipo con un valor por defecto.
// Es erróneo debido a que estos argumentos se 
// colocan en última instancia.
function hacerPastel($tipo = 'normal', $sabor)
{
  echo 'El pastel es ', $tipo, ', el sabor es de ', $sabor, PHP_EOL;
}

hacerPastel('chocolate');	
