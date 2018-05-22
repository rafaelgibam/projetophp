<?php

if($_POST == "acessar") {

    session_start();

    $usuario = new \models\Usuario();

    $usuario->setLogin((isset($_POST['login'])) ? $_POST['login'] : null);
    $usuario->setSenha((isset($_POST['senha'])) ? $_POST['senha'] : null);

    foreach ($usuario->select() as $u) {
        if ($usuario->getLogin() == $u->LOGIN || $usuario->getSenha() == $u->SENHA) {
            $_SESSION["login"] = $u->LOGIN;
            $_SESSION["senha"] = $u->SENHA;

            header("location: perfil.php");
        }
    }

    echo "ACESSO!";
}

