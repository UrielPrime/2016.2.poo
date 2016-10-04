<?php
define ('BR', PHP_EOL);
$cadena = "Esto es una 'prueba'";

// Encierra con barras diagonales inversas una cadena
echo 'addslashes() => ', addslashes($cadena), BR;

// Devolver un caracter a partir de su código ASCII
echo 'chr(65) => ', chr(65), BR;

// Devuelve el código ASCII de un caracter
echo "ord('A') => ", ord('A'), BR;

// Separar una cadena en un arreglo
$arreglo = explode(' ', $cadena);
echo 'Primera palabra: ', $arreglo[0], BR;

// Unir un arreglo en una cadena
$arreglo = array('varias', 'palabras', 'en', 'una', 'frase');
echo 'Implode() => ', implode("-", $arreglo), BR;

// Coloca comas en los números
echo 'number_format() => ', number_format(1202.5, 2), BR;

// Parsear una cadena en variables
echo 'parse_str()', BR;
$cadena = 'uno=1&dos[]=2+3+4';
parse_str($cadena);
echo $uno, BR;
echo $dos[0], BR;

// Metodos de cifrado de cadenas
$cadena = 'hola';
echo 'md5() => ', md5($cadena), BR;
echo 'sha1() => ', sha1($cadena), BR;

// Relleno de cadenas
$cadena = 100;
echo 'str_pad() => ', str_pad($cadena, 8, '0'), BR;
echo 'str_pad() => ', str_pad($cadena, 8, '0', STR_PAD_LEFT), BR;
echo 'str_pad() => ', str_pad($cadena, 8, '_', STR_PAD_BOTH), BR;

// Reemplazo de cadenas
$cadena = 'hola mundo mundo mundo';
echo 'str_replace() => ', str_replace('mundo', 'planeta', $cadena), BR;
str_replace('mundo', 'planeta', $cadena, $conteo);
echo $conteo, BR;
$busca = array('hola', 'mundo');
$reemplazo = array('que tal', 'Tierra', 'X');
echo 'str_replace() => ', str_replace($busca, $reemplazo, $cadena), BR;

// Una cadena en array
$arreglo = str_split($cadena);
print_r($arreglo);
echo BR;
$arreglo = str_split($cadena, 3);
print_r($arreglo);
echo BR;

// Conteo de palabras
echo 'str_word_count() => ', str_word_count($cadena), BR;
$arreglo = str_word_count($cadena, 1);
print_r($arreglo);
echo BR;
$arreglo = str_word_count($cadena, 2);
print_r($arreglo);
echo BR;

// Reemplazo de tags HTML y PHP
$cadena = '<p>Prueba de parrafo</p><!-- Comment --> <a href="#fragment">Un hipervínculo</a>';

echo 'strip_tags() => ', strip_tags($cadena), BR;
echo 'strip_tags() => ', strip_tags($cadena, '<p><a>'), BR;

// Tamaño de cadena
$cadena = 'hola mundo';
echo 'strlen() =>', $cadena, ': ', strlen($cadena), BR;

// Reversa de una cadena
echo 'strrev() => ', strrev($cadena), BR;

// Primera posicion de una subcadena
echo 'strstr() => ', strstr($cadena, 'm'), BR;
echo 'strstr() => ', strstr($cadena, 'm', true), BR;

// Subcadenas
$cadena = '0123456789';
echo 'substr() => ', substr($cadena, 3, 2), BR;
echo 'substr() => ', substr($cadena, -2, 2), BR;

// Formatos de capitalizacion
$cadena = 'francisco morazán';
echo 'strtolower => ', strtolower($cadena), BR;
echo 'mb_strtolower => ', mb_strtolower($cadena), BR;
echo 'strtoupper => ', strtoupper($cadena), BR;
echo 'mb_strtoupper => ', mb_strtoupper($cadena), BR;
echo 'ucfirst =>', ucfirst($cadena), BR;
echo 'ucwords => ', ucwords($cadena), BR;

// Limpiar espacios en blanco
$cadena = '  hola  ';
echo '|' . $cadena . '|', BR;
$cadena = '|' . trim($cadena) . '|';
echo 'trim => ', $cadena, BR;

?>
