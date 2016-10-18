<?php

class Escena
{
    // Tipo Protagonista
    private $heroe;
    // Tipo Villano
    private $monstruo;
    // int
    private $inicio;
    // int
    private $fin;
    // array conteniendo los Personajes
    private $camino = array();

    public function __construct($fin)
    {
        $this->inicio = 0;
        $this->fin = $fin;
        
        // Se crea un arreglo donde se guardara el villano y el heroe.
        for ($i = $this->inicio; $i <= $this->fin; $i++) {
            $this->camino[] = null;
        }
    }

    // Funcion que utiliza el polimorfismo para mover a cualquier personaje.
    public function mover(Personaje $personaje)
    {
        $personaje->mover($this);
    }

    // Funcion para imprimir el arreglo
    public function imprimir()
    {
        foreach($this->camino as $clave => $valor) {
            if (is_null($valor)) {
                echo '[', $clave, '] ';
            } else {
                if ($valor instanceof Protagonista) {
                    echo '[Heroe] ';
                } else if ($valor instanceof Villano) {
                    echo '[Villano] ';
                } else {
                    echo '[X] ';
                }
            }
        }
        echo PHP_EOL;
    }

    public function cargarEscena1()
    {
        $this->heroe = new Protagonista('Heroe', $this->inicio);
        $this->monstruo = new Villano('Villano', $this->fin);

        $this->heroe->saltar($this);
        $this->heroe->saltar($this);
        $this->imprimir();              // [0] [1] [2] [3] [Heroe] [Villano]

        $this->heroe->saltar($this);
        $this->imprimir();              // [Heroe] [1] [2] [3] [4] [Villano]
    }

    public function cargarEscena2()
    {
        $this->heroe = new Protagonista('Heroe', $this->inicio);
        $this->monstruo = new Villano('Villano', $this->fin);

        $this->mover($this->heroe);
        $this->mover($this->heroe);
        $this->mover($this->monstruo);
        $this->mover($this->monstruo);
        $this->imprimir();              // [0] [1] [Heroe] [Villano] [4] [5]

        $this->mover($this->heroe);
        $this->imprimir();              // [0] [1] [2] [Villano] [4] [5]
    }

    public function cargarEscena3()
    {
        $this->heroe = new Protagonista('Heroe', $this->inicio);
        $this->monstruo = new Villano('Villano', $this->fin);

        $this->mover($this->heroe);
        $this->mover($this->heroe);
        $this->mover($this->heroe);
        $this->mover($this->heroe);
        $this->imprimir();              // [0] [1] [2] [3] [Heroe] [Villano]

        $this->heroe->saltar($this);
        $this->imprimir();              // [Heroe] [1] [2] [3] [4] [Villano]
    }    

    public function cargarEscena4()
    {
        $this->heroe = new Protagonista('Heroe', $this->fin);
        $this->mover($this->heroe);     // Exception: Se ha salido del camino
        $this->imprimir();         
    }

    public function cargarEscena5()
    {
        $this->monstruo = new Villano('Villano', $this->inicio);
        $this->mover($this->monstruo);  // Exception: Se ha salido del camino
        $this->imprimir();         
    }
}

?>
