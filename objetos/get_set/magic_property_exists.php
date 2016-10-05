<?php
class Alumno {
    private $cuenta;
    private $nombre;
    private $carrera;
 
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
}
 
// Probar nuevamente la inyección de atributos
$alumno3 = new Alumno();
$alumno3->cuenta = '20151000001';
$alumno3->nombre = 'Ruben Gomez';
$alumno3->carrera = 'Ingenieria en Sistemas';

// Intento de inyecccion del atributo
$alumno3->centro = 'Ciudad Universitaria';
 
var_dump($alumno3);

?>