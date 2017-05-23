<?php

class ConnectionDB extends PDO{
    private static $instance = null;
    
    public function ConnectionDB ($dns, $usuario,$senha){
        //Construtor da classe pai (parent)-> PDO
        parent::__construct($dns, $usuario, $senha);
    }
    
    public static function getInstance(){
        if(!isset(self::$instance)){
            try {
                //Cria uma conexão e retorna a instância dela
                self::$instance = new ConnectionDB("mysql:dbname=projetosaa;host=localhost", "root", "");
            } catch (Exception $e){
                echo "Ocorreram erros ao tentar conectar ao banco de dados!";
                echo "$e";
                exit();
            }
        }
        return self::$instance;
    }
}

?>
