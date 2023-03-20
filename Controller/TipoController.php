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

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);

        parent::render('Tipo/FormTipo', $model);
    }

    public static function save()
    {
        $tipo = new TipoModel();

        $tipo->id = $_POST['id'];
        $tipo->nome = $_POST['nome'];

        $tipo->save();

        header("Location: /tipo");
    }

    public static function delete()
    {
        $model = new TipoModel();

        $model->delete( (int) $_GET['id']);

        header("Location: /tipo");
    }
}