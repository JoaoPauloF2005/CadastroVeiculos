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
         
            <th>Marca</th>
            <th>Modelo</th>
            <th>Fabricante</th>
            <th>Tipo</th>
            <th>Ano</th>
            <th>Combustivel</th>
            <th>Cor</th>
            <th>Numero de Chassi</th>
            <th>Kilometragem</th>
            <th>Reviso</th>
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
                <a href="/veiculo/delete?id=<?= $item->id ?>">Excluir</a>
            </td>

            

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

            <td>
                <?php if($item->Revisao == '1')
                {
                    echo 'Sim';
                }
                else if($item->Revisao == '0')
                    echo 'Não' ?>
            </td>
            <td>
                <?php if($item->Sinistro == '1')
                {
                    echo 'Sim';
                }
                else if($item->Sinistro == '0')
                    echo 'Não' ?>
            </td>

            <td>
                <?php if($item->Roubo_Furto == '1')
                {
                    echo 'Sim';
                }
                else if($item->Roubo_Furto == '0')
                    echo 'Não' ?>
            </td>
            
            <td>
                <?php if($item->Aluguel == '1')
                {
                    echo 'Sim';
                }
                else if($item->Aluguel == '0')
                    echo 'Não' ?>
            </td>
            <td>
                <?php if($item->Venda == '1')
                {
                    echo 'Sim';
                }
                else if($item->Venda == '0')
                    echo 'Não' ?>
            </td>
            <td>
            <?php if($item->Particular == '1')
                {
                    echo 'Sim';
                }
                else if($item->Particular == '0')
                    echo 'Não' ?>
            </td>
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