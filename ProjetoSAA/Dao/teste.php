<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include '../Persistence/ConnectionDB.php';
        
        class testeteste {

            private $connection;

            function __construct() {
                $this->connection = ConnectionDB::getInstance();
            }

            function buscarTodos() {
                $sql = "SELECT p.idPaciente, p.nome, p.dataNascimento, p.sexo, p.cpf, p.rg, c.nome AS convenio"
                            . " FROM paciente p INNER JOIN convenio c ON p.idConvenio = c.idConvenio "
                        . "where p.idPaciente = 8";
                $query = $this->connection->query($sql);

               return $query->fetchAll();
            }
            
            
        }
        $obj = new testeteste();
        
        $result = $obj->buscarTodos();
        
        print_r($result);
        
        ?>
    </body>
</html>
