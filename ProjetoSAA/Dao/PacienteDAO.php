<?php

include '../Persistence/ConnectionDB.php';

class PacienteDAO {
    
    private $connection;
    private $model;
    
    public function __construct() {
        $this->connection = ConnectionDB::getInstance(); 
    }
    
    public function insertPaciente ($paciente){
        try {
            $status = $this->connection->prepare("INSERT INTO paciente (idPaciente, nome, dataNascimento, sexo, email, telefoneCelular, telefoneResidencial, endereco, bairro, numero, complemento, cidade, uf, cpf, rg, estadoCivil, profissao, situacao, cns, idConvenio, plano, numeroCarteirinha, validade, acomodacao) "
                                                . "VALUES (null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $status->bindValue(1, $paciente->nome);
            $status->bindValue(2, $paciente->dataNascimento);
            $status->bindValue(3, $paciente->sexo);
            $status->bindValue(4, $paciente->email);
            $status->bindValue(5, $paciente->telefoneCelular);
            $status->bindValue(6, $paciente->telefoneResidencial);
            $status->bindValue(7, $paciente->endereco);
            $status->bindValue(8, $paciente->bairro);
            $status->bindValue(9, $paciente->numero);
            $status->bindValue(10, $paciente->complemento);
            $status->bindValue(11, $paciente->cidade);
            $status->bindValue(12, $paciente->uf);
            $status->bindValue(13, $paciente->cpf);
            $status->bindValue(14, $paciente->rg);
            $status->bindValue(15, $paciente->estadoCivil);
            $status->bindValue(16, $paciente->profissao);
            $status->bindValue(17, $paciente->situacao);
            $status->bindValue(18, $paciente->cns);
            $status->bindValue(19, $paciente->idconvenio);
            $status->bindValue(20, $paciente->plano);
            $status->bindValue(21, $paciente->numeroCarteirinha);
            $status->bindValue(22, $paciente->validade);
            $status->bindValue(23, $paciente->acomodacao);
            
            $status->execute();
            
            $this->connection = null;
            
        } catch (Exception $e) {
            echo "Ocorreram erros ao incluir usuário!";
        }
    }
    
    public function deletePaciente($idPaciente){
        try {
            $status = $this->connection->prepare("Delete From Paciente Where idPaciente = ?");
            $status->bindValue(1, $idPaciente);
            $status->execute();
            
            $this->connection = null;
        } catch (Exception $e) {
            echo "Ocorreram erros ao deletar o paciente! <br>$e";
        }
    }
    
    public function updatePaciente($paciente){
        try {
            $status = $this->connection->prepare("UPDATE paciente SET nome = ?, dataNascimento = ?, sexo = ?, email = ?, telefoneCelular = ?, telefoneResidencial = ?, endereco = ?, bairro = ?, numero = ?, complemento = ?, cidade = ?, uf = ?, cpf = ?, rg = ?, estadoCivil = ?, profissao = ?, situacao = ?, cns = ?, idConvenio = ?, plano = ?, numeroCarteirinha = ?, validade = ?, acomodacao = ? Where idPaciente = ?");
            
            $status->bindValue(1, $paciente->nome);
            $status->bindValue(2, $paciente->dataNascimento);
            $status->bindValue(3, $paciente->sexo);
            $status->bindValue(4, $paciente->email);
            $status->bindValue(5, $paciente->telefoneCelular);
            $status->bindValue(6, $paciente->telefoneResidencial);
            $status->bindValue(7, $paciente->endereco);
            $status->bindValue(8, $paciente->bairro);
            $status->bindValue(9, $paciente->numero);
            $status->bindValue(10, $paciente->complemento);
            $status->bindValue(11, $paciente->cidade);
            $status->bindValue(12, $paciente->uf);
            $status->bindValue(13, $paciente->cpf);
            $status->bindValue(14, $paciente->rg);
            $status->bindValue(15, $paciente->estadoCivil);
            $status->bindValue(16, $paciente->profissao);
            $status->bindValue(17, $paciente->situacao);
            $status->bindValue(18, $paciente->cns);
            $status->bindValue(19, $paciente->idConvenio);
            $status->bindValue(20, $paciente->plano);
            $status->bindValue(21, $paciente->numeroCarteirinha);
            $status->bindValue(22, $paciente->validade);
            $status->bindValue(23, $paciente->acomodacao);
            $status->bindValue(24, $paciente->idPaciente);

            $status->execute();
            
            $this->connection = null;
        } catch (Exception $e) {
            echo "Ocorreram erros ao atualizar o paciente! <br>$e";
        }
    }
    
    public function searchPaciente(){
        try {
            $status = $this->connection->query("Select * From Paciente");
            
            $array = array();
            $array = $status->fetchAll(PDO::FETCH_CLASS, 'PacienteModel');
            
            $this->connection = null;
            
            return $array;
            
        } catch (PDOException $e) {
            echo 'Ocorreram erros ao buscar paciente' .$e;
        }
    }
}

?>