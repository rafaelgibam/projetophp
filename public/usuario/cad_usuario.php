<?php require_once __DIR__ . '/../layouts/header.php';

$usuario = new \models\Usuario();
$usuario->setLogin(isset($_POST['login']) ? $_POST['login'] : null );
$usuario->setSenha(isset($_POST['senha']) ? md5($_POST['senha']) : null);
$usuario->setDatanasc(isset($_POST['nascimento']) ? $_POST['nascimento'] : null);
$usuario->setNome(isset($_POST['nome']) ? $_POST['nome'] : null );
$usuario->setTel(isset($_POST['tel'])) ? $_POST['tel'] : null;
$usuario->setLogradouro(isset($_POST['logradouro']) ? $_POST['logradouro'] : null);
$usuario->setCidade(isset($_POST['cidade']) ? $_POST['cidade'] : null);
$usuario->setUf(isset($_POST['uf']) ? $_POST['uf'] : null);
$usuario->setNumerocasa(isset($_POST['numerocasa']) ? $_POST['numerocasa'] : null);
$usuario->setRg(isset($_POST['rg']) ? $_POST['rg'] : null );
$usuario->setCpf(isset($_POST['cpf']) ? $_POST['cpf'] : null);
$usuario->setTipousuario(isset($_POST['tipo']) ? $_POST['tipo'] : null);

if(isset($_POST['cadastrar'])){
    $usuario->insert();
    unset($_POST['cadastrar']);
    header("location: /usuario/listausuarios.php?msg=salvo");
}

if($_SESSION['tipo'] == 1){
    header("location: /usuario/perfil.php");
}

?>

<div class="container">
    <form class="form-cadastro" method="post" enctype="multipart/form-data">
        <input type="number" name="tipo" value="0" hidden>

        <div class="form-row">
            <div class="form-group col-5">
                <label for="login">Login</label>
                <input type="text" id="login" name="login" class="form-control">
            </div>

            <div class="form-group col-4">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" class="form-control">
            </div>

            <div class="form-group col-3">
                <label for="nascimento">Nascimento</label>
                <input type="date" id="nascimento" name="nascimento" class="form-control">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-6">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" class="form-control">
            </div>
            <div class="form-group col-3">
                <label for="tel">Telefone</label>
                <input type="text" id="tel" name="tel" class="form-control">
            </div>
            <div class="form-group col-3">
                <label for="tipo">Tipo do Usuário</label>
                <select name="tipo" id="tipo" class="form-control">
                    <option value="0">Operacional</option>
                    <option value="1">Administrador</option>
                </select>
            </div>
        </div>

        <div class="form-row">

            <div class="form-group col-6">
                <label for="logradouro">Logradouro</label>
                <input type="text" id="logradouro" name="logradouro" class="form-control">
            </div>

            <div class="form-group col-2">
                <label for="cidade">Cidade</label>
                <input type="text" id="cidade" name="cidade" class="form-control">
            </div>

            <div class="form-group col-2">
                <label for="uf">UF</label>
                <input type="text" id="uf" name="uf" class="form-control">
            </div>

            <div class="form-group col-2">
                <label for="numerocasa">Número</label>
                <input type="text" id="numerocasa" name="numerocasa" class="form-control">
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

        </div>

        <div class="form-row">
            <input type="submit" name="cadastrar" value="Cadastrar" class="btn btn-primary mr-2">
            <a href="/usuario/listausuarios.php" class="btn btn-danger">Voltar</a>
        </div>
    </form>
</div>
<?php require_once __DIR__ . '/../layouts/footer.php'; ?>
