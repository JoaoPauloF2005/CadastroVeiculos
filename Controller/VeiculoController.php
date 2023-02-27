<?php

namespace veiculo\Controller;

use veiculo\Model\VeiculoModel;

class VeiculoController extends Controller
{
    public static function index()
    {
        include 'Model/VeiculoModel.php';

        $model = new VeiculoModel();
        $model->getAllRows();
        include 'View/modules/Veiculo/ListaVeiculo.php';
    }

    public static function form()
    {
        include 'Model/VeiculoModel.php';
        $model = new VeiculoModel();

        if(isset($_GET['Id']))
        $model = $model->getById( (int) $_GET['Id']);
        include 'View/modules/Veiculo/FormVeiculo.php';
    }

    public static function save()
    {
        include 'Model/VeiculoModel.php';
        $veiculo = new VeiculoModel();
        $veiculo->Id = $_POST['Id'];
        $veiculo->Id_Marca = $_POST['Id_Marca'];
        $veiculo->Modelo = $_POST['Modelo'];
        $veiculo->Id_Fabricante = $_POST['Id_Fabricante'];
        $veiculo->Id_Tipo = $_POST['Id_Tipo'];
        $veiculo->Ano = $_POST['Ano'];
        $veiculo->Id_Combustivel = $_POST['Id_Combustivel'];
        $veiculo->Cor = $_POST['Cor'];
        $veiculo->NumeroChassi = $_POST ['NumeroChassi'];
        $veiculo->Kilometragem = $_POST ['Kilometragem'];
        $veiculo->Revisao = $_POST ['Revisao'];
        $veiculo->Sinistro = $_POST ['Sinistro'];
        $veiculo->Roubo_Furto = $_POST ['Roubo_Furto'];
        $veiculo->Aluguel = $_POST ['Aluguel'];
        $veiculo->Venda = $_POST ['Venda'];
        $veiculo->Particular = $_POST ['Particular'];
        $veiculo->Observacoes = $_POST ['Observacoes'];

        $veiculo->save();

        header("Location: /veiculo");

    }

    public static function delete()
    {
        include 'Model/VeiculoModel.php';

        $model = new VeiculoModel();

        $model->delete( (int) $_GET['Id'] );

        header("Location: /veiculo");
    }
}