<?php

include 'funciones.php';

// Se imprimiran en pantalla 6 true
// determinando que los ejercicios son correctos

date_default_timezone_set('America/Tegucigalpa');

$fecha = new DateTime();
$mañana = $fecha->add(new DateInterval('P1D'));
echo 'Prueba 1.1: ', var_dump(diasTranscurridos($mañana) === -1);

// Cuando se utiliza los métodos add() y sub() modifican al objeto que
// lo invoca. Por ello se crea un nuevo objeto.
$fecha = new DateTime();
$ayer = $fecha->sub(new DateInterval('P1D'));
echo 'Prueba 1.2: ', var_dump(diasTranscurridos($ayer) === 1);

$cadena = "Narra las aventuras de un niño, que viene de un lejano planeta, del tamaño de una cajita de juguete. Cuando llega a la tierra encuentra a un aviador abandonado en medio del inmenso desierto del Sahara porque su avión había sufrido una falla mecánica. El principito cuenta el aviador: las puestas del sol, el cuidado de su rosa, y la gran lucha contra los boababs que pueden acabar su lejano planeta. El pequeño personaje también narra las aventuras que tiene en los seis planetas antes de llegar al planeta tierra. El primer planeta se encontraba habitado por un rey. Éste exigía que su autoridad fuera bien respetada.";

$arreglo = frasesSMS($cadena);
echo 'Prueba 2.1: ', var_dump(count($arreglo) === 4);
echo 'Prueba 2.2: ', var_dump(substr($arreglo[2], 0, 2) == 'el');


esOrtogonal([2, 1], [-3, 4], $valor);
echo 'Prueba 3.1: ', var_dump($valor === -2);
esOrtogonal([1, 0], [0, 1], $valor);
echo 'Prueba 3.2: ', var_dump($valor === 0);

?>