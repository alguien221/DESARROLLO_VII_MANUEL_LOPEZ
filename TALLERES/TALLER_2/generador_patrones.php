<?php
echo "<h2> Uso de bucles en PHP</h2>";

echo "Triangulo de asteriscos:<br><br>";

$cuenta = 1;

for ($i = 1; $i <= 5; $i++) {

    while ($cuenta <= $i) {
        echo "*";
        $cuenta++;
    }

        echo "<br> ";
        $cuenta = 1;
}

echo "<br><br>Contador progresivo de numeros impares:<br><br>";

$cuenta1 = 1;
while ($cuenta1 < 20) {

    echo "$cuenta1 ";
    $cuenta1 = $cuenta1 + 2;
}

echo "<br><br>Contador regresivo sin el numero 5:<br><br>";

$cuenta2 = 10;
do {
    if ($cuenta2 != 5){
        echo "$cuenta2 ";
        $cuenta2--;
    } else {
        $cuenta2--;
    }

} while ($cuenta2 > 0);
?>