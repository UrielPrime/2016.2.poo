<?php

function diasTranscurridos(DateTime $fecha)
{
  $ahora = new DateTime();
  $intervalo = $fecha->diff ($ahora);

  if ($fecha <= $ahora)
    return $intervalo->days;
  else
    return -1 * $intervalo->days;
}


function frasesSMS($frase)
{
	// Dividir la frase en palabra
	$palabras = explode(' ', $frase);
	
	// Establece si algun subconjunto de palabras forma un mensaje
	// de 160 caracteres.
	$mensaje = '';
	$resultado = array();

	foreach ($palabras as $palabra) {
		$prueba = $mensaje . ' ' . $palabra;
		
		if (strlen($prueba) < 160) {
			$mensaje = $prueba;
		} else {
			$resultado[] = trim($mensaje);
			$mensaje = $palabra;
		}
	}

	if ($mensaje != '')
		$resultado[] = rtrim($mensaje);

	return $resultado;
}


function esOrtogonal($vector1, $vector2, & $producto)
{
	// Asumiendo que los dos vectores tienen las mismas claves
	$producto = 0;

	foreach($vector1 as $k => $v) {
		$producto += $vector1[$k] * $vector2[$k];
	}

	return ($producto === 0);
}
?>