<?php require_once __DIR__ . '/../layouts/header.php';

session_start();

$viagem = new \models\Viagem();

if(isset($_GET['d'])){
    $viagem->delete($_GET['d']);
}


?>

<div class="container">
    <div class="row form-cadastro">
        <div class="col-md-12">
            <?php include __DIR__ . "/../../errors.php"; ?>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Destino</th>
                    <th>Preço</th>
                    <th>Transporte</th>
                    <th>Nivel do hotel</th>
                    <th>Translado</th>
                    <th>Diaria</th>    
                    <th>Usuario</th>
                    <th>Hora</th>
                    <th>Data</th>
                    <th>Pagamento</th>
                    
                    
                    
                    <th>Ações</th>
                </tr>
                </thead>

                <?php foreach($viagem->select() as $key=>$value): ?>
                    <tbody>
                    <tr>
                        <td><?php echo $value->ID; ?></td>
                        <td><?php echo $value->DESTINO; ?></td>
                        <td><?php echo $value->PRECO; ?></td>
                        <td><?php echo $value->TRANSPORTE; ?></td>
                        <td><?php echo $value->NIVEL_HOTEL; ?></td>
                        <td><?php echo $value->TRANSLADO; ?></td>
                        <td><?php echo $value->DIARIA; ?></td>
                        <td><?php echo $value->USUARIO_VIAGEM; ?></td>
                        <td><?php echo $value->HORA; ?></td>
                        <td><?php echo $value->DATAVIAGEM; ?></td>
                        <td><?php echo $value->PAGAMENTO; ?></td>
                        
                        
                        <td>
                    
                            <a href="/viagem/via_editar.php?e=<?= $value->ID ?>">Editar </a>
                            <a href="?d=<?= $value->ID ?>">Deletar</a>
                    
                        </td>
                    </tr>
                    </tbody>
                <?php endforeach; ?>
            </table>
        </div>
        <div class="col-md-12">
            <a href="/usuario/perfil.php" class="btn btn-danger btn-block">Voltar</a>
        </div>
    </div>
</div>
</table>