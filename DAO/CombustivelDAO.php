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
        $sql = "UPDATE Combustivel SET nome=? WHERE id=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->id);
        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT * FROM Combustivel";

        $stmt = $this->conexao->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectByid(int $id)
    {
        $sql = "SELECT * FROM Combustivel WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("CadastroVeiculos\Model\CombustivelModel");
    }

    public function search($q)
    {
        $q = '%' . $q . '%';

        $sql = "SELECT id, nome 
        FROM Combustivel 
        WHERE id LIKE ? OR nome LIKE ? ";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $q);
        $stmt->bindValue(2, $q);
       
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
    public function delete(int $id)
    {
        $sql = "DELETE FROM Combustivel WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}
