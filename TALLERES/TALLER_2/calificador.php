<?php

$calificacion = 59;
$nota;
if ($calificacion >= 90) {
    $nota = "A";
    echo "Tienes una calificacion de " . $nota . ".";
} elseif ($calificacion >= 80) {
    $nota = "B";
    echo "Tienes una calificacion de " . $nota . ".";
} elseif ($calificacion >= 70) {
    $nota = "C";
    echo "Tienes una calificacion de " . $nota . ".";  
} elseif ($calificacion >= 60) {
    $nota = "D";
    echo "Tienes una calificacion de " . $nota . ".";
} else {
    $nota = "F";
    echo "Tienes una calificacion de " . $nota . ".";
}
echo "<br>";
$resultado = ($calificacion >= 60) ? "Aprobaste" : "Reprobaste";
echo "Resultado (Ternario): $resultado<br><br>";

switch ($nota)  {

case "A":
    echo "Bien hecho, pasaste.";
    break;
case "B":
    echo "Pasaste bien.";
    break;
case "C":
    echo "Falto un poco pero pasaste.";
    break;
case "D":
    echo "Pasaste pero falta mas practica.";
    break;
case "F":
    echo "No pasastes.";
    break;
default:
    echo "No tienes nota del semestre.";
}
?>