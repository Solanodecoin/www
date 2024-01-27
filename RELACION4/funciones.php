<?php


function capicua ($num1){

    $num = (string)$num1;
    $reversa = strrev($num);
    $reversa = (int)$reversa;
    if ($reversa ==  $num1){
        return true;
    };
};

function primo ($num1){
    $contador = 0;
    for ($i = 1; $i <= $num1; $i++){
        if ($num1 % $i == 0){
            $contador++;
        };
        };

    if ($contador == 2){
        return true;
    };

};



function generar_array($valor = []){


for ($i = 0; $i < 100 ; $i++ ){
    $valor [] = rand(100,0);
    echo $valor[$i]." ";

};

return $valor;

};
function minArray($array = []){

    echo "El numero Minimo del array es: " . min($array) . "\n";

};

function maxArray($array = []){

    echo "El numero Maximo del array es: " . max($array) . "\n";

};

function generar_array_tamaño($tamaño){


    for ($i = 0; $i < $tamaño ; $i++ ){
        $valor [] = rand(100,0);
        echo $valor[$i]." ";
    
    };
    
    return $valor;

};

?>