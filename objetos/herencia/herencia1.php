<?php
 
// Clase Padre
class A
{    
    public function saludar() 
    {
        echo 'Hola', PHP_EOL;
    }
}
 
// Clase derivada
class B extends A
{
}
 
// Prueba de objetos
$objB = new B();
$objB->saludar(); // Imprime 'Hola'
 
?>