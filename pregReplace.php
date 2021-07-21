<?php
    $conteudo = "natan.ab99@gmail.com";
    $replace = preg_replace("/(.*?)@(.*?)$/", "$1@outlook.com", $conteudo);
    echo $replace;
?>