<?php


/**
 *
 */
abstract class Personaje implements IMovimiento
{
    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @var string
     */
    protected $nombre;

    /**
     * @var int
     */
    protected $orientacion;

    /**
     * @var int
     */
    protected $posicion;

    /**
     * @inheritDoc
     */
    public function mover()
    {
        // TODO: implement here
    }
}
