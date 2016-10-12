<?php
 
class Prueba 
{
    public static function saludar()
    {
        echo 'Hola';
    }
 
    public static function saludar($argumento)
    {
        echo 'Hola ', $argumento;   
    }
}
 
?>