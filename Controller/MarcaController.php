<?php

namespace CadastroVeiculos\Controller;

use CadastroVeiculos\Model\MarcaModel;
use CadastroVeiculos\Controller\Controller;

class MarcaController extends Controller
{
    public static function index()
    {
        $model = new MarcaModel();
        $model->getAllRows();

        parent::render('Fabricante/ListaFabricante', $model);
        
    }

    public static function form()
    {
        $model = new MarcaModel();

        if(isset($_GET['Id']))
            $model = $model->getById( (int) $_GET['Id']);

        parent::render('Marca/FormCMarca', $model);
    }

    public static function save()
    {
        $marca = new MarcaModel();

        $marca->id = $_POST['Id'];
        $marca->nome = $_POST['nome'];

        $marca->save();

        header("Location: /marca");
    }

    public static function delete()
    {
        $model = new MarcaModel();

        $model->delete( (int) $_GET['Id']);

        header("Location: /marca");
    }
}