<?php require_once 'layouts/header.php';

$linhas = explode("@", file_get_contents('destino.txt'));

$transportes = explode("@", file_get_contents('transporte.txt'));

$diarias = explode("@", file_get_contents('diarias.txt'));

?>

<div class="container">
    <form class="form-perfil mt-5 mb-5" action="sonhocadastro.php" method="post">
      <h2 class="mt-5">Viagem dos Sonhos</h2>
      <hr><br>

      <div class="form-row">
        <div class="form-group col-4">
          <label for="destino">Destino:</label>
          <select class="custom-select" name="estado">

						<?php foreach ($linhas as $key => $value): ?>
							<option value= <?php echo $value; ?> ><?php echo $value; ?></option>
						<?php endforeach; ?>
					}
          </select>
        </div>
        <div class="form-group col-4">
          <label for="transporte">Transporte:</label>
          <select class="custom-select" name="transporte">
						<?php foreach ($transportes as $key => $value): ?>
							<option value=<?php echo $value; ?> > <?php echo $value; ?> </option>
						<?php endforeach; ?>
          </select>

        </div>

        <div class="form-group col-4">
          <label for="diarias">Diarias:</label>
          <select class="custom-select" name="diarias">
						<?php foreach ($diarias as $key => $value): ?>
							<option value=<?php echo $value; ?> > <?php echo $value; ?> </option>
						<?php endforeach; ?>
          </select>
        </div>

      </div>

      <div class="form-row mt-5">
        <div class="form-check col-6">
          <label class="form-check-label position-static" for="hotel">Hotel:</label>
          <div class="form-check">
            <input class="form-check-input position-static" type="radio" id="1" name="hotel" value="1">
            <label class="form-check-label position-static" for="1">★</label>
          </div>

          <div class="form-check">
            <input class="form-check-input position-static" type="radio" id="2" name="hotel" value="2">
            <label class="form-check-label position-static" for="2">★★</label>
          </div>

          <div class="form-check">
            <input class="form-check-input position-static" type="radio" id="3" name="hotel" value="3">
            <label class="form-check-label position-static" for="3">★★★</label>
          </div>

          <div class="form-check">
            <input class="form-check-input position-static" type="radio" id="4" name="hotel" value="4">
            <label class="form-check-label position-static" for="4">★★★★</label>
          </div>

          <div class="form-check">
            <input class="form-check-input position-static" type="radio" id="5" name="hotel" value="5">
            <label class="form-check-label position-static" for="5">★★★★★</label>
          </div>
        </div>

        <div class="form-check col-6">
          <label class="form-check-label position-static" for="hotel">Translado:</label>
          <div class="form-check">
            <input class="form-check-input position-static" type="radio" id="sim" name="translado" value="sim">
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
      <input class="btn btn-primary mr-3" type="submit" value="Confirmar"><a href="perfil.php" class="btn btn-danger">Voltar</a>
    </form>

</div>


<?php require_once 'layouts/footer.php'; ?>
