<?php

include ("funciones.php");

$num1 = readline("Dame un numero: ");

if ( capicua ($num1)){
    echo "es capicua\n"; 
}else{
    echo "No es capicua\n";
}

if ( primo($num1)){
    echo "es primo\n"; 
}else{
    echo "No es primo\n";
}


?>