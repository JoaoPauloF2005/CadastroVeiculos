<?php
include_once('config.php');

if (!empty($_GET['search'])) {
  $data = $_GET['search'];
  $sql = "SELECT * FROM Veiculo WHERE Marca LIKE '%$data%' or Modelo LIKE '%$data%' or Fabricante LIKE '%$data%' ORDER BY id DESC";

} else {
  $sql = "SELECT * FROM Veiculo ORDER BY id DESC";
}

$Veiculo = $sql;

?>

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

  <center>
    <div class="container">
      <div class="box-search">
        <input type="search" class="form-control w-25" placeholder="Pesquisar" id="Pesquisar">
        <button onclick="searchData()" class="btn btn-primary">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
          </svg>
        </button>
      </div>
    </div>
  </center>
  <br><br>

  <div class="container">
    <div class="table-responsive">

      <table class="table table-dark table-hover table-bordered">
        <thead>
          <tr>
            <th></th>
            <th>id</th>
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
            <?php foreach ($model->rows as $Veiculo) : ?>
              <td id="icon_delete"> <a href="/veiculo/delete?id=<?= $Veiculo->id ?>" id="<?= $Veiculo->id?>"> <i class='bx bx-trash'></i></a></td>
              <td id="icon_edit"> <a href="/veiculo/form?id=<?= $Veiculo->id ?>"><i class='bx bxs-edit'></i></a></td>
              <td> <?= $Veiculo->Marca ?> </td>
              <td> <?= $Veiculo->Modelo ?></td>
              <td> <?= $Veiculo->Fabricante ?></td>
              <td> <?= $Veiculo->Tipo ?></td>
              <td> <?= $Veiculo->Ano ?></td>
              <td> <?= $Veiculo->Combustivel ?></td>
              <td> <?= $Veiculo->Cor ?></td>
              <td> <?= $Veiculo->NumeroChassi ?></td>
              <td> <?= $Veiculo->Kilometragem ?></td>
          </tr>

        <?php endforeach ?>


        </tbody>
      </table>
    </div>
  </div>
</body>

<script>
  var search = document.getElementById('Pesquisar');

  search.addEventListener("keydown", function(event) {
    if (event === "Enter") {
      searchData();
    }
  });

  function searchData() {
    window.location = 'veiculo?search=' + search.value;
  }
</script>

</html>