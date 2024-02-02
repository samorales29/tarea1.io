<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú PHP</title>
</head>
<body>

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
    echo "<h2>MENU</h2>";
    echo "<p>=============</p>";
    echo "<p>1. FIBONACCI</p>";
    echo "<p>2. CUBO</p>";
    echo "<p>3. FRACCIONARIOS</p>";
    echo "<p>S. SALIR</p>";
    $op = readline("Ingrese una opción: ");

    if($op == 'S' || $op == 's'){
        break;
    }

    switch($op){
        case '1':
            echo "<p>Ingrese un número: </p>";
            $numero = readline();
            if($numero >= 1 && $numero <= 50){
                $fibonacci = fibonacci($numero);
                echo "<p>Los primeros $numero números de fibonacci son:</p>";
                foreach($fibonacci as $num){
                    echo "$num ";
                }
                echo "<br>";
            } else {
                echo "<p>Número inválido. Debe estar entre 1 y 50.</p>";
            }
            break;
        case '2':
            echo "<p>Ingrese un número: </p>";
            $numero = readline();
            echo "<p>El cubo de $numero es: " . cubo($numero) . "</p>";
            break;
        case '3':
            echo "<p>Ingrese 4 números fraccionarios: </p>";
            $a = readline();
            $b = readline();
            $c = readline();
            $d = readline();
            if(fraccionarios($a, $b, $c, $d)){
                echo "<p>Los números cumplen con la condición.</p>";
            } else {
                echo "<p>Los números no cumplen con la condición.</p>";
            }
            break;
        default:
            echo "<p>OPCIÓN INVÁLIDA</p>";
            break;
    }
}

?>

</body>
</html>
