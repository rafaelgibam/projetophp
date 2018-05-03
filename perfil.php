<?php require_once 'layouts/header.php';

$dirtxt = "assets/uploadstxt";
$dir = "uploads/";
$arquivo = $dirtxt . "/usuarios.txt";

$linha = file_get_contents($arquivo);

$user = explode(';', $linha);

if(isset($_POST['cadastrar']))
{
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$fone = $_POST['fone'];
	$rg = $_POST['rg'];
	$cpf = $_POST['cpf'];

}else if(isset($_POST['login']) || $login === $user[0] || $senha === $user[1]){
	$login = $user[0];
	$senha = $user[1];
	$nome = $user[2];
	$sobrenome = $user[3];
	$fone = $user[4];
	$rg = $user[5];
	$cpf = $user[6];
}else{
	echo "Login e Senha Incorretos!";
  header("location: index.php");
}

if(isset($_FILES['foto']) || isset($_POST['cadastrar']))
	{
		$ext = strtolower(substr($_FILES['foto']['name'], -4));
		$dir = 'uploads/';
		move_uploaded_file( $_FILES['foto']['tmp_name'], $dir . $_POST['nome'] . '001' . $ext );
	}

	$linhas = explode("@", file_get_contents('destino.txt'));

	$transportes = explode("@", file_get_contents('transporte.txt'));

	$diarias = explode("@", file_get_contents('diarias.txt'));
	
?>

<div class="container">
    <form class="form-perfil mt-5 mb-5" action="resumo.php" method="post">
      <div class="form-row">
        <div class="form-group col-2">
          <img src="<?php echo $dir . $nome . "001.jpg"; ?>" alt="" class="img-thumbnail">
        </div>

        <div class="form-group col-2">
          <label for="nome">Nome: </label>
          <input type="text" id="nome" name="nome" class="form-control" value="<?= $nome ?>">
        </div>

        <div class="form-group col-2">
          <label for="sobrenome">Sobrenome: </label>
          <input type="text" id="sobrenome" name="sobrenome" class="form-control" value="<?= $sobrenome ?>">
        </div>

        <div class="form-group col-2">
          <label for="fone">Fone: </label>
          <input type="text" id="fone" name="fone" class="form-control" value="<?= $fone ?>">
        </div>

        <div class="form-group col-2">
          <label for="rg">RG: </label>
          <input type="text" id="rg" name="rg" class="form-control" value="<?= $rg ?>">
        </div>

        <div class="form-group col-2">
          <label for="cpf">CPF: </label>
          <input type="text" id="cpf" name="cpf" class="form-control" value="<?= $cpf ?>">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-6">
          <label for="login">Login: </label>
          <input type="text" id="login" name="login" class="form-control" value="<?= $login ?>">
        </div>

        <div class="form-group col-6">
          <label for="senha">Senha: </label>
          <input type="text" id="senha" name="senha" class="form-control" value="<?= $senha ?>">
        </div>
      </div>
      <h2 class="mt-5">Opções de Viagens</h2>
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
      <input class="btn btn-primary mr-3" type="submit" value="Confirmar"> <a href="sonho.php">Viagem do sonho!</a>
    </form>
</div>


<?php require_once 'layouts/footer.php'; ?>
