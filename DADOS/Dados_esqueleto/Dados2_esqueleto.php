<?php
/**
 * Dados2.php
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
    Dado más alto. Juego.
    if .. elseif ... else ... (1). Sin formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h1>Juego: Dado más alto</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>


<?php

$dados1 = rand(1,6);
$dados2 = rand(1,6);

print "\n";
print " <img src=\"img/$dados1.svg\" alt=\"$dados1\" width=\"140\" height=\"140\">";
print " <img src=\"img/$dados2.svg\" alt=\"$dados2\" width=\"140\" height=\"140\">";
print "\n <br>";

print "Jugador 1: ". $dados1. "<br>";

print "Jugador 2: ". $dados2. "<br>";

if ($dados1 == $dados2) {
  print " Son iguales";
}else {

    print "El mayor es: ". max($dados1, $dados2);

}



?>
  

  <footer>
    <p>Pablo Solano Colorado</p>
  </footer>
</body>
</html>
