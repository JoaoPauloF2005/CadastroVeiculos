<?php

namespace CadastroVeiculos\Model;

use CadastroVeiculos\DAO\CombustivelDAO;
use CadastroVeiculos\DAO\FabricanteDAO;
use CadastroVeiculos\DAO\MarcaDAO;
use CadastroVeiculos\DAO\TipoDAO;
use CadastroVeiculos\DAO\VeiculoDAO;

class VeiculoModel extends Model
{
    public $Id, $Id_Marca, $Modelo, $Id_Fabricante, $Id_Tipo, $Id_Combustivel, $Ano, $Cor, $NumeroChassi, $Kilometragem, $Revisao,
    $Sinistro, $Roubo_Furto, $Aluguel, $Venda, $Particular, $Observacoes;

    public $Lista_Marca, $Lista_Fabricante, $Lista_Tipo, $Lista_Combustivel;

    public $rows;

    public function save()
    {

        $dao = new VeiculoDAO();

        if(empty($this->Id))
        {
            $dao->insert($this);
        }
        else
        {
            $dao->update($this);
        }
    }

    public function getAllMarca()
    {
       
        $dao = new MarcaDAO();
        $this->rows = $dao->select();
    }

    public function getAllFabricante()
    {
        $dao = new FabricanteDAO();
        
        return $dao->select();
    }
    

    public function getAllTipo()
    {
        $dao = new TipoDAO();
        
        return $dao->select();
    }

    public function getAllCombustivel()
    {
        $dao = new CombustivelDAO();

        return $dao->select();
    }

    public function getAllRows()
    {
        $dao = new VeiculoDAO();
        
        $this->rows = $dao->select();
    }

    public function getById(int $Id)
    {
        $dao = new VeiculoDAO();
        
        $obj = $dao->selectById($Id);

        return ($obj) ? $obj : new VeiculoModel();
    }

    public function delete(int $Id)
    {

        $dao = new VeiculoDAO();

        $dao->delete($Id);
    }
}