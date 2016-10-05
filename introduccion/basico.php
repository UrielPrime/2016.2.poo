<?php

// Comentario de una linea

/*
Comentario de mas
					de
						una 
							linea
*/


/*
Para imprimir en la consola o mostrarlo en un navegador
web, se utiliza 'echo', la cual no es una función, mas
bien una construcción del lenguaje, por lo cual no es
necesario encerrar los argumentos en parentesis.
También es posible lanzar una salida con dos o más 
cadenas, utilizando simplemente una coma.
*/

echo ('Hola mundo');	// Válido
echo 'Hola mundo';		// Válido
echo 'Hola ', 'mundo';	// Válido

/*
Existe una función 'var_dump', la cual nos permite
establecer información relevante de una expresión o
variable.
*/

var_dump('Hola mundo'); // string(10) "Hola mundo"

/*
Para el formateo de las salidas de datos en PHP, a través de
la consola, puede utilizar una constante muy útil que permite
realizar un salto de línea, independiente del Sistema Operativo
que se maneje. Se llama 'PHP_EOL' y se comporta como un string.
Nota: Este elemento no funciona para los navegadores web, por lo
que tendrá que utilizar una etiquet que permita comportamiento
similar.
*/

echo 'Hola mundo', PHP_EOL;


// echo nos permite enviar una salida con los saltos indicados.
echo "Primera linea
Segunda linea
Tercera linea.
";

