<?php
    // Se muestra en pantalla Hola Mundo!
    echo "Hola Mundo!";

    echo "<br>";
    echo "<br>";

    //Asigno a una variable una cadena de caracteres y se muestra en pantalla
    $cadena = "Hola Mundo!";
    echo $cadena;

    echo "<br>";
    echo "<br>";

    //Asigno numeros enteros a dos variables y se muestra en pantalla los resultados de distintas operaciones
    $num1 = 50;
    $num2 = 25;

    //Suma
    echo $num1 + $num2;
    echo "<br>";
    //Resta
    echo $num1 - $num2;
    echo "<br>";
    //Multiplicacion
    echo $num1 * $num2;
    echo "<br>";
    //Division
    echo $num1 / $num2;
    echo "<br>";
    //Resto
    echo $num1 % $num2;

    echo "<br>";
    echo "<br>";

    //Transformo a Fahrenheit el valor 20ºC y se muestra en pantalla
    $valor = (1.8 * 20) + 32;
    echo "El valor en Fahrenheit de 20ºC es: ";
    echo $valor;

    echo "<br>";
    echo "<br>";

    //Calculo el perimetro y area de un rectangulo y se muestra en pantalla los resultados
    $base = 18;
    $altura = 12;

    $perimetro = (2 * $altura) + (2 * $base);
    $area = $base * $altura;
    echo "El perimetro del rectangulo es: ";
    echo $perimetro;
    echo "<br>";
    echo "El area del rectangulo es: ";
    echo $area;

    echo "<br>";
    echo "<br>";

        //Calculo el perimetro y area de un circulo y se muestra en pantalla los resultados
        $radio = 30;
    
        $Perimetro = 2 * 3.14 * $radio;
        $Area = 3.14 * ($radio * $radio);
        echo "El perimetro del circulo es: ";
        echo $Perimetro;
        echo "<br>";
        echo "El area del circulo es: ";
        echo $Area;
?>