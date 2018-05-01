<?php require_once 'layouts/header.php';

$login = $_POST['login'];
$senha = $_POST['senha'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$fone = $_POST['fone'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];

?>

<div class="container">
    <form class="form-perfil mt-5 mb-5" action="sonhocadastro.php" method="post">
      <h2 class="mt-5">Viagem dos Sonhos</h2>
      <hr><br>

      <div class="form-row">
        <div class="form-group col-6">
          <label for="destino">Destino:</label>
          <select class="custom-select" name="estado">
            <?php foreach ($estado as $key => $value): ?>
              <option value=" <?= $key ?> "> <?= $value ?> </option>
            <?php endforeach; ?>
          </select>
        </div>

        <div class="form-group col-6">
          <label for="transporte">Transporte:</label>
          <select class="custom-select" name="transporte">
            <?php foreach ($transporte as $key => $value): ?>
              <option value="<?= $key ?>"><?= $value ?></option>
            <?php endforeach; ?>
          </select>
        </div>
      </div>

      <div class="form-row mt-5">
        <div class="form-check col-12">
          <label class="form-check-label position-static" for="hotel">Translado:</label>
          <div class="form-check">
            <input class="form-check-input position-static" type="radio" id="nao" name="translado" value="sim">
            <label class="form-check-label position-static" for="sim">Sim</label>
          </div>

          <div class="form-check">
            <input class="form-check-input position-static" type="radio" id="nao" name="translado" value="nao">
            <label class="form-check-label position-static" for="nao">Não</label>
          </div>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-12">
          <label for="passeio" class="mt-5">Passeio:</label><br>
          <textarea class="form-control" name="passeio" id="passeio" rows="12" cols="80" placeholder="Digite sobre seu passeio"></textarea>
        </div>
      </div>
      <input class="btn btn-primary mr-3" type="submit" value="Cadastrar">
    </form>
</div>


<?php require_once 'layouts/footer.php'; ?>
