<?php
class Alumno {
    private $cuenta;
    private $nombre;
    private $carrera;
 
    public function __get($atributo)
    {
        return $this->$atributo;
    }
 
    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }
}
 
// Implementacion del objeto
$alumno1 = new Alumno();

// No está accediendo a los atributos, los cuales son privados.
// Se está accediendo mediante los métodos mágicos.

// Uso de __set()
$alumno1->cuenta = '20151000001';
$alumno1->nombre = 'Ruben Gomez';
$alumno1->carrera = 'Ingenieria en Sistemas';

// Uso de __get()
echo 'Un alumno se ha creado', PHP_EOL;
echo 'Cuenta: ', $alumno1->cuenta, PHP_EOL;
echo 'Nombre: ', $alumno1->nombre, PHP_EOL;
echo 'Carrera: ', $alumno1->carrera, PHP_EOL;
 
?>