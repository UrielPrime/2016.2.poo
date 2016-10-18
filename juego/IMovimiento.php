<?php


/**
 *
 */
interface IMovimiento
{
    /**
     * @var int
     */
    const ADELANTE = 1;

    /**
     * @var int
     */
    const ATRAS = -1;

    /**
     *
     */
    public function mover(Escena $escena);
}
