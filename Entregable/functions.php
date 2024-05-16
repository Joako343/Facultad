<?php
//Entregable: 1
//Profesor: Nicolas Rotilli
//Alumno: Joaquin Borras

//----------------------------------------------------------------------------------------------------------------------
//EJERCICIO 1
//function NumAleatorio(){ //Funcion
//    $Nashe = rand(1, 100); //Una variable a la que le otorgamos un numero random entre 1 y 100
//    echo "El numero es: $Nashe"; //Sirve para mostrar el numero generado
//    if ($Nashe < 50) { //si el numero generado es menor a 50 tira un mensaje
//        echo " - El numero es menor a 50";
//    } elseif ($Nashe > 50) { //si el numero generado es mayor a 50 tira otro mensaje
//        echo " - El numero es mayor a 50";
//    } else { // si el numero generado resulta ser igual a 50 tira otro mensaje
//       echo " - El numero es igual a 50";
//    }
// }
//NumAleatorio();
//----------------------------------------------------------------------------------------------------------------------


//----------------------------------------------------------------------------------------------------------------------
//EJERCICIO 2
//function Nailon($num) //Funcion con la variable con un numero random
//{
//    $Meses = [ //Aca tenemos el array con todos los meses almacenados
//        "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
//       "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
//   ];
//    if ($num >= 1 && $num <= 12) { //compara si $num1 esta entre 1 y 12, si es asi tira tres mensajes
//        echo " El numero generado es: $num";
//        echo"<br>";
//        echo $Meses[$num - 1]; // Es el mensaje mas importante ya que arroja el mes, segun el numero random generado
//    } 
//}
//Nailon(rand(1,12)); //Llamamos a la funcion y le damos un valor random a $num1 entre 1 y 12
//----------------------------------------------------------------------------------------------------------------------


//----------------------------------------------------------------------------------------------------------------------
//EJERCICIO 3
//function NumsAleatorios($num1, $num2) //funcion con ambas variables(arrays aleatorios)
//{
//    if ($num1 == $num2) { //si ambos valores son iguales tira un mensaje
//        echo "Ambos valores son iguales";
//    } elseif ($num1 > $num2) { //comparo si &num1 es mayor a $num2, si es asi tira un mensaje y ejecuta 2 For
//        echo "El numero mayor es: $num1 y el numero menor es: $num2";
//        echo "<br>";
//        for ($i = $num2; $i <= $num1; $i++) { //Este For muestra los numeros de manera ascendente
//            echo "$i <br>";
//        }
//        echo "<br>";
//        for ($i = $num1; $i >= $num2; $i--) { //Este FOR muestra los numeros de manera descendente
//            echo "$i <br>";
//        }
//    } else {
//      echo "El numero mayor es: $num2 y el numero menor es: $num1"; //Si la primera condicion no se cumple se ejecuta esta otra que es un else
//        echo "<br>";
//        for ($i = $num1; $i <= $num2; $i++) { //Este For muestra los numeros de manera ascendente
//            echo "$i <br>";
//        }
//        echo "<br>";
//        for ($i = $num2; $i >= $num1; $i--) { //Este FOR muestra los numeros de manera descendente
//            echo "$i <br>";
//        }
//    }
//}
//NumsAleatorios(rand(1, 100), rand(1, 100)); //llamamos a la funcion y le damos 2 valores randoms a $num1 y $num2 entre 1 y 100
//----------------------------------------------------------------------------------------------------------------------