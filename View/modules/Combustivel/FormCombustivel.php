<?php

if(isset($_POST['submit'])) {
    $Combustivel = $_POST['nome']; 
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Cadastro de Combustivel
    </title>

</head>

<body>
<?php include 'View/modules/Pagina_Inicial/home.php' ?>

    <form action="/combustivel/save" method="post">

        <h1> Cadastro de Combustivel </h1>


        <div class="container">
            <div class="container-fluid input-container">
                <input type="hidden" value="<?= $model->id ?>" name="id" />

                <h4 for="nome"> Combustivel: </h4>
                        <input name="nome" id="nome" value="<?= $model->nome ?>" type="text" />
                        <br>

                        <button type="submit"> Enviar </button>

            </div>


    </form>

</body>

</html>