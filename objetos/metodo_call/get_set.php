<?php
class Alumno {
    private $cuenta;
    private $nombre;
    private $carrera;
    private $centroUniversitario;


    // Se puede utilizar el metodo __call
    // El cual se utiliza cuando un metodo inaccesible o
    // inexistente del objeto es llamado
    public function __call($nombre, $argumentos = null)
    {
        // Cambia a minuscula el nombre del metodo
        $metodo = strtolower($nombre);
        // Obtiene los primeros 3 caracteres del nombre de metodo
        $prefijo = substr($metodo, 0, 3);
        // Obtiene los caracteres restantes
        $atributo = substr($metodo, 3);
        // Obtiene la clase
        $clase = get_class($this);

        if ($prefijo == 'set' && count($argumentos) == 1) {  
            if (property_exists($clase, $atributo)) {  
                $valor = $argumentos[0];  
                $this->$atributo = $valor;  
            } else {  
                echo "No existe el atributo $atributo.";  
            }  
        } elseif ($prefijo == 'get') {  
            if (property_exists($clase, $atributo)) {  
                return $this->$atributo;  
            }
        } else {  
            echo 'Método no definido', PHP_EOL;  
        }  
    }    
}

$alumno1 = new Alumno();
$alumno1->setCuenta('20161000001');
$alumno1->setNombre('Luisa Hernandez');
$alumno1->setCarrera('Odontologia');
$alumno1->setCentroUniversitario('CURLA');

echo 'Alumno: ', $alumno1->getCuenta(), PHP_EOL;

var_dump($alumno1);

?>