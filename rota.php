<?php

use CadastroVeiculos\Controller\MarcaController;
use CadastroVeiculos\Controller\FabricanteController;
use CadastroVeiculos\Controller\TipoController;
use CadastroVeiculos\Controller\CombustivelController;
use CadastroVeiculos\Controller\VeiculoController;

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($uri_parse)
{
    case '/home':
        include 'View/modules/Pagina_Inicial/home.php';
    break;

     case '/marca':
        MarcaController::index();
    break;

    case '/marca/form':
        MarcaController::form();
    break;

    case '/marca/save':
        MarcaController::save();
    break;

    case '/marca/delete':
        MarcaController::delete();
    break;

    
    case '/fabricante':
        FabricanteController::index();
    break;

    case '/fabricante/form':
        FabricanteController::form();
    break;

    case '/fabricante/save':
        FabricanteController::save();
    break;

    case '/fabricante/delete':
        FabricanteController::delete();
    break;


    case '/tipo':
        TipoController::index();
    break;

    case '/tipo/form':
        TipoController::form();
    break;

    case '/tipo/save':
        TipoController::save();
    break;

    case '/tipo/delete':
        TipoController::delete();
    break;


    case '/combustivel':
        CombustivelController::index();
    break;

    case '/combustivel/form':
        CombustivelController::form();
    break;

    case '/combustivel/save':
        CombustivelController::save();
    break;

    case '/combustivel/delete':
        CombustivelController::delete();
    break;


    case '/veiculo':
        VeiculoController::index();
    break;

    case '/veiculo/form':
        VeiculoController::form();
    break;

    case '/veiculo/save':
        VeiculoController::save();
    break;

    case '/veiculo/delete':
        VeiculoController::delete();
    break;
        



    default:
        echo 'Erro 404';
    break;
}