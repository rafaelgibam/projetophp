<?php require_once 'layouts/header.php';

$destino = $_POST['estado'];
$transporte = $_POST['transporte'];
$diarias  = $_POST['diarias'];

$translado = $_POST['translado'];
$translado =  (isset($_POST['translado'])) ? true : false;
$hotel = $_POST['hotel'];
$total = (isset($_POST['total'])) ? $_POST['total'] : null;
$passeio = $_POST['passeio'];

if($destino === "Recife"){
    if($transporte==="Avião" && $diarias==="tres"){
        $total = "R$3.000,00";
    }
    elseif ($transporte==="Navio" && $diarias==="tres") {
      $total = "R$4.000,00";
    }
    elseif ($transporte==="Ônibus" && $diarias==="tres") {
      $total = "R$1.500,00";
    }

}
elseif ($destino === "Natal") {
  if($transporte==="Avião" && $diarias==="tres"){
      $total = "R$2.000,00";
  }
  elseif ($transporte==="Navio" && $diarias==="tres") {
    $total = "R$6.000,00";
  }
  elseif ($transporte==="Ônibus" && $diarias==="tres") {
    $total = "R$3.500,00";
  }
}
elseif ($destino === "Porto de Galinhas") {
  if($transporte==="Avião" && $diarias==="tres"){
      $total = "R$3.000,00";
  }
  elseif ($transporte==="Navio" && $diarias==="tres") {
    $total = "R$7.000,00";
  }
  elseif ($transporte==="Ônibus" && $diarias==="tres") {
    $total = "R$1.000,00";
  }
}
elseif ($destino === "João Pessoa") {
  if($transporte==="Avião" && $diarias==="tres"){
      $total = "R$4.000,00";
  }
  elseif ($transporte==="Navio" && $diarias==="tres") {
    $total = "R$5.500,00";
  }
  elseif ($transporte==="Ônibus" && $diarias==="tres") {
    $total = "R$1.700,00";
  }
}

if ($destino == 0){
	$img =	 "uploads/recife.jpg";
	}
  elseif ($destino == 1) {
	$img =	 "uploads/natal.jpg";
  }
  elseif ($destino == 2) {
	$img =	 "uploads/porto.jpg";
  }
  elseif ($destino ==3) {
    $img = "uploads/sirinha.jpg";
  }

print_r($_POST);

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

</div>


<?php require_once 'layouts/footer.php'; ?>
