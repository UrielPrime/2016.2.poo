<?php
abstract class Auto
{
    // Método abstracto, obligatorio para una clase abstracta. Solo tiene la firma, sin implementación
    abstract public function consumir();
}

// Es obligatorio implementar el método consumir()
class AutoGasolina extends Auto
{
    public function consumir() {
        return 'El ' . __CLASS__ . ' consume Gasolina';
    }
}

// Es obligatorio implementar el método consumir()
class AutoDiesel extends Auto
{
    // Se está reduciendo el nivel de acceso de esta función: Error!
    protected function consumir()
    {
        return 'El ' . __CLASS__ . ' consume Diesel';
    }
}

$carro1 = new Auto();   // Error debido a que una clase abstract no puede instanciarse
$carro2 = new AutoGasolina();
$carro3 = new AutoDiesel();

mostrar($carro1);
mostrar($carro2);
mostrar($carro3);
?>
