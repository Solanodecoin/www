<?php
session_start();
$errores = [];

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["nombre"])) {
        $nombre = $_GET["nombre"];
        if (!ctype_alpha($nombre)) {
            $errores[] = "El nombre debe contener solo letras.";
        }
    } else {
        $errores[] = "El campo Nombre es obligatorio.";
    }

    if (isset($_GET["telefono"])) {
        $telefono = $_GET["telefono"];
        if (!(substr($telefono, 0, 1) == '6' && strlen($telefono) == 9 && ctype_digit($telefono))) {
            $errores[] = "El teléfono debe comenzar con 6 y tener exactamente 9 dígitos.";
        }
    } else {
        $errores[] = "El campo Teléfono es obligatorio.";
    }

    if (isset($_GET["email"])) {
        $email = $_GET["email"];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errores[] = "El correo electrónico no es válido.";
        }
    } else {
        $errores[] = "El campo Correo electrónico es obligatorio.";
    }

    if (empty($errores)) {
        $_SESSION['nombre'] = $nombre;
        $_SESSION['telefono'] = $telefono;
        $_SESSION['email'] = $email;
        echo "<h2>Datos válidos</h2>";
        echo "<ul>";
        echo "<li>Nombre: ".$_SESSION['nombre']."</li>";
        echo "<li>Teléfono: ".$_SESSION['telefono']."</li>";
        echo "<li>Correo electrónico: ".$_SESSION['email']."</li>";
        echo "</ul>";
    } else {
        // Se muestran los errores
        echo "<h2>Se han encontrado errores</h2>";
        echo "<ul>";
        foreach ($errores as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="GET" name="login">
    Nombre:
    <input type="text" name="nombre" placeholder="Pon tu nombre"><br/>
    Telefono:
    <input type="text" name="telefono" placeholder="Pon tu telefono"><br/>
    Correo:
    <input type="text" name="email" placeholder="Pon tu correo"><br/> 
    <input type="submit" value="Aceptar">
    </form>
</body>
</html>