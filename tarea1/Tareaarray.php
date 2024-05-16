<?php
// Generar un array de 50 números enteros de forma aleatoria
$random_numbers = [];
for ($i = 0; $i < 50; $i++) {
    $random_numbers[] = rand(1, 100); // Genera números aleatorios entre 1 y 100
}

// Utilizar estructuras de control para recorrer el array
$found = false;
$position = -1;
foreach ($random_numbers as $index => $number) {
    if ($number == 5) {
        $found = true;
        $position = $index;
        break; // Salir del bucle una vez encontrado el número 5
    }
}

// Mostrar el resultado por pantalla
if ($found) {
    echo "El número 5 se encontró en la posición $position del arreglo.";
} else {
    echo "El número 5 no se encontró en el arreglo.";
}