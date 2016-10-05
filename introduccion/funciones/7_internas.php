<?php

// Funciones dentro de funciones. Mientras no se llama a externa(),
// interna() no existe.
function externa() {
    function interna() {
        echo 'Llamado a interna()', PHP_EOL;
    }
}
 
//interna();
 
// Las funciones y clases tiene un ámbito global. Se pueden llamar desde 
// fuera de una función incluso si fueron definidas internamente.
externa();
interna();