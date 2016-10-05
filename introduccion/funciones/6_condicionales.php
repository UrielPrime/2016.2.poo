<?php
 
// Funciones condicionales. 
// La función uno() no existe hasta evaluar el IF
$hacer = true;
 
if ($hacer) {
  function uno() {
      echo 'Llamado a uno()', PHP_EOL;
  }
}

uno();