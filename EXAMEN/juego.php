<?php
session_start();


if (isset($_SESSION["jugador1"]) && $_SESSION["jugador2"]){

    $jugador1 = $_SESSION["jugador1"];
    $jugador2 = $_SESSION["jugador2"];
    

    if ($jugador1 > $jugador2){
    print '<br>El Jugador 1 es el ganador<br>';

    } elseif ($jugador2 > $jugador1){

    print '<br>El jugador 2 es el ganador <br>';

    }else {
    print 'Estais empatados';
    }

 

}

?>


<a href="index.php">Volver a jugar</a>