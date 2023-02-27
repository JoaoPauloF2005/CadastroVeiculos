<?php

namespace CadastroVeiculos\DAO;

use CadastroVeiculos\Model\VeiculoModel;

use \PDO;

class VeiculoDAO extends DAO

{
    function __construct()
    {
        parent::__construct();
    }

    function insert(VeiculoModel $model)
    {
        $sql = "INSERT INTO Veiculo
                (Id_Marca, Id_Fabricante, Id_Tipo, Id_Combustivel, Modelo, Ano, 
                 Cor, NumeroChassi, Kilometragem, Revisao, Sinistro, Roubo_Furto, Aluguel, Venda, Particular, Observacoes)
                 VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->Id_Marca);
        $stmt->bindValue(2, $model->Id_Fabricante);
        $stmt->bindValue(3, $model->Id_Tipo);
        $stmt->bindValue(4, $model->Id_Combustivel);
        $stmt->bindValue(5, $model->Modelo);
        $stmt->bindValue(6, $model->Ano);
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
        $sql = "UPDATE Veiculo SET Id_Marca=?, Id_Fabricante=?, Id_Tipo=?, Id_Combustivel=?, Modelo=?, Ano=?, Cor=?, NumeroChassi=?, Kilometragem=?, Revisao=?, Sinistro=?, Roubo_Furto=?,
         Aluguel=?, Venda=?, Particular=?, Observacoes=? WHERE Id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->Id_Marca);
        $stmt->bindValue(2, $model->Id_Fabricante);
        $stmt->bindValue(3, $model->Id_Tipo);
        $stmt->bindValue(4, $model->Id_Combustivel);
        $stmt->bindValue(5, $model->Modelo);
        $stmt->bindValue(6, $model->Ano);
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

        $stmt->bindValue(17, $model->Id);
        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT * FROM Veiculo";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    } 

    public function selectById(int $Id)
    {
        include_once 'Model/VeiculoModel.php';

        $sql = "SELECT * FROM Veiculo WHERE Id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(17, $Id);
        $stmt->execute();

        return $stmt->fetchObject("VeiculoModel"); 
    }

    public function delete(int $Id)
    {
        $sql = "DELETE FROM Veiculo WHERE Id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(17, $Id);
        $stmt->execute();
    }
}