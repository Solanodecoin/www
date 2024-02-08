<?
//aquí tendremos que iniciar sesión y comprobar que hay un username almacenado en la sesión
//si lo hay podemos mostrar el contenido privado
//en caso contracio usaremos la función header("Location: login.php"); para redirigir al usuario
//al login
session_start();
if (isset($_SESSION['usuario'])){
    echo "el usuario es " . $_SESSION['usuario'];
}else{
    header("Location: login.php"); 
}

?>
<a href="cerrarsesion.php">Cerrar Sesion</a>