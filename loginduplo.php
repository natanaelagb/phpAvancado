<?php
session_start();

$pdo = new PDO("mysql:dbname=dankicode;host=localhost", "root", "");

if(isset($_POST['login'])){
    $user = $_POST['user'];
    $token = uniqid();
    $_SESSION['user'] = $user;
    $_SESSION['token'] = $token;

    $sql = $pdo->prepare("delete from login where user = ?");
    $sql->execute(array($user));

    $sql = $pdo->prepare("insert into login values (?, ?)");
    $sql->execute(array($user, $token));
}

if(isset($_SESSION['user'])){
    $sql = $pdo->prepare("select user from login where user = ? and token = ?");
    $sql->execute(array($_SESSION['user'], $_SESSION['token']));

    if($sql->rowCount() == 1){
        echo "Seja bem vindo";
    }else{
        echo "Voce foi desconectado";
        session_destroy();
    }

}else{
    echo "
    <form method='POST'>
        <input type='text' name='user' placeholder='usuario'>
        <input type='submit' name='login' value='Enviar'>
    </form>";
}

?>