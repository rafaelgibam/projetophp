<?php

$login = (isset($_POST['login'])) ? $_POST['login'] : null;
$senha = (isset($_POST['senha'])) ? $_POST['senha'] : null;

$dir = "assets/uploadstxt";
$arquivo = $dir . "/usuarios.txt";

$linha = file_get_contents($arquivo);

$user = explode(';', $linha);

if($login === $user[0] || $senha === $user[1]){
  echo '<center>' . '<img src="assets/img/loading.gif" alt="loadgif">' . '</center>';
  header("location: perfil.php");
}else if(isset($login) && isset($senha)){
  echo "Login e Senha Incorretos!";
  print_r($user);
}

?>
<?php require_once "layouts/header.php"; ?>

<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <form method="post" class="form-login">
        <div class="form-group">
          <label for="login">Login</label>
          <input type="text" class="form-control" id="login" name="login" placeholder="Entre com seu Login">
        </div>
        <div class="form-group">
          <label for="senha">Senha</label>
          <input type="password" class="form-control" id="senha" name="senha" placeholder="Entre com sua senha">
        </div>

        <button type="submit" name="login" class="btn btn-primary">Entrar</button>
        <a href="cadastro.php" class="btn btn-danger">Cadastra-se</a>
      </form>
    </div>
    <div class="col-md-3"></div>
  </div>
</div>

<?php require_once "layouts/footer.php"; ?>
