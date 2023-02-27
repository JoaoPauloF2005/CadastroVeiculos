<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>Formulário de Usuários</title>
</head>

<body>
<form action="/veiculo/save" method="post">



        <fieldset>
            <legend> Cadastro de Usuários </legend>

            <input type="hidden" value="<?= $model->Id ?>" name="Id" />

            <label for="Modelo"> Modelo: </label>
            <input type="text" name="Modelo" Id="Modelo" value="<?= $model->Modelo ?>" />

            <br> <br>

            

            <button type="submit"> Enviar: </button>
        </fieldset>
    </form>
</body>
</html>