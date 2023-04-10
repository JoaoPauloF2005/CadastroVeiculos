<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/estilo_listaVeiculo.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">


  <title>Lista Veiculos</title>
</head>

<body>

  <?php include 'View/modules/Pagina_Inicial/home.php' ?>

  <center>
    <div class="container">
      <div class="box-search">
        <form action="/veiculo/buscar" method="GET">
          <input type="search" class="form-control w-25" placeholder="Pesquisar" id="Pesquisar" name="search">
          <button class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
            </svg>
          </button>
        </form>

      </div>
    </div>
  </center>
  <br><br>

  <div class="container">
    <div class="table-responsive">
      <div class="m-5">

        <table class="table text-white table-bg">
          <thead>
            <tr class="col-sm">
              <th scope="col">id</th>
              <th scope="col">Marca</th>
              <th scope="col">Modelo</th>
              <th scope="col">Fabricante</th>
              <th scope="col">Tipo</th>
              <th scope="col">Ano</th>
              <th scope="col">Combustivel</th>
              <th scope="col">Cor</th>
              <th scope="col">N° Chassi</th>
              <th scope="col">KM</th>
              <th scope="col"></th>

            </tr>

          <tbody>
            <tr>
              <?php foreach ($model->rows as $Veiculo) : ?>
                <td> <?= $Veiculo->id ?></td>
                <td> <?= $Veiculo->Marca ?> </td>
                <td> <?= $Veiculo->Modelo ?></td>
                <td> <?= $Veiculo->Fabricante ?></td>
                <td> <?= $Veiculo->Tipo ?></td>
                <td> <?= $Veiculo->Ano ?></td>
                <td> <?= $Veiculo->Combustivel ?></td>
                <td> <?= $Veiculo->Cor ?></td>
                <td> <?= $Veiculo->NumeroChassi ?></td>
                <td> <?= $Veiculo->Kilometragem ?></td>
                <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Ver detalhes
                  </button></td>
                <td><a class='btn btn-sm btn-primary' href="/veiculo/form?id=<?= $Veiculo->id ?>" title='Editar'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                      <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z' />
                    </svg>
                  </a>

                  <a class='btn btn-sm btn-danger' href="/veiculo/delete?id=<?= $Veiculo->id ?>" id="<?= $Veiculo->id ?>" title='Deletar'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                      <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z' />
                    </svg>
                  </a>
                </td>
            </tr>
          <?php endforeach ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>




  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLongTitle">Detalhes:</h2>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-row">
            <div class="form-container-aside">
              <div class="input-container">
                <label class="container" for="Revisao">Revisão: </label><br>
                <input type="checkbox" disabled class="form-check-input" name="Revisao" id="Revisao" <?= ($Veiculo->Revisao == 1) ? 'checked' : "" ?>>
              </div>

              <br>
              <div class="input-container">
                <label for="Sinistro">Sinistro: </label><br>
                <input type="checkbox" disabled class="form-check-input" name="Sinistro" id="Sinistro" <?= ($Veiculo->Sinistro == 1) ? 'checked' : "" ?>>
              </div>
            </div>

            <br>
            <div class="form-container-aside">
              <div class="input-container">
                <Label class="container" form="Roubo_Furto">Roubo/Furto:</Label></br>
                <input type="checkbox" disabled class="form-check-input" name="Roubo_Furto" id="Roubo_Furto" <?= ($Veiculo->Roubo_Furto == 1) ? 'checked' : "" ?>>
              </div>
              <br>
              <div class="input-container">
                <Label class="container" form="Aluguel">Aluguel:</Label></br>
                <input type="checkbox" disabled class="form-check-input" name="Aluguel" id="Aluguel" <?= ($Veiculo->Aluguel == 1) ? 'checked' : "" ?>>
              </div>
              <br>
              <div class="input-container">
                <Label class="container" form="Particular">Particular:</Label></br>
                <input type="checkbox" disabled class="form-check-input" name="Particular" id="Particular" <?= ($Veiculo->Particular == 1) ? 'checked' : "" ?>>
              </div>
            </div>
            <br>

            <center>
              <div class="container-fluid">
                <table class="table_obs">
                  <thead>
                    <th>Observação:</th>
                  </thead>
                  <tbody>
                    <td><?= $Veiculo->Observacoes ?></td>
                  </tbody>
                </table>
              </div>
            </center>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>

</body>


</html>