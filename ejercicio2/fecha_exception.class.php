<?php

class FechaException extends Exception 
{
	public function __construct($mensaje) {
		$this->message = $mensaje;
	}

	public function mostrarError() 
	{
		echo 'Error de Fecha: ', $this->message, PHP_EOL;
	}
}