<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../../css/home.css">

    <title>Lista Fabricantes</title>
</head>
<body>

<?php include 'View/modules/Pagina_Inicial/home.php' ?>


    <table>
        <tr>
            <th></th>
            <th>id</th>
            <th>Fabricante</th>
           
        </tr>

        <?php foreach($model->rows as $item): ?>
        <tr>
            <td>
                <a href="/fabricante/delete?id=<?= $item->id ?>">X</a>
            </td>

            <td><?= $item->id ?></td>

            <td>
                <a href="/fabricante/form?id=<?= $item->id ?>"><?= $item->Fabricante ?></a>
            </td>



         </tr>
        <?php endforeach ?>

        
        <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="5">Nenhum registro encontrado.</td>
            </tr>
        <?php endif ?>

    </table>
    
</body>
</html>