<?php
$a = 20;
while( $a > 10 ){

$numero = rand(0,100);
$cuadrado = pow(2, $numero);
$cubo = pow(3, $numero);
$array = array(
    "numero" => $numero,
    "cuadrado" => $cuadrado,
    "cubo" => $cubo,
);
$a--;
array_push($array, $numero, $cuadrado, $cubo);
};





print_r($array);

?>