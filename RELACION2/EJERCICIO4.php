<?php

$num = 0;
$num2 = 1;
$num3 = 0;

$num4 = readline("Dame un numero ");
echo $num, "\n";

while ($num4 >= 0) {

    
   $num3 = $num;
   $num = $num2;
   $num2 = $num + $num3;
   echo $num, "\n";

    $num4--;
}

?>