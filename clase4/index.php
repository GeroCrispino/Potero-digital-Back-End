<?php
    //Se asigna un entero a la variable y se verifica si el numero es positivo. Se muestra el resultado en pantalla si es verdadero. 
    $num = 20;
    if ($num >= 0)
        echo "El número ingresado es un número positivo";

    echo "<br>";
    
    //Se asigna un entero a la variable y se verifica si el numero es mayor que 1 y menor que 10. Se muestra en pantalla si es verdadero
    $num1 = 7;
    if (($num1 > 1) & ($num1 < 10))
        echo "El número ingresado es mayor a 1 y menor a 10";
    
    echo "<br>";

    //Se asigna un entero a la variable y se verifica si el numero es mayor o igual que 10 o menor que 2. Se muestra el resultado en pantalla
    $num2 = 10;
    if (($num2 >= 10) | ($num2 < 2))
        echo "El número ingresado es mayor o igual a 10 o menor a 2";
    else
        echo "El número ingresado no pudo ser validado";
    
    echo "<br>";

    /*Se asigna dos enteros a las variables numero1 y numero2. Si numero1 es mayor que numero2, se muestra en pantalla la suma y resta entre ambos numeros.
    Caso contrario se muestra en pantalla se muestra en pantalla la multiplicacion, division y el resto entre ambos numeros.
    Si son iguales se muestra en pantalla que son el mismo numero. */
    $numero1 = 25;
    $numero2 = 15;
    if ($numero1 > $numero2) {
        echo "La suma entre ambos números da: " . $numero1 + $numero2 . "<br>";
        echo "La resta entre ambos números da: " . $numero1 - $numero2 . "<br>";
    }
    else if ($numero2 > $numero1) {
        echo "La multiplicación entre ambos números da: " . $numero2 * $numero1 . "<br>";
        echo "La división entre ambos números da: " . $numero2 / $numero1 . "<br>";
        echo "El resto de la división entre ambos números es: " . $numero2 % $numero1 . "<br>";
    }
    else
        echo "Los números ingresados son iguales.";
?>