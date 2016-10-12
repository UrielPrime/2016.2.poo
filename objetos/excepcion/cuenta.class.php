<?php

class SaldoException extends Exception
{
    public function mostrarError()
    {
        $mensaje = 'Error en linea ' . $this->getLine()
            . ' en archivo: ' . $this->getFile();

        return $mensaje;
    }
}


// Prueba de la excepcion específica
class Cuenta
{
    private $saldo;
    const LIMITE = 10000;

    public function __construct($monto)
    {
        $this->saldo = $monto;
    }

    public function depositar($monto)
    {
        $this->saldo += $monto;
    }

    public function retirar($monto)
    {
        if ($this->saldo < $monto) {
            throw new SaldoException('Cantidad insuficiente');
        }

        if ($monto >= self::LIMITE) {
            throw new Exception('Se ha pasado del límite');
        }

        $this->saldo -= $monto;
    }
}

?>