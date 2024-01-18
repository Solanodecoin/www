<?php

    if(is_numeric($_GET['euros']) && is_numeric($_GET['euros'])){

        $num1 = $_GET['euros'];

    

        $resultado = $num1 * (1.09);

        echo "El resultado es: $resultado" ;

    } else {
        echo "Datos incorrectos";
    }

?>