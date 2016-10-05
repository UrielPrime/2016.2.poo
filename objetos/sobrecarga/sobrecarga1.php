<?php
class Alumno {
    private $cuenta;
    private $nombre;
    private $carrera;

    public function __construct()
    {
    	$numeroArgumentos = func_num_args();
    	$argumentos = func_get_args();

    	if ($numeroArgumentos == 2) {
        	$this->cuenta = $argumentos[0];
        	$this->nombre = $argumentos[1];
    	} else if ($numeroArgumentos == 3) {
    		$this->cuenta = $argumentos[0];
        	$this->nombre = $argumentos[1];
        	$this->carrera = $argumentos[2];
    	}
    }
}

$alumno1 = new ('20141000001', 'Joaquin Fernandez');
$alumno2 = new ('20141000001', 'Martha Barahona', 'Medicina');
?>