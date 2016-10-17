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
    
    public function setAño($año) 
    {
        $this->año = $año;
    }

    public function getAño() 
    {
        return $this->año;
    }

    public function __construct($año, $mes, $dia) 
    {
        $this->setaño($año);
        $this->setMes($mes);
        $this->setDia($dia);
    }

    private function calcularDiasComerciales(Fecha $fecha)
    {
        $dias = $fecha->getAño() * 360
              + $fecha->getMes() * 30
              + $fecha->getDia();

        return $dias;
    }

    // Clases implementadas de la interface
    public function menorQue(IFechaComparable $fecha) 
    {
        $dc1 = $this->calcularDiasComerciales($this);
        $dc2 = $this->calcularDiasComerciales($fecha);

        return ($dc1 < $dc2);
    }

    public function mayorQue(IFechaComparable $fecha) 
    {
        $dc1 = $this->calcularDiasComerciales($this);
        $dc2 = $this->calcularDiasComerciales($fecha);

        return ($dc1 > $dc2);
    }

    public function igual(IFechaComparable $fecha) 
    {
        $dc1 = $this->calcularDiasComerciales($this);
        $dc2 = $this->calcularDiasComerciales($fecha);

        return ($dc1 === $dc2);
    }
}

?>