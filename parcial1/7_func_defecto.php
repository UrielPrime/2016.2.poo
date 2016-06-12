<?php

function viajar($transporte = 'a pie')
{
  echo 'Viajaré... ', $transporte, PHP_EOL;
}

// Prueba
viajar('en tren.'); // Viajaré... en tren
viajar(); // Viajaré... a pie



function hacerPastel($tipo = 'normal', $sabor)
{
  echo 'El pastel es ', $tipo, ', el sabor es de ', $sabor, PHP_EOL;
}

hacerPastel('chocolate');	