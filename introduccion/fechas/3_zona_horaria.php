<?php

// PHP maneja múltiples zonas horarias, para establecer los DateTime

// Zona de Moscu
$zonaMoscu = new DateTimeZone('Europe/Moscow');
$zonaTegucigalpa = new DateTimeZone('America/Tegucigalpa');
$zonaNewYork = new DateTimeZone('America/New_York');

// En este caso se utiliza el DateTimeZone para crear un objeto DateTime.
$fechaMoscu = new DateTime('now', $zonaMoscu);
$fechaTegucigalpa = new DateTime('now', $zonaTegucigalpa);
$fechaNewYork = new DateTime('now', $zonaNewYork);

echo 'Moscú: ', $fechaMoscu->format('d/m/Y H:i:s'), PHP_EOL;
echo 'Tegucigalpa: ', $fechaTegucigalpa->format('d/m/Y H:i:s'), PHP_EOL;
echo 'New York: ', $fechaNewYork->format('d/m/Y H:i:s'), PHP_EOL;