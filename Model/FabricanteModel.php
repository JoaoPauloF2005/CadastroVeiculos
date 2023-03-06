<?php

namespace CadastroVeiculos\Model;

use CadastroVeiculos\DAO\FabricanteDAO;

class FabricanteModel extends Model
{
    public $Id, $nome;

    public function save()
    {
        $dao = new FabricanteDAO();

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
        $dao = new FabricanteDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $Id)
    {
        $dao = new FabricanteDAO();

        $obj = $dao->selectById($Id);

        return ($obj) ? $obj : new FabricanteModel();
    }

    public function delete(int $Id)
    {
        $dao = new FabricanteDAO();

        $dao->delete($Id);
    }
}