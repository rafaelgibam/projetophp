<?php
session_start();

require_once __DIR__ . "/../autoload.php";

if(isset($_POST['acessar'])) {

    $usuario = new \models\Usuario();
    $login = "";
    $senha = "";
    foreach ($usuario->select() as $u) {

        if($_POST['login'] == $u->LOGIN  && md5($_POST['senha']) == $u->SENHA){
             $login = $u->LOGIN;
             $senha = $u->SENHA;
             $_SESSION["login"] = $u->LOGIN;
             $_SESSION["senha"] = $u->SENHA;
             $_SESSION["id"] = $u->ID;
             $_SESSION['tipo'] = $u->NIVEL_USER;

             header("location: /usuario/perfil.php");
        }
        
    }

    print_r($_SESSION);
    if($_POST['login'] != $login || md5($_POST['senha']) != $senha){
        header("location: /?msg=errologin");
    }

    //teste git Paulo advanced
}



