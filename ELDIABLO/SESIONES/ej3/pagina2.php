<?php
session_start();

// Inicializar variables si no existen
if (!isset($_SESSION["a"])) {
    $_SESSION["a"] = 0;
}
if (!isset($_SESSION["b"])) {
    $_SESSION["b"] = 0;
}

// Procesar acción
if (isset($_POST["accion"])) {
    switch ($_POST["accion"]) {
        case "aumentar_a":
            $_SESSION["a"]++;
            break;
        case "disminuir_a":
            $_SESSION["a"]--;
            break;
        case "aumentar_b":
            $_SESSION["b"]++;
            break;
        case "disminuir_b":
            $_SESSION["b"]--;
            break;
        case "borrar_sesion":
            session_destroy();
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestionar variables en sesión</title>
</head>
<body>
    <h1>Variables en sesión</h1>
    <p>Valor de a: <?php echo $_SESSION["a"]; ?></p>
    <p>Valor de b: <?php echo $_SESSION["b"]; ?></p>
    <form action="index.php" method="post">
        <select name="accion">
            <option value="aumentar_a">Incrementar a</option>
            <option value="disminuir_a">Disminuir a</option>
            <option value="aumentar_b">Incrementar b</option>
            <option value="disminuir_b">Disminuir b</option>
            <option value="borrar_sesion">Borrar sesión</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
