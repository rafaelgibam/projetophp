<?php require_once __DIR__ . '/../layouts/header.php';

    $viagem = new \models\Viagem();
    session_start();

      if(isset($_POST['editar'])){

        $viagem->setId((isset($_GET['e'])) ? $_GET['e'] : null);
        $viagem->setDestino(isset($_POST['estado']) ? $_POST['estado'] : null );
        $viagem->setTransporte(isset($_POST['transporte']) ? $_POST['transporte'] : null);
        $viagem->setNivelhotel(isset($_POST['hotel']) ? $_POST['hotel'] : null );
        $viagem->setTranslado(isset($_POST['translado']) ? $_POST['translado'] : null);
        $viagem->setDescricao(isset($_POST['passeio']) ? $_POST['passeio'] : null);
        $viagem->setDiarias(isset($_POST['diarias']) ? $_POST['diarias'] : null);
        $viagem->update();

        header("location: /viagem/listaviagem.php?msg=editado");

    }

    if(isset($_GET['e'])){

        $via = $viagem->selectId($_GET['e']);

    }


?>



    <div class="container">
        <form class="form-via_editar mt-5 mb-5"  method="post">
        <input type="number" name="tipo" value="1" hidden>
            <h2 class="mt-5">Editar de Viagens</h2>
            <hr>
            <br>

            <div class="form-row">
                <div class="form-group col-4">
                    <label for="destino">Destino:</label>
                   <select class="custom-select" name="estado" value="<?= $via->DESTINO ?>">
                        <option value="timbauba">Timbaúba</option>
                        <option value="recife">Recife</option>
                        <option value="Fernando">Fernando de Noronha</option>
                    </select>
                </div>
                <div class="form-group col-4">
                    <label for="transporte">Transporte:</label>
                    <select class="custom-select" name="transporte" value="<?= $via->TRANSPORTE?>" >
                        <option value="onibus">Ônibus</option>
                        <option value="aviao">Avião</option>
                        <option value="navio">Návio</option>
                    </select>

                </div>

                <div class="form-group col-4">
                    <label for="diarias">Diarias:</label>
                    <input type="number" class="form-control" name="diarias" id="diarias" value="<?= $via->DIARIA?>">
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
                               value="sim">
                        <label class="form-check-label position-static" for="sim">Sim</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input position-static" type="radio" id="nao" name="translado"
                               value="nao">
                        <label class="form-check-label position-static" for="nao">Não</label>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-12">
                    <label for="passeio" class="mt-5">Passeio:</label><br>
                    <textarea class="form-control" name="passeio" id="passeio" rows="12" cols="80"
                              placeholder="Digite sobre seu passeio" value="<?= $via->DESCRICAO_VIAGEM?>"></textarea>
                </div>
            </div>
            <input type="submit" value="Confirmar" name="editar" class="btn btn-primary mr-2">
        </form>

    </div>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>
