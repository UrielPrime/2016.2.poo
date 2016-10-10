<?php

class SaldoException extends Exception
{
    public function errorMessage()
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

        $this->saldo -= $monto;
    }
}

?>