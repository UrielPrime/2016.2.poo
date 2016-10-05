<?php
class Alumno {
    private $cuenta;
    private $nombre;
    private $carrera;


    // Se puede utilizar el metodo __call
    // El cual se utiliza cuando un metodo inaccesible o
    // inexistente del objeto es llamado
    public function __call($nombre, $argumentos)
    {
        if ($nombre == '__construct') {
            $total = count($argumentos);

            $func = 'constructor' . $total;
        
            if (method_exists($this, $func)) {
                call_user_func_array($this, $func, $argumentos);
            }
        }

        if (!method_exists($this, $func)) {
            echo 'Este metodo no existe', PHP_EOL;
        }
    }

    private function constructor1($nombre)
    {
        $this->nombre = $nombre;
    }

    private function constructor2($cuenta, $nombre)
    {
        $this->cuenta = $cuenta;
        $this->nombre = $nombre;
    }

    private function constructor3($cuenta, $nombre, $carrera)
    {
        $this->cuenta = $cuenta;
        $this->nombre = $nombre;
        $this->carrera = $carrera;
    }
}

$alumno1 = new ('Anonimo');
$alumno2 = new ('20141000001', 'Joaquin Fernandez');
$alumno3 = new ('20141000002', 'Martha Barahona', 'Medicina');
?>