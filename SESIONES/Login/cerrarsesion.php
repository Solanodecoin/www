<?
session_destroy($_SESSION);
//aquí destruimos la sesión y  usamos la función header("Location: index.php"); para
//redirigir al usuario a la parte pública de la aplicación
header("Location: login.php");
?>