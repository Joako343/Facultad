<?php

//for ($z = 1; $z < 101; $z++) { 
//    if ($z % 3== 0 && $z %5== 0) { 
//    echo "fizzbuzz ";
//    }elseif ($z % 3== 0) {
//            echo "fizz ";
//        }elseif ($z % 5==0){
//                echo "buzz ";}
//                        else echo "$z ";
//}

function Generador($num, $num2) {
    for ($z = 1; $z < 101; $z++) { 
        if ($z % $num== 0 && $z % $num2== 0) { 
        echo "fizzbuzz ";
        }elseif ($z % $num== 0) {
                echo "fizz ";
            }elseif ($z % $num2==0){
                    echo "buzz ";}
                            else echo "$z ";
    }
}
echo Generador(7, 13);
echo "<br>";
echo "<br>";
echo "<br>";
echo Generador(2, 6);