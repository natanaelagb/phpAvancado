<?php
    session_start();

    $_SESSION['nome'] = "Natan";
    $_SESSION['idade'] = 22;
    $_SESSION['sexo'] = "masculino";
    echo "<pre>";
    
    print_r($_SESSION);
    print_r($_SERVER);
    echo "</pre>";

?>