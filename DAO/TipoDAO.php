<?php

namespace CadastroVeiculos\DAO;

use CadastroVeiculos\Model\TipoModel;
use \PDO;

class TipoDAO extends DAO
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert(TipoModel $model)
    {
        $sql = "INSERT INTO Tipo (nome) VALUE (?)";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);

        $stmt->execute();
    }

    public function update(TipoModel $model)
    {
        $sql = "UPDATE Tipo SET nome=? WHERE Id=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->Id);
        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT * FROM Tipo";

        $stmt = $this->conexao->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function selectById(int $Id)
    {
        $sql = "SELECT * FROM Tipo WHERE Id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $Id);
        $stmt->execute();

        return $stmt->fetchObject("CadastroVeiculos\Model\TipoModel");
    }

    public function delete(int $Id)
    {
        $sql = "DELETE FROM Tipo WHERE Id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $Id);
        $stmt->execute();
    }
}