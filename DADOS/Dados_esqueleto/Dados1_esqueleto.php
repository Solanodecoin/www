<?php
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
    Dos dados.
    if .. elseif ... else ... (1). Sin formularios.
    Pablo Solano Colorado
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h1>Dos dados</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>

<?php

$dados1 = rand(1,6);
$dados2 = rand(1,6);

print "\n";
print " <img src=\"img/$dados1.svg\" alt=\"$dados1\" width=\"140\" height=\"140\">";
print " <img src=\"img/$dados2.svg\" alt=\"$dados2\" width=\"140\" height=\"140\">";
print "\n <br>";


if ($dados1 == $dados2) {

  print " \n Los dados son iguales, $dados1" ;
}else{
  print "\n El mayor es: ". max($dados1, $dados2);
}

?>

  <footer>
    <p>Pablo Solano Colorado</p>
  </footer>
</body>
</html>
