<?php

class Alumno
{
	private $cuenta;
	private $nombre;
	private $carrera;

	// Metodo 1
	/*public function __construct($cuenta, $nombre, $carrera = null)
	{
		$this->cuenta = $cuenta;
		$this->nombre = $nombre;
		$this->carrera = $carrera;
	}*/

	// Metodo 2
	public function __construct()
	{
		// Obtener el total de parametros en una función
    	$numeroParametros = func_num_args();
 
    	// Obtener el arreglo de parametros
    	$arregloParametros = func_get_args();

    	if ($numeroParametros == 2) {
    		$this->cuenta = $arregloParametros[0];
			$this->nombre = $arregloParametros[1];	
    	} else if ($numeroParametros == 3) {
    		$this->cuenta = $arregloParametros[0];
			$this->nombre = $arregloParametros[1];
			$this->carrera = $arregloParametros[2];
    	}
	}

	public function __get($atributo)
	{
		
		if (property_exists($this, $atributo)) {
			echo 'Funcion __get', PHP_EOL;
			return $this->$atributo;
		}
	}

	public function __set($atributo, $valor)
	{
		if (property_exists($this, $atributo)) {
			echo 'Funcion __set', PHP_EOL;
			$this->$atributo = $valor;
		}
	}
}

$alumno = new Alumno('20091001234','Oliver Ruiz', 'Ingenieria en Sistemas');

$alumno->nombre = 'Oliver Ruiz';
echo 'Alumno: ', $alumno->nombre, PHP_EOL;

$alumno->centroRegional = 'Ciudad Universitaria';
echo 'Centro: ', $alumno->centroRegional, PHP_EOL;

var_dump($alumno);