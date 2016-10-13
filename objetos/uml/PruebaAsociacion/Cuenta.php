<?php


class Cuenta
{
    public function __construct()
    {
    }

    private $codigoCuenta;
    private $saldo;
    private $fechaApertura;

    // clase Cliente
    private $cliente;

    public function __construct($codigoCuenta, $cliente, $saldo)
    {
        $this->codigoCuenta = $codigoCuenta;
        $this->saldo = $saldo;
        $this->cliente = $cliente
        $this->fechaApertura = new DateTime();
    }

    public function getCodigo()
    {
        return $this->codigoCuenta;
    }

    public function agregarSaldo($monto):void
    {
        $this->saldo += $monto;
    }

    public function disminuirSaldo($monto):void
    {
        if ($this->saldo < $monto)
            throw new Exception('Saldo insuficientes');

        $this->saldo -= $monto;
    }
}
