<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Veículos</title>
    
</head>
<body>

    <form action="/veiculo/save" method="post">


    <div class="container">
        
        <h2>Cadastro de Veículos</h2>

        <input type="hidden" value="<?= $model->id ?>" name="id"> 

        <label for="Marca">Marca:</label>
        <select name="Marca">
            <?php foreach($model->Lista_Marca as $Marca):?>
                <option value="<?= $Marca['id']?>" <?= ($Marca['id'] == $model->id_Marca) ? 'selected' : " " ?> >
                    <?= $Marca['nome'] ?>
                </option>
            <?php endforeach ?>
        </select>

        <label for="modelo">Modelo:</label>
            <input name="modelo" id="modelo" type="text" class="form-control" value="<?= $model->Modelo ?>">

        <label for="Fabricante">Fabricante:</label>
        <select name="Fabricante">
            <?php foreach($model->Lista_Fabricante as $Fabricante):?>
                <option value="<?= $Fabricante['id']?>" <?= ($Fabricante['id'] == $model->id_Fabricante) ? 'selected' : " " ?> >
                    <?= $Fabricante['nome'] ?>
                </option>
            <?php endforeach ?>
        </select>

        <label for="Tipo">Tipo:</label>
            <select name="Tipo" class="form-select">
            <?php foreach($model->Lista_Tipo as $Tipo):?>
                    <option value="<?= $Tipo['id']?>" <?= ($Tipo['id'] == $model->id_Tipo) ? 'selected' : " " ?> >
                        <?= $Tipo['nome'] ?>
                    </option>
                <?php endforeach ?>
            </select>

            <label for="data">Ano Fabricado:</label>
            <input name="Ano" id="Ano" type="date" class="form-control" value="<?= $model->Ano ?>" >

            <label for="Combustivel">Combustível:</label>
            <select name="Combustivel" class="form-select">
            <?php foreach($model->lista_Combustivel as $Combustivel):?>
                    <option value="<?= $Combustivel['id']?>" <?= ($Combustivel['id'] == $model->id_Combustivel) ? 'selected' : " " ?> >
                        <?= $Combustivel['nome'] ?>
                    </option>
                <?php endforeach ?>
            </select>

        <label for="Cor">Cor:</label>
            <input name="Cor" id="Cor" type="text" class="form-control" value="<?= $model->Cor ?>" >

            <label for="NumeroChassi">Número Chassi:</label>
            <input name="NumeroChassi" id="NumeroChassi" type="text" class="form-control" value="<?= $model->NumeroChassi ?>" >

            <label for="Kilometragem">Kilometragem:</label>
            <input name="Kilometragem" id="Kilometragem" type="text" class="form-control" value="<?= $model->Kilometragem ?>" >

            <label for="Revisao">Revisão:</label>
            <input name="Revisao" id="Revisao" type="checkbox" class="form-check-input" value="<?= $model->Revisao ?>">

            <label for="sinistro">Sinistro:</label>
            <input name="sinistro" id="Sinistro" type="checkbox" class="form-check-input" value="<?= $model->Sinistro ?>" >

            <label for="roubo_furto">Roubo/Furto:</label>
            <input name="roubo_furto" id="Roubo_Furto" type="checkbox" class="form-check-input" value="<?= $model->Roubo_Furto ?>" >

            <label for="aluguel">Aluguel:</label>
            <input name="aluguel" id="Aluguel" type="checkbox" class="form-check-input" value="<?= $model->Aluguel ?>" >

            <label for="venda">Venda:</label>
            <input name="venda" id="venda" type="checkbox" class="form-check-input" value="<?= $model->Venda ?>" >

            <label for="particular">Particular:</label>
            <input name="particular" id="particular" type="checkbox" class="form-check-input" value="<?= $model->Particular ?>" >

            <label for="observacoes">Observações:</label>
            <input name="observacao" id="observacao" type="text" class="form-control" value="<?= $model->Observacoes ?>" >


        <button type="submit" class="btn btn-success">Cadastrar</button>
</body>
</html>