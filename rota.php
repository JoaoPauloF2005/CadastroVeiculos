<?php

use CadastroVeiculos\Controller\VeiculoController;

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($uri_parse)
{
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
}