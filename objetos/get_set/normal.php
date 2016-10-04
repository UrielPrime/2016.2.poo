<?php

class Alumno
{
	private $cuenta;
	private $nombre;
	private $carrera;

	public function setCuenta($cuenta)
	{
		$this->cuenta = $cuenta;
	}

	public function setNombre($nombre)
	{
		$this->nombre = $nombre;
	}

	public function setCarrera($carrera)
	{
		$this->carrera = $carrera;
	}

	public function getCuenta()
	{
		return $this->cuenta;
	}

	public function getNombre()
	{
		return $this->nombre;
	}

	public function getCarrera()
	{
		return $this->carrera;
	}

}