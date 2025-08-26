<?php 
$nombre = "Carlos";
$edad = 24;
$altura = 1.69;
$esEstudiante = true;

// Concatenación usando el operador
$presentacion1 = "Hola, mi nombre es " . $nombre . " y tengo " . $edad . " años.";

// Concatenación  dentro de comillas dobles
$presentacion2 = "Hola, mi nombre es $nombre y tengo $edad años.";

// Definir una constante
define("SALUDO", "Bienvenido!");

// Concatenar una constante
$mensaje = SALUDO . " " . $nombre;

echo $presentacion1 . "<br>";
echo $presentacion2 . "<br>";
echo $mensaje . "<br>";
echo "Nombre: $nombre<br>";
echo "Edad: $edad<br>";
echo "Altura: $altura<br>";
echo "¿Es estudiante? " . ($esEstudiante ? "Sí" : "No");
?>