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


$jugador1 = rand(1, 10);
$jugador2 = rand(1, 10);

$_SESSION['jugador1'] = $jugador1;
$_SESSION['jugador2'] = $jugador2;



$tipo_carta_j1 = rand(1,4);
$tipo_carta_j2 = rand(1,4);


#echo $jugador1;
#print '<br>';
#echo $jugador2;

if ($tipo_carta_j1 == 1){
  
  print'Jugador1: '. $jugador1;
  print "<br> <img src=\"cartas/c$jugador1.svg\" alt=\"c$jugador1.svg\" width=\"140\" height=\"140\">";

}elseif ($tipo_carta_j1 == 2){
  
  print'Jugador1: '. $jugador1;
  print "<br> <img src=\"cartas/d$jugador1.svg\" alt=\"c$jugador1.svg\" width=\"140\" height=\"140\">";

}elseif ($tipo_carta_j1 == 3){

  print'Jugador1: '. $jugador1;
  print "<br> <img src=\"cartas/p$jugador1.svg\" alt=\"c$jugador1.svg\" width=\"140\" height=\"140\">";

}elseif ($tipo_carta_j1 == 4){
  print'Jugador1: '. $jugador1;
  print "<br> <img src=\"cartas/t$jugador1.svg\" alt=\"c$jugador1.svg\" width=\"140\" height=\"140\">";

}



if ($tipo_carta_j2 == 1){
  
  print'<br>Jugador2: ' . $jugador2;
  print " <br><img src=\"cartas/c$jugador2.svg\" alt=\"c$jugador1.svg\" width=\"140\" height=\"140\">";

}elseif ($tipo_carta_j2 == 2){
  print'<br>Jugador2: '. $jugador2;
  print " <br><img src=\"cartas/d$jugador2.svg\" alt=\"c$jugador1.svg\" width=\"140\" height=\"140\">";

}elseif ($tipo_carta_j2 == 3){
  print'<br>Jugador2: '. $jugador2;
  print " <br><img src=\"cartas/p$jugador2.svg\" alt=\"c$jugador1.svg\" width=\"140\" height=\"140\">";

}elseif ($tipo_carta_j2 == 4){
  print'<br>Jugador2: '. $jugador2;
  print " <br><img src=\"cartas/t$jugador2.svg\" alt=\"c$jugador1.svg\" width=\"140\" height=\"140\">";

}

?>



  <footer>
    <p>Pablo Solano Colorado</p>
  </footer>

  <a href="juego.php">Comprobar Ganador</a>

</body>
</html>
