<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../../css/home.css">

    <title>Lista Tipos</title>
</head>

<body>

    <?php include 'View/modules/Pagina_Inicial/home.php' ?>


    <table>
        <thead>
            <tr>
                <th></th>
                <th>id</th>
                <th>Tipo</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($model->rows as $item) : ?>
                <tr>
                    <td>
                        <a href="/tipo/delete?id=<?= $item->id ?>">X</a>
                    </td>

                    <td><?= $item->id ?></td>

                    <td>
                        <a href="/tipo/form?id=<?= $item->id ?>"><?= $item->nome ?></a>
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

</html>