<?php

namespace CadastroVeiculos\Controller;

use CadastroVeiculos\Model\TipoModel;
use CadastroVeiculos\Controller\Controller;

class TipoController extends Controller
{
    public static function index()
    {
        $model = new TipoModel();
        $model->getAllRows();

        parent::render('Tipo/ListaTipo', $model);
        
    }

    public static function form()
    {
        $model = new TipoModel();

        if(isset($_GET['Id']))
            $model = $model->getById( (int) $_GET['Id']);

        parent::render('Tipo/FormTipo', $model);
    }

    public static function save()
    {
        $marca = new TipoModel();

        $marca->Id = $_POST['Id'];
        $marca->nome = $_POST['nome'];

        $marca->save();

        header("Location: /tipo");
    }

    public static function delete()
    {
        $model = new TipoModel();

        $model->delete( (int) $_GET['Id']);

        header("Location: /tipo");
    }
}