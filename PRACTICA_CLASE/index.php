<?php 
/*
Práctica Formularios y sesiones.
Escriba un programa que valide (en PHP) un nombre, un número de teléfono y una
dirección de correo y que conste de una única página.
    ● La página solicita los datos y los valida:
     El nombre sólo tenga letras.
    ○ El número sean 9 números y comience por 6 o 7.
    ○ La dirección de correo sea una dirección de correo válida.
    ● Si los datos no son válidos, se solicitan de nuevo indicando los datos no válidos.
    ● Si los datos son válidos, los datos se muestran.
Las validaciones se harán en PHP, no se tendrán en cuenta aquellas validaciones hechas
en HTML.
*/
if(isset($_POST["nombre"]) && $_POST["numero"] && $_POST["correo"] ){
    $nombre = $_POST["nombre"];
    $numero = $_POST["numero"];
    $correo = $_POST["correo"];


    if (ctype_alpha($nombre) ){
        echo "El nombre es Valido";
        $nombre_validar = true;
    }else{
        echo "El nombre no es Valido";
    }
    if(  str_contains($correo,'@gmail.com') ){
        echo "<br> El correo es valido";

        $correo_validar = true;
    }
    else{
        echo "<br> El correo no es valido";
        

    }if(is_numeric($numero) && strlen(strval($numero)) == 9 ){
        $numero_validar = true;
        echo "<br> Numero valido";
    }else{
        echo "<br> El numero no es valido";
    }

    if( $numero_validar == true && $correo_validar == true && $nombre_validar == true){
        if($nombre == "pablo" && $numero == 665204869 && $correo == "solanocoin2004@gmail.com"){

        
            echo "<br>Los datos del usuario son correctos";
        }else{
            echo "<br>Los datos del usuario son validos, pero no se encuentran en la base de datos";
        }



    }

}






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>

</head>
<body>
    <form action="<? echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" name="login">

    <input type="text" name="nombre" placeholder="nombre">
    <input type="text" name="numero" placeholder="numero">
    <input type="text" name="correo" placeholder="correo">
    <input type="submit" value="Aceptar">
    </form>

   <p>

   </p>
    
</body>
</html>

