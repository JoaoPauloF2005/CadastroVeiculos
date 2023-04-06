<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/../../css/estilo_listaVeiculo.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <title>Lista Pessoas</title>
</head>

<body>

  <?php include 'View/modules/Pagina_Inicial/home.php' ?>

  <table>
    <tr>
      <th>Marca</th>
      <th>Modelo</th>
      <th>Fabricante</th>
      <th>Tipo</th>
      <th>Ano</th>
      <th>Combustivel</th>
      <th>Cor</th>
      <th>N° Chassi</th>
      <th>KM</th>
      <th></th>
    </tr>
    <tr>
      <?php foreach ($model->rows as $item) : ?>
        <td> <?= $item->Marca ?> </td>
        <td> <?= $item->Modelo ?></td>
        <td> <?= $item->Fabricante ?></td>
        <td> <?= $item->Tipo ?></td>
        <td> <?= $item->Ano ?></td>
        <td> <?= $item->Combustivel ?></td>
        <td> <?= $item->Cor ?></td>
        <td> <?= $item->NumeroChassi ?></td>
        <td> <?= $item->Kilometragem ?></td>
        <td> <a href="/veiculo/delete?id=<?= $item->id ?>"><i class='bx bx-trash'></i></a></td>
    </tr>

  <?php endforeach ?>

  <?php if (count($model->rows) == 0) : ?>
    <tr>
      <td colspan="5">Nenhum registro encontrado.</td>
    </tr>
  <?php endif ?>
  </table>

</body>

</html>