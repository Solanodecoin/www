<?php
/**
 * Dados3.php
 *
 * @author Escriba aquí su nombre
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Dos dados más altos. Juego.
    if .. elseif ... else ... (1). Sin formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h1>Juego: Dos dados más altos</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>


<?php
$jugador1_dados1 = rand(1,6);
$jugador1_dados2 = rand(1,6);
$jugador2_dados1 = rand(1,6);
$jugador2_dados2 = rand(1,6);

print "\n";

print "Jugador 1: ". $jugador1_dados1+$jugador1_dados2 ."<br>" ;

print " <img src=\"img/$jugador1_dados1.svg\" alt=\"$jugador1_dados1\" width=\"140\" height=\"140\">";
print " <img src=\"img/$jugador1_dados2.svg\" alt=\"$jugador1_dados2\" width=\"140\" height=\"140\">";
print "<br>";
print "Jugador 2: ". $jugador2_dados1+$jugador2_dados2 ."<br>" ;

print " <img src=\"img/$jugador2_dados1.svg\" alt=\"$jugador2_dados1\" width=\"140\" height=\"140\">";
print " <img src=\"img/$jugador2_dados2.svg\" alt=\"$jugador2_dados2\" width=\"140\" height=\"140\">";


print "\n <br>";

if ($jugador1_dados1+$jugador1_dados2 > $jugador2_dados1+$jugador2_dados2 ){
  print "El mayor es: ". $jugador1_dados1+$jugador1_dados2 ;
}elseif($jugador1_dados1+$jugador1_dados2 < $jugador2_dados1+$jugador2_dados2){
  print "El mayor es: ". $jugador2_dados1+$jugador2_dados2 ;
}else{
  print "Los numeros son iguales";
}



?>


  <footer>
    <p>Pablo Solano Colorado</p>
  </footer>
</body>
</html>
