<!DOCTYPE html>
<html>
<head>
    <title>Validación de Datos</title>
</head>
<body>
    <h2>Introduce tus datos:</h2>
    <?php
    // Función para validar el nombre
    function validarNombre($nombre) {
        return preg_match('/^[a-zA-Z]+$/', $nombre);
    }

    // Función para validar el número de teléfono
    function validarTelefono($telefono) {
        return preg_match('/^[6-7]\d{8}$/', $telefono);
    }

    // Función para validar la dirección de correo electrónico
    function validarCorreo($correo) {
        return filter_var($correo, FILTER_VALIDATE_EMAIL);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];

        $nombreValido = validarNombre($nombre);
        $telefonoValido = validarTelefono($telefono);
        $correoValido = validarCorreo($correo);

        if ($nombreValido && $telefonoValido && $correoValido) {
            echo "<h2>Datos validados:</h2>";
            echo "<p>Nombre: $nombre</p>";
            echo "<p>Teléfono: $telefono</p>";
            echo "<p>Correo: $correo</p>";
        } else {
            echo "<h2>Algunos datos no son válidos. Inténtalo de nuevo:</h2>";
        }
    }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Nombre: <input type="text" name="nombre" required><br><br>
        Teléfono: <input type="text" name="telefono" required><br><br>
        Correo electrónico: <input type="email" name="correo" required><br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
