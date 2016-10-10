<?php
class Alumno {
    private $cuenta;
    private $nombre;
    private $carrera;
    private $centroUniversitario;

    // Cuando se tiene un metodo que inicia con getVariable o setVariable,
    // desea obtenerse el prefijo (get o set)
    private function getPrefijo($metodo)
    {
        $prefijo = substr($metodo, 0, 3);
        return strtolower($prefijo);
    }

    // Obtener la variable asociada al método. Lo complicado resultado de tener
    // atributos cuyos nombres sean palabras compuestas como ser centroUniversitario.
    private function getAtributo($metodo)
    {
        $variable = substr($metodo, 3);
        return lcfirst($variable);          // Transforma la primer letra de una palabra en minúscula
    }

    // Se puede utilizar el metodo __call
    // El cual se utiliza cuando un metodo inaccesible o
    // inexistente del objeto es llamado
    public function __call($metodo, $argumentos = null)
    {
        $prefijo = $this->getPrefijo($metodo);
        $atributo = $this->getAtributo($metodo);

        if ($prefijo == 'set' && count($argumentos) == 1) {  
            if (property_exists($this, $atributo)) {  
                $valor = $argumentos[0];  
                $this->$atributo = $valor;  
            } else {  
                echo "No existe el atributo $atributo.";  
            }  
        } elseif ($prefijo == 'get') {  
            if (property_exists($this, $atributo)) {  
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
echo $alumno1->getNombre(), PHP_EOL;
echo $alumno1->getCarrera(), PHP_EOL;
echo $alumno1->getCentroUniversitario(), PHP_EOL;
?>