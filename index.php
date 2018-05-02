<?php

$login =  (isset($_POST['login'])) ? $_POST['login'] : null;
$senha =  (isset($_POST['senha'])) ? $_POST['senha'] : null;

$dir = "assets/uploadstxt";
$arquivo = $dir . "usuarios.txt";
$ponteiro = fopen($arquivo, "r");

$logintxt;
$senhatxt;

while (!feof($ponteiro)){
  $linha = fgets($ponteiro, 4096);
  if (strpos($linha, 'LOGIN@') !== false) {
    $logintxt = $linha;
  }
  if(strpos($linha, 'SENHA@') !== false){
    $senhatxt = $linha;
  }
}
fclose($ponteiro);

if($login == $logintxt && $senha == $senhatxt){
  echo '<center>' . '<img src="assets/img/loading.gif" alt="loadgif">' . '</center>';
  header("location: perfil.php");
}else{
  echo "Login e Senha Incorretos!";
  header("location: index.php");
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
          <input type="text" class="form-control" id="login" placeholder="Entre com seu Login">
        </div>
        <div class="form-group">
          <label for="senha">Senha</label>
          <input type="password" class="form-control" id="senha" placeholder="Entre com sua senha">
        </div>

        <button type="submit" class="btn btn-primary">Entrar</button>
        <a href="cadastro.php" class="btn btn-danger">Cadastra-se</a>
      </form>
    </div>
    <div class="col-md-3"></div>
  </div>
</div>

<?php require_once "layouts/footer.php"; ?>
