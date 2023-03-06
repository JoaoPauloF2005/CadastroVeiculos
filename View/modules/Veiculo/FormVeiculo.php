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

        <input type="hidden" value="<?= $model->id ?>" name="Id"> 

        <label for="marca">Marca:</label>
        <select name="marca">
            <?php foreach($model->Lista_Marca as $Marca):?>
                <option value="<?= $Marca['id']?>" <?= ($Marca['id'] == $model->Id_Marca) ? 'selected' : " " ?> >
                    <?= $Marca['nome'] ?>
                </option>
            <?php endforeach ?>
        </select>

        <label for="Fabricante">Fabricante:</label>
        <select name="Fabricante">
            <?php foreach($model->Lista_Fabricante as $Fabricante):?>
                <option value="<?= $Fabricante['Id']?>" <?= ($Fabricante['Id'] == $model->Id_Fabricante) ? 'selected' : " " ?> >
                    <?= $Fabricante['nome'] ?>
                </option>
            <?php endforeach ?>
        </select>

        <label for="Modelo">Modelo:</label>
        <imput name="Modelo" Id="Modelo" type="text" value="<?= $model->Modelo ?>" >

        <label for="Ano ">Ano Fabricado:</label>
        <input name="Ano" Id="Ano" type="date" value="<?= $model->Ano ?>" >
</body>
</html>