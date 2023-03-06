<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Fabricantes</title>
    <style>
        label, input { display: block;}
    </style>
</head>
<body>

    <form action="/combustivel/save" method="post">

        <h1> Cadastro de Combustivel </h1>

        <div class="box">
            <div class="container">
                <fieldset>

                    <input type="hidden" value="<?= $model->Id ?>" name="Id" />

                    <label for="nome">Combustivel:</label>
                    <input name="nome" Id="nome" value="<?= $model->nome ?>" type="text" /> <br>
                    
                    <button type="submit">Enviar</button>

                </fieldset>
            </div>
        </div>

    </form>
    
</body>
</html>