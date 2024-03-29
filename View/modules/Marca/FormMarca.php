<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/../../css/estilo_formFabricante.css">
    <title>
        Cadastro de Combustivel
    </title>

</head>

<body>
    <?php include 'View/modules/Pagina_Inicial/home.php' ?>

    <form action="/marca/save" method="post">

        <center>
            <h1> Cadastro de Marca </h1>
        </center>
        <br><br>
        <div class="container">
            <div class="container-fluid input-container">
               <center><h3>Marca:</h3></center> 
                <input type="hidden" value="<?= $model->id ?>" name="id" />
                <input name="nome" id="nome" type="text" class="form-control" placeholder="Digite a Marca" value="<?= $model->nome ?>">
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