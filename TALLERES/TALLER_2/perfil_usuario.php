<?php
    //Variables
    $nombre_completo = "Manuel Lopez";
    $edad = 26;
    $correo = "manuel.lopez3@utp.ac.pa";
    $telefono = "6603-8457";

    //Constantes
    define("OCUPACION", "Estudiante");

    $parrafo1 = "Muy buenas tardes, me llamo " . $nombre_completo . " y tengo " . $edad . " años, y mi ocupación es " . OCUPACION . ".";
    $parrafo2 = "Mi correo electronico es " . $correo . " y mi celular es " . $telefono . ".";

    echo $parrafo1 . <br>;
    print($parrafo2 . <br>);

    printf("En resumen: %s, %d años, %s, %s, %s<br>", $nombre_completo, $edad, $telefono, $correo, OCUPACION);

    echo "<br>Información de debugging:<br>";
    var_dump($nombre_completo);
    echo "<br>";
    var_dump($edad);
    echo "<br>";
    var_dump($correo);
    echo "<br>";
    var_dump(OCUPACION);
    echo "<br>";
    var_dump($telefono);
    echo "<br>";
?>