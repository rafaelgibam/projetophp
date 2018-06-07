<?php require_once __DIR__ . '/../layouts/header.php';

session_start();



$v = new \models\Viagem();


if ($destino == "Recife"){
	$img =	 "uploads/recife.jpg";
	}
  elseif ($destino == "Natal") {
	$img =	 "uploads/natal.jpg";
  }
  elseif ($destino == "Sirinhaem") {
	$img =	 "uploads/porto.jpg";
  }
  elseif ($destino == "Porto") {
    $img = "uploads/sirinha.jpg";
  }



?>

<div class="container">
  <div class="resumo-layout">
    <h1>Resumo da Viagem</h1>
    <hr><br>
    <p><img src="<?php echo $img; ?>" alt="" class="img-thumbnail"></p><br>
    <p>Destino: <?= $destino ?></p><br>
    <p>Transporte: <?= $transporte ?></p><br>
    <p>Hotel: <?= $hotel ?> Estrela(s)</p><br>
    <p>Diaria(s): <?= $diarias ?></p><br>
    <p>Translado: <?= $translado ?></p><br>
    <p>Total: <?= $total ?></p><br>
    <p>Passeio: <?= $passeio ?></p>
  </div>
  <a href="../usuario/perfil.php"></a>
</div>


<?php require_once __DIR__ . '/../layouts/footer.php'; ?>
