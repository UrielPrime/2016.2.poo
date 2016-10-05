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
$alumno2 = new Alumno();
$alumno2->cuenta = '20151000001';
$alumno2->nombre = 'Ruben Gomez';
$alumno2->carrera = 'Ingenieria en Sistemas';

// Inyecccion del atributo
$alumno2->centro = 'Ciudad Universitaria';
 
var_dump($alumno2);
 
?>