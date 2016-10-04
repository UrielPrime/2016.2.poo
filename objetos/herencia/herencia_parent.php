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
    public function saludar()
    {
        echo 'Hola... Desde la clase B', PHP_EOL;
    }
 
    // Función de prueba
    public function saludarPadre()
    {
        parent::saludar();
    }
}
 
// Prueba de objetos
$objB = new B();
$objB->saludar(); // Imprime 'Hola... Desde la clase B'
$objB->saludarPadre(); // Imprime 'Hola'
 
?>