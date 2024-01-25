<?php

include ("funciones.php");
echo "Dame el tamaño del array: ";
$tamaño = readline ();
$array = generar_array_tamaño($tamaño);

maxArray($array);


?>


