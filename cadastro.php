<?php require_once 'layouts/header.php'; ?>
<div class="container">
    <form class="form-cadastro" action="perfil.php" method="post">
        <div class="form-row">
          <div class="form-group col-6">
            <label for="login">Login</label>
            <input type="text" id="login" name="login" class="form-control">
          </div>

          <div class="form-group col-6">
            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" class="form-control">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-2">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" class="form-control">
          </div>

          <div class="form-group col-2">
            <label for="sobrenome">Sobrenome</label>
            <input type="text" id="sobrenome" name="sobrenome" class="form-control">
          </div>
          <div class="form-group col-2">
            <label for="fone">Fone</label>
            <input type="text" id="fone" name="fone" class="form-control">
          </div>

          <div class="form-group col-6">
            <label for="endereco">Endereço</label>
            <input type="text" id="endereco" name="endereco" class="form-control">
          </div>

        </div>

        <div class="form-row">
          <div class="form-group col-3">
            <label for="rg">RG</label>
            <input type="text" id="rg" name="rg" class="form-control">
          </div>

          <div class="form-group col-3">
            <label for="cpf">CPF</label>
            <input type="text" id="cpf" name="cpf" class="form-control">
          </div>

          <div class="form-group col-6">
            <label for="foto">Sua Foto</label>
            <input type="file" id="foto" name="foto" class="form-control">
          </div>
        </div>

        <div class="form-row">
          <input type="submit" value="Cadastrar" class="btn btn-primary mr-2">
          <a href="index.php" class="btn btn-danger">Voltar</a>
        </div>
    </form>
</div>
<?php require_once 'layouts/footer.php'; ?>
