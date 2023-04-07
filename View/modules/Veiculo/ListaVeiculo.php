<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/estilo_listaVeiculo.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">


  <title>Lista Veiculos</title>
</head>

<body>

  <?php include 'View/modules/Pagina_Inicial/home.php' ?>
  <div class="container">
    <div class="table-responsive">

      <table class="table table-dark table-hover table-bordered">
        <thead>
          <tr>
            <th></th>
            <th></th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Fabricante</th>
            <th>Tipo</th>
            <th>Ano</th>
            <th>Combustivel</th>
            <th>Cor</th>
            <th>N° Chassi</th>
            <th>KM</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php foreach ($model->rows as $item) : ?>
              <td id="icon_delete"> <a href="/veiculo/delete?id=<?= $item->id ?>"><i class='bx bx-trash'></i></a></td>
              <td id="icon_edit"> <a href="/veiculo/form?id=<?= $item->id ?>"><i class='bx bxs-edit'></i></a></td>
              <td> <?= $item->Marca ?> </td>
              <td> <?= $item->Modelo ?></td>
              <td> <?= $item->Fabricante ?></td>
              <td> <?= $item->Tipo ?></td>
              <td> <?= $item->Ano ?></td>
              <td> <?= $item->Combustivel ?></td>
              <td> <?= $item->Cor ?></td>
              <td> <?= $item->NumeroChassi ?></td>
              <td> <?= $item->Kilometragem ?></td>
          </tr>

        <?php endforeach ?>


        </tbody>
      </table>
    </div>
  </div>
</body>

</html>