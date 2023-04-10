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
                (Modelo, Ano, NumeroChassi, Cor, Kilometragem, Revisao, 
                 Sinistro, Roubo_Furto, Aluguel, Venda, Particular, Observacoes, id_Marca, id_Fabricante, 
                 id_Tipo, id_Combustivel)
                 VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->Modelo);
        $stmt->bindValue(2, $model->Ano);
        $stmt->bindValue(3, $model->NumeroChassi);
        $stmt->bindValue(4, $model->Cor);
        $stmt->bindValue(5, $model->Kilometragem);
        $stmt->bindValue(6, $model->Revisao);
        $stmt->bindValue(7, $model->Sinistro);
        $stmt->bindValue(8, $model->Roubo_Furto);
        $stmt->bindValue(9, $model->Aluguel);
        $stmt->bindValue(10, $model->Venda);
        $stmt->bindValue(11, $model->Particular);
        $stmt->bindValue(12, $model->Observacoes);
        $stmt->bindValue(13, $model->id_Marca);
        $stmt->bindValue(14, $model->id_Fabricante);
        $stmt->bindValue(15, $model->id_Tipo);
        $stmt->bindValue(16, $model->id_Combustivel);
        $stmt->execute();
    }

    public function update(VeiculoModel $model)
    {
        $sql = "UPDATE Veiculo SET Modelo=?, Ano=?, NumeroChassi=?, Cor=?, Kilometragem=?, Revisao=?, Sinistro=?, Roubo_Furto=?, Aluguel=?, Venda=?, Particular=?,
         Observacoes=?, id_Marca=?, id_Fabricante=?, id_Tipo, id_Combustivel=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->Modelo);
        $stmt->bindValue(2, $model->Ano);
        $stmt->bindValue(3, $model->NumeroChassi);
        $stmt->bindValue(4, $model->Cor);
        $stmt->bindValue(5, $model->Kilometragem);
        $stmt->bindValue(6, $model->Revisao);
        $stmt->bindValue(7, $model->Sinistro);
        $stmt->bindValue(8, $model->Roubo_Furto);
        $stmt->bindValue(9, $model->Aluguel);
        $stmt->bindValue(10, $model->Venda);
        $stmt->bindValue(11, $model->Particular);
        $stmt->bindValue(12, $model->Observacoes);
        $stmt->bindValue(13, $model->id_Marca);
        $stmt->bindValue(14, $model->id_Fabricante);
        $stmt->bindValue(15, $model->id_Tipo);
        $stmt->bindValue(16, $model->id_Combustivel);
        $stmt->bindValue(17, $model->id);
        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT v.id, v.Modelo, v.Ano, v.NumeroChassi, v.Cor, v.Kilometragem, v.Revisao, v.Sinistro, 
        v.Roubo_Furto, v.Aluguel, v.Venda, v.Particular, v.Observacoes, 
        m.nome AS Marca, f.nome AS Fabricante, t.nome AS Tipo, c.nome AS Combustivel
        FROM Veiculo v
        JOIN Marca m ON (m.id = v.id_Marca)
        JOIN Fabricante f ON (f.id = v.id_Fabricante)
        JOIN Tipo t ON (t.id = v.id_Tipo)
        JOIN Combustivel c ON (c.id = v.id_Combustivel)";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectByid(int $id)
    {
        $sql = "SELECT v.id, v.Modelo, v.Ano, v.NumeroChassi, v.Cor, v.Kilometragem, v.Revisao, v.Sinistro, 
        v.Roubo_Furto, v.Aluguel, v.Venda, v.Particular, v.Observacoes, 
        m.nome AS Marca, f.nome AS Fabricante, t.nome AS Tipo, c.nome AS Combustivel
        FROM Veiculo v
        JOIN Marca m ON (m.id = v.id_Marca)
        JOIN Fabricante f ON (f.id = v.id_Fabricante)
        JOIN Tipo t ON (t.id = v.id_Tipo)
        JOIN Combustivel c ON (c.id = v.id_Combustivel)
        WHERE v.id=?";


        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("CadastroVeiculos\Model\VeiculoModel");
    }

    public function search($q)
    {
        $query = '%' . $q . '%';

        $sql = "SELECT v.id, v.Modelo, v.Ano, v.NumeroChassi, v.Cor, v.Kilometragem, v.Revisao, v.Sinistro, 
        v.Roubo_Furto, v.Aluguel, v.Venda, v.Particular, v.Observacoes, 
        m.nome AS Marca, f.nome AS Fabricante, t.nome AS Tipo, c.nome AS Combustivel
        FROM Veiculo v
        JOIN Marca m ON (m.id = v.id_Marca)
        JOIN Fabricante f ON (f.id = v.id_Fabricante)
        JOIN Tipo t ON (t.id = v.id_Tipo)
        JOIN Combustivel c ON (c.id = v.id_Combustivel) WHERE v.id_Marca LIKE ? OR m.nome LIKE ?
";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $q);
        $stmt->bindValue(2, $q);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM Veiculo WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}
