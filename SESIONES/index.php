<?php
    session_start();

    if (isset($_SESSION["visitas"])){
        $_SESSION['visitas']++;
        

    }else{
        $_SESSION['visitas'] = 1;
    }
echo $_SESSION['visitas'];

?>