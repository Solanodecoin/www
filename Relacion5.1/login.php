<?php
session_start(); 



//aquí se comprueba si el usuario ha insertado un username y password
//utiliza la función hash('sha512',$password) para cifrar la contraseña
//si el username es test y la password cifrada coincide con el hash('sha512',"test")
//se trata de un usuario válido y debemos proceder a guardar el username en la sesión 
//y posteriormente usar la función header("Location: contenido.php"); para acceder
//a la parte privada de la aplicación
//Si el username y contraseña no coincide con test/test usaremos la función header
//header("Location: index.php"); para ir a la parte pública de la aplicación



if(isset($_POST['usuario']) && isset($_POST['password'])){

    $password = $_POST['password'];
    $usuario =  $_POST['usuario'];
    $conn = mysqli_connect("db", "root", "test", "banco");

    $statament = $conn -> stmt_init();
    $statament -> prepare('SELECT dni, nombre FROM cliente WHERE nombre = ? and dni = ?');
    $statament -> bind_param('ss', $usuario, $password  );
    $statament -> execute();
    $resultado = $statament -> get_result();

    if ($resultado->num_rows > 0){
      //  echo "Existe";
        $_SESSION['usuario'] = $usuario;
        header("Location: index.php");
        
    
    }else{
        echo "Usuario No valido";
    }

   # if($usuario == 'test' && $password == hash('sha512', 'test')){
   #         $_SESSION['usuario'] = $usuario;
   #         header("Location: contenido.php");
       
   # }else{
   #     echo 'Usuario Incorrecto';    
   #     header("Location: index.php");
   # }
    
#}else{
#    echo "Error";
}else{
    echo "Hay un ERROR";
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

    <input type="text" name="usuario" placeholder="usuario">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" value="Aceptar">
    </form>

    <p>¿No tienes cuenta?</p>
    <a href="registro.php">Registrate</a>
</body>
</html>
