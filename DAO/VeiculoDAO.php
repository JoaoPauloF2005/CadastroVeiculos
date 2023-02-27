<?php

namespace veiculo\DAO;

use veiculo\Model\VeiculoModel;

use \PDO;

class VeiculoDAO extends DAO

{
    function __construct()
    {
        parent::__construct();
    }

    function insert(VeiculoModel $model)
    {
        $sql = "INSERT INTO veiculo
                (Id_Marca, Modelo, Id_Fabricante, Id_Tipo, Ano, Id_Combustivel, 
                 Cor, NumeroChassi, Kilometragem, Revisao, Sinistro, Roubo_Furto, Aluguel, Venda, Particular, Observacoes)
                 VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->Id_Marca);
        $stmt->bindValue(2, $model->Modelo);
        $stmt->bindValue(3, $model->Id_Fabricante);
        $stmt->bindValue(4, $model->Id_Tipo);
        $stmt->bindValue(5, $model->Ano);
        $stmt->bindValue(6, $model->Id_Combustivel);
        $stmt->bindValue(7, $model->Cor);
        $stmt->bindValue(8, $model->NumeroChassi);
        $stmt->bindValue(9, $model->Kilometragem);
        $stmt->bindValue(10, $model->Revisao);
        $stmt->bindValue(11, $model->Sinistro);
        $stmt->bindValue(12, $model->Roubo_Furto);
        $stmt->bindValue(13, $model->Aluguel);
        $stmt->bindValue(14, $model->Venda);
        $stmt->bindValue(15, $model->Particular);
        $stmt->bindValue(16, $model->Observacoes);

        $stmt->execute();

    }

    public function update(VeiculoModel $model)
    {
        $sql = "UPDATE veiculo SET Modelo=?, Ano=?, Cor=?, NumeroChassi=?, Kilometragem=?, Revisao=?, Sinistro=?, Roubo_Furto=?,
         Aluguel=?, Venda=?, Particular=?, Observacoes=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->Modelo);
        $stmt->bindValue(2, $model->Ano);
        $stmt->bindValue(3, $model->Cor);
        $stmt->bindValue(4, $model->NumeroChassi);
        $stmt->bindValue(5, $model->Kilometragem);
        $stmt->bindValue(6, $model->Revisao);
        $stmt->bindValue(7, $model->Sinistro);
        $stmt->bindValue(8, $model->Roubo_Furto);
        $stmt->bindValue(9, $model->Aluguel);
        $stmt->bindValue(10, $model->Venda);
        $stmt->bindValue(11, $model->Particular);
        $stmt->bindValue(12, $model->Observacoes);

        $stmt->bindValue(13, $model->Id);
        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT * FROM veiculo";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    } 

    public function selectById(int $Id)
    {
        include_once 'Model/VeiculoModel.php';

        $sql = "SELECT * FROM veiculo WHERE Id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $Id);
        $stmt->execute();

        return $stmt->fetchObject("VeiculoModel"); 
    }

    public function delete(int $Id)
    {
        $sql = "DELETE FROM veiculo WHERE Id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $Id);
        $stmt->execute();
    }
}