<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/../../css/estilo_listaCombustivel.css">


    <link rel="stylesheet" href="/../../css/home.css">

    <title>Lista Fabricantes</title>
</head>

<body>

<?php include 'View/modules/Pagina_Inicial/home.php' ?>
<center>
    <div class="container-fluid">
      <div class="box-search">
        <form action="/fabricante/buscar" method="GET">
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

  <div class="container-fluid input-container">
    <div class="table-responsive">

        <table class="table table-striped">
          <thead> 
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Fabricante</th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
        

            </tr>
          </thead>
         
            <tr>
              <?php foreach ($model->rows as $Fabricante) : ?>
                <td> <?= $Fabricante->id ?></td>
                <td scope="col"><?= $Fabricante->nome?></td>
                <td scope="col"></td>
                
               
                <td scope="col"><a class='btn btn-sm btn-primary' href="/fabricante/form?id=<?= $Fabricante->id ?>" title='Editar'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                      <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z' />
                    </svg>
                  </a>
                </td>
                <td scope="col">
                  <a class='btn btn-sm btn-danger' href="/fabricante/delete?id=<?= $Fabricante->id ?>" id="<?= $Fabricante->id ?>" title='Deletar'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                      <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z' />
                    </svg>
                  </a>
                </td>
            </tr>
         
          <?php endforeach ?>
        </table>
      </div>
    </div>
  </div>
</body>
</html>