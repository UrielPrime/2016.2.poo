<?php
 
class Auto 
{ 
    public function consumir() 
    { 
        // __CLASS__ es una constante de PHP que devuelve el nombre de la clase 
        return 'El ' . __CLASS__ . ' consume algún tipo de combustible'; 
    } 
} 
 
 
class AutoGasolina extends Auto 
{ 
    public function consumir() { 
        return 'El ' . __CLASS__ . ' consume Gasolina'; 
    } 
} 
 
 
class AutoDiesel extends Auto 
{ 
    public function consumir() 
    { 
        return 'El ' . __CLASS__ . ' consume Diesel'; 
    } 
} 
 
 
// Prueba de polimorfismo: La función mostrar() usa un objeto Auto como parámetro.
// Sin embargo, en tiempo de ejecución decidirá cuál función consumir() es apta. 
function mostrar(Auto $auto) 
{ 
    echo $auto->consumir(), PHP_EOL; 
} 

// Creacion de objetos y ejecución de funcion de pruebas
$carro1 = new Auto(); 
$carro2 = new AutoGasolina(); 
$carro3 = new AutoDiesel(); 
mostrar($carro1); 
mostrar($carro2); 
mostrar($carro3);
 
?>