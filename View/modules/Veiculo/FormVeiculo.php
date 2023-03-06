<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Veículos</title>
    <style>
        label, input { display: block;}
        body{
        font-family: Arial, Helvetica, sans-serif;
    }
    </style>
</head>
<body>

    <form action="/veiculo/save" method="post">


    <div class="container">
        
        <h2>Cadastro de Veículos</h2>

        <input type="hidden" value="<?= $model->id ?>" name="id"> 

        <label for="marca">Marca:</label>
        <select name="marca">
            <?php foreach($model->lista_marca as $marca):?>
                <option value="<?= $marca['id']?>" <?= ($marca['id'] == $model->id_Marca) ? 'selected' : " " ?> >
                    <?= $marca['nome'] ?>
                </option>
            <?php endforeach ?>
        </select>

        <label for="data">Ano Fabricado:</label>
        <input name="ano_fabricado" id="ano_fabricado" type="date" value="<?= $model->ano_fabricado ?>" >
</body>
</html>