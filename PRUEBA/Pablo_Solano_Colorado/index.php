<?php
session_start();
/**
 * Dados1.php
 *
 * @author Pablo Solano Colorado
 *
 */
?>



<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Juego de cartas
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h1></h1>

  

<?php
#Dos jugadores están jugando a las cartas, 
#gana el jugador que saque la carta más alta, 
#siendo la más baja el 1 o as y la más alta la 10. 
#Escriba un programa de dos páginas (usando variables de sesión) 
#que muestre una carta para cada jugador y se indique qué jugador es el ganador y permita repetir la jugada mediante un botón.

function tipo_carta( $tipo_carta ){

  $tipo_carta = rand(1,4);

  if( $tipo_carta == 1){
    return "c";
  }
  if( $tipo_carta == 2){
    return "d";
  }
  if( $tipo_carta == 3){
    return "p";
  }
  if( $tipo_carta == 4){
    return "t";
  }


}

$tipo = tipo_carta(1); 

$jugador1 = rand(1, 10);
$jugador2 = rand(1, 10);

$_SESSION['jugador1'] = $jugador1;
$_SESSION['jugador2'] = $jugador2;

print'Jugador 1: '. $jugador1;
print "<br> <img src=\"cartas/$tipo$jugador1.svg\" alt=\"c$jugador1.svg\" width=\"140\" height=\"140\">";
print'<br>Jugador 2: '. $jugador2;
print " <br><img src=\"cartas/$tipo$jugador2.svg\" alt=\"c$jugador1.svg\" width=\"140\" height=\"140\">";



?>



  <footer>
    <p>Pablo Solano Colorado</p>
  </footer>

  <a href="juego.php">Comprobar Ganador</a>

</body>
</html>
