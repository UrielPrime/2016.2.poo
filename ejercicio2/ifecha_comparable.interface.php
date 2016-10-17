<?php

interface IFechaComparable {
    public function menorQue(IFechaComparable $fecha);
    public function mayorQue(IFechaComparable $fecha);
    public function igual(IFechaComparable $fecha);
}