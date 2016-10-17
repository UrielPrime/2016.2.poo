
<?php

// Archivo de Fecha
include 'fecha.class.php';

// Archivo de FechaException
include 'fecha_exception.class.php';

$fecha = new Fecha(2016, 10, 01);
var_dump($fecha);

try {
    $fecha2 = new Fecha(2016, 13, 01);
    var_dump($fecha2);
    
} catch(FechaException $e) {
    echo $e->mostrarError();
}

try {
    $fecha3 = new Fecha(2016, 10, 40);
    var_dump($fecha3);
} catch(FechaException $e) {
    echo $e->mostrarError();
}

$f1 = new Fecha(2016, 10, 1);
$f2 = new Fecha(2016, 10, 2);
var_dump($f1->menorQue($f2));

$f1 = new Fecha(2016, 10, 2);
$f2 = new Fecha(2016, 10, 1);
var_dump($f1->mayorQue($f2));

$f1 = new Fecha(2016, 10, 1);
$f2 = new Fecha(2016, 10, 1);
var_dump($f1->igual($f2));

?>