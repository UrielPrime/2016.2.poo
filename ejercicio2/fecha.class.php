<?php

// Archivo de interface
include 'ifecha_comparable.interface.php';

class Fecha implements IFechaComparable {
	private $dia;
	private $mes;
	private $año;

	public function setDia($dia) {
		if ($dia < 1 || $dia > 31)
			throw new FechaException("Dia invalido");

		switch($this->mes) {
			case 2:
				if ($dia > 29) throw new FechaException("Dia invalido");
			break;
			case 4: case 6: case 9: case 11:
				if ($dia > 30) throw new FechaException("Dia invalido");
			break;
		}

		$this->dia = $dia;
	}

	public function getDia() {
		return $this->dia;
	}

	public function setMes($mes) {
		if ($mes < 1 || $mes > 12)
			throw new FechaException("Mes invalido");

		$this->mes = $mes;
	}

	public function getMes() 
	{
		return $this->mes;
	}
	
	public function setAnio($anio) 
	{
		$this->anio = $anio;
	}

	public function getAnio() 
	{
		return $this->anio;
	}

	public function __construct($anio, $mes, $dia) 
	{
		$this->setAnio($anio);
		$this->setMes($mes);
		$this->setDia($dia);
	}

	// Clases implementadas de la interface
	public function menorQue(IFechaComparable $fecha) 
	{
		if ($this->anio === $fecha->getAnio()) {
			if ($this->mes === $fecha->getMes()) {
				if ($this->dia === $fecha->getDia()) {
					return false;
				} else {
					if ($this->dia < $fecha->getDia()) return true;
					else false;
				}
			} else {
				if ($this->mes < $fecha->getMes()) return true;
				else false;
			}
		} else {
			if ($this->anio < $fecha->getAnio()) return true;
			else false;
		}
	}

	public function mayorQue(IFechaComparable $fecha) 
	{
		if ($this->anio === $fecha->getAnio()) {
			if ($this->mes === $fecha->getMes()) {
				if ($this->dia === $fecha->getDia()) {
					return false;
				} else {
					if ($this->dia > $fecha->getDia()) return true;
					else false;
				}
			} else {
				if ($this->mes > $fecha->getMes()) return true;
				else false;
			}
		} else {
			if ($this->anio > $fecha->getAnio()) return true;
			else false;
		}
	}

	public function igual(IFechaComparable $fecha) 
	{
		return ($this->anio === $fecha->getAnio()
			&& $this->mes === $fecha->getMes()
			&& $this->dia === $fecha->getDia());
	}
}

?>