<?php

include ("funciones.php");

for ($i = 1; $i < 1000; $i++) {

    $num1 = $i;
    if(primo($num1)){
        echo "$num1\n";
    };


};

?>