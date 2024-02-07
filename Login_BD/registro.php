<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <label for="usuario">Usuario </label>
        <input type="string" name="usuario" required>
        <label for="password">contraseña: </label>
        <input type="string" name="password" required>
        <label for="password2">contraseña: </label>
        <input type="string" name="password2" required>
        <button type="submit">Enviar</button>


        <?php

        if (isset($_POST["usuario"]) && $_POST["password"] && ($_POST["password2"])) {
            $user = $_POST["usuario"];
            $password = $_POST["password"];
            $password2 = $_POST["password2"];


            if ($password == $password2) {


                $conn = mysqli_connect("db", "root", "test", "usuarios");

                if ($conn->connect_error) {
                    die("" . mysqli_connect_error());
                }


            

            $statament = $conn->stmt_init();
            $statament->prepare('Select * from usuarios where usuario = ? limit 1');
            $statament->bind_param('s', $user);
            $statament->execute();
            $resultado = $statament->get_result();

            if ($resultado->num_rows > 0) {
                    echo "Hay problemas";

            } else {
                echo $user;
                echo $password;
                echo $password2;
                $insertStatament = $conn->prepare('INSERT INTO usuarios(usuario,password) values (?, ?)');
                $insertStatament->bind_param('ss', $user, $password);
                $insertStatament->execute();
                $insertStatament->close();
            }


        }
    }


        ?>




















</head>

<body>

    <p>En construccion</p>
    <a href="login.php">Inicia sesión</a>
</body>

</html>