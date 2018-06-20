<?php require_once __DIR__ . '/../layouts/header.php';

session_start();

if(!isset($_SESSION['login']) && !isset($_SESSION['senha'])){
    session_destroy();
    header("location: /");
}

if(isset($_GET['action']) && $_GET['action'] == "sair"){
    session_destroy();
    header("location: /login.php");
}


    $viagem = new \models\Viagem();
    if(isset($_POST['cadastrar_viagem'])){

      $viagem->setDestino(isset($_POST['estado']) ? $_POST['estado'] : null);
      $viagem->setTransporte(isset($_POST['transporte']) ? $_POST['transporte'] : null );
      $viagem->setNivelhotel(isset($_POST['hotel']) ? $_POST['hotel'] : null);
      $viagem->setTranslado(isset($_POST['translado']) ? $_POST['translado'] : null);
      $viagem->setDescricao(isset($_POST['passeio']) ? $_POST['passeio'] : null);
      $viagem->setDiarias(isset($_POST['diarias']) ? $_POST['diarias'] : null);
      $viagem->setData(isset($_POST['data']) ? $_POST['data'] : null);
      $viagem->setHora(isset($_POST['hora']) ? $_POST['hora'] : null);
      $viagem->setUsuarioviagem(isset($_POST['usu_cad']) ? $_POST['usu_cad'] : null);
      $viagem->setPagamento(isset($_POST['pagamento']) ? $_POST['pagamento'] : null);
        $viagem->insert();
        unset($_POST['cadastrar_viagem']);
     header("location: /viagem/listaviagem.php?msg=salvo");

    }

$u = new \models\Usuario();

$usu = $u->selectId($_SESSION['id']);

?>
    <div class="container">
        <form class="form-perfil mt-5 mb-5" method="post">
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
                    <a href="?action=sair" class="btn btn-danger btn-block">Sair</a></br>
                    <?php if($_SESSION['tipo'] == 1): ?>
                        <a href="/usuario/listausuarios.php" class="btn btn-primary btn-block">Lista de Usuarios</a>
                        <a href="/viagem/listaviagem.php" class="btn btn-primary btn-block">Lista de Viagens</a>
                    <?php else: ?>
                        <a href="/viagem/listaviagem.php" class="btn btn-primary btn-block">Lista de Viagens</a>
                    <?php endif; ?>
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
                        <option value="onibus">Ônibus</option>
                        <option value="aviao">Avião</option>
                        <option value="navio">Návio</option>
                    </select>

                </div>

                <div class="form-group col-4">
                    <label for="diarias">Diarias:</label>
                    <input type="number" class="form-control" name="diarias" id="diarias">
                </div>

                <div class="form-group col-4">
                   <label for="tipopagamento">Tipo do pagamento:</label>
                    <select class="custom-select" name="pagamento" id="pagamento">
                        <option value="Boleto">Boleto</option>
                        <option value="Cartão">Cartão</option>
                    </select>
                </div>

                <div class="form-group col-4">
                    <label for="data">Data da viagem: </label>
                    <input type="date" id="data" name="data" class="form-control">
                </div>

                <div class="form-group col-4">
                    <label for="hora">Hora da viagem: </label>
                    <input type="time" id="hora" name="hora" class="form-control">
                </div>
                <div class="form-group col-4">
                <label for="hora">Cliente da compra: </label>
                <input type="text" name="usu_cad" id="usu_cad" class="form-control" value="<?= $usu->NM_USUARIO ?>">
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
            <input class="btn btn-primary mr-3" type="submit" name="cadastrar_viagem" value="Comprar">
            <a href="../viagem/sonho.php">Viagem do sonho!</a>
        </form>

    </div>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>
