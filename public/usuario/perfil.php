<?php require_once __DIR__ . '/../layouts/header.php';

session_start();

$u = new \models\Usuario();

if(!isset($_SESSION['login']) && !isset($_SESSION['senha'])){
    session_destroy();
    header("location: /");
}

if(isset($_GET['action']) && $_GET['action'] == "sair"){
    session_destroy();
    header("location: /");
}
   
if(isset($_GET['action']) && $_GET['action'] == "lista"){
    session_destroy();
    header("location: listausuarios.php");
}

$usu = $u->selectId($_SESSION['id']);

?>
    <div class="container">
        <form class="form-perfil mt-5 mb-5" action="../viagem/resumo.php" method="post">
            <div class="form-row">
                <div class="form-group col-2">
                    <label for="tipo">Tipo Usuário:</label>
                    <input type="text" class="form-control" disabled value="<?= ($usu->NIVEL_USER == 1) ? "ADMINISTRADOR" : "OPERACIONAL" ?>">
                </div>

                <div class="form-group col-2">
                    <label for="nome">Nome: </label>
                    <input type="text" id="nome" name="nome" class="form-control" value="<?= $usu->NM_USUARIO ?>">
                </div>

                <div class="form-group col-2">
                    <label for="fone">Fone: </label>
                    <input type="text" id="fone" name="fone" class="form-control" value="<?= $usu->TELEFONE ?>">
                </div>

                <div class="form-group col-2">
                    <label for="rg">RG: </label>
                    <input type="text" id="rg" name="rg" class="form-control" value="<?= $usu->RG ?>">
                </div>

                <div class="form-group col-2">
                    <label for="cpf">CPF: </label>
                    <input type="text" id="cpf" name="cpf" class="form-control" value="<?= $usu->CPF ?>">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-6">
                    <label for="login">Login: </label>
                    <input type="text" id="login" name="login" class="form-control" value="<?= $_SESSION['login'] ?>">
                </div>

                <div class="form-group col-6">
                    <label for="senha">Senha: </label>
                    <input type="password" id="senha" name="senha" class="form-control" value="<?= $_SESSION['senha'] ?>">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-12">
                    <a href="?action=sair" class="btn btn-primary btn-block">Sair</a></br>
                    
                    <a href="?action=lista" class="btn btn-danger btn-block">Lista de Usuarios</a>
                    
                </div>
            </div>
            <h2 class="mt-5">Opções de Viagens</h2>
            <hr>
            <br>

            <div class="form-row">
                <div class="form-group col-4">
                    <label for="destino">Destino:</label>
                    <select class="custom-select" name="estado">
                        <option value="timbauba">Timbaúba</option>
                        <option value="recife">Recife</option>
                        <option value="Fernando">Fernando de Noronha</option>
                    </select>
                </div>
                <div class="form-group col-4">
                    <label for="transporte">Transporte:</label>
                    <select class="custom-select" name="transporte">
                        <?php foreach ($transportes as $key => $value): ?>
                            <option value=<?php echo $value; ?>> <?php echo $value; ?> </option>
                        <?php endforeach; ?>
                    </select>

                </div>

                <div class="form-group col-4">
                    <label for="diarias">Diarias:</label>
                    <select class="custom-select" name="diarias">
                        <?php foreach ($diarias as $key => $value): ?>
                            <option value=<?php echo $value; ?>> <?php echo $value; ?> </option>
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
                        <input class="form-check-input position-static" type="radio" id="sim" name="translado"
                               value="1">
                        <label class="form-check-label position-static" for="sim">Sim</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input position-static" type="radio" id="nao" name="translado"
                               value="0">
                        <label class="form-check-label position-static" for="nao">Não</label>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-12">
                    <label for="passeio" class="mt-5">Passeio:</label><br>
                    <textarea class="form-control" name="passeio" id="passeio" rows="12" cols="80"
                              placeholder="Digite sobre seu passeio"></textarea>
                </div>
            </div>
            <input class="btn btn-primary mr-3" type="submit" value="Confirmar"> <a href="../viagem/sonho.php">Viagem do
                sonho!</a>
        </form>

    </div>

<?php require_once 'layouts/footer.php'; ?>
