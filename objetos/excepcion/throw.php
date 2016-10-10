<?php

function division($a, $b)
{
    if ($b === 0)
        throw new Exception ('Division entre cero');
    
    return $a / $b;
}

try {
	$div = division(3, 0);
    echo 'Division = ', $div, PHP_EOL;
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}