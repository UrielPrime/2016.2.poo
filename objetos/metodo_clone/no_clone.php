<?php
class Alumno {
    private $cuenta;
    private $nombre;
    private $carrera;
    private $clases = array();

    public function __construct($cuenta, $nombre, $carrera)
    {
    	$this->cuenta = $cuenta;
    	$this->nombre = $nombre;
    	$this->carrera = $carrera;
    }

    public function __get($atributo)
    {
        if (property_exists($this, $atributo))
            return $this->$atributo;
    }
 
    public function __set($atributo, $valor)
    {
        if (property_exists($this, $atributo))
            $this->$atributo = $valor;
    }

    public function agregarClases($clase) {
    	$this->clases[] = $clase;
    }

    public function getClases()
    {
    	return implode(PHP_EOL, $this->clases);
    }
}

$alumno1 = new Alumno('20151002134', 'Irma Lopez', 'Ingenieria en Sistemas');
$alumno1->agregarClases('Matematicas I');
$alumno1->agregarClases('Introduccion a IS');

echo 'Clases obtenidas: ', $alumno1->getClases();

$alumno2 = clone $alumno1;
$alumno2->cuenta = '20161002222';
$alumno2->nombre = 'Pedro Solis';
$alumno2->agregarClases('Sociologia');
echo 'Alumno 1: ', var_dump($alumno1);
echo 'Alumno2: ', var_dump($alumno2);



?>