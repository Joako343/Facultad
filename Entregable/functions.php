<?php
//Alumno: Joaquin Borras

//----------------------------------------------------------------------------------------------------------------------
//EJERCICIO 1
function NumAleatorio()
{ //Funcion
    $Nashe = rand(1, 100); //Una variable a la que le otorgamos un numero random entre 1 y 100
    echo "El numero es: $Nashe"; //Sirve para mostrar el numero generado
    if ($Nashe < 50) { //si el numero generado es menor a 50 tira un mensaje
        echo "  El numero es menor a 50";
    } elseif ($Nashe > 50) { //si el numero generado es mayor a 50 tira otro mensaje
        echo "  El numero es mayor a 50";
    } else { // si el numero generado resulta ser igual a 50 tira otro mensaje
        echo "  El numero es igual a 50";
    }
}
//----------------------------------------------------------------------------------------------------------------------


//----------------------------------------------------------------------------------------------------------------------
//EJERCICIO 2
function Nailon($num) //Funcion con la variable con un numero random
{
    $Meses = [ //Aca tenemos el array con todos los meses almacenados
        "Enero",
        "Febrero",
        "Marzo",
        "Abril",
        "Mayo",
        "Junio",
        "Julio",
        "Agosto",
        "Septiembre",
        "Octubre",
        "Noviembre",
        "Diciembre"
    ];
    if ($num >= 1 && $num <= 12) { //compara si $num1 esta entre 1 y 12, si es asi tira tres mensajes
        echo " El numero generado es: $num";
        echo "<br>";
        echo "Mes: " . $Meses[$num - 1]; // Es el mensaje mas importante ya que arroja el mes, segun el numero random generado
    }
}
//----------------------------------------------------------------------------------------------------------------------


//----------------------------------------------------------------------------------------------------------------------
//EJERCICIO 3
function NumsAleatorios($num1, $num2) //funcion con ambas variables(arrays aleatorios)
{
    if ($num1 == $num2) { //si ambos valores son iguales tira un mensaje
        echo "Ambos valores son iguales";
    } elseif ($num1 > $num2) { //comparo si &num1 es mayor a $num2, si es asi tira un mensaje y ejecuta 2 For
        echo "El numero mayor es: $num1 y el numero menor es: $num2";
        echo "<br>";
        for ($i = $num2; $i <= $num1; $i++) { //Este For muestra los numeros de manera ascendente
            echo "$i <br>";
        }
        echo "<br>";
        for ($i = $num1; $i >= $num2; $i--) { //Este FOR muestra los numeros de manera descendente
            echo "$i <br>";
        }
    } else {
        echo "El numero mayor es: $num2 y el numero menor es: $num1"; //Si la primera condicion no se cumple se ejecuta esta otra que es un else
        echo "<br>";
        for ($i = $num1; $i <= $num2; $i++) { //Este For muestra los numeros de manera ascendente
            echo "$i <br>";
        }
        echo "<br>";
        for ($i = $num2; $i >= $num1; $i--) { //Este FOR muestra los numeros de manera descendente
            echo "$i <br>";
        }
    }
}
//----------------------------------------------------------------------------------------------------------------------


//----------------------------------------------------------------------------------------------------------------------
//EJERCICIO 4
function multiploFor($n1, $n2) //Primera funcion que va a contener el bucle FOR
{
    static $c = 1; //Declaramos una variable como estatica
    for ($i = 0; $i < $n2; $i++) //Aca tenemos el bucle FOR
        echo $n1 * $c++ . " , "; //Mostamos el resultado de la multiplicacion
    echo "<br>"; //Y aca un espacion nomas 😎
}
function multiploWhile($multi1, $multi2) //Segunda funcion que contiene el bucle WHILE
{
    echo "<br>"; //Y aca un espacion nomas 😎
    static $c2 = 1; //Declaramos una variable como estatica
    while ($c2 <= $multi2) { //Tenemos el el inicio y comparacion del bucle While
        echo $multi1 * $c2++ . " , "; // Mostramos el resultado de la multiplicacion

    }
}
function multiploDOWhile($termo1, $termo2) // Tercera funcion que tienen el bucle DO-WHILE
{
    echo "<br>"; //Y aca un espacion nomas 😎
    echo "<br>"; //Y aca un espacion nomas 😎
    static $c3 = 1; //Declaramos una variable como estatica
    do { //Tenemos la ejecucion del bucle DO-While que la primera vez es obligatoria
        echo $termo1 * $c3 . " , "; //Mostramos el resultado de la operacion
        $c3++; //incrementamos la variable 
    } while ($c3 <= $termo2); //Tenemos la condicion del bucle DO-WHILE
}
//----------------------------------------------------------------------------------------------------------------------


