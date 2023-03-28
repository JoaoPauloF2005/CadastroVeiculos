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

<?php include 'View/modules/Pagina_Inicial/home.php' ?>


    <table>
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
            <th>Numero de Chassi</th>
            <th>Kilometragem</th>
            <th>Revisao</th>
            <th>Sinistro</th>
            <th>Roubo/Furto</th>
            <th>Aluguel</th>
            <th>Venda</th>
            <th>Particular</th>
            <th>Observação</th>
        </tr>

        <?php foreach($model->rows as $item): ?>
        <tr>
            <td>
                <a href="/veiculo/delete?id=<?= $item->id ?>">X</a>
            </td>

            <td><?= $item->id ?></td>

            <td>
                <a href="/veiculo/form?id=<?= $item->id ?>"><?= $item->Marca ?></a>
            </td>

           
            <td><?= $item->Modelo ?> </td>
            <td><?= $item->Fabricante ?></td>
            <td><?= $item->Tipo ?></td>
            <td><?= $item->Ano ?></td>
            <td><?= $item->Combustivel ?></td>
            <td><?= $item->Cor ?></td>
            <td><?= $item->NumeroChassi ?></td>
            <td><?= $item->Kilometragem ?></td>
            <td><?= $item->Revisao ?></td>
            <td><?= $item->Sinistro ?></td>
            <td><?= $item->Roubo_Furto ?></td>
            <td><?= $item->Aluguel ?></td>
            <td><?= $item->Venda ?></td>
            <td><?= $item->Particular ?></td>
            <td><?= $item->Observacoes ?></td> 





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