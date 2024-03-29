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
        $sql = "UPDATE Fabricante SET nome=? WHERE id=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->id);
        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT * FROM Fabricante";

        $stmt = $this->conexao->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectByid(int $id)
    {
        $sql = "SELECT * FROM Fabricante WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("CadastroVeiculos\Model\FabricanteModel");
    }

    public function search($q)
    {
        $q = '%' . $q . '%';

        $sql = "SELECT id, nome 
        FROM Fabricante
        WHERE id LIKE ? OR nome LIKE ? ";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $q);
        $stmt->bindValue(2, $q);
       
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM Fabricante WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}