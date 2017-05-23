<html>
<head>
    <title>Lista de Convênios</title>
    <link rel="icon" href="../../Imagens/title.ico" type="image/x-icon" />
    <meta charset="utf-8">
    <link href="../../Bootstrap/css/bootstrap.css" rel="stylesheet" />
    <link href="../../Bootstrap/css/projeto.css" rel="stylesheet" />
</head>
<div class="container">
    <a class='btn btn-default' href='../../index.php'><span class="glyphicon glyphicon-home"></span> Início</a>
    <a class='btn btn-default' href='formConvenio.php'><span class="glyphicon glyphicon-plus"></span> Adicionar Convênio</a>
    <h1 style="color: #286090">Lista de Convênios</h1>
    <ul class="nav nav-pills" role="tablist">
    </ul>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th class="col-sm-8">Nome</th>
                <th class="col-sm-1"></th>   
                <th class="col-sm-1"></th> 
            </tr>
        </thead>
        <tbody>
            <?php
                include '../../Persistence/ConnectionDB.php';

            class Convenio {

                private $connection;

                function __construct() {
                    $this->connection = ConnectionDB::getInstance();
                }

                public function buscarConvenios() {
                    $sql = "SELECT idConvenio, nome FROM convenio";
                    $query = $this->connection->query($sql);

                    return $query->fetchAll();
                }

            }

            $obj = new Convenio();

            $result = $obj->buscarConvenios();
            
            foreach($result as $convenio){
                    $id = $convenio ['idConvenio'];
                    echo '<tr>';
                    echo '<td>'.$convenio['nome'].'</td>';
                    echo "<td align=center><a class='btn btn-primary' href='../../View/Convenio/formConvenioUpdate.php?idConvenio=$convenio[idConvenio]'><span class='glyphicon glyphicon-pencil'></span> Alterar</a>";
                    echo "<td align=center><a class='btn btn-danger' href='../../Controller/ConvenioController.php?operation=excluir&idConvenio=$convenio[idConvenio]'><span class='glyphicon glyphicon-trash'></span> Excluir</a>";
                    echo '</tr>';
                }
            ?>
        </tbody>
    </table>
</div>
</html>
