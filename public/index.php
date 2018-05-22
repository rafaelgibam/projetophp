
<?php require_once "layouts/header.php"; ?>

<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <form method="post" class="form-login" action="acesso.php">
        <div class="form-group">
          <label for="login">Login</label>
          <input type="text" class="form-control" id="login" name="login" placeholder="Entre com seu Login">
        </div>
        <div class="form-group">
          <label for="senha">Senha</label>
          <input type="password" class="form-control" id="senha" name="senha" placeholder="Entre com sua senha">
        </div>

        <input type="submit" name="acessar" class="btn btn-primary" value="Entrar">
        <a href="cadastro.php" class="btn btn-danger">Cadastra-se</a>
      </form>
    </div>
    <div class="col-md-3"></div>
  </div>
</div>


<?php require_once "layouts/footer.php"; ?>
