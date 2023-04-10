<?php

if (!empty($_GET['search'])) {
  $data = $_GET['search'];
  $sql = "SELECT * FROM Veiculo WHERE Combustivel or id LIKE '%$data%' or nome LIKE '%$data%' ORDER BY id DESC";
} else {
  $sql = "SELECT * FROM Veiculo ORDER BY id DESC";
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

    <link rel="stylesheet" href="/../../css/home.css">

    <title>Lista Combustivel</title>
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

    <table>
        <thead>
            <tr>
                <th></th>
                <th>id</th>
                <th>Combustivel</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($model->rows as $item) : ?>
                <tr>
                    <td>
                        <a href="/combustivel/delete?id=<?= $item->id ?>">X</a>
                    </td>

                    <td><?= $item->id ?></td>

                    <td>
                        <a href="/combustivel/form?id=<?= $item->id ?>"><?= $item->nome ?></a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>




        <?php if (count($model->rows) == 0) : ?>
            <tr>
                <td colspan="5">Nenhum registro encontrado.</td>
            </tr>
        <?php endif ?>

    </table>

</body>

<script>
  var search = document.getElementById('Pesquisar');

  search.addEventListener("keydown", function(event) {
    if (event === "Enter") {
      searchData();
    }
  });

  function searchData() {
    window.location = 'combustivel?search=' + search.value;
  }
</script>

</html>