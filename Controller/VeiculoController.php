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
        parent::render('Veiculo/ListaVeiculo', $model);
    }

    public static function form()
    {
        $model = new VeiculoModel();

        if(isset($_GET['id']))
        $model = $model->getByid( (int) $_GET['id']);

        $model->Lista_Marca = $model->getAllMarca();
        $model->Lista_Fabricante = $model->getAllFabricante();
        $model->Lista_Tipo = $model->getAllTipo();
        $model->Lista_Combustivel = $model->getAllCombustivel();
        
        parent::render( 'Veiculo/FormVeiculo', $model);
    }

    public static function save()
    {
        
        $Veiculo = new VeiculoModel();
        $Veiculo->id = $_POST['id'];
        $Veiculo->Modelo = $_POST['Modelo'];
        $Veiculo->Ano = $_POST['Ano'];
        $Veiculo->NumeroChassi = $_POST ['NumeroChassi'];
        $Veiculo->Cor = $_POST['Cor'];
        $Veiculo->Kilometragem = $_POST ['Kilometragem'];
        $Veiculo->Revisao = array_key_exists ('Revisao', $_POST) ? 1: 0;
        $Veiculo->Sinistro = array_key_exists ('Sinistro',$_POST) ? 1: 0;
        $Veiculo->Roubo_Furto = array_key_exists ('Roubo_Furto', $_POST) ? 1: 0;
        $Veiculo->Aluguel = array_key_exists ('Aluguel', $_POST) ? 1: 0;
        $Veiculo->Venda = array_key_exists ('Venda', $_POST) ? 1: 0;
        $Veiculo->Particular = array_key_exists ('Particular', $_POST) ? 1: 0;
        $Veiculo->Observacoes = $_POST ['Observacoes'];
        $Veiculo->id_Marca = $_POST['Marca'];
        $Veiculo->id_Fabricante = $_POST['Fabricante'];
        $Veiculo->id_Tipo = $_POST['Tipo'];
        $Veiculo->id_Combustivel = $_POST['Combustivel'];

        $Veiculo->save();

        header("Location: /veiculo");

    }

    public static function delete()
    {

        $model = new VeiculoModel();

        $model->delete( (int) $_GET['id'] );

        header("Location: /veiculo");
    }
}