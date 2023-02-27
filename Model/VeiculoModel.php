<?php

namespace veiculo\Model;

use veiculo\DAO\VeiculoDAO;

class VeiculoModel extends Model
{
    public $Id, $Id_Marca, $Modelo, $Id_Fabricante, $Id_Tipo, $Ano, $Id_Combustivel, $Cor, $NumeroChassi, $Kilometragem, $Revisao,
    $Sinistro, $Roubo_Furto, $Aluguel, $Venda, $Particular, $Observacoes;

    public $rows;

    public function save()
    {
        include 'DAO/VeiculoDAO.php';

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

    public function getAllRows()
    {
        include 'DAO/VeiculoDAO.php';
        $dao = new VeiculoDAO();
        $this->rows = $dao->select();
    }

    public function getById(int $Id)
    {
        include 'DAO/VeiculoDAO.php';

        $dao = new VeiculoDAO();
        
        $obj = $dao->selectById($Id);

        return ($obj) ? $obj : new VeiculoModel();
    }

    public function delete(int $Id)
    {
        include 'DAO/VeiculoDAO.php';

        $dao = new VeiculoDAO();

        $dao->delete($Id);
    }
}