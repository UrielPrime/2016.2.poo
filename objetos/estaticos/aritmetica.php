<?php

// Clase cuyos métodos son todos estáticos
class Aritmetica
{
	public static function sumar($a, $b) 
	{
		return $a + $b;
	}

	public static function restar($a, $b) 
	{
		return $a - $b;
	}

	public static function multiplicar($a, $b)
	{
		return $a * $b;
	}

	public static function dividir($a, $b)
	{
		return $a / $b;
	}
}

// Implementacion:
// No es necesario llamar a un objeto para llamar a las funciones estaticas
echo '1 + 2 = ', Aritmetica::sumar(1, 2), PHP_EOL;
echo '1 / 2 = ', Aritmetica::dividir(1, 2), PHP_EOL;
?>