<?php

// Son funciones anónimas, es decir, sin nombre.
// Se pueden asignar a una variable.
$saludo = function($mensaje)
{
    echo "Hola ", $mensaje, PHP_EOL;
};

$saludo('Mundo');
$saludo('PHP');