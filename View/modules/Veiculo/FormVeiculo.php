<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/../../css/estilo_formVeiculo.css">

    <title>Cadastro de Veiculos</title>


</head>

<body>


    <?php include 'View/modules/Pagina_Inicial/home.php'  ?>

    <center>
        <h2 class="text">Cadastre seu veiculo aqui:</h2>
    </center>
    <form class="form-horizontal" action="/veiculo/save" method="post">

        <div class="container">
            <div class="container-fluid input-container">
                <h4>Marca:</h4>
                <select class="form-control" name="Marca">
                    <?php foreach ($model->Lista_Marca as $Marca) : ?>
                        <option value="<?= $Marca->id ?>" <?= ($Marca->id == $model->id_Marca) ? 'selected' : " " ?>>
                            <?= $Marca->nome ?>
                        </option>
                    <?php endforeach ?>
                </select>
            </div>

            <div class="container-fluid input-container">
                <h4>Modelo:</h4>
                <input name="Modelo" id="Modelo" type="text" class="form-control" placeholder="Digite o modelo do veiculo" value="<?= $model->Modelo ?>" required>
            </div>

            <div class="container-fluid input-container">
                <h4>Fabricante:</h4>
                <select class="form-control" name="Fabricante">
                    <?php foreach ($model->Lista_Fabricante as $Fabricante) : ?>
                        <option value="<?= $Fabricante->id ?>" <?= ($Fabricante->id == $model->id_Fabricante) ? 'selected' : " " ?>>
                            <?= $Fabricante->nome ?>
                        </option>
                    <?php endforeach ?>
                </select>
            </div>

            <div class="container-fluid input-container">
                <h4>Tipo:</h4>
                <select class="form-control" name="Tipo">
                    <?php foreach ($model->Lista_Tipo as $Tipo) : ?>
                        <option value="<?= $Tipo->id ?>" <?= ($Tipo->id == $model->id_Tipo) ? 'selected' : " " ?>>
                            <?= $Tipo->nome ?>
                        </option>
                    <?php endforeach ?>
                </select>
            </div>

            <div class="container-fluid input-container">
                <h4>Ano Fabricado:</h4>
                <input name="Ano" id="Ano" type="year" class="form-control" placeholder="1999" minlength="4" maxlength="4" <?= $model->Ano ?>" required>
            </div>

            <div class="container-fluid input-container">
                <h4>Combustivel:</h4>
                <select class="form-control" name="Combustivel">
                    <?php foreach ($model->Lista_Combustivel as $Combustivel) : ?>
                        <option value="<?= $Combustivel->id ?>" <?= ($Combustivel->id == $model->id_Combustivel) ? 'selected' : " " ?>>
                            <?= $Combustivel->nome ?>
                        </option>
                    <?php endforeach ?>
                </select>
            </div>

            <div class="container-fluid input-container">
                <h4>Cor:</h4>
                <input name="Cor" id="Cor" type="text" class="form-control" placeholder="Digite a cor do veiculo" value="<?= $model->Cor ?>">
            </div>
            <div class="container-fluid input-container">
                <div class="form-row numero_chassi">
                    <div class="form-group col-xs-12 col-md-5">
                        <h4>Numero de Chassi:</h4>
                        <input name="NumeroChassi" id="NumeroChassi" type="text" class="form-control" placeholder="Digite o chassi do veiculo" minlength="17" maxlength="17" value="<?= $model->NumeroChassi ?>" required>
                    </div>


                    <div class="form-group col-md-5 kilometragem">
                        <h4>KM:</h4>
                        <input name="Kilometragem" id="Kilometragem" type="number" class="form-control" placeholder="Digite o KM" step="0.1" value="<?= $model->Kilometragem ?>" required>
                    </div>
                </div>
            </div>


            <div class="container-fluid input-container">

                <div class="checkbox-inline">
                    <input name="Revisao" id="Revisao" type="checkbox" class="form-check-input" value="<?= $model->Revisao ?>">
                    <label class="form-check-label" for="inlineRadio1">Revisão</label>
                </div>

                <div class="checkbox-inline">
                    <input name="Sinistro" id="Sinistro" type="checkbox" class="form-check-input" value="<?= $model->Sinistro ?>">
                    <label class="form-check-label" for="check2">Sinistro</label>
                </div>

                <div class="checkbox-inline">
                    <input name="Roubo_Furto" id="Roubo_Furto" type="checkbox" class="form-check-input" value="<?= $model->Roubo_Furto ?>">
                    <label class="form-check-label" for="check3">Roubo/Furto</label>
                </div>

                <div class="checkbox-inline">
                    <input name="Aluguel" id="Aluguel" type="checkbox" class="form-check-input" value="<?= $model->Aluguel ?>">
                    <label class="form-check-label" for="check4">Aluguel</label>
                </div>

                <div class="checkbox-inline">
                    <input name="Venda" id="Venda" type="checkbox" class="form-check-input" value="<?= $model->Venda ?>">
                    <label class="form-check-label" for="check4">Venda</label>
                </div>

                <div class="checkbox-inline">
                    <input name="Particular" id="Particular" type="checkbox" class="form-check-input" <?= ($model->Particular == 1) ? 'checked' : '' ?> value="<?= $model->Particular ?>">
                    <label class="form-check-label" for="check4">Particular</label>
                </div>
            </div>

            <br>

            <div class="container-fluid input-container">
                <h4>Observações:</h4>
                <input name="Observacoes" id="Observacoes" type="text" class="form-control" value="<?= $model->Observacoes ?>">
            </div>

            <br>

          
                <div class="container-fluid input-container">
                    <div class="text-box">
                        <a href="#" class="btn_cad btn-white btn-animate" data-toggle="modal" data-target="#modalExemplo">Cadastrar</a>
                    </div>

                    <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    Certeza que deseja cadastrar?
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                    <button type="submit" class="btn btn-success">Salvar mudanças</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
         
        </div>

    </form>
</body>

</html>