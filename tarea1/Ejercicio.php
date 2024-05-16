<?php

$nArray = [];
$numerosArray = [];
for ($i = 0; $i <= 50; $i++) {
                                    // Creamos y cargamos el array
    $numerosArray[] = rand(0, 50);
}

print_r($numerosArray);

foreach ($numerosArray as $index => $datos) {
                                    // Verificamos si el valor es 5 y lo mostramos
    if ($datos == 5) {
        echo("[$index] => $datos" . " ");
    };
}

for ($i = 0; $i < 10; $i++) {
    $random = rand(1, 5);         //Cargamos el array con array push y rand
    array_push($nArray, $random);
}
print_r($nArray);
$check = array_search(5, $nArray);
$arreglo2 = [];

foreach ($nArray as $indice => $val) {
    if ($val == 5) {
        $arreglo2 = $indice;     //Verificamos los valores y cambiamos el numero por un string para que no lo vuelva a mostrar y si encuentra otro que muestre el indice y sino nada
        $val = "Encontrado";
        print_r("Indices con el numero 5: [$arreglo2]"); 
    } else {
        $arreglo2 = "nada";
    }
}