<?php require_once 'layouts/header.php';

$destino = $_POST['destino'];
$transporte = $_POST['$transporte'];
$diarias  = $_POST['diarias'];

$translado = $_POST['translado'];
$translado =  (isset($_POST['translado'])) ? true : false;
$hotel = $_POST['hotel'];
$passeio = $_POST['passeio'];

?>

<div class="container">
  <div class="resumo-layout">
    <h1>Resumo da Viagem</h1>
    <hr><br>
    <p>Destino: <?= $destino ?></p><br>
    <p>Transporte: <?= $transporte ?></p><br>
    <p>Hotel: <?= $hotel ?> Estrela(s)</p><br>
    <p>Diaria(s): <?= $diarias ?></p><br>
    <p>Translado: <?= $translado ?></p><br>
    <p>Passeio: <?= $passeio ?></p>
  </div>
  <a href="perfil.php" class="btn btn-primary">Voltar</a>
</div>


<?php require_once 'layouts/footer.php'; ?>
