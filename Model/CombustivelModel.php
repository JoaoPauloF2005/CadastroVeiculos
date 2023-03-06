<?php

namespace CadastroVeiculos\Model;

use CadastroVeiculos\DAO\CombustivelDAO;

class CombustivelModel extends Model
{
    public $Id, $nome;

    public function save()
    {
        $dao = new CombustivelDAO();

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
        $dao = new CombustivelDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $Id)
    {
        $dao = new CombustivelDAO();

        $obj = $dao->selectById($Id);

        return ($obj) ? $obj : new CombustivelModel();
    }

    public function delete(int $Id)
    {
        $dao = new CombustivelDAO();

        $dao->delete($Id);
    }
}