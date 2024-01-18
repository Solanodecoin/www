<?php


$num = 0;
$multiplicado = readline("Dame un numero: ") ;
while($num >= 0 && $num <= 100 ) {

    $res = $num * $multiplicado;
    echo  $multiplicado, " x " ,$num,  " = " ,$res ,"\n"  ;
    $num ++;


}

?>