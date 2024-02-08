<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
    <?php
    if (isset($_POST["nombre"]) && !empty($_POST["nombre"])) {
        echo "<h1>Hola " . $_POST["nombre"] . "</h1>";
    } else {
        echo "<p>No has introducido ningún nombre.</p>";
        echo "<a href='index.php'>Volver a la página 1</a>";
    }
    ?>
</body>
</html>