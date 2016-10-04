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

$a = new A();
$b = new B();

$prueba1 = $b instanceof A;
$prueba2 = is_a($b, 'B');
$prueba3 = is_subclass_of($b, 'A');
$prueba4 = is_subclass_of($b, 'B');

var_dump($prueba1);   	// true: Porque A es padre de B
var_dump($prueba2);     // true
var_dump($prueba3);    	// true: A es padre de B
var_dump($prueba4);    	// false: B no es padre de B

?>