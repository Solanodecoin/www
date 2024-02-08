<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
    <?php
    if (isset($_POST["edad"]) && !empty($_POST["edad"])) {
        $edad = (int) $_POST["edad"];
        if ($edad >= 18 && $edad <= 130) {
            echo "<h1>Tu edad es " . $edad . " años</h1>";
        } else {
            echo "<p>La edad introducida no está entre 18 y 130 años.</p>";
            echo "<a href='index.php'>Volver a la página 1</a>";
        }
    } else {
        echo "<p>No has introducido ninguna edad.</p>";
        echo "<a href='index.php'>Volver a la página 1</a>";
    }
    ?>
</body>
</html>