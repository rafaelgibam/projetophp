<?php
if(isset($_GET['msg']) && $_GET['msg'] != null){
    switch ($_GET['msg']){
        case "salvo":
            echo '<div class="alert alert-success">Cadastrado com Sucesso!</div>';
            break;
        case "editado":
            echo '<div class="alert alert-primary">Seus dados foram editados com sucesso!</div>';
            break;
        case "errologin":
            echo '<div class="alert alert-danger">Login ou senha invalidos!</div>';
            break;

    }
}
