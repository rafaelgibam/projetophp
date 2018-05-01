<?php require_once 'layouts/header.php';

$login = $_POST['login'];
$senha = $_POST['senha'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$fone = $_POST['fone'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$destino = $_POST['destino'];
$transporte = $_POST['transporte'];
$hotel = $_POST['hotel'];
$diarias = $_POST['diarias'];
$total = $_POST['total'];
$passeio = $_POST['passeio'];

?>

<div class="container">
  <div class="resumo-layout">
    <h1>Resumo da Viagem</h1>
    <hr><br>
    <img class="mb-5" src="http://via.placeholder.com/150x150" alt="foto-perfil">
    <p>Destino: <?= $destino ?></p><br>
    <p>Transporte: <?= $transporte ?></p><br>
    <p>Hotel: <?= $hotel ?></p><br>
    <p><?= $diarias ?> Diaria(s)</p><br>
    <p>Translado: <?= $translado ?></p><br>
    <p>Total: <?= $total ?></p><br>
    <p>Passeio: <?= $passeio ?></p>
  </div>

</div>


<?php require_once 'layouts/footer.php'; ?>
