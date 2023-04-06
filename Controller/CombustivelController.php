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

        if(isset($_GET['id']))
            $model = $model->getByid( (int) $_GET['id']);

        parent::render('Combustivel/FormCombustivel', $model);
    }

    public static function save()
    {
        $Combustivel = new CombustivelModel();

        $Combustivel->id = $_POST['id'];
        $Combustivel->nome = $_POST['nome'];

        $Combustivel->save();

        header("Location: /combustivel");
    }

    public static function delete()
    {
        $model = new CombustivelModel();

        $model->delete( (int) $_GET['id']);

        header("Location: /combustivel");
    }
}