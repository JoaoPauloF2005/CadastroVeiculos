<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>Cadastro de Veículos
    </title>


</head>

<body>


<?php include 'View/modules/Pagina_Inicial/home.php' ?>


    <div class="container">

        <form class="form-horizontal" action="/veiculo/save" method="post">
            <div class="form-group">
                <label class="control-label col-sm-2" for="Marca">Marca:</label>
                <div class="col-sm-10">
                    <select name="Marca">
                        <?php foreach($model->Lista_Marca as $Marca):?>
                        <option value="<?= $Marca['id']?>" <?= ($Marca['id'] == $model->id_Marca) ? 'selected' : " " ?>>
                            <?= $Marca['nome'] ?>
                        </option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="Modelo">Modelo:</label>
                <div class="col-sm-10">
                    <input name="Modelo" id="Modelo" type="text" class="form-control" value="<?= $model->Modelo ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="Fabricante">Fabricante:</label>
                <select name="Fabricante">
                    <?php foreach($model->Lista_Fabricante as $Fabricante):?>
                    <option value="<?= $Fabricante['id']?>"
                        <?= ($Fabricante['id'] == $model->id_Fabricante) ? 'selected' : " " ?>>
                        <?= $Fabricante['nome'] ?>
                    </option>
                    <?php endforeach ?>
                </select>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="Tipo">Tipo:</label>
                <div class="col-sm-10">
                    <select name="Tipo" class="form-select">
                        <?php foreach($model->Lista_Tipo as $Tipo):?>
                        <option value="<?= $Tipo['id']?>" <?= ($Tipo['id'] == $model->id_Tipo) ? 'selected' : " " ?>>
                            <?= $Tipo['nome'] ?>
                        </option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="Ano">Ano Fabricado:</label>
                <div class="col-sm-10">
                    <input name="Ano" id="Ano" type="year" class="form-control" value="<?= $model->Ano ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="Combustivel">Combustivel:</label>
                <div class="col-sm-10">
                    <select name="Combustivel" class="form-select">
                        <?php foreach($model->Lista_Combustivel as $Combustivel):?>
                        <option value="<?= $Combustivel['id']?>"
                            <?= ($Combustivel['id'] == $model->id_Combustivel) ? 'selected' : " " ?>>
                            <?= $Combustivel['nome'] ?>
                        </option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="Cor">Cor:</label>
                <div class="col-sm-10">
                    <input name="Cor" id="Cor" type="text" class="form-control" value="<?= $model->Cor ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="NumeroChassi">NumeroChassi:</label>
                <div class=" col-sm-10">
                    <input name="NumeroChassi" id="NumeroChassi" type="text" class="form-control"
                        value="<?= $model->NumeroChassi ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="Kilometragem">Kilometragem:</label>
                <div class=" col-sm-10">
                    <input name="Kilometragem" id="Kilometragem" type="number" class="form-control"
                        value="<?= $model->Kilometragem ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="Revisao">Revisão:</label>
                <div class=" col-sm-10">
                    <input name="Revisao" id="Revisao" type="checkbox" class="form-check-input"
                        value="<?= $model->Revisao ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="Sinistro">Sinistro:</label>
                <div class=" col-sm-10">
                    <input name="Sinistro" id="Sinistro" type="checkbox" class="form-check-input"
                        value="<?= $model->Sinistro ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="Roubo_Furto">Roubo/Furto:</label>
                <div class=" col-sm-10">
                    <input name="Roubo_Furto" id="Roubo_Furto" type="checkbox" class="form-check-input"
                        value="<?= $model->Roubo_Furto ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="Aluguel">Aluguel:</label>
                <div class=" col-sm-10">
                    <input name="Aluguel[]" id="Aluguel" type="checkbox" class="form-check-input"
                        value="<?= $model->Aluguel ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="Venda">Venda:</label>
                <div class=" col-sm-10">
                    <input name="Venda" id="Venda" type="checkbox" class="form-check-input"
                        value="<?= $model->Venda ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="Particular">Particular:</label>
                <div class=" col-sm-10">
                    <input name="Particular" id="Particular"  type="checkbox" class="form-check-input"
                            
                    <?= ($model->Particular == 1) ? 'checked' : '' ?>
                            
                        value="<?= $model->Particular ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="Observacoes">Observação:</label>
                <div class=" col-sm-10">
                    <input name="Observacoes" id="Observacoes" type="text" class="form-control"
                        value="<?= $model->Observacoes ?>">

                </div>
            </div>

            <button type="submit" class="btn btn-success">Cadastrar</button>

        </form>

    </div>

</html>