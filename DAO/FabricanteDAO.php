<?php

namespace CadastroVeiculos\DAO;

use CadastroVeiculos\Model\FabricanteModel;
use \PDO;

class FabricanteDAO extends DAO
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert(FabricanteModel $model)
    {
        $sql = "INSERT INTO Fabricante (nome) VALUE (?)";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);

        $stmt->execute();
    }

    public function update(FabricanteModel $model)
    {
        $sql = "UPDATE Fabricante SET nome=? WHERE Id=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->Id);
        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT * FROM Fabricante";

        $stmt = $this->conexao->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function selectById(int $Id)
    {
        $sql = "SELECT * FROM Fabricante WHERE Id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $Id);
        $stmt->execute();

        return $stmt->fetchObject("CadastroVeiculos\Model\FabricanteModel");
    }

    public function delete(int $Id)
    {
        $sql = "DELETE FROM Fabricante WHERE Id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $Id);
        $stmt->execute();
    }
}