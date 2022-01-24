<?php
session_start();

$usuario_autenticado = false;
$users = Array(
    Array("id"=>1, "usuario" => "marcus", "senha" => "123")
);
foreach($users as $user){
    if($user['usuario'] == $_POST['usuario'] && $user['senha'] == $_POST['senha'] ){
        $usuario_autenticado = true;
    }
}

if($usuario_autenticado){
    $_SESSION['autenticado'] = 'SIM';
   header("Location: CriaPizza.php?logado=logado");
}else{
    $_SESSION['autenticado'] = 'NAO';
    header("Location: login.php?login=erro");
}