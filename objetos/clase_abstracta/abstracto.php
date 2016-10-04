<?php 
// Una clase abstracta tiene la obligacion de tener al menos un
// método abstracto. Sin embargo puede tener no abstractos también
abstract class Auto 
{ 
    // Método abstracto, obligatorio para una clase abstracta.
    // Es un método con solo la firma, sin implementación
    abstract public function consumir();
} 

class AutoGasolina extends Auto 
{ 
    // Es obligatorio implementar el método consumir()
    public function consumir() 
    { 
        return 'El ' . __CLASS__ . ' consume Gasolina'; 
    } 
} 

class AutoDiesel extends Auto 
{ 
    // Es obligatorio implementar el método consumir()
    // Error: La visibilidad de un método no puede disminuir en la clase que lo herede
    protected function consumir()    //PHP Fatal error:  Access level to AutoDiesel::consumir() must be public (as in class Auto)
    { 
        return 'El ' . __CLASS__ . ' consume Diesel'; 
    } 
} 


// Error: No puede instanciarse de la clase Auto
$carro1 = new Auto();   // Fatal error: Cannot instantiate abstract class Auto in...
$carro2 = new AutoGasolina(); 
$carro3 = new AutoDiesel(); 
?>