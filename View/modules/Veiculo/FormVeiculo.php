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
            <?php foreach($model->Lista_Marca as $marca):?>
                <option value="<?= $marca['id']?>" <?= ($marca['id'] == $model->id_Marca) ? 'selected' : " " ?> >
                    <?= $marca['nome'] ?>
                </option>
            <?php endforeach ?>
        </select>

        <label for="modelo">Modelo:</label>
            <input name="modelo" id="modelo" type="text" class="form-control" value="<?= $model->modelo ?>">

        <label for="Fabricante">Fabricante:</label>
        <select name="Fabricante">
            <?php foreach($model->Lista_Fabricante as $Fabricante):?>
                <option value="<?= $Fabricante['id']?>" <?= ($Fabricante['id'] == $model->id_Fabricante) ? 'selected' : " " ?> >
                    <?= $Fabricante['nome'] ?>
                </option>
            <?php endforeach ?>
        </select>

        <label for="Modelo">Modelo:</label>
        <imput name="Modelo" id="Modelo" type="text" value="<?= $model->Modelo ?>" >

        <label for="Ano ">Ano Fabricado:</label>
        <input name="Ano" id="Ano" type="date" value="<?= $model->Ano ?>" >
</body>
</html>