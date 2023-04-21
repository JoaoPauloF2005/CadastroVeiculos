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

        if(isset($_GET['id']))
            $model = $model->getByid( (int) $_GET['id']);

        parent::render('Fabricante/FormFabricante', $model);
    }

    public static function save()
    {
        $Fabricante = new FabricanteModel();

        $Fabricante->id = $_POST['id'];
        $Fabricante->nome = $_POST['nome'];

        $Fabricante->save();

        header("Location: /fabricante");
    }

    public static function delete()
    {
        $model = new FabricanteModel();

        $model->delete( (int) $_GET['id']);

        header("Location: /fabricante");
    }

    public static function buscar(){
        $model = new FabricanteModel();

        if(isset($_GET['search']))
            $model->buscar($_GET['search']);

        parent::render('Fabricante/ListaFabricante', $model);
    }
}