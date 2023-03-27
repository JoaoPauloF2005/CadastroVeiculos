<?php

namespace CadastroVeiculos\Model;

use CadastroVeiculos\DAO\CombustivelDAO;
use CadastroVeiculos\DAO\FabricanteDAO;
use CadastroVeiculos\DAO\MarcaDAO;
use CadastroVeiculos\DAO\TipoDAO;
use CadastroVeiculos\DAO\VeiculoDAO;

class VeiculoModel extends Model
{
    public $id, $Modelo, $Ano, $NumeroChassi, $Cor, $Kilometragem, $Revisao, $Sinistro, 
    $Roubo_Furto, $Aluguel, $Venda, $Particular, $Observacoes, $id_Marca, $id_Fabricante, $id_Tipo, $id_Combustivel;

    public $Lista_Marca, $Lista_Fabricante, $Lista_Tipo, $Lista_Combustivel;

    public $rows;

    public function save()
    {

        $dao = new VeiculoDAO();

        if(empty($this->id))
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
       return $dao->select();
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

    public function getByid(int $id)
    {
        $dao = new VeiculoDAO();
        
        $obj = $dao->selectByid($id);

        return ($obj) ? $obj : new VeiculoModel();
    }

    public function delete(int $id)
    {

        $dao = new VeiculoDAO();

        $dao->delete($id);
    }
}