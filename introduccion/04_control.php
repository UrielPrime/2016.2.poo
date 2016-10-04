<?php

$edad = 20;

// IF / ELSEIF / ELSE
if ($edad < 18) {
	echo 'No puede votar en las Elecciones';
} else if ($edad < 21) {
	echo 'Es un ciudadano de Honduras, pero sin la mayoría de edad';
} else {
	echo 'Usted ya tiene la mayoría de edad';
}

echo PHP_EOL;


// Version alternativa
if ($edad < 18) :
	echo 'No puede votar en las Elecciones';
elseif ($edad < 21):
	echo 'Es un ciudadano de Honduras, pero sin la mayoría de edad';
else:
	echo 'Usted ya tiene la mayoría de edad';
endif;

echo PHP_EOL;
