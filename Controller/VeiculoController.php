<?php

namespace CadastroVeiculos\Controller;

use CadastroVeiculos\Model\VeiculoModel;
use CadastroVeiculos\Controller\Controller;

class VeiculoController extends Controller
{
    public static function index()
    {
        

        $model = new VeiculoModel();
        $model->getAllRows();
        parent::render( 'Veiculo/FormVeiculo.php', $model);
    }

    public static function form()
    {
        $model = new VeiculoModel();

        if(isset($_GET['Id']))
        $model = $model->getById( (int) $_GET['Id']);
        
        parent::render( 'Veiculo/FormVeiculo.php', $model);
    }

    public static function save()
    {
        include 'Model/VeiculoModel.php';
        $Veiculo = new VeiculoModel();
        $Veiculo->Id = $_POST['Id'];
        $Veiculo->Id_Marca = $_POST['Id_Marca'];
        $Veiculo->Modelo = $_POST['Modelo'];
        $Veiculo->Id_Fabricante = $_POST['Id_Fabricante'];
        $Veiculo->Id_Tipo = $_POST['Id_Tipo'];
        $Veiculo->Id_Combustivel = $_POST['Id_Combustivel'];
        $Veiculo->Ano = $_POST['Ano'];
        $Veiculo->Cor = $_POST['Cor'];
        $Veiculo->NumeroChassi = $_POST ['NumeroChassi'];
        $Veiculo->Kilometragem = $_POST ['Kilometragem'];
        $Veiculo->Revisao = $_POST ['Revisao'];
        $Veiculo->Sinistro = $_POST ['Sinistro'];
        $Veiculo->Roubo_Furto = $_POST ['Roubo_Furto'];
        $Veiculo->Aluguel = $_POST ['Aluguel'];
        $Veiculo->Venda = $_POST ['Venda'];
        $Veiculo->Particular = $_POST ['Particular'];
        $Veiculo->Observacoes = $_POST ['Observacoes'];

        $Veiculo->save();

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