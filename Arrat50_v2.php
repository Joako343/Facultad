<?php
//Alumno: Joaquin Borras
$VectorArray = []; //declaramos el vector o array
for ($z = 0; $z < 50; $z++) { // el bucle for para que se repita 50 veces
    $VectorArray[] = rand(1, 50); // se guardan los numeros aleatorios en el vector
}
print_r($VectorArray); // aca simplemente mostramos la posiciones con los valores del vector

$LoEncontre = false; // esta variavle nos ayudara mas tarde pero la declaramos como false
$posicion = []; // este vector lo usamos para guardar la posicion de los numero 5 encontrados en el otro vector
foreach ($VectorArray as $key => $num) { //usamos el foreach para recorrer el vector
    if ($num === 5) { //si se encuentra el numero 5
        $LoEncontre = true; //esta variable pasa a true
        $posicion[] = $key; //se guarda la posicion del numero 5
    }
}

if ($LoEncontre) { // si la variable es true se ejecuta el primer echo
    echo "El número 5 se encontró en las posicion o posiciones: ";
    foreach ($posicion as $posicion) { //usamos otro foreach para ver todas las veces que se encontro el numero 5
        echo "$posicion, ";
    }
} else { //sino si la variable es false tira el siguiente mensaje
    echo "El número 5 no se encontró en el Array.";
}