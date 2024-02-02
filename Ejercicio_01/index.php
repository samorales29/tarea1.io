<?php

function factorial($num){
    $factorial = 1;
    for($i = 1; $i <= $num; $i++){
        $factorial *= $i;
    }
    return $factorial;
}

function esPrimo($num){
    if($num <= 1){
        return false;
    }
    for($i = 2; $i <= sqrt($num); $i++){
        if($num % $i == 0){
            return false;
        }
    }
    return true;
}

function serieMatematica($num){
    $suma = 0;
    for($i = 1; $i <= $num; $i++){
        $suma += pow(-1, $i) * (pow($i, 2) / factorial($i));
    }
    return $suma;
}

while (true) {
    echo "MENÚ\n";
    echo "==============\n";
    echo "1. FACTORIAL\n";
    echo "2. PRIMO\n";
    echo "3. SERIE MATEMÁTICA\n";
    echo "S. SALIR\n";
    $op = readline("Ingrese una opción: ");

    if($op == 'S' || $op == 's'){
        break;
    }

    echo "Ingrese un número: ";
    $numero = readline();

    switch($op){
        case '1':
            echo "FACTORIAL DE $numero ES:\t" . factorial($numero) . "\n";
            break;
        case '2':
            if(esPrimo($numero)){
                echo "$numero ES PRIMO\n";
            } else {
                echo "$numero NO ES PRIMO\n";
            }
            break;
        case '3':
            echo "SERIE MATEMÁTICA DE $numero TERMINOS ES:\t" . serieMatematica($numero) . "\n";
            break;
        default:
            echo "OPCIÓN INVÁLIDA\n";
            break;
    }
}
?>
