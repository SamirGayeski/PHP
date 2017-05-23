<!DOCTYPE>
<html>
<head>
    <title>Lista de Pacientes</title>
    <link rel="icon" href="../../Imagens/title.ico" type="image/x-icon" />
    <meta charset="utf-8">
    <link href="../../Bootstrap/css/bootstrap.css" rel="stylesheet" />
    <link href="../../Bootstrap/css/projeto.css" rel="stylesheet" />
</head>
<div class="container">
    <a class='btn btn-default' href='../../index.php'><span class="glyphicon glyphicon-home"></span> Início</a>
    <a class='btn btn-default' href='formPaciente.php'><span class="glyphicon glyphicon-plus"></span> Adicionar Paciente</a>
    <h1 style="color: #286090">Lista de Pacientes</h1>
    <ul class="nav nav-pills" role="tablist">
    </ul>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th style="text-align: center">Data Nascimento</th>
                <th style="text-align: center">Sexo</th>
                <th style="text-align: center">CPF</th>
                <th style="text-align: center">RG</th>
                <th style="text-align: center">CNS</th>
                <th></th>   
                <th></th> 
            </tr>
        </thead>
        <tbody>
            <?php
                include '../../Persistence/ConnectionDB.php';

            class Paciente {

                private $connection;

                function __construct() {
                    $this->connection = ConnectionDB::getInstance();
                }

                public function buscarPacientes() {
                    $sql = "SELECT idPaciente, nome, dataNascimento AS data, sexo, cpf, rg, cns FROM paciente";
                    $query = $this->connection->query($sql);

                    return $query->fetchAll();
                }

            }

            $obj = new Paciente();

            $result = $obj->buscarPacientes();
            
            foreach($result as $paciente){
                    $id = $paciente ['idPaciente'];
                    echo '<tr>';
                    echo '<td>'.$paciente['nome'].'</td>';
                    echo '<td align=center>'.$paciente['data'].'</td>';
                    echo '<td align=center>'.$paciente['sexo'].'</td>';
                    echo '<td align=center>'.$paciente['cpf'].'</td>';
                    echo '<td align=center>'.$paciente['rg'].'</td>';
                    echo '<td align=center>'.$paciente['cns'].'</td>';
                    echo "<td align=center><a class='btn btn-primary' href='../../View/Paciente/formPacienteUpdate.php?idPaciente=$paciente[idPaciente]'><span class='glyphicon glyphicon-pencil'></span> Alterar</a>";
                    echo "<td align=center><a class='btn btn-danger' href='../../Controller/PacienteController.php?operation=excluir&idPaciente=$paciente[idPaciente]'><span class='glyphicon glyphicon-trash'></span> Excluir</a>";
                    echo '</tr>';
                }
            ?>
        </tbody>
    </table>
</div>
</html>
