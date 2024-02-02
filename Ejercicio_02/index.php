<?php

function fibonacci($n){
    $fibonacci = array(0, 1);
    for($i = 2; $i < $n; $i++){
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    return $fibonacci;
}

function cubo($numero){
    return $numero ** 3;
}

function fraccionarios($a, $b, $c, $d){
    $numerador = $a;
    $denominador = $b;

    if($numerador < 0){
        $numerador = -$numerador;
    }

    $suma = $a + $b * $c - $d;

    if($suma == $numerador / $denominador){
        return true;
    } else {
        return false;
    }
}

while(true){
    echo "MENU\n";
    echo "=============\n";
    echo "1. FIBONACCI\n";
    echo "2. CUBO\n";
    echo "3. FRACCIONARIOS\n";
    echo "S. SALIR\n";
    $op = readline("Ingrese una opción: ");

    if($op == 'S' || $op == 's'){
        break;
    }

    switch($op){
        case '1':
            echo "Ingrese un número: ";
            $numero = readline();
            if($numero >= 1 && $numero <= 50){
                $fibonacci = fibonacci($numero);
                echo "Los primeros $numero números de fibonacci son:\n";
                foreach($fibonacci as $num){
                    echo "$num ";
                }
                echo "\n";
            } else {
                echo "Número inválido. Debe estar entre 1 y 50.\n";
            }
            break;
        case '2':
            echo "Ingrese un número: ";
            $numero = readline();
            echo "El cubo de $numero es: " . cubo($numero) . "\n";
            break;
        case '3':
            echo "Ingrese 4 números fracionarios: ";
            $a = readline();
            $b = readline();
            $c = readline();
            $d = readline();
            if(fraccionarios($a, $b, $c, $d)){
                echo "Los números cumplen con la condición.\n";
            } else {
                echo "Los números no cumplen con la condición.\n";
            }
            break;
        default:
            echo "OPCIÓN INVÁLIDA\n";
            break;
    }
}