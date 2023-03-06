<?php

namespace CadastroVeiculos\DAO;

use CadastroVeiculos\Model\CombustivelModel;
use \PDO;

class CombustivelDAO extends DAO
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert(CombustivelModel $model)
    {
        $sql = "INSERT INTO Combustivel (nome) VALUE (?)";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);

        $stmt->execute();
    }

    public function update(CombustivelModel $model)
    {
        $sql = "UPDATE Combustivel SET nome=? WHERE Id=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->Id);
        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT * FROM Combustivel";

        $stmt = $this->conexao->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function selectById(int $Id)
    {
        $sql = "SELECT * FROM Combustivel WHERE Id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $Id);
        $stmt->execute();

        return $stmt->fetchObject("CadastroVeiculos\Model\CombustivelModel");
    }

    public function delete(int $Id)
    {
        $sql = "DELETE FROM Combustivel WHERE Id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $Id);
        $stmt->execute();
    }
}