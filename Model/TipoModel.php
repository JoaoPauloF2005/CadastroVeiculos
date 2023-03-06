<?php

namespace CadastroVeiculos\Model;

use CadastroVeiculos\DAO\TipoDAO;

class TipoModel extends Model
{
    public $Id, $nome;

    public function save()
    {
        $dao = new TipoDAO();

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
        $dao = new TipoDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $Id)
    {
        $dao = new TipoDAO();

        $obj = $dao->selectById($Id);

        return ($obj) ? $obj : new TipoModel();
    }

    public function delete(int $Id)
    {
        $dao = new TipoDAO();

        $dao->delete($Id);
    }
}