<?php
class Alumno {
    private $cuenta;
    private $nombre;
    private $carrera;

    // Se establece uno o varios parametros con valor por defecto
    // de esa manera se puede ignorar el último
    public function __construct($cuenta, $nombre, $carrera = null)
    {
        $this->cuenta = $cuenta;
        $this->nombre = $nombre;
        $this->carrera = $carrera;
    }
}

$alumno1 = new ('20141000001', 'Joaquin Fernandez');
$alumno2 = new ('20141000002', 'Martha Barahona', 'Medicina');
?>