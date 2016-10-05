<?php
class Alumno {
    private $cuenta;
    private $nombre;
    private $carrera;

    public function __construct()
    {
        // Array con los argumentos de la funcion
    	$argumentos = func_get_args();
        // Obtener el total de argumentos
        $total = count($argumentos);

        // Obtener un nombre de funcion a partir del numero de argumentos
        $func = 'constructor' . $total;
    	
        if (method_exists($this, $func)) {
            call_user_func_array($this, $func, $argumentos)
        }
    }

    public function constructor1($nombre)
    {
        $this->nombre = $nombre;
    }

    public function constructor2($cuenta, $nombre)
    {
        $this->cuenta = $cuenta;
        $this->nombre = $nombre;
    }

    public function constructor3($cuenta, $nombre, $carrera)
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