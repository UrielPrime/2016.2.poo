<?php

interface IA
{
    public function uno();
}

interface IB extends IA
{
    public function dos();
}

class Prueba implements IB
{
    public function uno()
    {
        echo 'Implementado metodo de IA', PHP_EOL;
    }

    public function dos()
    {
        echo 'Implementado metodo de IB', PHP_EOL;
    }
}

?>
