<?php
    //PUNTO 1
    for ($num = 1; $num < 10; $num++) {
        echo "El valor de num es: " . $num;
        echo "<br>";
    }

    echo "<br>";
    echo "<br>";

    //PUNTO 2
    for ($num1 = 9; $num1 > 0; $num1--) {
        echo "El valor de num es: " . $num1;
        echo "<br>";
    }

    echo "<br>";
    echo "<br>";

    //PUNTO 3
    for ($num2 = 1; $num2 < 21; $num2++) {
        if ($num2 % 2 == 0) {
            echo "El número '" . $num2 . "' es par";
            echo "<br>";
        }
    }

    echo "<br>";
    echo "<br>";

    //PUNTO 4
    for ($num3 = 1; $num3 < 21; $num3++) {
        if ($num3 % 2 == 1) {
            echo "El número '" . $num3 . "' es impar";
            echo "<br>";
        }
    }

    echo "<br>";
    echo "<br>";

    //PUNTO 5
    $suma = 0;
    for ($num4 = 1; $num4 <21; $num4++) {
        $suma = $suma + $num4;
    }
    echo "La suma de los números del 1 al 20 es: " . $suma;

    echo "<br>";
    echo "<br>";

    //PUNTO 5
    $resultado = 0;
    for ($num5 = 1; $num5 <21; $num5++) {
        if ($num5 % 2 == 0)
            $resultado = $resultado + $num5;
    }
    echo "La suma de los números pares del 1 al 20 es: " . $resultado;
?>