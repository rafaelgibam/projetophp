<?php require_once __DIR__ . '/../layouts/header.php';

session_start();

$usuario = new \models\Usuario();

if(isset($_GET['d'])){
    $usuario->delete($_GET['d']);
}

?>

<div class="container">
    <div class="row form-cadastro">
        <div class="col-md-12">
            <?php include __DIR__ . "/../../errors.php"; ?>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Login</th>
                    <th>Ações</th>
                </tr>
                </thead>

                <?php foreach($usuario->select() as $key=>$value): ?>
                    <tbody>
                    <tr>
                        <td><?php echo $value->ID; ?></td>
                        <td><?php echo $value->NM_USUARIO; ?></td>
                        <td><?php echo $value->LOGIN; ?></td>
                        <td>
                            <a href="/usuario/usu_editar.php?e=<?= $value->ID ?>">Editar </a>
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