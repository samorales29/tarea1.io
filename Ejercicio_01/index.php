<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú PHP</title>
</head>
<body>

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
    echo "<h2>MENÚ</h2>";
    echo "<p>==============</p>";
    echo "<p>1. FACTORIAL</p>";
    echo "<p>2. PRIMO</p>";
    echo "<p>3. SERIE MATEMÁTICA</p>";
    echo "<p>S. SALIR</p>";
    $op = readline("Ingrese una opción: ");

    if($op == 'S' || $op == 's'){
        break;
    }

    echo "<p>Ingrese un número: </p>";
    $numero = readline();

    switch($op){
        case '1':
            echo "<p>FACTORIAL DE $numero ES: " . factorial($numero) . "</p>";
            break;
        case '2':
            if(esPrimo($numero)){
                echo "<p>$numero ES PRIMO</p>";
            } else {
                echo "<p>$numero NO ES PRIMO</p>";
            }
            break;
        case '3':
            echo "<p>SERIE MATEMÁTICA DE $numero TERMINOS ES: " . serieMatematica($numero) . "</p>";
            break;
        default:
            echo "<p>OPCIÓN INVÁLIDA</p>";
            break;
    }
}

?>

</body>
</html>

