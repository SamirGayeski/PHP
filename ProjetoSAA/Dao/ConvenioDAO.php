<?php

include '../Persistence/ConnectionDB.php';

class ConvenioDAO {
    
    private $connection;
    private $model;
    
    public function __construct() {
        $this->connection = ConnectionDB::getInstance();       
    }
    
    public function insertConvenio ($convenio){
        try {
            $status = $this->connection->prepare("INSERT INTO convenio (idConvenio, nome, numeroRegistro) VALUES (null, ?, ?)");
            $status->bindValue(1, $convenio->nome);
            $status->bindValue(2, $convenio->numeroRegistro);
            
            $status->execute();
            
            $this->connection = null;
            
        } catch (Exception $e) {
            echo "Ocorreram erros ao incluir usuário!";
        }
    }
    
    public function deleteConvenio($idConvenio){
        try {
            $status = $this->connection->prepare("Delete From Convenio Where idConvenio = ?");
            $status->bindValue(1, $idConvenio);
            $status->execute();
            
            $this->connection = null;
        } catch (Exception $e) {
            echo "Ocorreram erros ao deletar o convênio! <br>$e";
        }
    }
    
    public function updateConvenio($convenio){
        try {
            $status = $this->connection->prepare("UPDATE convenio SET nome = ?, numeroRegistro = ? Where idConvenio = ?");
            
            $status->bindValue(1, $convenio->nome);
            $status->bindValue(2, $convenio->numeroRegistro);
            $status->bindValue(3, $convenio->idConvenio);

            $status->execute();

            
            $this->connection = null;
        } catch (Exception $e) {
            echo "Ocorreram erros ao atualizar o convênio! <br>$e";
        }
    }
    
    public function searchConvenio(){
        try {
            $status = $this->connection->query("Select * From Convenio");
            
            $array = array();
            $array = $status->fetchAll(PDO::FETCH_CLASS, 'ConvenioModel');
            
            $this->connection = null;
            
            return $array;
            
        } catch (PDOException $e) {
            echo 'Ocorreram erros ao buscar convênio' .$e;
        }
    }
}

?>