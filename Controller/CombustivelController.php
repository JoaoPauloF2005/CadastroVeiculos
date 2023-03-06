<?php

namespace CadastroVeiculos\Controller;

use CadastroVeiculos\Model\CombustivelModel;
use CadastroVeiculos\Controller\Controller;

class CombustivelController extends Controller
{
    public static function index()
    {
        $model = new CombustivelModel();
        $model->getAllRows();

        parent::render('Combustivel/ListaCombustivel', $model);
        
    }

    public static function form()
    {
        $model = new CombustivelModel();

        if(isset($_GET['Id']))
            $model = $model->getById( (int) $_GET['Id']);

        parent::render('Combustivel/FormCombustivel', $model);
    }

    public static function save()
    {
        $marca = new CombustivelModel();

        $marca->Id = $_POST['Id'];
        $marca->nome = $_POST['nome'];

        $marca->save();

        header("Location: /combustivel");
    }

    public static function delete()
    {
        $model = new CombustivelModel();

        $model->delete( (int) $_GET['Id']);

        header("Location: /combustivel");
    }
}