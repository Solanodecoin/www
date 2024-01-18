<?php
if (isset($_GET["nombre"])) {
    echo "Hola, has escrito " . $_GET["nombre"]; 
} else {
    echo "no has escrito nada";
}
?>