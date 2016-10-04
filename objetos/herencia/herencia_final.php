<?php
 
// Clase Padre
class A
{    
    // Método declarado con final
    final public function saludar() 
    {
        echo 'Hola', PHP_EOL;
    }
}
 
// Clase derivada
class B extends A
{
    public function saludar() 
    {
        echo 'Hola... desde clase derivada', PHP_EOL;
    }
}
 
// Implementación de ambas clases
$objB = new B();
$objB->saludar(); // Fatal error: Cannot override final method A::saludar()
 
?>