<?php

    if(is_numeric($_GET['num1']) && is_numeric($_GET['num1']) && is_numeric($_GET['num2']) && is_numeric($_GET['num2'])){

        $num1 = $_GET['euros'];

    

        $resultado = $num1 * (1.09);

        echo "El resultado es: $resultado" ;

    } else {
        echo "Datos incorrectos";
    }

?>