//----------------------------------------------------------------------------------------------------------------------
//EJERCICIO 5
function TiroDados() // Declaramos la funcion del dado
{
    for ($i = 0; $i < 100; $i++) { // Tenemos el bucle for que se ejecuta 100 veces
        $Dado = rand(1, 6); // La variable dado que tiene un rand para obtener un valor aleatorio entre 1 y 6
        echo $Dado . ","; // uso este echo para mostrar los valores que salen
        if ($Dado == 1) { // si sale 1 se, se incrementa un contador
            $cont1++;
        } else if ($Dado == 2) { // si sale 2 se, se incrementa un contador
            $cont2++;
        } else if ($Dado == 3) { // si sale 3 se, se incrementa un contador
            $cont3++;
        } else if ($Dado == 4) { // si sale 4 se, se incrementa un contador
            $cont4++;
        } else if ($Dado == 5) { // si sale 5 se, se incrementa un contador
            $cont5++;
        } else { // al final si no ningun otro numero toma que es un 6 y se incrementa un contador
            $cont6++;
        }
    }
    echo "<br>"; // Y aca un espacion nomas 😎
    echo "<br>"; // Y aca un espacion nomas 😎
    echo "La cantidad de veces que salio el numero 1 fueron: ", $cont1, "<br>";
    echo "La cantidad de veces que salio el numero 2 fueron: ", $cont2, "<br>";
    echo "La cantidad de veces que salio el numero 3 fueron: ", $cont3, "<br>";
    echo "La cantidad de veces que salio el numero 4 fueron: ", $cont4, "<br>";
    echo "La cantidad de veces que salio el numero 5 fueron: ", $cont5, "<br>";
    echo "La cantidad de veces que salio el numero 6 fueron: ", $cont6;
}
//----------------------------------------------------------------------------------------------------------------------

//----------------------------------------------------------------------------------------------------------------------
// EJERCICIO 6
function RuletaRusaMentira()
{ //Tenemos la funcion por aca
    $Tiro = rand(0, 36); //una variable que va a obtener un numero random entre 0 y 36
    if ($Tiro >= 1 && $Tiro <= 12 && $Tiro % 3 == 1) { //verificamos si el numero esta en la primera docena y primera columna
        echo "$Tiro, Primera docena, Primera columna";
    } elseif ($Tiro >= 1 && $Tiro <= 12 && $Tiro % 3 == 2) { //verificamos si el numero esta en la primera docena y segunda columna
        echo "$Tiro, Primera docena, Segunda columna";
    } elseif ($Tiro >= 1 && $Tiro <= 12 && $Tiro % 3 == 0) { //verificamos si el numero esta en la primera docena y tercera columna
        echo "$Tiro, Primera docena, Tercera columna";
    } elseif ($Tiro >= 13 && $Tiro <= 24 && $Tiro % 3 == 1) { //verificamos si el numero esta en la segunda docena y primera columna
        echo "$Tiro, Segunda docena, Primera columna";
    } elseif ($Tiro >= 13 && $Tiro <= 24 && $Tiro % 3 == 2) { //verificamos si el numero esta en la segunda docena y segunda columna
        echo "$Tiro, Segunda docena, Segunda columna";
    } elseif ($Tiro >= 13 && $Tiro <= 24 && $Tiro % 3 == 0) { //verificamos si el numero esta en la segunda docena y tercera columna
        echo "$Tiro, Segunda docena, Tercera columna";
    } elseif ($Tiro >= 25 && $Tiro <= 36 && $Tiro % 3 == 1) { //verificamos si el numero esta en la tercera docena y primera columna
        echo "$Tiro, Tercera docena, Primera columna";
    } elseif ($Tiro >= 25 && $Tiro <= 36 && $Tiro % 3 == 2) { //verificamos si el numero esta en la tercera docena y segunda columna
        echo "$Tiro, Tercera docena, Segunda columna";
    } elseif ($Tiro >= 25 && $Tiro <= 36 && $Tiro % 3 == 0) { //verificamos si el numero esta en la terceradocena y tercera columna
        echo "$Tiro, Tercera docena, Tercera columna";
    } else {
        echo "Cero $Tiro 🟩 ¯\_(ツ)_/¯"; //Aca simplemente es un else por si sale el 0 cero
    }
}
//----------------------------------------------------------------------------------------------------------------------