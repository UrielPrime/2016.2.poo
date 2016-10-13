<?php

class Cliente
{
    public function __construct()
    {
    }

    private $codigoCliente;
    private $nombre;
    private $identidad;
    private $cuentas = array();

    public function __construct($codigoCliente, $nombre, $identidad, $cuenta)
    {
        $this->codigoCliente = $codigoCliente;
        $this->nombre = $nombre;
        $this->identidad = $identidad;
        $this->agregarCuenta($cuenta);
    }

    public function agregarCuenta (Cuenta $cuenta)
    {
        $this->cuentas[$cuenta->getCodigo()] = $cuenta;
    }

    public function getCuentas()
    {
        return return $this->cuentas;
    }

    public function depositar($codigoCuenta, $monto):void
    {
        $this->cuentas[$codigoCuenta]->agregarSaldo($monto);
    }

    public function retirar($codigoCuenta, $monto):void
    {
        try {
            $this->cuentas[$codigoCuenta]->disminuirSaldo($monto);
        } catch(Exception $e) {
            echo $e->getMessage(), PHP_EOL;
        }
    }
}
