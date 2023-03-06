<?php

namespace CadastroVeiculos\Controller;

use CadastroVeiculos\Model\FabricanteModel;
use CadastroVeiculos\Controller\Controller;

class FabricanteController extends Controller
{
    public static function index()
    {
        $model = new FabricanteModel();
        $model->getAllRows();

        parent::render('Fabricante/ListaFabricante', $model);
        
    }

    public static function form()
    {
        $model = new FabricanteModel();

        if(isset($_GET['Id']))
            $model = $model->getById( (int) $_GET['Id']);

        parent::render('Fabricante/FormFabricante', $model);
    }

    public static function save()
    {
        $marca = new FabricanteModel();

        $marca->Id = $_POST['Id'];
        $marca->nome = $_POST['nome'];

        $marca->save();

        header("Location: /fabricante");
    }

    public static function delete()
    {
        $model = new FabricanteModel();

        $model->delete( (int) $_GET['Id']);

        header("Location: /fabricante");
    }
}