<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../../css/home.css">

    <title>Lista Pessoas</title>
</head>
<body>



    <table>
        <tr>
            <th></th>
            <th>Id</th>
            <th>Modelo</th>
           
        </tr>

        <?php foreach($model->rows as $item): ?>
        <tr>
            <td>
                <a href="/veiculo/delete?id=<?= $item->Id ?>">X</a>
            </td>

            <td><?= $item->Id ?></td>

            <td>
                <a href="/veiculo/form?id=<?= $item->Id ?>"><?= $item->Veiculo ?></a>
            </td>

            <td><?= $item->Modelo ?></td>
            

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